<?php

namespace common\models;

use Yii;
use yii\web\HttpException;

/**
 * This is the model class for table "team".
 *
 * @property int $id
 * @property string $name
 * @property string $photo
 * @property string $city
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'photo', 'city'], 'required'],
            [['name', 'city'], 'string', 'max' => 128],
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
            'photo' => 'Photo',
            'city' => 'City',
        ];
    }

    /**
     * Upload function
     */
    public function upload()
    {
        if ($this->validate()) {
            if ($this->photo->saveAs('uploads/' . time() . $this->photo->baseName . 'team_member' . '.' . $this->photo->extension)) {
                $this->photo = 'uploads/' . time() . $this->photo->baseName . 'team_member' . '.' . $this->photo->extension;
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
