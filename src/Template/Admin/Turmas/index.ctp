<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Turma[]|\Cake\Collection\CollectionInterface $turmas
 */
?>
<div class="col-md-12">
        <nav class="form-inline">
        <div class="form-group mb-2"><?= $this->Html->link(__('Novo Turma'), ['action' => 'add'], ['class' => 'btn btn-success btn-fill']) ?></div>
                        <div class="form-group mb-2"><?= $this->Html->link(__('Listar Alunos'), ['controller' => 'Alunos', 'action' => 'index'], ['class' => 'btn btn-primary']) ?></div>
        <div class="form-group mb-2"><?= $this->Html->link(__('Novo Aluno'), ['controller' => 'Alunos', 'action' => 'add'], ['class' => 'btn btn-success']) ?></div>
                    </nav>
    <h3><?= __('Turmas') ?></h3>
    <table class="table table-full-width">
        <thead>
            <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('created', 'Criado') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('updated', 'Atualizado') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                    <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($turmas as $turma): ?>
            <tr>
                <td><?= $this->Number->format($turma->id) ?></td>
                <td><?= h($turma->full_name) ?></td>
                <td><?= h($turma->created) ?></td>
                <td><?= h($turma->updated) ?></td>
                <td><?= h($turma->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $turma->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $turma->id]) ?>
                    <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $turma->id], ['confirm' => __('Você tem certeza que quer apagar o registro #{0}?', $turma->id)]) ?>
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