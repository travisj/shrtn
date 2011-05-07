<p>
	<strong>Key:</strong>
	<?php echo $url->key; ?></p>
<p>
	<strong>Url:</strong>
	<?php echo $url->url; ?></p>

<?php echo Html::anchor('urls/edit/'.$url->id, 'Edit'); ?> | 
<?php echo Html::anchor('urls', 'Back'); ?>