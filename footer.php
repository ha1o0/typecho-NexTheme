<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
        <footer id="footer" role="contentinfo">
            <div>&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
            <?php _e('由 <a href="https://typecho.org">Typecho</a> 强力驱动'); ?></div>
            <?php if ($this->options->siteStartAt): ?>
                <div id="site-runtime"></div>
            <?php endif ?>
            <?php if ($this->options->ICP): ?>
                <div>备案号：<?php $this->options->ICP(); ?></div>
            <?php endif ?>
        </footer><!-- end #footer -->
    </div>
    <?php $this->need('right-sidebar.php'); ?>
</div><!-- end #body -->
<script>
    var siteStartAt = '<?php echo $this->options->siteStartAt(); ?>';
    var siteStartTime = new Date(siteStartAt).getTime();

    // 格式化时间函数
    function formatTime(seconds) {
        return (seconds < 10) ? '0' + seconds : seconds;
    }

    // 更新运行时间显示
    function updateRuntimeDisplay() {
        var now = new Date().getTime();
        var diff = now - siteStartTime;
        var seconds = Math.floor(diff / 1000);

        var days = Math.floor(seconds / (3600 * 24));
        seconds %= 3600 * 24;
        var hours = Math.floor(seconds / 3600);
        seconds %= 3600;
        var minutes = Math.floor(seconds / 60);

        // 格式化显示
        $('#site-runtime').text(
            '本站居然已运行 ' +
            days + ' 天 ' +
            formatTime(hours) + ' 小时 ' +
            formatTime(minutes) + ' 分 ' +
            formatTime(seconds % 60) + ' 秒'
        );
    }

    // 当页面加载完成时，初始化显示
    $(document).ready(function() {
        updateRuntimeDisplay();
    });

    // 每秒更新时间
    setInterval(updateRuntimeDisplay, 1000);
</script>


<?php $this->footer(); ?>
</body>
</html>
