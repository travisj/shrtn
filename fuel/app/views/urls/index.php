<h2>Listing urls</h2>

<table>
	<tr>
		<th>Key</th>
		<th>Url</th>
		<th></th>
		<th></th>
		<th></th>
	</tr>

	<?php foreach ($urls as $url): ?>	<tr>

		<td><?php echo $url->key; ?></td>
		<td><?php echo $url->url; ?></td>
		<td><?php echo Html::anchor('urls/view/'.$url->id, 'View'); ?></td>
		<td><?php echo Html::anchor('urls/edit/'.$url->id, 'Edit'); ?></td>
		<td><?php echo Html::anchor('urls/delete/'.$url->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?></td>
	</tr>
	<?php endforeach; ?></table>

<br />

<?php echo Html::anchor('urls/create', 'Add new Url'); ?>