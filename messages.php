<?php if (count($messages) > 0): ?>
	<div class="error">
		<?php foreach ($messages as $message): ?> 
			<p><?php echo $message; ?></p>
		<?php endforeach ?>	
	</div>
<?php endif ?>		