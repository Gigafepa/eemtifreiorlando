<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Professor $professor
 */
?>
<div class="col-md-12">
    <nav class="form-inline">
        <h5><?= __('Ações') ?></h5>
        <div class="form-group mb-2">
            <?= $this->Html->link(__('Voltar'), ['action' => 'index'], ['class' => 'btn btn-primary btn-fill']) ?>
        </div>
        <div class="form-group mb-2">
            <?= $this->Html->link(__('Editar Professor'), ['action' => 'edit', $professor->id], ['class' => 'btn btn-warning btn-fill']) ?>
        </div>
        <div class="form-group mb-2">
            <?= $this->Form->postLink(__('Apagar Professor'), ['action' => 'delete', $professor->id], ['class' => 'btn btn-danger btn-fill','confirm' => __('Você tem certeza que quer apagar o registro #{0}?', $professor->id)]) ?>
        </div>
    <hr>
    <div class="professores content">
        <h3>#<?= str_pad($professor->id, 5, '0', STR_PAD_LEFT) ?></h3>
        <table class="table">
            <tr>
                <th scope="row"><?= __('Nome') ?></th>
                <td><?= h($professor->nome) ?></td>
                <th scope="row"><?= __('Cpf') ?></th>
                <td><?= h($professor->cpf) ?></td>
                <th scope="row"><?= __('Status') ?></th>
                <td><?= h($professor->status) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Criado') ?></th>
                <td><?= h($professor->created) ?></td>
                <th scope="row"><?= __('Atualizado') ?></th>
                <td><?= h($professor->updated) ?></td>
                <td></td>
                <td></td>
            </tr>
        </table>
            <div class="related">
            <?php if (!empty($professor->eletivas)): ?>
            <h4><?= __('Eletivas relacionados ao professor') ?></h4>
            <table class="table table-bordered">
                <tr>
                        <th scope="col"><?= __('#') ?></th>
                        <th scope="col"><?= __('Título') ?></th>
                        <th scope="col"><?= __('Vagas') ?></th>
                        <th scope="col"><?= __('Status') ?></th>
                        <th scope="col"><?= __('Data Eletiva') ?></th>
                        <th scope="col"><?= __('Criado') ?></th>
                        <th scope="col"><?= __('Atualizado') ?></th>
                        <th scope="col" class="actions"><?= __('Ações') ?></th>
                </tr>
                <?php foreach ($professor->eletivas as $eletivas): ?>
                <tr>
                        <td><?= str_pad($eletivas->id, 5, '0', STR_PAD_LEFT) ?></td>
                        <td><?= h($eletivas->titulo) ?></td>
                        <td><?= h($eletivas->vagas) ?></td>
                        <td><?= h($eletivas->status) ?></td>
                        <td><?= h($eletivas->data_eletiva) ?></td>
                        <td><?= h($eletivas->created) ?></td>
                        <td><?= h($eletivas->updated) ?></td>
                            <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['controller' => 'Eletivas', 'action' => 'view', $eletivas->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['controller' => 'Eletivas', 'action' => 'edit', $eletivas->id]) ?>
                        <?= $this->Form->postLink(__('Apagar'), ['controller' => 'Eletivas', 'action' => 'delete', $eletivas->id], ['confirm' => __('Você tem certeza que quer apagar o registro #{0}?', $eletivas->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
        </div>
</div>