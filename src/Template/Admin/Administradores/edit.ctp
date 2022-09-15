<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administrador $administrador
 */
?>
<div class="col-md-12">
<nav class="form-inline">
        <h5><?= __('Ações') ?></h5>
        <div class="form-group mb-2">
            <?= $this->Form->postLink(__('Apagar'),['action' => 'delete', $administrador->id],['class' => 'btn btn-danger btn-fill','confirm' => __('Você tem certeza que quer apagar o registro #{0}?', $administrador->id)]) ?>
        </div>
        <div class="form-group mb-2">
            <?= $this->Html->link(__('Listar Administradores'), ['action' => 'index'], ['class' => 'btn btn-primary btn-fill']) ?>
        </div>
</nav>
<hr>
<div class="form">
    <?= $this->Form->create($administrador) ?>
        <div class="form-group">
            <h5><?= __('Edit Administrador') ?></h5>
        </div>
            <div class="form-group">
                <?= $this->Form->control('nome', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('login', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('senha', ['class' => 'form-control']) ?>
                <small>A senha é salva criptografada. Para alterá-la apenas apague e digite a nova senha</small>
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