<?php

namespace app\models\Kepegawaian\Master;

use Yii;

/**
 * This is the model class for table "pegawai.dm_jenis_organisasi".
 *
 * @property int $id
 * @property string $jenis_keanggotaan
 */
class MasterJenisOrganisasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai.dm_jenis_organisasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'jenis_keanggotaan'], 'required'],
            [['id'], 'default', 'value' => null],
            [['id'], 'integer'],
            [['jenis_keanggotaan'], 'string', 'max' => 30],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jenis_keanggotaan' => 'Jenis Keanggotaan',
        ];
    }
}
