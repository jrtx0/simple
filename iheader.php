<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="<?php $this->options->charset(); ?>">

    <link href="<?php $this->options->themeurl(); ?>css/bootstrap.min.css?version=3.1.1" type="text/css" rel="stylesheet"/>
    <link href="<?php $this->options->themeurl(); ?>css/bootstrap-theme.min.css?version=3.1.1" type="text/css" rel="stylesheet"/>
    <link href="<?php $this->options->themeurl(); ?>css/home.css" type="text/css" rel="stylesheet"/>
	<link rel="shortcut icon" href="images/Octocat.jpg" type="image/x-icon" />
</head>

<body>
	<script>
		if (/mobile/i.test(navigator.userAgent) || /android/i.test(navigator.userAgent))
    	{
        	document.body.classList.add('mobile');
    	}
    </script>
    
	<nav class="navbar navbar-default navbar-fixed-top" style="opacity: .9" role="navigation">
    	<div class="container-fluid">
        	 <!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
            	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                	<span class="sr-only">Toggle navigation</span>
                	<span class="icon-bar"></span>
                	<span class="icon-bar"></span>
                	<span class="icon-bar"></span>
            	</button>
            	<a class="navbar-brand" href="/index.php"><?php $this->options->description() ?></a>
        	</div>

        	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            	<ul class="nav navbar-nav navbar-right">
                	<li class="active"><a href="/index.php">博客</a></li>
                	<li><a href="index.php/about.html">关于</a></li>
            	</ul>
        	</div>
    	</div>
	</nav>

