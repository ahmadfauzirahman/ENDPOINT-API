<?php

namespace app\models\Kepegawaian\Master;

use Yii;

/**
 * This is the model class for table "pegawai.dm_sdm_jenis".
 *
 * @property int $kode
 * @property string $nama
 * @property int $kode_rumpun
 * @property int $kode_sub_rumpun
 */
class MasterSdmJenis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai.dm_sdm_jenis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'kode_rumpun', 'kode_sub_rumpun'], 'required'],
            [['kode_rumpun', 'kode_sub_rumpun'], 'default', 'value' => null],
            [['kode_rumpun', 'kode_sub_rumpun'], 'integer'],
            [['nama'], 'string', 'max' => 80],
            [['kode_sub_rumpun'], 'exist', 'skipOnError' => true, 'targetClass' => PegawaiDmSdmSubRumpun::className(), 'targetAttribute' => ['kode_sub_rumpun' => 'kode']],
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
            'kode_sub_rumpun' => 'Kode Sub Rumpun',
        ];
    }
}
