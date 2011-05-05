<div id="page">
  <!--/header -->
  <div id="columns">
    <div id="centercol">
      <div class="box post" id="post-41">
        <div class="content">
          <div class="pic fl"><a href="#" rel="bookmark"><img src="<?php echo resBu()?>images/img_1.jpg" alt="Post Pic" width="234" height="234" /></a></div>
          <div class="post-title">
            <h2><?php echo $article->title;?></h2>
          </div>
         
          <div class="social-links">
            <div class="post-date"><?php echo date('Y-m-d H:i:s',$article->create_time);?>&nbsp;&nbsp;<a href="#"><?php echo $article->category->name;?></a> </div>
          </div>
          
          <div class="post-excerpt">
            <p><?php echo $article->description;?></p>
          </div>
          
          <div class="clr"></div>
          <div class="post-commets">
          <?php if($article->commentCount > 0){?>
            <a href="#" title="View Comments" class="font-sm"><?php echo $article->commentCount;?> 条评论</a>
          <?php }else{?>
            <span>没有评论</span>
          <?php }?>
          </div>
        </div>
      </div>
      <div class="clr"></div>
      </div>
    <!--/centercol -->
    <div id="rightcol">
      <div class="box">
        <div class="wtitle">
          <h2>分类目录</h2>
          <div class="clr"></div>
        </div>
        <div class="content">
          <ul class="rlist">
            <?php foreach($category as $item):?>
                <li><?php echo $item['strpre'];?>&nbsp;<a href="<?php echo $item['id'];?>"><?php echo $item['name'];?></a></li>
            <?php endforeach;?>
            </ul>
        </div>
        <!--/content -->
      </div>
      <!--/box -->
      <?php $this->widget('FriendLinkSidebar');?>
    </div>
    <!--/rightcol -->
    <div class="clr"></div>
  </div>
  <!--/columns -->
    <div class="clr"></div>
</div>
<!--/page -->

