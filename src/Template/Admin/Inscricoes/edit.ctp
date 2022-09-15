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
            <?= $this->Form->postLink(__('Apagar'),['action' => 'delete', $inscricao->id],['class' => 'btn btn-danger btn-fill','confirm' => __('Você tem certeza que quer apagar o registro #{0}?', $inscricao->id)]) ?>
        </div>
        <div class="form-group mb-2">
            <?= $this->Html->link(__('Listar Inscrições'), ['action' => 'index'], ['class' => 'btn btn-primary btn-fill']) ?>
        </div>
        <div class="form-group mb-2">
            <?= $this->Html->link(__('Novo Eletiva'), ['controller' => 'Eletivas', 'action' => 'add'], ['class' => 'btn btn-success']) ?>
        </div>
</nav>
<hr>
<div class="form">
    <?= $this->Form->create($inscricao) ?>
        <div class="form-group">
            <h5><?= __('Editar Inscrição') ?></h5>
        </div>
            <div class="form-group">
                <?= $this->Form->control('aluno_id', ['class' => 'form-control','options' => $alunos]) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('eletiva_id', ['class' => 'form-control','options' => $eletivas]) ?>
            </div>
    <div class="form-group text-center">
        <?= $this->Form->button(__('Submeter'), ['class' => 'btn btn-success btn-fill']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-danger btn-fill']) ?>
    </div>
    <?= $this->Form->end() ?>
</div>
</div>