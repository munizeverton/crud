<p>Nome: <?php echo $funcionario['Funcionario']['nome']?></p>

<p>Email: <?php echo $funcionario['Funcionario']['email']?></p>

<p>Sexo: <?php echo $funcionario['Funcionario']['sexo'] == 'm' ? 'Masculino' : 'Feminino'?></p>

<p>Data de cadastro: <?php echo date('d/m/Y H:i', strtotime(date('Y-m-d h:i:s', $funcionario['Funcionario']['created']->sec))); ?></p>