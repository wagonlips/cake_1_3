<?php
class Timecard extends AppModel {
	var $name = 'Timecard';
	var $displayField = 'job';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasOne = array(
		'Job' => array(
			'className' => 'Job',
			'foreignKey' => 'id'
		)
	);
}
?>
