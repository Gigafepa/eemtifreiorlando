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
            <?= $this->Html->link(__('Voltar'), ['action' => 'index'], ['class' => 'btn btn-primary btn-fill']) ?>
        </div>
        <div class="form-group mb-2">
            <?= $this->Html->link(__('Editar Turma'), ['action' => 'edit', $turma->id], ['class' => 'btn btn-warning btn-fill']) ?>
        </div>
        <div class="form-group mb-2">
            <?= $this->Form->postLink(__('Apagar Turma'), ['action' => 'delete', $turma->id], ['class' => 'btn btn-danger btn-fill','confirm' => __('Você tem certeza que quer apagar o registro #{0}?', $turma->id)]) ?>
        </div>
        <div class="form-group mb-2">
            <?= $this->Html->link(__('Nova Turma'), ['action' => 'add'], ['class' => 'btn btn-success btn-fill']) ?>
        </div>
        <div class="form-group mb-2"><?= $this->Html->link(__('Novo Aluno'), ['controller' => 'Alunos', 'action' => 'add'], ['class' => 'btn btn-success']) ?></div>
    </nav>
    <hr>
    <div class="turmas content">
        <h3><?= h($turma->full_name) ?></h3>
        <table class="table">
            <tr>
                <th scope="row"><?= __('Nome') ?></th>
                <td><?= h($turma->nome) ?></td>
                <th scope="row"><?= __('Status') ?></th>
                <td><?= h($turma->status) ?></td>
                <th scope="row"><?= __('Série') ?></th>
                <td><?= $this->Number->format($turma->serie) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Criado') ?></th>
                <td><?= h($turma->created) ?></td>
                <th scope="row"><?= __('Atualizado') ?></th>
                <td><?= h($turma->updated) ?></td>
                <td></td><td></td>
            </tr>
        </table>
            <div class="related">
            <?php if (!empty($turma->alunos)): ?>
            <h4><?= __('Alunos da turma - '.count($turma->alunos)) ?></h4>
            <table class="table table-bordered">
                <tr>
                        <th scope="col"><?= __('N°') ?></th>
                        <th scope="col"><?= __('Nome') ?></th>
                        <th scope="col"><?= __('Matricula') ?></th>
                        <th scope="col"><?= __('Criado') ?></th>
                        <th scope="col"><?= __('Atualizado') ?></th>
                        <th scope="col"><?= __('Status') ?></th>
                        <th scope="col" class="actions"><?= __('Ações') ?></th>
                </tr>
                <?php $key = 1; foreach ($turma->alunos as $alunos): ?>
                <tr>
                        <td><?= h($key) ?></td>
                        <td><?= h($alunos->nome) ?></td>
                        <td><?= h($alunos->matricula) ?></td>
                        <td><?= h($alunos->created) ?></td>
                        <td><?= h($alunos->updated) ?></td>
                        <td><?= h($alunos->status) ?></td>
                            <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['controller' => 'Alunos', 'action' => 'view', $alunos->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['controller' => 'Alunos', 'action' => 'edit', $alunos->id]) ?>
                        <?= $this->Form->postLink(__('Apagar'), ['controller' => 'Alunos', 'action' => 'delete', $alunos->id], ['confirm' => __('Você tem certeza que quer apagar o registro #{0}?', $alunos->id)]) ?>
                    </td>
                </tr>
                <?php $key++; endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
        </div>
</div>