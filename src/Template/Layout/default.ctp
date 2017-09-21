<?php
/**
 * Default Theme for Croogo CMS
 *
 * @author Fahad Ibnay Heylaal <contact@fahad19.com>
 * @link http://www.croogo.org
 */

use Cake\Core\Configure;

$siteTitle = Configure::read('Site.title');
$siteTagline = Configure::read('Site.tagline');

?>
<!DOCTYPE html>
<html style='background: #0e0e0e;'>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= $this->fetch('title'); ?> - <?= $siteTitle; ?></title>
    <?php
//    echo $this->Meta->meta();
    echo $this->Layout->feed();
    $this->element('stylesheets');
    echo $this->Layout->js();
    echo $this->Blocks->get('css');
    echo $this->Blocks->get('script');
    ?>
</head>
<body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <?= $siteTitle ?>
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <?=
                    $this->Menus->menu('main', [
                        'dropdown' => true,
                        'dropdownClass' => 'navbar-nav ml-auto',
                        'subTagAttributes' => [
                            'class' => 'nav-item',
                        ],
                        'linkAttributes' => [
                            'class' => 'nav-link js-scroll-trigger',
                        ],
                    ]);
                ?>
            </div>
    </nav>

    <?= $this->element('masthead') ?>

    <section id="main" class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php
                        echo $this->Layout->sessionFlash();
                        echo $this->fetch('content');
                    ?>
                </div>
                <div class="col-lg-4">
                    <?= $this->Regions->blocks('right'); ?>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; <?= $siteTitle ?> <?= date('Y') ?></span>
                </div>

                <div class="col-md-4">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            Powered by <a href="http://www.croogo.org">Croogo</a>.
                        </li>
                        <li class="list-inline-item">
                            <a href="http://www.cakephp.org"><?= $this->Html->image('/img/cake.power.gif'); ?></a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <?php
                    echo $this->Menus->menu('footer', [
                        'dropdown' => false,
                        'tagAttributes' => [
                            'class' => 'list-inline quicklinks',
                        ],
                        'subTagAttributes' => [
                            'class' => 'list-inline-item',
                        ],
                        'linkAttributes' => [
                            'class' => 'js-scroll-trigger',
                        ],
                    ]);
                ?>
                </div>
            </div>
        </div>
    </footer>


    <?php
    $this->element('javascripts');
    echo $this->Blocks->get('scriptBottom');
    ?>
</body>
</html>
