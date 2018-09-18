<?php

namespace common\models;

use Yii;
use yii\web\HttpException;

/**
 * This is the model class for table "meditators".
 *
 * @property int $id
 * @property string $name
 * @property string $specialization
 * @property string $photo
 * @property double $rating
 */
class Meditators extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'meditators';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'specialization', 'photo'], 'required'],
            [['rating'], 'number'],
            [['name'], 'string', 'max' => 128],
            [['specialization'], 'string', 'max' => 64],
            [['photo'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'specialization' => 'Specialization',
            'photo' => 'Photo',
            'rating' => 'Rating',
        ];
    }

    /**
     * Upload function
     */
    public function upload()
    {
        if ($this->validate()) {
            if ($this->photo->saveAs('uploads/' . time() . $this->photo->baseName . 'meditator' . '.' . $this->photo->extension)) {
                $this->photo = 'uploads/' . time() . $this->photo->baseName . 'meditator' . '.' . $this->photo->extension;
                if ($this->save(false)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                throw new HttpException(500, 'Could not save the entry.');
            }
        } else {
            throw new HttpException(500, 'Could not validate.');
        }
    }
}
