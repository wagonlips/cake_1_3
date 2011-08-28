<?php
class Job extends AppModel {
	var $name = 'Job';
	var $displayField = 'job';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Timecards' => array(
			'className' => 'Timecards',
			'foreignKey' => 'id'
		)
	);
}
?>
