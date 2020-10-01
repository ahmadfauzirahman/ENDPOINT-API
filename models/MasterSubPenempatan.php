<?php

namespace app\models\Kepegawaian\Master;

use Yii;

/**
 * This is the model class for table "pegawai.dm_unit_sub_penempatan".
 *
 * @property int $kode
 * @property string|null $nama
 * @property int|null $kode_rumpun
 * @property int|null $kode_group 1=Direktorat  2=Bagian/Bidang  3=Sub Bagian/Sub Bidang/Instalasi  4=Unit/Ruangan
 */
class MasterSubPenempatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai.dm_unit_sub_penempatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_rumpun', 'kode_group'], 'default', 'value' => null],
            [['kode_rumpun', 'kode_group'], 'integer'],
            [['nama'], 'string', 'max' => 100],
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
            'kode_group' => 'Kode Group',
        ];
    }
}
