<?php

namespace app\models\Kepegawaian\Master;

use Yii;

/**
 * This is the model class for table "pegawai.dm_jabatan".
 *
 * @property string $kode
 * @property string $nama_jabatan
 * @property int|null $kode_eselon
 * @property int $jenis_jabatan
 * @property int|null $status
 */
class MasterJabatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai.dm_jabatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode', 'nama_jabatan', 'jenis_jabatan'], 'required'],
            [['kode_eselon', 'jenis_jabatan', 'status'], 'default', 'value' => null],
            [['kode_eselon', 'jenis_jabatan', 'status'], 'integer'],
            [['kode'], 'string', 'max' => 10],
            [['nama_jabatan'], 'string', 'max' => 100],
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
            'nama_jabatan' => 'Nama Jabatan',
            'kode_eselon' => 'Kode Eselon',
            'jenis_jabatan' => 'Jenis Jabatan',
            'status' => 'Status',
        ];
    }
}
