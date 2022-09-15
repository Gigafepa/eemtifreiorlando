<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inscricao $inscricao
 */
?>
<div class="col-md-12">
    <nav class="form-inline">
        <h5><?= __('Ações') ?></h5>
        <div class="form-group mb-2">
            <?= $this->Html->link(__('Voltar'), ['action' => 'index'], ['class' => 'btn btn-primary btn-fill']) ?>
        </div>
        <div class="form-group mb-2">
            <?= $this->Html->link(__('Editar Inscricao'), ['action' => 'edit', $inscricao->id], ['class' => 'btn btn-warning btn-fill']) ?>
        </div>
        <div class="form-group mb-2">
            <?= $this->Form->postLink(__('Apagar Inscricao'), ['action' => 'delete', $inscricao->id], ['class' => 'btn btn-danger btn-fill','confirm' => __('Você tem certeza que quer apagar o registro #{0}?', $inscricao->id)]) ?>
        </div>
        <div class="form-group mb-2">
            <?= $this->Html->link(__('Novo Inscricao'), ['action' => 'add'], ['class' => 'btn btn-success btn-fill']) ?>
        </div>
        <div class="form-group mb-2"><?= $this->Html->link(__('Listar Alunos'), ['controller' => 'Alunos', 'action' => 'index'], ['class' => 'btn btn-primary']) ?></div>
        <div class="form-group mb-2"><?= $this->Html->link(__('Novo Aluno'), ['controller' => 'Alunos', 'action' => 'add'], ['class' => 'btn btn-success']) ?></div>
                    <div class="form-group mb-2"><?= $this->Html->link(__('Listar Eletivas'), ['controller' => 'Eletivas', 'action' => 'index'], ['class' => 'btn btn-primary']) ?></div>
        <div class="form-group mb-2"><?= $this->Html->link(__('Novo Eletiva'), ['controller' => 'Eletivas', 'action' => 'add'], ['class' => 'btn btn-success']) ?></div>
                                </nav>
    <hr>
    <div class="inscricoes content">
        <h3><?= h($inscricao->id) ?></h3>
        <table class="vertical-table">
                            <tr>
                <th scope="row"><?= __('Aluno') ?></th>
                <td><?= $inscricao->has('aluno') ? $this->Html->link($inscricao->aluno->id, ['controller' => 'Alunos', 'action' => 'view', $inscricao->aluno->id]) : '' ?></td>
            </tr>
                            <tr>
                <th scope="row"><?= __('Eletiva') ?></th>
                <td><?= $inscricao->has('eletiva') ? $this->Html->link($inscricao->eletiva->id, ['controller' => 'Eletivas', 'action' => 'view', $inscricao->eletiva->id]) : '' ?></td>
            </tr>
                                    <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($inscricao->id) ?></td>
            </tr>
                            <tr>
                <th scope="row"><?= __('Created') ?></th>
                <td><?= h($inscricao->created) ?></td>
            </tr>
                <tr>
                <th scope="row"><?= __('Updated') ?></th>
                <td><?= h($inscricao->updated) ?></td>
            </tr>
                    </table>
                </div>
</div>