<?php
$this->breadcrumbs=array(
	'Statuses',
);

$this->menu=array(
	array('label'=>'Create Status','url'=>array('create')),
    array('label'=>'Manage Status(advance mode) ','url'=>array('adminAdv')),
);
?>

<h1>Statuses</h1>

<?php $this->widget('zii.widgets.CListView',array(
     'id'=>'status-list',
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
