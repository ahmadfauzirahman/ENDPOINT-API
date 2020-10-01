<?php

namespace app\models\Kepegawaian\Master;

use Yii;

/**
 * This is the model class for table "pegawai.dm_unit_penempatan".
 *
 * @property int $kode
 * @property string $nama
 * @property int $unit_rumpun
 */
class MasterUnitPenempatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai.dm_unit_penempatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'unit_rumpun'], 'required'],
            [['unit_rumpun'], 'default', 'value' => null],
            [['unit_rumpun'], 'integer'],
            [['nama'], 'string', 'max' => 120],
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
            'unit_rumpun' => 'Unit Rumpun',
        ];
    }
}
