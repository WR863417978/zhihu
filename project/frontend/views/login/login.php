<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <title>登录</title> 
  <script type="text/javascript" src="job/js/require.js"></script> 
  <link href="job/css/common.css" rel="stylesheet" type="text/css" />
  <link href="job/css/templateform.css" rel="stylesheet" type="text/css" />
  <link href="job/css/controls.css" rel="stylesheet" type="text/css" />
  <link href="job/css/default.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="job/js/base_new.js"></script>
  <script type="text/javascript" src="job/js/widgetnew.js?v=3"></script>
  <script type="text/javascript" src="job/js/common.js"></script>
  <script type="text/javascript" src="job/js/bsdialog.js"></script>
  <script type="text/javascript" src="job/js/common.js"></script>
  <script type="text/javascript" src="job/js/controls.js"></script>
  <script type="text/javascript" src="job/js/underscore.js"></script>
  <script type="text/javascript" src="job/js/school-select-v2.js?v=6"></script>
  <link href="job/css/school-select-v2.css" rel="stylesheet" type="text/css" /> 
  <link href="job/css/main.css" rel="stylesheet" type="text/css" /> 
  <script type="text/javascript" src="job/js/dialog_js.js"></script> 
  <script src="job/js/WdatePicker.js"></script> 
  <link href="job/css/front.css" rel="stylesheet" type="text/css" />  
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
  <div class="bs_deliver"> 
   <div class="dl_header_border"> 
    <div class="dl_header clearfix"> 
     <div class="dl_logo"> 
      <img id="logoImg" class="header-logo-img" src="images/104003_medias_20141215_20141215logo.jpg?v=635542641034400000" style="width: 300px;height:80px;display: none;" /> 
     </div> 
     <div class="dl_rightit"> 
      <div class="isApplyDetail" style="display:none"> 
       <div class="isLogin" style="display:none"> 
        <span id="topUserEmail" class="pad3" title=""><span class="userShortName"></span>，欢迎您！</span> 
        <span class="pad3"><a href="index.html">招聘首页</a></span> 
        <em class="dl_header_line dl_padtb05">|</em> 
        <span class="isUserCenter" style="display:none"> <span class="pad3"><a href="member_apply.html">个人中心</a></span> <em class="dl_header_line dl_padtb05">|</em> </span> 
        <span class="pad3"><a href="/Portal/Account/Logout">退出</a></span> 
       </div> 
       <div class="unLogin" style="display:none"> 
        <span class="pad3"><a href="index.html">招聘首页</a></span> 
        <em class="dl_header_line dl_padtb05">|</em> 
        <span class="pad3"><a href="/Portal/Account/Login">登录</a></span> 
        <em class="dl_header_line dl_padtb05">|</em> 
        <span class="pad3"><a href="/Portal/Account/Register">注册</a></span> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
   <div class="dl_content dl_gray_bg"> 
    <!----> 
    <!--申请职位 s--> 
    <!--申请职位 e--> 
    <!--我的简历 s--> 
    <!--简历内容 s--> 
    <script type="text/javascript" src="job/js/jquery.validate.unobtrusive.js"></script> 
    <script type="text/javascript" src="job/js/jquery.form.min.js"></script> 
    <style type="text/css"> .bs_pop_alert { margin-left: 12px } </style> 
    <div class="dl_content"> 
     <div class="map"> 
      <div class="dl_lit-wrap clearfix"> 
       <div class="dl_loginleft1"> 
        <h3 class="tit">请登录</h3> 
    <?php
      use yii\helpers\Html;
      use yii\widgets\ActiveForm;
      use yii\captcha\Captcha;
    ?>
       <?php $form = ActiveForm::begin(); ?>
             <?= $form->field($model, 'user')->label('用户名：') ?>
          </span> </li> 
          <li class="clearfix"> <span class="dl_form_right"> 
          <?= $form->field($model, 'pwd')->passwordInput()->label('输入密码:') ?> </span> </li> 
          <li class="clearfix"> <span class="dl_form_right"> 
          <?= $form->field($model, 'qr')->passwordInput()->label('确认密码：') ?> 
          </span> </li> 
          <li class="clearfix"> <span class="dl_form_left">验证码：</span> 
           <div class="validate_content validatecode_info" style="display: inline-block; margin-left: 0px;"> 
            <span class="validate_bac" style="display: inline-block;"> 
          <?= $form->field($model, 'verifyCode')->textInput(['class'=>'dl_textinp'])->label('') ?>
            <?=Captcha::widget(['name'=>'captchaimg','captchaAction'=>'login/captcha','template'=>'{image}']);?>
  
            </span> 
           </div> </li> 
         </ul> 
         <span class="tishi" style="display:none">请输入正确的用户名和密码</span> 
         <input id="proId" type="hidden" newid="False" /> 
         <div class="next"> 
          <div class="dl_padl40">
            <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
             </div>
          </div> 
         </div> 
        </div> 
       <?php ActiveForm::end(); ?>


        </div>
       <div class="dl_loginright1"> 
        <div class="dl_register">
         <span class="noaccount">没有自己的账号？</span>
         <a href="#" url="/Portal/Account/Register?returnUrl=%2fPortal%2fApply%2fIndex" class="register">立刻注册</a>
        </div> 
        <h3 class="dl_otherchoice">使用其他账号登录：</h3> 
        <div class="dl_logos"> 
         <a class="dl_sinalogo dl_grey1 sina" href="javascript:void(0)" url="/User/OAuth/OAuthIndex?snstype=sina_connect_v2&amp;returnurl=http%3a%2f%2f51talk.zhiye.com%2fPortal%2fAccount%2fLogin&amp;host=51talk.zhiye.com&amp;portalid=104003">微博</a> 
         <a class="dl_qqlogo dl_grey1 qq" href="javascript:void(0)" url="/User/OAuth/OAuthIndex?snstype=qzone_login&amp;returnurl=http%3a%2f%2f51talk.zhiye.com%2fPortal%2fAccount%2fLogin&amp;host=51talk.zhiye.com&amp;portalid=104003">QQ</a> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 

   </div>  
  </div>  
 </body>
</html>