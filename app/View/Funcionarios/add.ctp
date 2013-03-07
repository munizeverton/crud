<h1>Cadastrar Funcionário</h1>
<?php
echo $this->Form->create('Funcionario');
echo $this->Form->input('nome', array('required' => false));
echo $this->Form->input('email', array('required' => false));
echo $this->Form->input('sexo', array('options' => array('m' => 'Masculino', 'f' => 'Feminino')));
echo $this->Form->end('Salvar');