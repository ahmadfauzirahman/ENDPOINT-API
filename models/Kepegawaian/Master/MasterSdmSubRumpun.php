<?php

namespace app\models\Kepegawaian\Master;

use Yii;

/**
 * This is the model class for table "pegawai.dm_sdm_sub_rumpun".
 *
 * @property int $kode
 * @property string $nama
 * @property int $kode_rumpun
 */
class MasterSdmSubRumpun extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai.dm_sdm_sub_rumpun';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'kode_rumpun'], 'required'],
            [['kode_rumpun'], 'default', 'value' => null],
            [['kode_rumpun'], 'integer'],
            [['nama'], 'string', 'max' => 50],
            [['kode_rumpun'], 'exist', 'skipOnError' => true, 'targetClass' => PegawaiDmSdmRumpun::className(), 'targetAttribute' => ['kode_rumpun' => 'kode']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode' => 'Kode',
            'nama' => 'Nama',
            'kode_rumpun' => 'Kode Rumpun',
        ];
    }
}
