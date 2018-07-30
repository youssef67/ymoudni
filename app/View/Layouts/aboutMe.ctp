<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $title; ?></title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Muli:400,600,800" rel="stylesheet">
		<?php echo $this->Html->css(array('bootstrap.min', 'aboutMe')); ?>
		<?php echo $this->fetch('css'); ?>
	</head>
	<header>
      <nav class="navbar navbar-default navbar-fixed-top">
             <div class="navbar-header">
                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
                 <a class="navbar-brand">Youssef Moudni</a>
             </div>
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 <ul class="nav navbar-nav">
                     <li>
                        <a href="">Accueil</a>
                     </li>
                     <li>
                        <a href="">C.V</a>
                     </li>
                 </ul>
             </div>
     </nav>
 </header>
	<!-- Si vous voulez afficher une sorte de menu pour toutes vos vues, mettez
	le ici -->
	<body>
		<div class='container-fluid'>
		<!-- Voilà l'endroit ou je souhaite que mes vues soient affichées -->
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<!-- Ajoute un footer sur chaque page affichée -->
			<?php echo $this->Html->script(array('jquery-3.3.1', 'bootstrap.min', 'scripts')); ?>
			<?php echo $this->fetch('script'); ?>
	</body>
</html>