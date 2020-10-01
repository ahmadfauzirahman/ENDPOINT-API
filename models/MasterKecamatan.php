<?php

namespace app\models\Kepegawaian\Master;

use Yii;

/**
 * This is the model class for table "pegawai.dm_kecamatan".
 *
 * @property string $kode_prov_kab_kecamatan
 * @property string $nama
 * @property string|null $kode_prov_kab
 * @property string|null $kode_prov
 */
class MasterKecamatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai.dm_kecamatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_prov_kab_kecamatan', 'nama'], 'required'],
            [['kode_prov_kab_kecamatan', 'kode_prov_kab', 'kode_prov'], 'string', 'max' => 10],
            [['nama'], 'string', 'max' => 50],
            [['kode_prov_kab_kecamatan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_prov_kab_kecamatan' => 'Kode Prov Kab Kecamatan',
            'nama' => 'Nama',
            'kode_prov_kab' => 'Kode Prov Kab',
            'kode_prov' => 'Kode Prov',
        ];
    }
}
