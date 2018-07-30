<?php $filename = APP . 'webroot/files/' . 'CV_Youssef_Moudni.pdf'; ?>
<section class='resume'>
	<div class='row'>
		<div class='col-md-12'>
			<h1 class="ml11 titre_resume">
  			<span class="text-wrapper">
    			<span class="line line1"></span>
    		<span class="letters">Hello, Je suis Youssef Moudni</span>
  			</span>
			</h1>
			<p class='text_resume'>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin mollis mauris arcu, ac lobortis nunc fermentum nec. Nullam convallis sed neque blandit pretium. Etiam quam eros, bibendum et facilisis sed, ullamcorper vel dui. Aliquam at ipsum sit amet massa fermentum aliquam. Duis vulputate feugiat diam id ultrices. Aliquam sed leo maximus, laoreet magna sed, pellentesque eros. Nullam lacinia cursus dolor id lacinia. Fusce metus lectus, pulvinar non neque sit amet, ullamcorper sollicitudin nisi.
			Phasellus tempor nulla nisl, quis eleifend velit cursus quis. Etiam in nisi ut lacus hendrerit hendrerit a eu dui. Sed iaculis fringilla malesuada. Duis sed pharetra tellus.
			</p>
		</div>
	</div>
</section>
<section class='parcours'>
	<div class='row'>
		<div class="col-md-12 titre_parcours large-centered">
			<h1 class="ml6">
 			<span class="text-wrapper">
    			<span class="letters">Aujourd'hui développeur, mais avant ?</span>
  			</span>
			</h1>
		</div>
	</div>
	<div class='row experience'>
		<div class="col-xs-12 col-md-5">
		<h2 class='text-center'>Entrepreneur<h2>
		<?php echo $this->Html->image('entreprise.png', ['alt' => 'art_entreprise', 'class' => 'img-circle center-block']); ?>
		</div>
		<div class='col-xs-12 col-md-7'>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dolor ex, blandit non egestas id, sollicitudin nec odio. Etiam sit amet consectetur odio. Sed dapibus lorem vitae metus auctor gravida. Proin accumsan scelerisque erat sed aliquet. Praesent eget libero quis nulla ultrices dictum volutpat.</p>
		</div>
	</div>
	<div class='row experience'>
		<div class="col-xs-12 col-md-5">
		<h2 class='text-center'>Commercial<h2>
		<?php echo $this->Html->image('vente.png', ['alt' => 'art_vente', 'class' => 'img-circle center-block']); ?>
		</div>
		<div class='col-xs-12 col-md-7'>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dolor ex, blandit non egestas id, sollicitudin nec odio. Etiam sit amet consectetur odio. Sed dapibus lorem vitae metus auctor gravida. Proin accumsan scelerisque erat sed aliquet. Praesent eget libero quis nulla ultrices dictum volutpat.</p>
		</div>
	</div>
	<div class='row experience'>
		<div class="col-xs-12 col-md-5">
		<h2 class='text-center'>Educateur sportif<h2>
		<?php echo $this->Html->image('sport.png', ['alt' => 'art_sport', 'class' => 'img-circle center-block']); ?>
		</div>
		<div class='col-xs-12 col-md-7'>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dolor ex, blandit non egestas id, sollicitudin nec odio. Etiam sit amet consectetur odio. Sed dapibus lorem vitae metus auctor gravida. Proin accumsan scelerisque erat sed aliquet. Praesent eget libero quis nulla ultrices dictum volutpat.</p>
		</div>
	</div>
	<div class='row'>
		<div class='col-md-12 text-center telechargement'>
			<p>Et pas mal d'autres trucs, pour en savoir plus, mon C.V est disponible !<p>
			<?php echo $this->Html->link('DOWNLOAD', array('controller' => 'home', 'action' => 'sendFile', 'CV.pdf'), array('class' => 'btn btn-info', 'target' => '_blank'));
			?>
		</div>
	</div>
</section>