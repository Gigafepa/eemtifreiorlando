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
            <?= $this->Html->link(__('Voltar'), ['action' => 'index'], ['class' => 'btn btn-primary btn-fill']) ?>
        </div>
        <div class="form-group mb-2">
            <?= $this->Html->link(__('Editar Aluno'), ['action' => 'edit', $aluno->id], ['class' => 'btn btn-warning btn-fill']) ?>
        </div>
        <div class="form-group mb-2">
            <?= $this->Form->postLink(__('Apagar Aluno'), ['action' => 'delete', $aluno->id], ['class' => 'btn btn-danger btn-fill','confirm' => __('Você tem certeza que quer apagar o registro #{0}?', $aluno->id)]) ?>
        </div>
    </nav>
    <hr>
    <div class="alunos content">
        <h3>#<?= str_pad($aluno->id, 5, '0', STR_PAD_LEFT) ?></h3>
        <table class="table">
            <tr>
                <th scope="row"><?= __('Nome') ?></th>
                <td><?= h($aluno->nome) ?></td>
                <th scope="row"><?= __('Matricula') ?></th>
                <td><?= h($aluno->matricula) ?></td>
                <th scope="row"><?= __('Turma') ?></th>
                <td><?= $aluno->has('turma') ? $this->Html->link($aluno->turma->full_name, ['controller' => 'Turmas', 'action' => 'view', $aluno->turma->id]) : '' ?></td>
                
            </tr>
            <tr>
                <th scope="row"><?= __('Status') ?></th>
                <td><?= h($aluno->status) ?></td>
                <th scope="row"><?= __('Criado') ?></th>
                <td><?= h($aluno->created) ?></td>
                <th scope="row"><?= __('Atualizado') ?></th>
                <td><?= h($aluno->updated) ?></td>
            </tr>
            </table>
            <div class="related">
            <?php if (!empty($aluno->inscricoes)): ?>
            <h4><?= __('Inscrições efetuadas do aluno') ?></h4>
            <table class="table table-bordered">
                <tr>
                        <th scope="col"><?= __('# Inscrição') ?></th>
                        <th scope="col"><?= __('Aluno') ?></th>
                        <th scope="col"><?= __('Eletiva') ?></th>
                        <th scope="col"><?= __('Criado') ?></th>
                        <th scope="col"><?= __('Atualizado') ?></th>
                        <th scope="col" class="actions"><?= __('Ações') ?></th>
                </tr>
                <?php foreach ($aluno->inscricoes as $inscricoes): ?>
                <tr>
                        <td><?= str_pad($inscricoes->id, 5, '0', STR_PAD_LEFT) ?></td>
                        <td><?= h($aluno->nome) ?></td>
                        <td><?= h($inscricoes->eletiva->titulo) ?></td>
                        <td><?= h($inscricoes->created) ?></td>
                        <td><?= h($inscricoes->updated) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Visualizar'), ['controller' => 'Inscricoes', 'action' => 'view', $inscricoes->id]) ?>
                            <?= $this->Html->link(__('Editar'), ['controller' => 'Inscricoes', 'action' => 'edit', $inscricoes->id]) ?>
                            <?= $this->Form->postLink(__('Apagar'), ['controller' => 'Inscricoes', 'action' => 'delete', $inscricoes->id], ['confirm' => __('Você tem certeza que quer apagar o registro #{0}?', $inscricoes->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
        </div>
</div>