<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\Verify;
class LoginController extends Controller{
	public $layout ="jobheader";
	public $model;
	public function init(){
		$this->model = new verify();
	}
	//验证码
	public function actions(){
		return [
	         'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
	     ];
    }
	//登录
	public function actionIndex(){
/*		$cookies = Yii::$app->request->cookies;
		$cookies->add(new \yii\web\Cookie([
		    'name' => 'wang',
		    'value' => 'Larry',
		    'expire'=>time()+3600
		]));die;*/
		return $this->render("login",array("model"=>$this->model));
	}
	public function login_do(){
		$request = Yii::$app->request;
		$data = $request->post();
		if($this->model->load($data)&&$this->model->validate()){
			if($this->model->save(false)){
				return $this->redirect("index.php?r=site/index");

			}else{
				echo '011';
			}
		}
	}
	//注册
	public function actionRegister(){
		return $this->render("register");
	}
}