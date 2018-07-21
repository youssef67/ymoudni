<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $title; ?></title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Muli:400,600,800" rel="stylesheet">
		<?php echo $this->Html->css(array('bootstrap.min', 'forms')); ?>
		<?php echo $this->fetch('css'); ?>
	</head>
	<!-- Si vous voulez afficher une sorte de menu pour toutes vos vues, mettez
	le ici -->
	<body>
		<div class='container-fluid'>
		<!-- Voilà l'endroit ou je souhaite que mes vues soient affichées -->
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<!-- Ajoute un footer sur chaque page affichée -->
		<div id="footer">...</div>
			<?php echo $this->Html->script(array('jquery-3.3.1', 'bootstrap.min', 'scripts')); ?>
			<?php echo $this->fetch('script'); ?>
	</body>
</html>