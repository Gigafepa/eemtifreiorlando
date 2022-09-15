<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Eletiva[]|\Cake\Collection\CollectionInterface $eletivas
 */
?>
<div class="col-md-12">
        <nav class="form-inline">
            <div class="form-group mb-2"><?= $this->Html->link(__('Nova Eletiva'), ['action' => 'add'], ['class' => 'btn btn-success btn-fill']) ?></div>
            <div class="form-group mb-2"><?= $this->Html->link(__('Listar Inscrições'), ['controller' => 'Inscricoes', 'action' => 'index'], ['class' => 'btn btn-primary']) ?></div>
        </nav>
    <h3><?= __('Eletivas') ?></h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('created', 'Criado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('professor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vagas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_eletiva') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated', 'Atualizado') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($eletivas as $eletiva): ?>
            <tr>
                <td><?= h($eletiva->created) ?></td>
                <td><?= h($eletiva->titulo) ?></td>
                <td><?= $eletiva->has('professor') ? $this->Html->link($eletiva->professor->nome, ['controller' => 'Professores', 'action' => 'view', $eletiva->professor->id]) : '' ?></td>
                <td><?= $this->Number->format($eletiva->vagas) ?></td>
                <td><?= h($eletiva->status) ?></td>
                <td><?= h($eletiva->data_eletiva) ?></td>
                <td><?= h($eletiva->updated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $eletiva->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $eletiva->id]) ?>
                    <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $eletiva->id], ['confirm' => __('Você tem certeza que quer apagar o registro #{0}?', $eletiva->id)]) ?>
                    <?= $eletiva->status == 'Aberto' ? $this->Form->postLink(__('Fechar inscrições'), ['action' => 'fechar', $eletiva->id], ['confirm' => __('Você tem certeza que quer fechar a eletiva #{0}?', $eletiva->id)]) : '' ?>
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