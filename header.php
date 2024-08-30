<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle([
            'category' => _t('分类 %s 下的文章'),
            'search'   => _t('包含关键字 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ], '', ' - '); ?><?php $this->options->title(); ?></title>


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('js/storage.js'); ?>"></script>
    <script>
        (function() {
            var storage = window.storageModule;
            const currentTheme = storage.getLocalStorage('theme');
            if (currentTheme === 'dark') {
                document.documentElement.classList.toggle('theme-dark');
            }
        })();
    </script>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/custom/theme.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/normalize.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/grid.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/main.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/custom/index.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/custom/header.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/custom/rightSidebar.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/custom/archive.css'); ?>">

    <script type="text/javascript" src="<?php $this->options->themeUrl('js/header.js'); ?>"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('js/index.js'); ?>"></script>
    <script type="text/javascript">
        var logo = "<?php $this->options->logo(); ?>";
    </script>
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>

<div id="body">
    <!-- 弹窗 -->
    <div id="search-model" class="modal">
        <!-- 弹窗内容 -->
        <div id="search-modal-content" class="modal-content">
            <div class="search-input-container">
                <form class="search-form" id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                    <input type="text" id="s" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>"/>
                    <button type="submit" class="submit"><?php _e('搜索'); ?></button>
                </form>
            </div>
            <span id="modal-close" class="close"><i class="iconfont">&#xe640;</i></span>
        </div>
    </div>
    </div>
    <div class="container body-container body-container-overlay"></div>
    <div class="container body-container">
        <header id="header" class="clearfix">
            <div class="container">
                <div class="header-row">
                    <div class="site-meta">
                        <a href="/" class="brand">
                            <i class="logo-line"></i>
                            <h1 class="site-title"><?php $this->options->title(); ?></h1>
                            <i class="logo-line"></i>
                        </a>
                        <i id="switch-theme" class="iconfont theme">&#xe654;</i>
                    </div>
                    <div class="nav-menu-container">
                        <nav id="nav-menu" class="clearfix" role="navigation">
                            <a href="<?php $this->options->siteUrl(); ?>"><i class="iconfont">&#xe867;</i><?php _e('首页'); ?></a>
                            <div class="dropdown">
                                <a><i class="iconfont">&#xe85c;</i><?php _e('分类'); ?></a>
                                <div class="dropdown-content">
                                    <?php
                                        $categories = $this->widget('Widget_Metas_Category_List');
                                        while($categories->next()):
                                    ?>
                                        <div class="dropdown-item">
                                            <a href="<?php $categories->permalink(); ?>"><?php $categories->name(); ?></a>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a href="<?php $this->options->siteUrl(); ?>index.php/archive.html"><i class="iconfont">&#xe70f;</i><?php _e('归档'); ?></a>
                            </div>
                            <div id="search-trigger" class="dropdown">
                                <a><i class="iconfont">&#xe840;</i><?php _e('搜索'); ?></a>
                            </div>
                        </nav>

                    </div>
                </div><!-- end .row -->
            </div>
        </header><!-- end #header -->
        <div class="row">
