<center>
	<table>
		<tr>
			<td>工作名称</td>
			<td>薪资</td>
			<td>工作经验</td>
			<td>人数</td>
			<td>工作地点</td>
			<td>工作性质</td>
			<td>学历</td>
			<td>操作</td>
		</tr>
		<?php foreach($data as $k=>$v){ ?>
			<tr>
				<td><?=$v['work_name']?></td>
				<td><?=$v['money']?></td>
				<td><?=$v['work_years']?></td>
				<td><?=$v['hownum']?></td>
				<td><?=$v['work_area']?></td>
				<td><?=$v['work_nature']?></td>
				<td><?=$v['education']?></td>
				<td><a href="">删除</a></td>
			</tr>
		<?php }?>
	</table>
</center>