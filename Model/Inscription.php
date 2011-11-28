<?php
App::uses('AppModel', 'Model');
/**
 * Inscription Model
 *
 */
class Inscription extends AppModel {
	/**
	 * Display field
	 *
	 * @var string
	 */
	public $displayField = 'nome';
	/**
	 * Validation rules
	 *
	 * @var array
	 */
	
	/**
	 * 
	 * Ordenar campo nome na busca
	 * @var array
	 */
	public $order = array('nome' => 'ASC');
	
	/**
	 * 
	 * Cachear query na home
	 * @var unknown_type
	 */
	public $cacheQueries = true;
	
	/**
	 * 
	 * Validates
	 * @var array
	 */
	public $validate = array(
		'nome' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Digite seu nome.',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Digite um email válido.',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'unique' => array(
				'rule'    => 'isUnique',
        		'message' => 'Este email já existe em nossa base de dados. Informe outro email.',
        		'required' => true,
			)
		),
		'telefone' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Digite um telefone.',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'endereco' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Digite um endereço.',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
