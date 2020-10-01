<?php

namespace rsud\controllers\v1;

use app\models\Kepegawaian\MasterPegawai as KepegawaianMasterPegawai;
use app\models\MasterPegawai;
use rsud\controllers\ControllerBase;
use Yii;
use yii\web\Controller;

class MyTeamController extends ControllerBase
{
    //get data myteam
    public function actionIndex()
    {
        $data = KepegawaianMasterPegawai::find()->all();
        return $this->writeResponse(true,'00',$data);
    }
    public function actionAmbilDataMyTeam()
    {
        $p = Yii::$app->request;
        if ($p->isPost)
        {
            $post = $p->post();

            $kodeAkun = $post['kode'];
            $data = KepegawaianMasterPegawai::find()->where(['pergawai_id'=>$kodeAkun])->orderBy('id_tb_pegawai DESC')->all();

            foreach ($data as $itemMyTeam){
                $result[]=[
                    'IdPegawai' => $itemMyTeam->id_tb_pegawai,
                    'Nip' => $itemMyTeam->id_nip_nrp,
                    'Nama' => $itemMyTeam->nama_lengkap,
                    'TempatLahir' =>$itemMyTeam->tempat_lahir,
                    'TanggalLahir' =>$itemMyTeam->tanggal_lahir,
                    'JenisKelamin' => $itemMyTeam->jenis_kelamin,
                    'Agama' => $itemMyTeam->agama,
                    'Status' => $itemMyTeam->status_perkawinan,
                    'Alamat'=>$itemMyTeam->alamat_tempat_tinggal,
                    'NoTelp1' => $itemMyTeam->no_telepon_1,
                    'NoTelp2' => $itemMyTeam->no_telepon_2
                ];
            }
            return $this->writeResponse(true,'Berhasil Melihat List My Team');
        }
    }
}