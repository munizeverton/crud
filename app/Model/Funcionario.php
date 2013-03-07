<?php

class Funcionario extends AppModel{
	public $name = "Funcionario";

	 public $validate = array(
        'nome' => array(
            'rule' => 'notEmpty',
            'message' => 'Você precisa informar nome'
        ),
        'email' => array(
            'rule' => 'notEmpty',
            'message' => 'Você precisa informar o email'
        )
    );
}