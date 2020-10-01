<?php

namespace app\models\Kepegawaian\Master;

use Yii;

/**
 * This is the model class for table "pegawai.dm_jurusan".
 *
 * @property int $kode
 * @property string $kode_jurusan
 * @property string|null $nama_jurusan
 */
class MasterJenisJurusan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai.dm_jurusan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode', 'kode_jurusan'], 'required'],
            [['kode'], 'default', 'value' => null],
            [['kode'], 'integer'],
            [['kode_jurusan'], 'string'],
            [['nama_jurusan'], 'string', 'max' => 50],
            [['kode_jurusan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode' => 'Kode',
            'kode_jurusan' => 'Kode Jurusan',
            'nama_jurusan' => 'Nama Jurusan',
        ];
    }
}
