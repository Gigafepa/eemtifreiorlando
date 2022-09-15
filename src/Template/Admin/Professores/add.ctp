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
            <?= $this->Html->link(__('Listar Professores'), ['action' => 'index'], ['class' => 'btn btn-primary btn-fill']) ?>
        </div>
        <div class="form-group mb-2">
            <?= $this->Html->link(__('Listar Eletivas'), ['controller' => 'Eletivas', 'action' => 'index'], ['class' => 'btn btn-primary']) ?>
        </div>
        <div class="form-group mb-2">
            <?= $this->Html->link(__('Novo Eletiva'), ['controller' => 'Eletivas', 'action' => 'add'], ['class' => 'btn btn-success']) ?>
        </div>
</nav>
<hr>
<div class="form">
    <?= $this->Form->create($professor) ?>
        <div class="form-group">
            <h5><?= __('Adicionar Professor') ?></h5>
        </div>
            <div class="form-group">
                <?= $this->Form->control('nome', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('cpf', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('senha', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('status', ['class' => 'form-control', 'type' => 'select', 'options' => ['Ativo' => 'Ativo', 'Desativo' => 'Desativo']]) ?>
            </div>
    <div class="form-group text-center">
        <?= $this->Form->button(__('Submeter'), ['class' => 'btn btn-success btn-fill']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-danger btn-fill']) ?>
    </div>
    <?= $this->Form->end() ?>
</div>
</div>