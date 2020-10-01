<?php

namespace app\models\Kepegawaian\Master;

use Yii;

/**
 * This is the model class for table "pegawai.dm_eselon".
 *
 * @property int $id
 * @property string|null $nama
 * @property float|null $tunjangan
 */
class MasterEselon extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai.dm_eselon';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tunjangan'], 'number'],
            [['nama'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'tunjangan' => 'Tunjangan',
        ];
    }
}
