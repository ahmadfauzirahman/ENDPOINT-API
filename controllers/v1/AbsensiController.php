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
use rsud\controllers\ControllerBase;
use Yii;
use yii\web\Controller;

class AbsensiController extends ControllerBase
{

    // get data absensi
    public function actionIndex()
    {
        $data = MasterAbsensi::find()->all();
        return $this->writeResponse(true, '00', $data);
    }

    public function actionAmbilDataAbsen()
    {
        $p = Yii::$app->request;
        if ($p->isPost) {
            $post = $p->post();

            $kodeAkun = $post['kode'];
            $data = MasterAbsensi::find()->where(['nip_nik' => $kodeAkun])->orderBy('id_tb_absensi DESC')->all();

            foreach ($data as $itemAbsen) {
                $result[] = [
                    'IdAbsensi' => $itemAbsen->id_tb_absensi,
                    'idPegawai' => $itemAbsen->id_pegawai,
                    'Nip' => $itemAbsen->nip_nik,
                    'TanggalMasuk' => Helper::tgl_indo($itemAbsen->tanggal_masuk),
                    'Hari' => Helper::hari_ini(date('D', strtotime($itemAbsen->tanggal_masuk))),
                    'StatusMasuk' => Helper::StatusMasuk($itemAbsen->status),
                    'lat' => $itemAbsen->lat,
                    'long' => $itemAbsen->long,
                    'jamMasuk' => $itemAbsen->jam_masuk
                ];
            }

            return $this->writeResponse(true, 'Berhasil Melihat Log History Absen', $result);
        }

        return $this->writeResponse(false, 'Tidak Berhasil Melihat Log History Absen', []);


        // return $this->writeResponse(false, 'Opps', []);
    }

    public function actionSimpanAbsen()
    {
        $p = Yii::$app->request;

        if ($p->isPost) {
            $post = $p->post();
            var_dump($post);
            exit();
        }
        return $this->writeResponse(false, 'Opps', []);
    }
}
