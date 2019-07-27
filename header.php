<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=no" />
        <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
        <link rel="stylesheet" href="<?php $this->options->themeUrl('/layui/css/layui.css'); ?>"/>
        <link rel="stylesheet" href="<?php $this->options->themeUrl('/layui/css/layui.mobile.css'); ?>"/>
        <script src="<?php $this->options->themeUrl('layui/layui.all.js'); ?>"></script>
    </head>