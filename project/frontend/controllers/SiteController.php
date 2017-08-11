<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public $layout ="jobheader1";

    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionJobs(){
    	$sql="select * from company_login as cl left join employ as e on cl.q_id = e.g_id";
    	$data = array();
    	$data = Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render("jobs",array("data"=>$data));
    }
}
