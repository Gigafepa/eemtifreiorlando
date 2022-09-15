<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno $aluno
 */
?>
<div class="col-md-12">
<nav class="form-inline">
        <h5><?= __('Ações') ?></h5>
        <div class="form-group mb-2">
            <?= $this->Form->postLink(
                __('Apagar'),
                ['action' => 'delete', $aluno->id],
                ['class' => 'btn btn-danger','confirm' => __('Você tem certeza que quer apagar o resgistro #{0}?', $aluno->id)]
            )
        ?>
        </div>
        <div class="form-group mb-2">
            <?= $this->Html->link(__('Listar Alunos'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
        </div>
        <div class="form-group mb-2">
            <?= $this->Html->link(__('Listar Turmas'), ['controller' => 'Turmas', 'action' => 'index'], ['class' => 'btn btn-primary']) ?>
        </div>
        <div class="form-group mb-2">
            <?= $this->Html->link(__('Novo Turma'), ['controller' => 'Turmas', 'action' => 'add'], ['class' => 'btn btn-success']) ?>
        </div>
        <div class="form-group mb-2">
            <?= $this->Html->link(__('Listar Inscricoes'), ['controller' => 'Inscricoes', 'action' => 'index'], ['class' => 'btn btn-primary']) ?>
        </div>
        <div class="form-group mb-2">
            <?= $this->Html->link(__('Novo Inscricao'), ['controller' => 'Inscricoes', 'action' => 'add'], ['class' => 'btn btn-success']) ?>
        </div>
</nav>
<div class="form">
    <?= $this->Form->create($aluno) ?>
        <div class="form-group">
            <h5><?= __('Edit Aluno') ?></h5>
        </div>
        
            <div class="form-group">
                <?= $this->Form->control('nome', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('matricula', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('senha', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('turma_id', ['class' => 'form-control','options' => $turmas]) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('img_src', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('status', ['class' => 'form-control']) ?>
            </div>
    <div class="form-group">
        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
        <?= $this->Form->button(__('Cancelar'), ['class' => 'btn btn-danger', 'type' => 'reset']) ?>
    </div>
    <?= $this->Form->end() ?>
</div>
</div>