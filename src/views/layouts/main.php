<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>Cantinho Vó Georgina | <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <div class="header container">
        <div class="visible-xs visible-sm col-xs-12 col-sm-12 text-center sm-logo">
            <a rel="home" href="index.html">
                <img src="/img/vogeo/logo-vertical.png" width="200" alt="logo">
            </a>
        </div>
    </div>
    <div class="navbar" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" 
                data-target=".navbar-collapse"
            >
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <?php $page = isset($this->params['page']) ? $this->params['page'] : ''; ?>
                <li <?php if ($page == 'sobre') echo 'class="selected"' ?>>
                    <a href="/site/sobre">O que fazemos</a>
                </li>
                <li <?php if ($page == 'quem-somos') echo 'class="selected"' ?>>
                    <a href="/site/quem-somos">Quem somos</a>
                </li>
                <li class= "hidden-xs hidden-sm li-logo">
                    <a rel="home" href="index.html">
                        <img class="logo" src="/img/vogeo/logo-vertical.png" width="200" alt="logo">
                    </a>
                </li>
                <li <?php if ($page == 'como-ajudar') echo 'class="selected"' ?>>
                    <a href="/site/como-ajudar">Como ajudar</a>
                </li>
                <li <?php if ($page == 'contato') echo 'class="selected"' ?>>
                    <a href="/site/contato">Contato</a>
                </li>
            </ul>
        </div>
    </div>

    <?= $content ?>

    <footer id="footer"> 
        <div class="footer-content container">
            <div class="footer-adress text-center col-xs-12 col-sm-4 col-md-4">
                <h4>Cantinho Vó Georgina</h4>
                <ul class="footer-menus">
                    <li><a href="/site/sobre">O que fazemos</a></li> 
                    <li>/</li>
                    <li><a href="/site/quem-somos">Quem somos</a></li> 
                    <li>/</li>
                    <br/>
                    <li><a href="/site/como-ajudar">Como ajudar</a></li> 
                    <li>/</li>
                    <li><a href="/site/contato">Contato</a></li> 
                </ul>
            </div>
            <div class="footer-second col-xs-12 col-sm-4 col-md-4">
                <div class="social-block text-center">
                    <div class="social-share">
                        <a href="https://www.facebook.com/CantinhoVoGeorgina" target="blank">
                            <i class="fa fa-2x fa-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/cantinhovogeorgina" target="blank">
                            <i class="fa fa-2x fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <p class="text-center footer-text1">(51) 3108-4990</p>
                <p class="text-center footer-text">(51) 99103-7163 (WhatsApp)</p>
            </div>
            <div class="footer-third col-xs-12 col-sm-4 col-md-4">
              <div class="copyright">
                  <span>&copy; Cantinho Vó Georgina</span><br>
                  <span>Todos os direitos reservados - <?= date('Y') ?></span>
                  <br>
                  <br>
                  <i class="fa fa-heart"></i>
                  <span><b>Site desenvolvido por voluntários</b></span>
                  <i class="fa fa-heart"></i>
              </div>
            </div>
        </div>
        <div class="move-top-page">
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
