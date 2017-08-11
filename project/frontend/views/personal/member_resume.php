<center>
    <table border="1px">
      <caption><h3>个人信息</h3></caption>
      <tr>
        <td>姓名</td>
        <td>邮箱</td>
        <td>手机号</td>
        <td>出生日期</td>
        <td>性别</td>
        <td>工作年份</td>
      </tr>
        <tr>
            <td><?=$data['user_name']?></td>
            <td><?=$data['email']?></td>
            <td><?=$data['tel']?></td>
            <td><?=$data['birth']?></td>
            <td><?php if($data['sex']==1){
              echo "男";
              }else{
                echo "女";
                } ?></td>
            <td><?=$data['workyears']?></td>
        </tr>
    </table>
        <table border="1px">
      <caption><h3>求职意向</h3></caption>
      <tr>
        <td>现从事职业</td>
        <td>现工作城市</td>
        <td>现月薪</td>
        <td>期望从事职业</td>
        <td>期望工作城市</td>
        <td>期望月薪</td>
        <td>到岗日期</td>
      </tr>
        <tr>
            <td><?=$data['now_occupation']?></td>
            <td><?=$data['now_joblocation']?></td>
            <td><?=$data['now_salary']?></td>
            <td><?=$data['expect_occupation']?></td>
            <td><?=$data['expect_joblocation']?></td>
            <td><?=$data['expect_salary']?></td>
            <td><?=$data['arrival_time']?></td>
        </tr>
    </table>
     <table border="1px">
      <caption><h3>工作经验</h3></caption>
      <tr>
        <td>工作名称</td>
        <td>开始时间</td>
        <td>结束时间</td>
        <td>工作职责</td>
      </tr>
      <?php foreach($data1 as $k=>$v){?>
        <tr>
            <td><?=$v['work_name']?></td>
            <td><?=$v['start_time']?></td>
            <td><?=$v['end_time']?></td>
            <td><?=$v['work_content']?></td>
        </tr>
    <?php }?>
    </table>
</center>