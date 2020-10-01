<?php

/**
 * Created by PhpStorm.
 * User: fauzizone
 * Date: 14/01/20
 * Time: 11:48
 */

namespace rsud\controllers\v1;

use app\components\Helper;
use app\models\MasterAbsensi;
use app\models\MasterPegawai;
use app\models\MasterRiwayatPenempatan as ModelsMasterRiwayatPenempatan;
use rsud\controllers\ControllerBase;
use Yii;
use yii\web\Controller;

class PegawaiController extends ControllerBase
{

    // get data absensi
    public function actionIndex()
    {
        // $data = MasterAbsensi::find()->all();
        $subQuery = ModelsMasterRiwayatPenempatan::find()->alias('c')
            ->select("c.atasan_langsung");

        $query = MasterPegawai::find()->alias('a')
            ->leftJoin(
                ModelsMasterRiwayatPenempatan::tableName(),
                ModelsMasterRiwayatPenempatan::tableName() . ".id_nip_nrp=a.id_nip_nrp"
            )
            ->where(['=', 'a.status_aktif_pegawai', 1])
            ->andwhere(['=', $subQuery->where('c.id_nip_nrp=a.id_nip_nrp')
                ->orderBy(["tanggal" => SORT_DESC])->limit(1), '203'])
            ->orderBy(["nama_lengkap" => SORT_ASC])->all();
        return $this->writeResponse(true, '00', $query);
    }
}
