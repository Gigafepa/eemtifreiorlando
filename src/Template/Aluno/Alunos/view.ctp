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
            <?= $this->Html->link(__('Editar Aluno'), ['action' => 'edit', $aluno->id], ['class' => 'btn btn-warning']) ?>
        </div>
        <div class="form-group mb-2">
            <?= $this->Form->postLink(__('Apagar Aluno'), ['action' => 'delete', $aluno->id], ['class' => 'btn btn-danger','confirm' => __('Você tem certeza que quer apagar o resgistro #{0}?', $aluno->id)]) ?>
        </div>
        <div class="form-group mb-2">
            <?= $this->Html->link(__('Listar Alunos'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
        </div>
        <div class="form-group mb-2">
            <?= $this->Html->link(__('Novo Aluno'), ['action' => 'add'], ['class' => 'btn btn-success']) ?>
                
            </div>
        <div class="form-group mb-2"><?= $this->Html->link(__('Listar Turmas'), ['controller' => 'Turmas', 'action' => 'index'], ['class' => 'btn btn-primary']) ?></div>
        <div class="form-group mb-2"><?= $this->Html->link(__('Novo Turma'), ['controller' => 'Turmas', 'action' => 'add'], ['class' => 'btn btn-success']) ?></div>
        <div class="form-group mb-2"><?= $this->Html->link(__('Listar Inscricoes'), ['controller' => 'Inscricoes', 'action' => 'index'], ['class' => 'btn btn-primary']) ?></div>
        <div class="form-group mb-2"><?= $this->Html->link(__('Novo Inscricao'), ['controller' => 'Inscricoes', 'action' => 'add'], ['class' => 'btn btn-success']) ?></div>
</nav>
<div class="alunos content">
    <h3><?= h($aluno->nome) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($aluno->nome) ?></td>
            <th scope="row"><?= __('Matricula') ?></th>
            <td><?= h($aluno->matricula) ?></td>
            <th scope="row"><?= __('Senha') ?></th>
            <td><?= h($aluno->senha) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Turma') ?></th>
            <td><?= $aluno->has('turma') ? $this->Html->link($aluno->turma->full_name, ['controller' => 'Turmas', 'action' => 'view', $aluno->turma->id]) : '' ?></td>
        
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($aluno->status) ?></td>
            <th scope="row"><?= __('Criado') ?></th>
            <td><?= h($aluno->created) ?></td>
            <th scope="row"><?= __('Atualizado') ?></th>
            <td><?= h($aluno->updated) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Inscricoes relacionados') ?></h4>
        <?php if (!empty($aluno->inscricoes)): ?>
        <table class="table table-full-width">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Aluno Id') ?></th>
                <th scope="col"><?= __('Eletiva Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Updated') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
            <?php foreach ($aluno->inscricoes as $inscricoes): ?>
            <tr>
                <td><?= h($inscricoes->id) ?></td>
                <td><?= h($inscricoes->aluno_id) ?></td>
                <td><?= h($inscricoes->eletiva_id) ?></td>
                <td><?= h($inscricoes->created) ?></td>
                <td><?= h($inscricoes->updated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Inscricoes', 'action' => 'view', $inscricoes->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Inscricoes', 'action' => 'edit', $inscricoes->id]) ?>
                    <?= $this->Form->postLink(__('Apagar'), ['controller' => 'Inscricoes', 'action' => 'delete', $inscricoes->id], ['confirm' => __('Você tem certeza que quer apagar o resgistro #{0}?', $inscricoes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
</div>