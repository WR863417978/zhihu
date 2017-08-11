<?php 
use frontend\assets\AppAsset;
AppAsset::register($this);//这两行放到最上面的php里
use yii\helpers\Url;
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php $this->beginPage() ?>
<?php $this->head() ?>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <link type="text/css" rel="stylesheet" href="job/job/css/frontmodule.css" /> 
  <link type="text/css" rel="stylesheet" href="job/css/5_themes_default_style.css?v=0.0.0.9" front="css" /> 
  <link type="text/css" rel="stylesheet" href="job/css/5_themes_default_flexslider.css?v=0.0.0.9" front="css" /> 
  <link type="text/css" rel="stylesheet" href="job/css/5_themes_default_jqueryuicore.css?v=0.0.0.9" front="css" /> 
  <link type="text/css" rel="stylesheet" href="job/css/5_themes_default_jqueryuiselectmenu.css?v=0.0.0.9" front="css" /> 
  <link type="text/css" rel="stylesheet" href="job/css/5_themes_default_jqueryuitheme.css?v=0.0.0.9" front="css" /> 
  <script type="text/javascript" src="js/5_themes_default_jquery191.js?v=0.0.0.9"></script> 
  <script type="text/javascript" src="js/5_themes_default_jqueryflexslidermin.js?v=0.0.0.9"></script> 
  <script type="text/javascript" src="js/5_themes_default_jqueryuicore1.js?v=0.0.0.9"></script> 
  <script type="text/javascript" src="js/5_themes_default_jqueryuiposition.js?v=0.0.0.9"></script> 
  <script type="text/javascript" src="js/5_themes_default_jqueryuiwidget.js?v=0.0.0.9"></script> 
  <script type="text/javascript" src="js/5_themes_default_jqueryuiselectmenu1.js?v=0.0.0.9"></script> 
  <script type="text/javascript" src="js/5_themes_default_demo.js?v=0.0.0.9"></script> 
  <!--引用静态文件:requirejs--> 
  <script type="text/javascript" src="js/require.js"></script> 
  <title>首页</title> 
 </head> 
<?php $this->beginBody() ?>
  <div class="header"> 
   <div class="headercontain"> 
    <div class="logo"> 
     <img src="job/images/104003_medias_20141215_20141215logo.jpg?v=635542641034400000" /> 
    </div> 
    <!--module:login begin--> 
    <div class="bs-module"> 
     <div class="login-link "> 
      <div class="login-hearder"> 
       <ul class="header-login"> 
        <li class="welcome"><span><span class="userName">北京市市长</span>欢迎您！</span></li> 
        <li class="PortalIndex"><a href="?r=personal/index"><span>个人中心</span></a></li> 
        <li class="LogoutUrl"><a href=""><span>退出</span></a></li> 
       </ul> 
       <ul class="header-unLogin"  style="display:none"> 
        <li><a class="loginlink" href="?r=login/index"> <span>登录</span> </a></li> 
        <li><a class="reglink" href="?r=login/register"><span> 注册</span></a></li> 
       </ul> 
      </div> 
     </div> 
    </div> 
    <!--module:login end-->
    <!--module:internalrecommend begin--> 
    <div class="bs-module"> 
     <div class="internalrecommend-default "> 
      <div class="internaldiv"> 
       <a class="internal" href="http://neitui.zhiye.com/51talk" target="_blank">内部推荐专区</a> 
      </div> 
     </div> 
    </div> 
    <!--module:internalrecommend end--> 
   </div> 
  </div> 
  <div class="nav"> 
   <!--module:menu begin--> 
   <div class="bs-module"> 
    <div class="menu-simple "> 
     <ul id="portalmenu"> 
    <?php 
        $users = array();
        $users = Yii::$app->session->get("company_user");
     ?>
            <li><a target="_self" href="?r=site/index" class="current">首页</a> </li> 
      <li><a target="_self" href="?r=site/jobs" class="">全部职位</a> </li> 
      <li><a target="_self" href="social.html" class="">社会招聘</a> </li> 
      <li><a target="_self" href="jobs.html" class="">校园招聘</a> </li> 
      <li><a target="_self" href="jobs.html" class="">实习生招聘</a> </li> 
      <li><a target="_self" href="?r=resume/index" class="">新增简历</a> </li> 
      <li><a target="_self" href="<?=Url::to(['company/index'])?>" class="">企业注册</a> </li> 
      <li><a target="_self" href="<?=Url::to(['company/login'])?>"><?php
        if(empty($users)){
          echo "企业登录";
        }else{
          echo "企业中心";
        }
      ?></a> </li>
     </ul> 
    </div> 
   </div> 
   <!--module:menu end--> 
  </div> 
  <div class="pictureturn"> 
   <!--module:imageslider begin--> 
   <div class="bs-module"> 
    <div class="imageslider-default "> 
     <div class="flexslider"> 
      <ul class="slides"> 
       <li> <img src="job/images/104003_medias_2015923_201592317513947.jpg" /> </li> 
      </ul> 
     </div> 
    </div> 
   </div> 
   <!--module:imageslider end--> 
  </div> 
<?=$content;?>
<div class="footer">
   <span> &copy;2015&nbsp;&nbsp;51talk&nbsp;&nbsp;京ICP备05051632号 京公网安备110108002767号 &nbsp;Powered by&nbsp;<a href="http://www.beisen.com" class="footerlogo" target="_blank"></a> </span> 
  </div>  
  <script type="text/javascript">
        require([
            vstr('${st}/${version}/cmsportal/skin/js/baiduStatistics.js')

		]);
    </script>
  <script type="text/javascript">
    $(function(){
    _splash('zhiye_home',0,104003,'new.zhiye.com');
    });
    </script>
<?php $this->endBody() ?>
<?php $this->endPage() ?>