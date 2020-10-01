<?php

namespace app\models\Kepegawaian\Master;

use Yii;

/**
 * This is the model class for table "pegawai.dm_jenis_pemberhentian".
 *
 * @property int $id
 * @property string $jenis_pemberhentian
 */
class MasterJenisPemberhentian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai.dm_jenis_pemberhentian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenis_pemberhentian'], 'required'],
            [['jenis_pemberhentian'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jenis_pemberhentian' => 'Jenis Pemberhentian',
        ];
    }
}
