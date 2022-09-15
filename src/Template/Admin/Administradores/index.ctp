<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administrador[]|\Cake\Collection\CollectionInterface $administradores
 */
?>
<div class="col-md-12">
        <nav class="form-inline">
        <div class="form-group mb-2"><?= $this->Html->link(__('Novo Administrador'), ['action' => 'add'], ['class' => 'btn btn-success btn-fill']) ?></div>
            </nav>
    <h3><?= __('Administradores') ?></h3>
    <table class="table table-full-width">
        <thead>
            <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('login') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('created', 'Criado') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('updated', 'Atualizado') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                    <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($administradores as $administrador): ?>
            <tr>
                <td><?= $this->Number->format($administrador->id) ?></td>
                <td><?= h($administrador->nome) ?></td>
                <td><?= h($administrador->login) ?></td>
                <td><?= h($administrador->created) ?></td>
                <td><?= h($administrador->updated) ?></td>
                <td><?= h($administrador->status) ?></td>
                <td class="actions">
                    <?php //$this->Html->link(__('Visualizar'), ['action' => 'view', $administrador->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $administrador->id]) ?>
                    <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $administrador->id], ['confirm' => __('Você tem certeza que quer apagar o registro #{0}?', $administrador->id)]) ?>
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