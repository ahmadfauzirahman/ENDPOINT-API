<?php

namespace rsud\controllers\v1;

use app\models\Kepegawaian\MasterPegawai as KepegawaianMasterPegawai;
use app\models\Kepegawaian\MasterRiwayatPenempatan;
use app\models\MasterPegawai;
use rsud\controllers\ControllerBase;
use Yii;
use yii\web\Controller;

class MyTeamController extends ControllerBase
{
    //get data myteam
    public function actionIndex()
    {
        $data = MasterRiwayatPenempatan::find()->all();
        return $this->writeResponse(true,'00',$data);
    }

    public function actionAmbilDataMyTeam()
    {
        $p = Yii::$app->request;
         if ($p->isPost)
         {
            $post = $p->post();

            //$kodeAkun = $post['kode'];
            //$UnitKode = $post['unit'];
            $kodeAkun = 1471116310890021;
            $UnitKode = '27';

           /* 
            $data = $data = Yii::$app->db->createCommand("
            select a.*
            from
                pegawai.tb_pegawai a
            left join pegawai.tb_riwayat_penempatan on
	            pegawai.tb_riwayat_penempatan.id_nip_nrp = a.id_nip_nrp
            where
                (a.status_aktif_pegawai = 1)
	        and ((
	        select
		        c.atasan_langsung
	        from
		        pegawai.tb_riwayat_penempatan c
	        where
		        c.id_nip_nrp = a.id_nip_nrp
	        order by
		        tanggal desc
            limit 1) = :kodeakun)")
            ->bindvalue(':kodeakun',$UnitKode['27']);
        */
            

            $data = MasterRiwayatPenempatan::find()->where(['unit_kerja' => $UnitKode])->orderBy('id_nip_nrp DESC')->all();

            
            foreach ($data as $itemMyTeam){
                $result1[]=[
                    'id_nip_nrp' => $itemMyTeam->id_nip_nrp,
                    'unit_kerja' => $itemMyTeam->unit_kerja
                ];
                
                  
            }
            
            $data01 = KepegawaianMasterPegawai::find()->where(['id_nip_nrp' => $kodeAkun])->orderBy('id_nip_nrp DESC')->all();
            foreach ($data01 as $itemMyTeam){
                $result[]=[
                    'IdPegawai' => $itemMyTeam->pegawai_id,
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
            
            $a = array_merge($result, $result1);
            return $this->writeResponse(true,'Berhasil Melihat List My Team', $a);
        }
    }
}