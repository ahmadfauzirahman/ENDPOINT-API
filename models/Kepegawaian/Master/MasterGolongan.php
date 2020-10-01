<?php

namespace app\models\Kepegawaian\Master;

use Yii;

/**
 * This is the model class for table "pegawai.dm_golongan".
 *
 * @property string $kode
 * @property string $golongan
 * @property string|null $pangkat
 */
class MasterGolongan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai.dm_golongan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode', 'golongan'], 'required'],
            [['kode'], 'string', 'max' => 5],
            [['golongan', 'pangkat'], 'string', 'max' => 50],
            [['kode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode' => 'Kode',
            'golongan' => 'Golongan',
            'pangkat' => 'Pangkat',
        ];
    }
}
