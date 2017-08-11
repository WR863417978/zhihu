<?php 
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\Company_login;
class CompanyController extends Controller{
	 public $layout = 'jobheader';
	 public $obj;
	 public $query;
	 public $request;
	 public function init(){
	 	$this->request = new Yii::$app->request;
	 	$this->query = new \yii\db\Query();
	 	$this->obj = new Company_login();
	 }
	 public function actionIndex(){
	 	if($this->request->isPost){
	 		$arr = $this->request->post();
	 		if($this->obj->load($arr)){
	 			$this->obj->save();
	 			$session = Yii::$app->session;
	 			$user_id = Yii::$app->db->getLastInsertID();
	 			$user=array(
	 				"user_id"=>$user_id,
	 				"user_name" => $arr['Company_login']['user_name'],
	 				"company_name" => $arr['Company_login']['company_name'],
	 			);
	 			$session->set("company_user",$user);
	 			$this->redirect("?r=mycom/show");
	 		}
	 	}
	 	return $this->render('index',['model'=>$this->obj]);
	 }
	 public function actionLogin(){
	 	if($this->request->isPost){
	 		$arr = $this->request->post();
	 		$user_name = $arr['Company_login']['user_name'];
	 		$user_pwd = $arr['Company_login']['user_pwd'];
	 		$sql="select q_id,user_name,company_name from company_login where user_name = '$user_name' and user_pwd = '$user_pwd'" ;
	 		if($data = Yii::$app->db->createCommand($sql)->queryOne()){
	 			$session = Yii::$app->session;
		 		$session->set("company_user",$data);
		 		$this->redirect("?r=mycom/show");
	 		}else{
	 			echo "账号或密码错误";exit;
	 			$this->goBack();
	 		}
	 	}
	 	 if($this->request->isGet){
	 	 	$session = Yii::$app->session;
	 	 	$user = array();
	 	 	$user = $session->get("company_user");
	 	 	if(empty($user)){
	 	 		 return $this->render('login',['model'=>$this->obj]);
	 	 	}else{
	 	 		return $this->redirect("?r=mycom/show");
	 	 	}
	 	 }
	 	
	 }
}
