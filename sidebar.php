<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="sidebar">
                <nobr>
                    <a href="<?php $this->options->siteUrl(); ?>"><button type="button" class="layui-btn layui-btn-radius layui-btn-normal">首页</button></a>
                    <?php $this->widget('Widget_Contents_Page_List')
                                ->parse('<a href="{permalink}"><button type="button" class="layui-btn layui-btn-radius layui-btn-normal">{title}</button></a>&nbsp;'); ?>
                </nobr>
            </div>