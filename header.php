<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="<?php $this->options->charset(); ?>">

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <meta name="renderer" content="webkit">
    <meta name="keywords" content="autosar,osek,embedded">
    <meta name="description" content="JRTx , Embedded Engineer">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?>
        <?php $this->options->title(); ?>
    </title>

    <?php $this->header(); ?>

    <meta name="author" content="JRTx" />
    <link rel="shortcut icon" href="/template/style/images/favicon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="http://jrtx.tech:5800/usr/uploads/2021/04/264290085.jpg" />
    <link href="<?php $this->options->themeUrl(); ?>css/font-awesome.min.css?version=0.0810" type="text/css" rel="stylesheet" />
    <link href="<?php $this->options->themeUrl(); ?>css/basic.css?version=0.0810" type="text/css" rel="stylesheet" />
    <link href="<?php $this->options->themeUrl(); ?>css/animate.3.5.2.min.css?version=0.0810" type="text/css" rel="stylesheet" />
    <link href="<?php $this->options->themeUrl(); ?>css/style.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <div class="main animated">
        <div class="header animated fadeInDown">
            <div class="site_title_container">
                <div class="site_title">
                    <a href="<?php $this->options->siteUrl(); ?>">
                        <img src="<?php $this->options->themeUrl(); ?>images/logo.svg" alt="<?php $this->options->title() ?>" />
                    </a>
                </div>

                <div class="description">
                    <a href="http://jrtx.tech:5800">
                        <p class="sub_title"><?php $this->options->description() ?></p>
                    </a>
                    <div class="my_socials">
                        <a href="https://github.com/jrtx0" title="github">
                            <i class="fa fa-github"></i>
                        </a>

                        <a href="mailto:jirentianxiang1024@qq.com" title="mail">
                            <i class="fa fa-envelope"></i>
                        </a>

                        <a href="http://instagram.com/jrtx_tech" title="instagram">
                            <i class="fa fa-instagram"></i>
                        </a>

                        <a href="https://twitter.com/jrtx_tech" title="twitter">
                            <i class="fa fa-twitter"></i>
                        </a>

                        <a href="http://www.weibo.com/jrtx0" title="weibo">
                            <i class="fa fa-weibo"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
