<?php
/**
 * 一款以透明为主的typecho壁纸，肥肠的高端大气上档次！
 * 当前正在开发
 * Github: https://github.com/obentnet/Typecho-Theme-NeiNo
 * 
 * @package Typecho NeiNo Theme 
 * @author 1Jnver
 * @version 0.8.7
 * @link https://yujienb.cn/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');?>

<body>
        <div class="main">
            
            <div class="head">
                
                <div class="head-img">
                    <img src="<?php $this->options->themeUrl('/img/index-head.jpg'); ?>" style="width:15%;" alt="">
                </div>
                <div class="head-title">
                    <font size="6px;"><?php $this->options->title() ?></font>
                    <br>
                    <font size="3px;"><?php $this->options->description() ?></font>
                </div>

            </div>
            <?php $this->need('sidebar.php'); ?>


            <div class="posts">
                <br>
                <?php while($this->next()): ?>
                <div class="one-post">
                    <div class="one-post-title">
                        <a href="<?php $this->permalink() ?>">
                            <h2><?php $this->title() ?></h2>
                        </a>
                        <info>#<?php $this->category(','); ?> | <?php $this->date('Y-m-d'); ?> | <?php $this->commentsNum('%d条评论'); ?></info>
                    </div>
                </div>
                <?php endwhile; ?>
                    <br>
            </div>

            <!--News-->

            <div class="news">
                <div class="news-left">
                    <div class="news-left-main" style="margin-left:10%">
                        <font>
                        <h3>最新文章</h3>
                        <ul>
                             <?php $this->widget('Widget_Contents_Post_Recent')
                             ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
                        </ul>
                </font>
                    </div>
                </div>

                <div class="news-right">
                    <div class="news-right-main" style="margin-left:10%">
                        <font>
                        <h3>最新评论</h3>
                        <ul>
                             <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
                             <?php while($comments->next()): ?>
                                 <li><?php $comments->author(false); ?>: <a href="<?php $comments->permalink(); ?>"><?php $comments->excerpt(233, '[...]'); ?></a></li>
                             <?php endwhile; ?>
                        </ul>


                            
                        </font>
                    </div>
                </div>
            </div>

            <!--News End-->



<?php $this->need('footer.php'); ?>
