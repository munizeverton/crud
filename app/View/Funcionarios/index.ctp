<h1>Funcionários Cadastrados</h1>
<table>
    <tr>
        <th></th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ação</th>
    </tr>


    <?php foreach ($funcionarios as $funcionario){ ?>
    <tr>
        <td><?php echo $funcionario['Funcionario']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($funcionario['Funcionario']['nome'], array('action' => 'view', $funcionario['Funcionario']['id']));?>
                </td>
                <td><?php echo $funcionario['Funcionario']['email']; ?></td>
                <td>
            <?php echo $this->Form->postLink(
                'Apagar',
                array('action' => 'delete', $funcionario['Funcionario']['id']),
                array('confirm' => 'Você tem certeza?')
            )?>
            <?php echo $this->Html->link('Editar', array('action' => 'edit', $funcionario['Funcionario']['id']));?>
        </td>
        
    </tr>
    <?php }; ?>

</table>
<?php echo $this->Html->link('Cadastrar Funcionário', array('controller' => 'funcionarios', 'action' => 'add')); ?>