<div class="row">
	<div class="col-md-12">
		<h3 class="page-header"><?= $video->titulo; ?></h3>
	</div>
</div>
<div class="row wpn-social-buttons">
    <div class="col-md-12">
        <?= wpn_widget('addthisbuttons'); ?>
    </div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="embed-responsive embed-responsive-16by9">
			<iframe src="//www.youtube.com/embed/<?= $video->link; ?>" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<h5>Descrição</h5>
		<p><?= $video->descricao; ?></p>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<h3>Comentários</h3>
        <?= wpn_widget('facebookcomments', array('link' => site_url('video/'.$video->link))); ?>
	</div>
</div>