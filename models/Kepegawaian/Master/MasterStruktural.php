<?php

namespace app\models\Kepegawaian\Master;

use Yii;

/**
 * This is the model class for table "pegawai.dm_struktural".
 *
 * @property int $id
 * @property string $kode
 * @property string|null $nama
 */
class MasterStruktural extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai.dm_struktural';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode'], 'required'],
            [['kode'], 'string'],
            [['nama'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode' => 'Kode',
            'nama' => 'Nama',
        ];
    }
}
