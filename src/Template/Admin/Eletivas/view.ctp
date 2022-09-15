<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Eletiva $eletiva
 */
?>
<div class="col-md-12">
	 <nav class="form-inline">
		<h5><?= __('Ações') ?></h5>
		<div class="form-group mb-2">
			<button class="btn btn-primary btn-fill" onclick="javascript: window.history.back()">Voltar</button>
		</div>
		<div class="form-group mb-2">
			<?= $this->Html->link(__('Editar Eletiva'), ['action' => 'edit', $eletiva->id], ['class' => 'btn btn-warning btn-fill']) ?>
		</div>
		<div class="form-group mb-2">
			<?= $this->Form->postLink(__('Apagar Eletiva'), ['action' => 'delete', $eletiva->id], ['class' => 'btn btn-danger btn-fill','confirm' => __('Você tem certeza que quer apagar o registro #{0}?', $eletiva->id)]) ?>
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
				<td><?= $eletiva->has('professor') ? $this->Html->link($eletiva->professor->nome, ['controller' => 'Professores', 'action' => 'view', $eletiva->professor->id]) : '' ?></td>
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
						<th scope="col" class="actions"><?= __('Ações') ?></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($eletiva->inscricoes as $inscricoes): ?>
					<tr>
						<td><?= h($inscricoes->id) ?></td>
						<td><?= h($inscricoes->aluno->matricula) ?></td>
						<td><?= h($inscricoes->aluno->nome) ?></td>
						<td><?= h($inscricoes->created) ?></td>
						<td class="actions">
							<?= $this->Form->postLink(__('Remover inscrição'), ['controller' => 'Inscricoes', 'action' => 'delete', $inscricoes->id], ['confirm' => __('Você tem certeza que quer remover a inscrição #{0}?', $inscricoes->id)]) ?>
						</td>
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