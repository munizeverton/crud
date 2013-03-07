<h1>Editar Funcionário</h1>
<?php
    echo $this->Form->create('Funcionario', array('action' => 'edit'));
    echo $this->Form->input('nome');
    echo $this->Form->input('email');
    echo $this->Form->input('sexo', array('options' => array('m' => 'Masculino', 'f' => 'Feminino')));
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Salvar');