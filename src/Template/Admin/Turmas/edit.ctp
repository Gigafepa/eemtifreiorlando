<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Turma $turma
 */
?>
<div class="col-md-12">
<nav class="form-inline">
        <h5><?= __('Ações') ?></h5>
        <div class="form-group mb-2">
            <?= $this->Form->postLink(__('Apagar'),['action' => 'delete', $turma->id],['class' => 'btn btn-danger btn-fill','confirm' => __('Você tem certeza que quer apagar o registro #{0}?', $turma->id)]) ?>
        </div>
        <div class="form-group mb-2">
            <?= $this->Html->link(__('Listar Turmas'), ['action' => 'index'], ['class' => 'btn btn-primary btn-fill']) ?>
        </div>
        <div class="form-group mb-2">
            <?= $this->Html->link(__('Novo Aluno'), ['controller' => 'Alunos', 'action' => 'add'], ['class' => 'btn btn-success']) ?>
        </div>
</nav>
<hr>
<div class="form">
    <?= $this->Form->create($turma) ?>
        <div class="form-group">
            <h5><?= __('Editar Turma') ?></h5>
        </div>
            <div class="form-group">
                <?= $this->Form->control('nome', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('serie', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('status', ['class' => 'form-control']) ?>
            </div>
    <div class="form-group text-center">
        <?= $this->Form->button(__('Submeter'), ['class' => 'btn btn-success btn-fill']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-danger btn-fill']) ?>
    </div>
    <?= $this->Form->end() ?>
</div>
</div>