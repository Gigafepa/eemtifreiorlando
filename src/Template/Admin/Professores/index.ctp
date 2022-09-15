<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno[]|\Cake\Collection\CollectionInterface $alunos
 */
?>
<div class="col-md-12">
    <nav class="form-inline">
        <div class="form-group mb-2"><?= $this->Html->link(__('Novo Professor'), ['action' => 'add'], ['class' => 'btn btn-success btn-fill']) ?></div>
        
    </nav>
    <h3><?= __('Professores') ?></h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('senha') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('cpf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created', 'Criado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated', 'Atualizado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($professores as $professores): ?>
            <tr>
                <td><?= $this->Number->format($professores->id) ?></td>
                <td><?= h($professores->nome) ?></td>
                <!-- <td><?= h($professores->senha) ?></td> -->
                <td><?= h($professores->cpf) ?></td>
                <td><?= h($professores->created) ?></td>
                <td><?= h($professores->updated) ?></td>
                <td><?= h($professores->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $professores->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $professores->id]) ?>
                    <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $professores->id], ['confirm' => __('Você tem certeza que quer apagar o registro #{0}?', $professores->id)]) ?>
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