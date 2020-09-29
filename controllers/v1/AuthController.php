<?php

/**
 * Created by PhpStorm.
 * User: fauzizone
 * Date: 14/01/20
 * Time: 11:48
 */

namespace rsud\controllers\v1;

use app\models\AkunAknUser;
use app\models\MasterAbsensi;
use rsud\controllers\ControllerBase;
use Yii;
use yii\web\Controller;

class AuthController extends ControllerBase
{


    // get data absensi
    public function actionIndex()
    {
        $this->view->title = "Api RSUD";
        $data = AkunAknUser::find()->all();
        return $this->writeResponse(true, '00', $data);
    }

    public function actionLogin()
    {

        $p = Yii::$app->request;
        if ($p->isPost) {
            $post = $p->post();
            $kodeAkun = $post['kodeAkun'];
            $password = md5($post['password']);

            //cek nip/nik tidak boleh kosong
            if (is_null($kodeAkun)) {
                return $this->writeResponse(false, 'Nip/Nik Tidak Boleh Kosong', []);
            }

            // cek password tidak boleh kosong
            if (is_null($password)) {
                return $this->writeResponse(false, 'Password Tidak Boleh Kosong', []);
            }

            //cek akun apaakah ada atau tidak
            $model = AkunAknUser::find()->where(['username' => $kodeAkun])->one();

//            var_dump($model);
//            exit();
            if (is_null($model)) {
                return $this->writeResponse(false, 'Akun Tidak Ditemukan Hubungi Admin atau Edp');
            }

            if ($model->username == $kodeAkun && $model->password == $password) {
                return $this->writeResponse(true, 'Berhasil Login', $model);
            } else {
                return $this->writeResponse(false, 'Tidak Berhasil Login', '{}');
            }
        }

        return $this->writeResponse(false, 'Opss, Request Wrong', '{}');
    }
}
