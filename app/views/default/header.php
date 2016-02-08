<!DOCTYPE html>
<html>
    <head>
        <?= wpn_widget('wpntitle'); ?>
        <?= wpn_meta(); ?>
        <!-- Bootstrap -->
        <?= wpn_asset('css', 'bootstrap.min.css'); ?>
        <!-- Estilo do template -->
        <?= wpn_asset('css', 'template.css'); ?>
        <!-- jQuery -->
        <?= wpn_asset('js', 'jquery-2.1.4.min.js'); ?>
        <?= wpn_asset('js', 'bootstrap.min.js'); ?>

        <?= wpn_widget('facebookheader'); ?>
        <?= wpn_widget('addthisheader'); ?>
        <?= wpn_widget('background'); ?>

    </head>
    <body>
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Alternar navegação</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?= site_url(); ?>">
                                <span class="visible-xs"><?= wpn_config('site_titulo'); ?></span>
                                <?= wpn_widget('logomarca', ['class_name'=>'img-responsive hidden-xs', 'width'=>'200']); ?>
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <div class="menu">
                                <?= wpn_widget('wpanelmenu', ['menu_id' => 1, 'class_menu' => 'nav navbar-nav navbar-right']); ?>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="row">
                <?= wpn_widget('slidebanner', ['position'=>'slide']); ?>
            </div>
            <div class="row">
                <div class="col-md-9">