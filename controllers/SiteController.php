<?php
/**
 * Created by PhpStorm.
 * User: fauzizone
 * Date: 11/01/20
 * Time: 9:05
 */

namespace rsud\controllers;

use yii\rest\ActiveController;
use yii\web\Controller;

class SiteController extends Controller
{


    public function actionIndex()
    {
//        $this->view->title = "Api RSUD";

        // $data = [
        //     'data' => 'Oppsss'
        // ];
//        return json_encode($data);
        return $this->writeResponse(false, 'Something Wrong, Api RSUD AA');
    }


}