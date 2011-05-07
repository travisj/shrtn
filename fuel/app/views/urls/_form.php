<?php echo Form::open(); ?>
	<p>
		<label for="key">Key:</label>
		<?php echo Form::input('key', Input::post('key', isset($url) ? $url->key : '')); ?>
	</p>
	<p>
		<label for="url">Url:</label>
		<?php echo Form::input('url', Input::post('url', isset($url) ? $url->url : '')); ?>
	</p>

	<div class="actions">
		<?php echo Form::submit(); ?>	</div>

<?php echo Form::close(); ?>