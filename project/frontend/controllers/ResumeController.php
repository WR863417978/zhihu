<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\User_info;
use frontend\models\Resume;
use frontend\models\Upload;
use frontend\models\Record;
use yii\web\UploadedFile;
class ResumeController extends Controller{
	public $layout ="jobheader1";
	public $user;
	public $resume;
	public $file;
	public $request;
	public $query;
	public $record;
	public function init(){
		$this->user = new User_info();
		$this->record = new Record();
		$this->resume = new Resume();
		$this->file = new Upload();
		$this->request = Yii::$app->request;
		$this->query = new \yii\db\Query();
	}
	//建立创建第一页
	public function actionIndex(){
		if($this->request->isPost){
			$arr = $this->request->post();
			//文件上传
			$this->file->user_img = UploadedFile::getInstance($this->file, 'user_img');
            if ($this->file->upload()) {
            	$imgs = 'uploads/' . $this->file->user_img->baseName . '.' . $this->file->user_img->extension;
            }
			Yii::$app->db->createCommand()->insert('user_info', [
			    'user_id' => '1',
			    'birth' =>$arr['User_info']['birth'],
			    'email' =>$arr['User_info']['email'],
			    'tel' =>$arr['User_info']['tel'],
			    'user_name' =>$arr['User_info']['user_name'],
			    'workyears' =>$arr['User_info']['workyears'],
			    'sex' =>$arr['User_info']['sex'],
			    'user_img'=>$imgs,
			])->execute();
			Yii::$app->db->createCommand()->insert('resume', [
			    'user_id' => '1',
			    'expect_occupation' =>$arr['Resume']["expect_occupation"],
			    'expect_joblocation' =>$arr['Resume']["expect_joblocation"],
			    'expect_salary' =>$arr['Resume']["expect_salary"],
			    'arrival_time' =>$arr['Resume']["arrival_time"],
			    'now_occupation' =>$arr['Resume']["now_occupation"],
			    'now_joblocation' =>$arr['Resume']["now_joblocation"],
			    'now_salary' =>$arr['Resume']["now_salary"],
			])->execute();
			return $this->redirect("?r=resume/apply_resume");exit;
		}
		$this->redirect("?r=resume/first");
	}
	//第二页
	public function actionApply_resume(){
		if($this->request->isPost){
			$arr = $this->request->post();
			Yii::$app->db->createCommand()->insert('record',array(
					'user_id'=>'1',
					'work_name'=>$arr['Record']['work_name'],
					'start_time'=>$arr['Record']['start_time'],
					'end_time'=>$arr['Record']['end_time'],
					'work_content'=>$arr['Record']['work_content'],
				)
			)->execute();
			return $this->redirect("?r=personal/index");exit;
		}
		return $this->render("apply_resume",array("record"=>$this->record));
	}
	//第三页
	public function actionApply_review(){
		return $this->render("apply_review");
	}
	//地区   
	public function actionGet_ajax(){
		$id = $this->request->get("id",1);
		$data = $this->query->select("*")->from("region")->where('parent_id ='.$id)->createCommand()->queryAll();
		echo json_encode($data);
	}
	public function actionFirst(){
		$id = 1;
		$data = $this->query->select("*")->from("region")->where('parent_id ='.$id)->createCommand()->queryAll();
		return $this->render("apply_info",array('user_info'=>$this->user,'resume'=>$this->resume,'file'=>$this->file,'data'=>$data));
	}
}