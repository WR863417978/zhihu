<?php


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;

?>

 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <title>注册</title> 
  
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
        <?= $form->field($model, 'company_name')->label("单位名称")->input('text',['style'=>'width:150px']) ?>
        <?= $form->field($model, 'touch_name')->label("联系人")->input('text',['style'=>'width:150px']) ?>
        <?= $form->field($model, 'user_tel')->label("电话")->input('text',['style'=>'width:150px']) ?>
        <?= $form->field($model, 'user_name')->label("用户名")->input('text',['style'=>'width:150px']) ?>
        <?= $form->field($model,'user_email')->label("电子邮箱邮箱")->input('text',['style'=>'width:150px']); ?>
        <?= $form->field($model, 'user_pwd')->label("用户密码")->passwordInput()->input('text',['style'=>'width:150px']); ?>
        <?= $form->field($model,'qr')->label("确认密码")->passwordInput()->input('text',['style'=>'width:150px']); ?>
        <?= Html::submitButton('注册', ['class' => 'btn btn-primary']) ?>
       <?php ActiveForm::end(); ?>
      </div>

       </div> 
       <div class="dl_loginright1"> 
        <div class="dl_register">
         <span class="noaccount">已有账号？</span>
         <a href="?r=site/login">点击登录</a>
        </div> 
        <h3 class="dl_otherchoice">使用其他账号登录：</h3> 
        <div class="dl_logos"> 
         <a class="dl_sinalogo dl_grey1 sina" href="javascript:void(0)" url="/User/OAuth/OAuthIndex?snstype=sina_connect_v2&amp;returnurl=http%3a%2f%2f51talk.zhiye.com %2fPortal%2fAccount%2fLogin&amp;host=51talk.zhiye.com&amp;portalid=104003">微博</a> 
         <a class="dl_qqlogo dl_grey1 qq" href="javascript:void(0)" url="/User/OAuth/OAuthIndex?snstype=qzone_login&amp;returnurl=http%3a%2f%2f51talk.zhiye.com%2fPortal%2fAccount%2fLogin&amp;host=51talk.zhiye.com &amp;portalid=104003">QQ</a> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
    
    <!--简历内容 e--> 
   </div> 
   <div class="dl_footer"> 
    <p>&copy;2015&nbsp;北京大生知行科技有限公司51talk&nbsp;&nbsp;京ICP备05051632号 京公网安备110108002767号 &nbsp;&nbsp;帮助热线：4006506886</p> 
   </div> 
  </div>  
 
 </body>
</html>
