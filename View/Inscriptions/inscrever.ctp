<div id="inscricao" title="Inscrição">
	<?php 
	
		
	
		/**
		 * Cria o Formulario
		 */
		echo $this->Form->create('Inscription',array(
			'url' => array('controller' => 'inscriptions', 'action' => 'inscrever')
		));
		
		echo $this->Html->tag('h1','Faça sua inscrição');
	?>

		<?php 
		
			/**
			 * Cria o input de nome
			 */
			echo $this->Form->input('nome',array(
				'class'=>'span9',
				'div' => array('class'=>'span9'),
				'label' => 'Nome',
				'placeholder' => 'Digite seu nome',
				'required' => true 
			));
			/**
			 * Cria o input de telefone
			 */
			echo $this->Form->input('telefone',array(
				'class'=>'span9',
				'div' => array('class'=>'span9'),
				'label' => 'Telefone',
				'placeholder' => '(ddd)9999-9999',
				'required' => true 
				
			));
			
			/**
			 * Cria o input de endereco
			 */
			echo $this->Form->input('endereco',array(
				'class'=>'span9',
				'div' => array('class'=>'span9'),
				'label' => 'Endereço',
				'placeholder' => 'Digite seu endereço',
				'required' => true 
			));
			
			/**
			 * Cria o input de email
			 */
			echo $this->Form->input('email',array(
				'class'=>'span9',
				'div' => array('class'=>'span9'),
				'label' => 'Email',
				'placeholder' => 'seuemail@dominio.com',
				'required' => true 
			));

			
			/**
			 * 
			 * Opcoes do submit
			 * @var array $opcoesSubmit 
			 */
			$opcoesSubmit = array(
			    'label' => 'Inscreva-se',
			    'value' => 'Inscreva-se',
			    //'div' => array('class'=>'span2'),
			    'class' => 'btnInscrevase',
			);
		
			/**
			 * Fecha o formulario e cria o botão submit
			 */
			echo $this->Form->end($opcoesSubmit);
		?>
	
</div>