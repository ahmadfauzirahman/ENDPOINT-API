<?php

namespace app\models\Kepegawaian\Master;

use Yii;

/**
 * This is the model class for table "pegawai.dm_kabupaten".
 *
 * @property string $kode_prov_kabupaten
 * @property string|null $nama
 * @property string|null $jenis
 * @property int|null $kode_prov
 */
class MasterKabupaten extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai.dm_kabupaten';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_prov_kabupaten'], 'required'],
            [['kode_prov'], 'default', 'value' => null],
            [['kode_prov'], 'integer'],
            [['kode_prov_kabupaten', 'jenis'], 'string', 'max' => 10],
            [['nama'], 'string', 'max' => 50],
            [['kode_prov_kabupaten'], 'unique'],
            [['kode_prov'], 'exist', 'skipOnError' => true, 'targetClass' => PegawaiDmProvinsi::className(), 'targetAttribute' => ['kode_prov' => 'kode']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_prov_kabupaten' => 'Kode Prov Kabupaten',
            'nama' => 'Nama',
            'jenis' => 'Jenis',
            'kode_prov' => 'Kode Prov',
        ];
    }
}
