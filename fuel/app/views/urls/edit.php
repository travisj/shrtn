<h2>Editing url</h2>

<?php echo render('urls/_form'); ?>

<?php echo Html::anchor('urls/view/'.$url->id, 'View'); ?> |
<?php echo Html::anchor('urls', 'Back'); ?>