<center>
    <table border="1px">
      <caption><h3>企业用户信息</h3></caption>
      <tr>
        <td>公司名称</td>
        <td>账户</td>
        <td>手机号</td>
        <td>邮箱</td>
      </tr>
        <tr>
            <td><?=$data['company_name']?></td>
            <td><?=$data['user_name']?></td>
            <td><?=$data['user_tel']?></td>
            <td><?=$data['user_email']?></td>
        </tr>
    </table>
    <a href="?r=mycom/employ">招聘</a>
    <a href="?r=mycom/all">我的招聘信息</a>
    <a href="?r=mycom/resum">查看简历</a>
</center>