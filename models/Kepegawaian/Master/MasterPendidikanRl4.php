<?php

namespace app\models\Kepegawaian\Master;

use Yii;

/**
 * This is the model class for table "pegawai.dm_pendidikan_rl4".
 *
 * @property int $kode_group
 * @property string $kode
 * @property string $nama
 * @property int|null $urut_cetak
 */
class MasterPendidikanRl4 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai.dm_pendidikan_rl4';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_group', 'kode', 'nama'], 'required'],
            [['kode_group', 'urut_cetak'], 'default', 'value' => null],
            [['kode_group', 'urut_cetak'], 'integer'],
            [['kode'], 'string', 'max' => 5],
            [['nama'], 'string', 'max' => 50],
            [['kode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_group' => 'Kode Group',
            'kode' => 'Kode',
            'nama' => 'Nama',
            'urut_cetak' => 'Urut Cetak',
        ];
    }
}
