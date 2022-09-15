<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inscricao[]|\Cake\Collection\CollectionInterface $inscricoes
 */
?>
<div class="col-md-12">
        <nav class="form-inline">
            <div class="form-group mb-2"><?= $this->Html->link(__('Nova Inscrição'), ['action' => 'add'], ['class' => 'btn btn-success btn-fill']) ?></div>
            <div class="form-group mb-2"><?= $this->Html->link(__('Listar Eletivas'), ['controller' => 'Eletivas', 'action' => 'index'], ['class' => 'btn btn-primary']) ?></div>
            <div class="form-group mb-2"><?= $this->Html->link(__('Nova Eletiva'), ['controller' => 'Eletivas', 'action' => 'add'], ['class' => 'btn btn-success']) ?></div>
        </nav>
    <h3><?= __('Inscrições') ?></h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aluno_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('eletiva_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created', 'Data de inscrição') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated', 'Atualizado') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($inscricoes as $inscricao): ?>
            <tr>
                <td><?= $this->Number->format($inscricao->id) ?></td>
                <td><?= $inscricao->has('aluno') ? $this->Html->link($inscricao->aluno->nome, ['controller' => 'Alunos', 'action' => 'view', $inscricao->aluno->id]) : '' ?></td>
                <td><?= $inscricao->has('eletiva') ? $this->Html->link($inscricao->eletiva->titulo, ['controller' => 'Eletivas', 'action' => 'view', $inscricao->eletiva->id]) : '' ?></td>
                <td><?= h($inscricao->created) ?></td>
                <td><?= h($inscricao->updated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $inscricao->id]) ?>
                    <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $inscricao->id], ['confirm' => __('Você tem certeza que quer apagar o registro #{0}?', $inscricao->id)]) ?>
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