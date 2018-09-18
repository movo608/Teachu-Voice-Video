<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "rating".
 *
 * @property int $id
 * @property int $meditator_id
 * @property double $value
 */
class Rating extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rating';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['meditator_id', 'value'], 'required'],
            [['meditator_id'], 'integer'],
            [['value'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'meditator_id' => 'Meditator ID',
            'value' => 'Value',
        ];
    }
}
