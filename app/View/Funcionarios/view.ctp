<p>Nome: <?php echo $funcionario['Funcionario']['nome']?></p>

<p>Email: <?php echo $funcionario['Funcionario']['email']?></p>

<p>Sexo: <?php echo $funcionario['Funcionario']['sexo'] == 'm' ? 'Masculino' : 'Feminino'?></p>

<p>Data de cadastro: <?php echo $this->Time->format('d/m/Y', $funcionario['Funcionario']['created'])?></p>