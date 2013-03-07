<?php

class FuncionariosController extends AppController{
	public $helpers = array ('Html','Form');
    public $name = 'Funcionarios';
     public $components = array('Session');

    public function index() {
        $this->set('funcionarios', $this->Funcionario->find('all'));
    }

    public function view($id = null) {
        $this->Funcionario->id = $id;
        $this->set('funcionario', $this->Funcionario->read());
    }

    public function add() {
        if ($this->request->is('post')) {
            if ($this->Funcionario->save($this->request->data)) {
                $this->Session->setFlash('Funcionário cadastrado com sucesso!');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    function delete($id) {
    if (!$this->request->is('post')) {
        throw new MethodNotAllowedException();
    }
    if ($this->Funcionario->delete($id)) {
        $this->Session->setFlash('O funcionário de id ' . $id . ' foi deletado');
        $this->redirect(array('action' => 'index'));
    }
}

    function edit($id = null) {
    $this->Funcionario->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->Funcionario->read();
    } else {
        if ($this->Funcionario->save($this->request->data)) {
            $this->Session->setFlash('O cadastro do funcionário foi alterado com sucesso!');
            $this->redirect(array('action' => 'index'));
        }
    }
}

}