<?php


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;

?>

 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <title>招聘信息</title> 
    <style type="text/css">
        .gaowei{position:absolute;top:170px;left: -122px;background:#EAEAEA; width:626px;  margin:0 auto; margin-bottom:10px; padding-bottom:15px; margin-top:10px;}
        .gaowei h4{ line-height:28px; font-size:16px; margin:0px; padding:0px; text-align:center; padding-top:10px}
        .gaowei p{ text-indent:2em; line-height:27px; width:580px; margin:0 auto auto 20px;}
    </style>
  <link href="jobs/css/common.css" rel="stylesheet" type="text/css" />
  <link href="jobs/css/templateform.css" rel="stylesheet" type="text/css" />
  <link href="jobs/css/controls.css" rel="stylesheet" type="text/css" />
  <link href="jobs/css/default.css" rel="stylesheet" type="text/css" />
  <link href="jobs/css/school-select-v2.css" rel="stylesheet" type="text/css" /> 
  <link href="jobs/css/main.css" rel="stylesheet" type="text/css" /> 
  <link href="jobs/css/front.css" rel="stylesheet" type="text/css" />  
  <style type="text/css">
          .checkbox_list {float: left;width: 450px;}
          .form_container ul li span.start_date {width: 80px;}
          .form_container ul li span.end_date {width: 70px;}
          .dl_logo img {
              width: auto!important;
              height: 40px!important;
              margin: 16px 0 0 30px!important;
            }
    </style> 
 
 </head> 
 <body> 
   <div class="dl_content dl_gray_bg"> 
    <style type="text/css"> .bs_pop_alert { margin-left: 12px } </style> 
    <div class="dl_content"> 
     <div class="map"> 
      <div class="dl_lit-wrap clearfix"> 
       <div class="dl_loginleft1"> 
       <h3 class="dl_tit_green">企业注册</h3> 
        <div class="col-lg-5">
        <?php $form = ActiveForm::begin(['method'=>'post']);
        ?>
        <?= $form->field($model, 'work_name')->label("工作名称")->input('text',['style'=>'width:150px']) ?>
        <?= $form->field($model, 'money')->dropDownList(['4000~8000'=>'4000~8000','8000~1000'=>'8000~1000','1000~15000'=>'1000~15000']);?>
        <?= $form->field($model, 'work_years')->label("工作经验")->input('text',['style'=>'width:150px']) ?>
        <?= $form->field($model,'hownum')->label("人数")->input('text',['style'=>'width:150px']); ?>
        <?= $form->field($model, 'work_area')->label("工作地点")->passwordInput()->input('text',['style'=>'width:150px']); ?>
        <?= $form->field($model, 'work_nature')->label("工作性质")->passwordInput()->input('text',['style'=>'width:150px']); ?>
        <?= $form->field($model, 'education')->label("学历")->passwordInput()->input('text',['style'=>'width:150px']); ?>
        <?= Html::submitButton('发布', ['class' => 'btn btn-primary']) ?>
       <?php ActiveForm::end(); ?>
      </div>

       </div> 
      </div> 
     </div> 
    </div> 
    
    <!--简历内容 e--> 
   </div> 
  </div>  
 
 </body>
</html>
