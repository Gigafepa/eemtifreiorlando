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
            <?= $this->Html->link(__('Voltar'), ['action' => 'index'], ['class' => 'btn btn-primary btn-fill']) ?>
        </div>
        <div class="form-group mb-2">
            <?= $this->Html->link(__('Editar Administrador'), ['action' => 'edit', $administrador->id], ['class' => 'btn btn-warning btn-fill']) ?>
        </div>
        <div class="form-group mb-2">
            <?= $this->Form->postLink(__('Apagar Administrador'), ['action' => 'delete', $administrador->id], ['class' => 'btn btn-danger btn-fill','confirm' => __('Você tem certeza que quer apagar o registro #{0}?', $administrador->id)]) ?>
        </div>
        <div class="form-group mb-2">
            <?= $this->Html->link(__('Novo Administrador'), ['action' => 'add'], ['class' => 'btn btn-success btn-fill']) ?>
        </div>
                    </nav>
    <hr>
    <div class="administradores content">
        <h3><?= h($administrador->id) ?></h3>
        <table class="vertical-table">
                        <tr>
                <th scope="row"><?= __('Nome') ?></th>
                <td><?= h($administrador->nome) ?></td>
            </tr>
                        <tr>
                <th scope="row"><?= __('Login') ?></th>
                <td><?= h($administrador->login) ?></td>
            </tr>
                        <tr>
                <th scope="row"><?= __('Senha') ?></th>
                <td><?= h($administrador->senha) ?></td>
            </tr>
                        <tr>
                <th scope="row"><?= __('Img Src') ?></th>
                <td><?= h($administrador->img_src) ?></td>
            </tr>
                        <tr>
                <th scope="row"><?= __('Status') ?></th>
                <td><?= h($administrador->status) ?></td>
            </tr>
                                    <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($administrador->id) ?></td>
            </tr>
                            <tr>
                <th scope="row"><?= __('Created') ?></th>
                <td><?= h($administrador->created) ?></td>
            </tr>
                <tr>
                <th scope="row"><?= __('Updated') ?></th>
                <td><?= h($administrador->updated) ?></td>
            </tr>
                    </table>
                </div>
</div>