<?php

namespace common\components;

use yii\base\Component;
use common\models\Rating;
use common\models\Meditators;

class RatingCalculatorComponent extends Component
{
	/**
	 * Public function which calculates the rating of all entries from the rating table
	 * With a meditator's ID specified
	 */
	public function computeRating($id, $counter = 0, $sum = 0)
	{
		foreach (Rating::find()->where(['meditator_id' => $id])->all() as $rate) {
			$counter++;
			$sum += $rate->value;
		}
		
		if ($counter) {
			$model = Meditators::findOne(['id' => $id]);
			$model->rating = round((float) ($sum / $counter), 2);
			if ($model->save(false)) {
				return true;
			} else {
				return false;
			}
		}
	}
}