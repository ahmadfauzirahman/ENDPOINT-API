<?php

namespace app\models\Kepegawaian\Master;

use Yii;

/**
 * This is the model class for table "pegawai.dm_kelurahan_desa".
 *
 * @property string $kode_prov_kab_kec_kelurahan
 * @property string|null $nama
 * @property string|null $kode_prov_kab_kec
 * @property string|null $kode_prov_kab
 * @property string|null $kode_prov
 */
class MasterKelurahanDesa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai.dm_kelurahan_desa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_prov_kab_kec_kelurahan'], 'required'],
            [['kode_prov_kab_kec_kelurahan', 'kode_prov_kab_kec', 'kode_prov_kab', 'kode_prov'], 'string', 'max' => 10],
            [['nama'], 'string', 'max' => 50],
            [['kode_prov_kab_kec_kelurahan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_prov_kab_kec_kelurahan' => 'Kode Prov Kab Kec Kelurahan',
            'nama' => 'Nama',
            'kode_prov_kab_kec' => 'Kode Prov Kab Kec',
            'kode_prov_kab' => 'Kode Prov Kab',
            'kode_prov' => 'Kode Prov',
        ];
    }
}
