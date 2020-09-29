<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "absensi.tb_absensi".
 *
 * @property int $id_tb_absensi
 * @property string|null $id_pegawai
 * @property string|null $nip_nik
 * @property string $jam_masuk
 * @property string $jam_keluar
 * @property string|null $tanggal_masuk
 * @property string|null $lat
 * @property string|null $long
 * @property string|null $status
 */
class MasterAbsensi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'absensi.tb_absensi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jam_masuk', 'jam_keluar', 'tanggal_masuk'], 'safe'],
            [['id_pegawai', 'status'], 'string', 'max' => 30],
            [['nip_nik'], 'string', 'max' => 40],
            [['lat', 'long'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tb_absensi' => 'Id Tb Absensi',
            'id_pegawai' => 'Nama Pegawai',
            'nip_nik' => 'Nip/Nik',
            'jam_masuk' => 'Jam Masuk',
            'jam_keluar' => 'Jam Keluar',
            'tanggal_masuk' => 'Tanggal Masuk',
            'lat' => 'Latitude',
            'long' => 'Longitude',
            'status' => 'Status Absensi',
        ];
    }
}
