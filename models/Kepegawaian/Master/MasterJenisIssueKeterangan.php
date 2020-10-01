<?php

namespace app\models\Kepegawaian\Master;

use Yii;

/**
 * This is the model class for table "pegawai.dm_jenis_issue_ket".
 *
 * @property int $id
 * @property string $nama
 */
class MasterJenisIssueKeterangan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai.dm_jenis_issue_ket';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'string', 'max' => 30],
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
        ];
    }
}
