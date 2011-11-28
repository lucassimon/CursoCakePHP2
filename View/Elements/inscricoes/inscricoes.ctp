<div id="inscricao" title="Inscrição">
	<?php 
		/**
		 * Cria o Formulario
		 */
		echo $this->Form->create('Inscription',array(
			'url' => array('controller' => 'inscriptions', 'action' => 'inscrever')
		));
	?>
	
	<div  class="row">
		<?php 
		
			/**
			 * Cria o input de nome
			 */
			echo $this->Form->input('nome',array(
				'class'=>'span3',
				'div' => array('class'=>'span3'),
				'label' => 'Nome*',
				'placeholder' => 'Digite seu nome',
				'required' => true 
			));
			/**
			 * Cria o input de telefone
			 */
			echo $this->Form->input('telefone',array(
				'class'=>'span3',
				'div' => array('class'=>'span3'),
				'label' => 'Telefone*',
				'placeholder' => '(ddd)9999-9999',
				'required' => true 
				
			));
			
			/**
			 * Cria o input de endereco
			 */
			echo $this->Form->input('endereco',array(
				'class'=>'span3',
				'div' => array('class'=>'span3'),
				'label' => 'Endereço*',
				'placeholder' => 'Digite seu endereço',
				'required' => true 
			));
			
			/**
			 * Cria o input de email
			 */
			echo $this->Form->input('email',array(
				'class'=>'span3',
				'div' => array('class'=>'span3'),
				'label' => 'Email*',
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
			    'div' => array('class'=>'span2'),
			    'class' => 'btnInscrevase',
			);
		
			/**
			 * Fecha o formulario e cria o botão submit
			 */
			echo $this->Form->end($opcoesSubmit);
		?>
		
	</div>
</div>