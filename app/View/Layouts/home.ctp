<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title; ?></title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<?php echo $this->Html->css(array('bootstrap.min', 'forms')); ?>
<?php echo $this->fetch('css'); ?>
</head>
<body>

<!-- Si vous voulez afficher une sorte de menu pour toutes vos vues, mettez
le ici -->
<header>
     <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">
                    <?php echo $this->Html->image('logo.png', array('alt' => 'logo')); ?>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="">Accueil</a>
                    </li>
                    <li>
                        <a href="">C.V</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Voilà l'endroit ou je souhaite que mes vues soient affichées -->
<?php echo $this->Session->flash(); ?>
<?php echo $this->fetch('content'); ?>
<!-- Ajoute un footer sur chaque page affichée -->
<div id="footer">...</div>
<?php echo $this->Html->script(array('jquery-3.3.1', 'bootstrap.min', 'scripts')); ?>
<?php echo $this->fetch('script'); ?>
</body>
</html>