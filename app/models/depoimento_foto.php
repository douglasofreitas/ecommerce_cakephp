<?php
class DepoimentoFoto extends AppModel {
	var $name = 'DepoimentoFoto';
	var $order = array("DepoimentoFoto.id" => "asc");
	var $validate = array(
		'depoimento_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Depoimento' => array(
			'className' => 'Depoimento',
			'foreignKey' => 'depoimento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>