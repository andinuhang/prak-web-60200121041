<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa041".
 *
 * @property int $id041
 * @property string $nim041
 * @property string $nama041
 * @property string $kelas041
 * @property string $status041
 */
class Mahasiswa041 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa041';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim041', 'nama041', 'kelas041', 'status041'], 'required'],
            [['nim041', 'nama041', 'kelas041', 'status041'], 'string', 'max' => 255],
            [['nim041'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id041' => 'Id041',
            'nim041' => 'Nim041',
            'nama041' => 'Nama041',
            'kelas041' => 'Kelas041',
            'status041' => 'Status041',
        ];
    }
}
