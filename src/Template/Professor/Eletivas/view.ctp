<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Eletiva $eletiva
 */
?>
<div class="col-md-12">
	 <nav class="form-inline">
		<h4><?= __('Dados da eletiva') ?></h4>
        <div class="form-group mb-2">
            <?= $this->Html->link(__('Voltar'), ['controller' => 'Professores', 'action' => 'index'], ['class' => 'btn btn-primary btn-fill']) ?>
        </div>
	</nav> 
	<hr>
	<div class="">
		<h3>#<?= str_pad($eletiva->id, 5, '0', STR_PAD_LEFT) ?></h3>
		<table class="table">
			<tr>
				<th scope="row"><?= __('Titulo') ?></th>
				<td><?= h($eletiva->titulo) ?></td>
				<th scope="row"><?= __('Professor') ?></th>
				<td><?= h($eletiva->professor->nome) ?></td>
				<th scope="row"><?= __('Status') ?></th>
				<td><?= h($eletiva->status) ?></td>
				<th scope="row"><?= __('Vagas') ?></th>
				<td><?= $this->Number->format($eletiva->vagas) ?></td>
			</tr>
			<tr>
				<th scope="row"><?= __('Data Eletiva') ?></th>
				<td><?= h($eletiva->data_eletiva) ?></td>
				<th scope="row"><?= __('Criado') ?></th>
				<td><?= h($eletiva->created) ?></td>
				<th scope="row"><?= __('Atualizado') ?></th>
				<td><?= h($eletiva->updated) ?></td>
				<th></th>
				<td></td>
			</tr>
		</table>
		<div>
		<h4><?php //__('Descrição') ?></h4>
		<?php //$this->Text->autoParagraph(h($eletiva->descricao)); ?>
		</div>
			<div class="related">
			<h4><?= __('Inscrições efetuadas - '.count($eletiva->inscricoes).'') ?></h4>
			<?php if (!empty($eletiva->inscricoes)): ?>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th scope="col"><?= __('#') ?></th>
						<th scope="col"><?= __('Matrícula') ?></th>
						<th scope="col"><?= __('Aluno') ?></th>
						<th scope="col"><?= __('Data de inscrição') ?></th>
						
					</tr>
				</thead>
				<tbody>
				<?php foreach ($eletiva->inscricoes as $inscricoes): ?>
					<tr>
						<td><?= h($inscricoes->id) ?></td>
						<td><?= h($inscricoes->aluno->matricula) ?></td>
						<td><?= h($inscricoes->aluno->nome) ?></td>
						<td><?= h($inscricoes->created) ?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			<div class="text-center">
				<?= $this->Html->link(__('Gerar relação'), ['controller' => 'Relatorios', 'action' => 'eletivas_aluno', $eletiva->id], ['class' => 'btn btn-danger btn-fill', 'target' => '_blank']) ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>