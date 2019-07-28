<!--
    This Page By ohmyga and 1Jnver
-->
<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
function threadedComments($comments, $options) {
  $commentClass = '';
  if ($comments->authorId) {
    if ($comments->authorId == $comments->ownerId) {
      $commentClass .= ''; //作者样式
    } else {
      $commentClass .= ''; //访客样式
    }
  }
  $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
  $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
?>
 <div class="comments-one" style="margin-bottom:10px;">
  <div class="comments-one-head"  style="width:50px;">
   <?php $comments->gravatar('100', ''); ?>
  </div>
  <div class="comments-one-name">
   <font size="3px;"><a href="<?php echo $comments->url; ?>" target="_blank"><?php echo $comments->author; ?></a></font>
   &nbsp;&nbsp;&nbsp;<?php $comments->reply('回复'); ?>
  </div>
  <div class="comments-one-say" style="margin-left:10%">
   <?php $comments->content(); ?>
  </div>
  <?php
  //评论嵌套
  if ($comments->children){ $comments->threadedComments($options); }?>
  <br>
 </div>
<?php } ?>
<?php $this->comments()->to($comments); ?>

 <div class="comments">
  <div class="comments-main">
   <h2>Comments</h2>
   <?php if ($comments->have()){ $comments->listComments(); }?>
  </div>
 </div>
 
 <?php 
 //如果开启评论
 if($this->allow('comment')): ?>
 <div id="<?php $this->respondId(); ?>">
 <?php
 //如果登录了
 if($this->user->hasLogin()): ?>
<div class="comments-input">
   <div class="comments-input-main">
    <h2>留下你想说的</h2>
    <h3>欢迎回来，<?php $this->user->screenName(); ?> <a href="<?php $this->options->index('Logout.do'); ?>" title="Logout">登出&raquo;</a></p></h3>
    <div class="comments-input-input">
     <form method="post" action="<?php $this->commentUrl(); ?>" role="form" id="comment_form">
      <br>
      <input type="text" name="text" style="height:10%;" placeholder="留言" autocomplete="off" class="layui-input" value="<?php $this->remember('text'); ?>">
	  <?php $comments->cancelReply('<input type="button" value="取消回复" class="layui-btn layui-btn-radius layui-btn-normal" />'); ?>
      <input type="submit" value="Fa♂送留言" class="layui-btn layui-btn-radius layui-btn-normal" />
      <?php $security = $this->widget('Widget_Security'); ?>
            <input type="hidden" name="_" value="<?php echo $security->getToken($this->request->getReferer())?>">
     </form>
    </div>
   </div>
  </div>
 <?php
 //如果没登录
 else: ?>
  <div class="comments-input">
   <div class="comments-input-main">
    <h2>留下你想说的</h2>
    <div class="comments-input-input">
     <form method="post" action="<?php $this->commentUrl(); ?>" role="form" id="comment_form">
      <input type="text" name="author" placeholder="昵称" autocomplete="off" class="layui-input" value="<?php $this->remember('author'); ?>" required>
      <input type="email" name="mail" placeholder="邮箱" autocomplete="off" class="layui-input" value="<?php $this->remember('mail'); ?>" required>
      <input type="url" name="url" placeholder="网址" autocomplete="off" class="layui-input" value="<?php $this->remember('url'); ?>">
      <br>
      <input type="text" name="text" style="height:10%;" placeholder="留言" autocomplete="off" class="layui-input" value="<?php $this->remember('text'); ?>">
	  <?php $comments->cancelReply('<input type="button" value="取消回复" class="layui-btn layui-btn-radius layui-btn-normal" />'); ?>
      <input type="submit" value="Fa♂送留言" class="layui-btn layui-btn-radius layui-btn-normal" />
      <?php $security = $this->widget('Widget_Security'); ?>
            <input type="hidden" name="_" value="<?php echo $security->getToken($this->request->getReferer())?>">
     </form>
    </div>
   </div>
  </div>
 <?php
 //判断是否登录结束
 endif; ?>
 </div>
 <?php
 //如果没开启评论
 else: ?>
 
 <?php
 //判断是否开启评论结束
 endif; ?>