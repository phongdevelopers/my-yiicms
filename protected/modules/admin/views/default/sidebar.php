<div id="sidebar">
	<div class="separate"></div>
	<ul>
    	<li class="title">系统设置</li>
        <li><a class="current" href="<?php echo $this->createUrl('settings/'); ?>">站点设置</a></li>
		<li><a href="<?php echo $this->createUrl('default/start'); ?>">地域管理</a></li>
		<li><a href="<?php echo $this->createUrl('settings/friendlink'); ?>">友情链接</a></li>
    </ul>
    <ul>
    	<li class="title">内容管理</li>
        <li><a href="<?php echo $this->createUrl('article/list'); ?>">文章</a></li>
        <li><a href="<?php echo $this->createUrl('article/add'); ?>">添加文章</a></li>
		<li><a href="<?php echo $this->createUrl('category/list'); ?>">文章分类</a></li>
		<li><a href="<?php echo $this->createUrl('comment/list'); ?>">文章评论</a></li>
	</ul>
	<ul>
		<li class="title">会员管理</li>
		<li><a href="<?php echo $this->createUrl('user/list'); ?>">用户</a></li>
        <li><a href="<?php echo $this->createUrl('user/add'); ?>">添加用户</a></li>
	</ul>
</div>
<div class="dwindle" style="display:none;"></div>
