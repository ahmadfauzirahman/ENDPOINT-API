<?php

namespace app\models\Kepegawaian\Master;

use Yii;

/**
 * This is the model class for table "pegawai.dm_pejabat_penetap".
 *
 * @property int $kode
 * @property string|null $penetap
 */
class MasterPejabatPenetap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai.dm_pejabat_penetap';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['penetap'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode' => 'Kode',
            'penetap' => 'Penetap',
        ];
    }
}
