<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\jui\DatePicker;

?>
  <link href="job/css/common.css" rel="stylesheet" type="text/css" />
  <link href="job/css/templateform.css" rel="stylesheet" type="text/css" />
  <link href="job/css/controls.css" rel="stylesheet" type="text/css" />
  <link href="job/css/default.css" rel="stylesheet" type="text/css" />

  <link href="job/css/school-select-v2.css" rel="stylesheet" type="text/css" /> 
  <!--引用静态文件:skin_new_css--> 
  <link href="job/css/main.css" rel="stylesheet" type="text/css" /> 
  <!--引用静态文件:new_dialog_js--> 
  
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
          <li class="basic" onclick="BSGlobal.navigate(0);" style="cursor: pointer;"><a href="javascript:void(0);" onclick="BSGlobal.navigate(0);"><span class="dl_grey3">1基本信息</span></a></li> 
          <li class="greyarrow"></li> 
          <li class="greyprofile" onclick="BSGlobal.navigate(1);" style="cursor: pointer;"><a href="?r=resume/apply_resume" ><span class="dl_grey2">2个人履历</span></a></li> 
          <li class="greyarrow"></li> 
          <li class="greysubmit" onclick="BSGlobal.navigate(4);" style="cursor: pointer;"><a href="javascript:void(0);" onclick="BSGlobal.navigate(4);"><span class="dl_grey2">3预览/提交</span></a></li> 
         </ul> </td> 
       </tr> 
      </tbody>
     </table> 
    </div> 
    <div> 
     <style type="text/css">
  *html .dl_myleftform .form_container{ width: 490px;overflow: hidden}
  *html .dl_myleftform .form_container .form_part .columntwo ul{ width: 360px;overflow: hidden;}
  *html .dl_myleftform .form_container ul li{ width: 360px;overflow: hidden}
  /* .dl_myleftform .form_container li label{width: 100px}*/
*html .dl_myleftform .form_container ul li span.preview_text{ width: 220px;overflow: hidden;}
*html .dl_myleftform .form_container ul li textarea.textarea{ width: 200px;}
*html .form_container li span.desc
{
    
  margin-right:-3px;
  position:relative;
}
   .redBorder,.form_container li textarea.redBorder,
    .form_part li inmmmmmmmmmmmmmmmmmmput.redBorder{border: red 1px solid;}

</style> 
     <div class="dl_bacwrap dl_new_error_wrap"> 
      <div class="mainwrap"> 
       <br /> 
       <h3 class="dl_bigtit"> <span class="dl_postit">基本信息</span> <span class="dl_padl20"></span> </h3> 
       <br /> 
       <a name="个人信息"></a> 
       <div class="dl_greyline_bg"> 
        <span class="dl_menutit">个人信息</span> 
       </div> 
       <?php $form = ActiveForm::begin(['method'=>'post']); ?> 
       <?= $form->field($user_info, 'user_name')->textInput(['autofocus' => true,'style'=>'width:200px'])->label('用户名') ?>
       <?= $form->field($user_info, 'sex')->radioList(['1'=>'男','0'=>'女'])->label('性别') ?>
      
       <?= $form->field($user_info, 'birth')->widget(\yii\jui\DatePicker::classname(), ['language' => 'ru','dateFormat' => 'yyyy-MM-dd',])->label('出生日期') ?>
       <?= $form->field($user_info, 'email')->textInput(['autofocus' => true,'style'=>'width:200px'])->label('邮箱') ?>
       <?= $form->field($user_info, 'tel')->textInput(['autofocus' => true,'style'=>'width:200px'])->label('手机号') ?>
       <?= $form->field($user_info, 'workyears')->textInput(['autofocus' => true,'style'=>'width:200px'])->label('工作年限') ?>
       <?= $form->field($file, 'user_img')->fileInput()->label('上传头像') ?>
       
               <a name="求职意向"></a> 
               <div class="dl_greyline_bg"> 
        <span class="dl_menutit">求职意向</span> 
               </div>
        <?= $form->field($resume, 'now_occupation')->textInput(['autofocus' => true,'style'=>'width:200px'])->label('现从事职业') ?>

        <?= $form->field($resume, 'now_joblocation')->textInput(['autofocus' => true,'style'=>'width:200px'])->label('期望工作城市') ?>


        <?= $form->field($resume, 'now_salary')->textInput(['autofocus' => true,'style'=>'width:200px'])->label('现月薪') ?>
        <?= $form->field($resume, 'expect_occupation')->textInput(['autofocus' => true,'style'=>'width:200px'])->label('期望从事职业') ?>
        <?= $form->field($resume, 'expect_joblocation')->textInput(['autofocus' => true,'style'=>'width:200px'])->label('期望工作城市') ?>
        <?= $form->field($resume, 'expect_salary')->textInput(['autofocus' => true,'style'=>'width:200px'])->label('期望薪资') ?>
        <?= $form->field($resume, 'arrival_time')->widget(\yii\jui\DatePicker::classname(), ['language' => 'ru','dateFormat' => 'yyyy-MM-dd',])->label('到岗时间') ?>
        </div>
         <div class="dl_subbtn dl_htline32"> 
          <?= Html::submitButton('保存并下一步', ['class'=>'btn btn-primary','name' =>'submit-button']) ?>  
           <?= Html::resetButton('取消', ['class'=>'btn btn-primary','name' =>'submit-button']) ?>
         </div> 
      </div> 
     </div> 
    <?php ActiveForm::end(); ?> 
     <!--引用静态文件:dataInitFunc,HangYe,AreaJson,NewAreaJson--> 
     
    </div> 
    <!--简历内容 e--> 
   </div> 
   
  </div>  
  
 </body>
 <script src="job/js/jquery-1.8.3.js"></script>
 <script>
    $(function(){
        $(document).on("change",".form-control",function(){
            var obj = $(this);
            var id =  $(this).val();
            $.
            ("?r=resume/get_ajax",{id:id},function(data){
                alert(data)
            })
        })
    })
 </script>
</html>