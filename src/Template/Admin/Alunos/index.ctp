<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno[]|\Cake\Collection\CollectionInterface $alunos
 */
?>
<div class="col-md-12">
    <nav class="form-inline">
        <div class="form-group mb-2"><?= $this->Html->link(__('Novo Aluno'), ['action' => 'add'], ['class' => 'btn btn-success btn-fill']) ?></div>
        <div class="form-group mb-2"><?= $this->Html->link(__('Listar Turmas'), ['controller' => 'Turmas', 'action' => 'index'], ['class' => 'btn btn-primary']) ?></div>
    </nav>
    <h3><?= __('Alunos') ?></h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('matricula') ?></th>
                <th scope="col"><?= $this->Paginator->sort('turma_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created', 'Criado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated', 'Atualizado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alunos as $aluno): ?>
            <tr>
                <td><?= $this->Number->format($aluno->id) ?></td>
                <td><?= h($aluno->nome) ?></td>
                <td><?= h($aluno->matricula) ?></td>
                <td><?= $aluno->has('turma') ? $this->Html->link($aluno->turma->full_name, ['controller' => 'Turmas', 'action' => 'view', $aluno->turma->id]) : '' ?></td>
                <td><?= h($aluno->created) ?></td>
                <td><?= h($aluno->updated) ?></td>
                <td><?= h($aluno->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $aluno->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $aluno->id]) ?>
                    <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $aluno->id], ['confirm' => __('Você tem certeza que quer apagar o registro #{0}?', $aluno->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} no total')]) ?></p>
    </div>
</div>