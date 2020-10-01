<?php

namespace app\models\Kepegawaian\Master;

use Yii;

/**
 * This is the model class for table "pegawai.dm_jenis_kenaikan_pangkat".
 *
 * @property int $id
 * @property string|null $jenis_kenaikan_pangkat
 */
class MasterJenisKenaikanPangkat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai.dm_jenis_kenaikan_pangkat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'default', 'value' => null],
            [['id'], 'integer'],
            [['jenis_kenaikan_pangkat'], 'string'],
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
            'jenis_kenaikan_pangkat' => 'Jenis Kenaikan Pangkat',
        ];
    }
}
