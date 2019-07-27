<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
include('neino.php')
?>
            <div class="footer">
                <nobr>
                    &copy;<?php $this->date('Y'); ?><?php $this->options->title() ?> <br>
                    Powered By <a href="http://typecho.org" target="_blank">Typecho</a> |<?php /**版权输出 */ "echo Theme By NeiNo"?>
                    <?php echo $neino[0]?>
                </nobr>
            </div>
            <br>
        </div>
    </body>
</html>