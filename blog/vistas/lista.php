
<?php $titulo = "Noticias de superheroes y demás" ?>

<?php ob_start() ?>
	<h1>Noticias</h1>
	<ul>
		<?php foreach($entradas as $entrada): ?>
		<li>
			<a href="/blog/detalle.php?id=<?= $entrada['id'] ?>">
				<?= $entrada['titulo'] ?>
			</a>
		</li>
		<?php endforeach ?>
	</ul>
<?php $contenido = ob_get_clean() ?>

<?php include 'plantilla.php' ?>