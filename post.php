<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<body>
        <div class="main">
            <?php $this->need('sidebar.php');?>
            <!--Main-->
            <div class="post-main">
                <div class="post-main-main">
                    <div class="post-main-title">
                        <font size="6px;"><?php $this->title() ?></font>
                    </div>
                    <info>#<?php $this->category(','); ?> | <?php $this->date('Y-m-d'); ?> | 0条评论</info>
                    <br>
                    <br>
                    <br>
                    <font size="4px">
                        <?php $this->content(''); ?>　
                    </font>
                </div>
            </div>
            <?php include('comments.php'); ?>
            <?php $this->need('footer.php'); ?>