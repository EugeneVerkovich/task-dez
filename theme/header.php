<!DOCTYPE html>

<html lang="ru">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?wp_title();?></title>
<?if($paged>1){?>
    <meta name='robots' content='noindex,follow'>
<?}?>
<?php wp_head();?>
</head>

<body>
<header class="main_header">
    <div class="container">
        <div class="row flex-column">
            <div class="col-md-3 col-xs-12">
                <a href="/" class="logo">
                    <img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="Search for Professionals">
                </a>
            </div>
            <div class="col-md-8 col-xs-12">
                <h1>
                    Targeted Search for Professionals in your Proximity
                </h1>
                <p>
                    Beta version is available for iPhone users (By Invitation Only)
                </p>
                <button class="beta-form open-form">
                    Try Beta Version
                </button>
            </div>
        </div>
    </div>
</header>

