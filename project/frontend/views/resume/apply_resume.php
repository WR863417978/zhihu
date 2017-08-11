<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\jui\DatePicker;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <title>职位申请 - 2个人履历</title>  
  <!--引用静态文件:requirejs--> 
  <script type="text/javascript" src="job/js/require.js"></script> 
  <!--引用静态文件:skin_default--> 
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
  <!--引用静态文件:skin_new_css--> 
  <link href="job/css/main.css" rel="stylesheet" type="text/css" /> 
  <!--引用静态文件:new_dialog_js--> 
  <script type="text/javascript" src="job/js/dialog_js.js"></script> 
  <!--产品头部CSS和脚本--> 
  <script src="job/js/WdatePicker.js"></script> 

  <!--引用静态文件:front_css--> 
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

   <div class="dl_content dl_gray_bg"> 
    <!----> 
    <!--申请职位 s--> 
    <!--申请职位 e--> 
    <!--我的简历 s--> 
    <!--简历内容 s--> 
    <style type="text/css">
        .code
        {
            clear: both;
            padding-left: 80px;
        }

            .code .code_add
            {
                text-decoration: none;
                margin-left: 0;
            }

            .code a.code_add:hover
            {
                text-decoration: underline;
            }

        .form_container .form_part ul.code_list
        {
            padding-left: 0;
        }

        .form_container li a.code_del
        {
            text-decoration: none;
            padding-left: 40px;
        }

            .form_container li a.code_del:hover
            {
                text-decoration: underline;
            }

        .code_type
        {
            width: 180px;
        }

        .code_dialog
        {
            padding: 30px 40px;
        }

        div.code_dialog_btn
        {
            margin-top: 0;
            height: 32px;
        }

        span.code_error_pop
        {
            margin-top: 5px;
            width: auto;
            height: 20px;
            visibility: hidden;
        }

        .code_dialog #btnClse
        {
            margin-left: 50px;
        }

        .code_dialog .dl_dialog_btn
        {
            padding-top: 20px;
            margin-top: 10px;
        }

        .code_type_outer
        {
            text-align: center;
        }

        .code_dialog a.dl_btn_grey1 span
        {
            padding: 0 16px 0 0;
        }

        .code_dialog a.dl_btn_grey1
        {
            padding-left: 16px;
        }

        .code_title
        {
            margin-bottom: 10px;
            color: #333;
        }
    </style> 
    <div class="dl_liucheng dl_top_table"> 
     <h3 class="applypos"> <span>申请职位：</span><span class="dl_positionname"><strong style="font-weight: bold;">PTD 助教总监</strong> </span> </h3> 
     <table align="center" class="dl_top_ico"> 
      <tbody>
       <tr> 
        <td align="center"> 
         <ul class="dl_picliu"> 
          <li class="bluebasic" onclick="BSGlobal.navigate(0);" style="cursor: pointer;"><a href="javascript:void(0);" onclick="BSGlobal.navigate(0);"><span class="dl_grey2">1基本信息</span></a></li> 
          <li class="bluearrow"></li> 
          <li class="profile" onclick="BSGlobal.navigate(1);" style="cursor: pointer;"><a href="javascript:void(0);" onclick="BSGlobal.navigate(1);"><span class="dl_grey3">2个人履历</span></a></li> 
          <li class="greyarrow"></li> 
          <li class="greysubmit" onclick="BSGlobal.navigate(4);" style="cursor: pointer;"><a href="javascript:void(0);" onclick="BSGlobal.navigate(4);"><span class="dl_grey2">3预览/提交</span></a></li> 
         </ul> </td> 
       </tr> 
      </tbody>
     </table> 
    </div> 
    <div> 
     <style type="text/css">
    .redBorder,.form_container li textarea.redBorder,
    .form_part li input.redBorder{border: red 1px solid;}
    .eduinfo .form_container span.preview_text {
        width:450px;
    }
    .eduinfo .form_container span.start_date {
        width:80px;
    }
    .eduinfo .form_container span.end_date {
        width:70px;
    }
</style> 
     <div class="dl_bacwrap dl_new_error_wrap"> 
      <div class="mainwrap"> 
       <h3 class="dl_bigtit"> <span class="dl_postit">个人履历</span> <span class="dl_padl20">请在执行下一步前将必填项填写完毕并保存</span> </h3> 
       <br /> 
     
        
       <div class="dl_educationwrap mainContainer"> 
        <a name="工作经验"></a> 
        <div class="dl_greyline_bg"> 
         <span class="dl_menutit "><span style="color:red;">*</span>工作经验</span> 
         <span class="dl_padl20 errmsg new_pop_error" id="errorMsg_6"></span> 
        </div> 
         <?php $form = ActiveForm::begin(['method'=>'post']); ?> 
       <?= $form->field($record, 'work_name')->textInput(['autofocus' => true,'style'=>'width:200px'])->label('职位名称') ?>
      <?= $form->field($record, 'start_time')->widget(\yii\jui\DatePicker::classname(), ['language' => 'ru','dateFormat' => 'yyyy-MM-dd',])->label('开始时间') ?>
      <?= $form->field($record, 'end_time')->widget(\yii\jui\DatePicker::classname(), ['language' => 'ru','dateFormat' => 'yyyy-MM-dd',])->label('结束时间') ?>
      <?= $form->field($record, 'work_content')->textInput(['autofocus' => true,'style'=>'width:200px'])->label('工作职责') ?>
        </div>
         <div class="dl_subbtn dl_htline32"> 
          <?= Html::submitButton('保存并下一步', ['class'=>'btn btn-primary','name' =>'submit-button']) ?>  
           <?= Html::resetButton('取消', ['class'=>'btn btn-primary','name' =>'submit-button']) ?>
         </div> 
      </div> 
     </div> 
    <?php ActiveForm::end(); ?> 
        <input type="hidden" class="viewName" value="0" /> 
        <div class="dl_mgtop10"> 
         <a name="addItem" href="#this" class="dl_add_ico blue">继续添加</a> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div>  

 </body>
</html>