<?php 
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\Employ;
class MycomController extends Controller{
	public $layout = "jobheader1";
	public $model;
	public $session;
	public $request;
	public function init(){
		$this->request = Yii::$app->request;
		$this->session = Yii::$app->session;
		$this->model = new Employ();
	}
	public function actionShow(){ 
		$user = $this->session->get("company_user");
	 	$sql = "select * from company_login where q_id = ".$user['q_id'];
	 	$data = Yii::$app->db->createCommand($sql)->queryOne();
	 	return $this->render("show",array('data'=>$data));
	 }
	public function actionEmploy(){
		if($this->request->isPost){
			$user = $this->session->get('company_user');
			$this->model->g_id = $user['q_id'];
			$this->model->time = date("Y-m-d H:i:s");
			if($this->model->load($this->request->post())&&$this->model->validate()){
				$this->model->save();
				$this->redirect("?r=mycom/all");
			}
		}
		return $this->render("employ",array("model"=>$this->model));
	}
	public function actionAll(){
		$user = $this->session->get('company_user');
		$sql = "select * from employ as e left join company_login as c on c.q_id = e.g_id where e.g_id =".$user['q_id'];
		$data = Yii::$app->db->createCommand($sql)->queryAll();
		return $this->render("all",array('data'=>$data));
	}
	public function actionResum(){

	}
}