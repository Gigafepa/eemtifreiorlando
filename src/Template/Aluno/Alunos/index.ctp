<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno[]|\Cake\Collection\CollectionInterface $alunos
 */

?>
<div class="col-md-12">
    <nav class="">
        <?= $this->Form->create() ?>
        <div class="form-group">
            <?= $this->Form->control('data_eletiva', ['class' => 'form-control datepicker-here', 'notEmpty' => true, 'autocomplete' => 'off']) ?>
            <small>SELECIONE A DATA PARA VER AS ELETIVAS DISPONÍVEIS NAQUELE DIA</small>
            <?= $this->Form->hidden('pesquisa_data', ['id' => 'data-submit', 'value' => isset($dataSource) ? $dataSource : '']) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->button(__('Pesquisar eletivas'), ['class' => 'btn btn-primary btn-fill']) ?>
        </div>
        <?= $this->Form->end() ?>
    </nav>
    <?php if(isset($dados)): ?>
    <h3><?= __('Eletivas do dia ' . $diaSelecionado) ?></h3>
    <?php if(count($dados)): ?>
    
    <table class="table table-responsive">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id', '#') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo', 'Eletiva') ?></th>
                <th scope="col"><?= $this->Paginator->sort('professor_id', 'Professor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vagas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created', 'Criado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated', 'Atualizado') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($dados as $eletiva):?>

            <tr>
                <td><?= str_pad($eletiva->id, 4, '0', STR_PAD_LEFT) ?></td>
                <td><?= h($eletiva->titulo) ?></td>
                <td><?= h($eletiva->professor->nome) ?></td>
                <td><?= h($listaDeVagas[$eletiva->id]["vagas_disponiveis"] > 0 ? $listaDeVagas[$eletiva->id]["vagas_disponiveis"] : "Sem vagas") ?></td>
                <td><?= h($eletiva->created) ?></td>
                <td><?= h($eletiva->updated) ?></td>
                <td class="actions">
                    
                    <?php
                        if($listaDeVagas[$eletiva->id]["vagas_disponiveis"] > 0){
                            echo $this->Form->postLink(__('Inscrever-se'), ['action' => 'inscrever', $eletiva->id], ['class' => 'btn btn-success btn-fill', 'confirm' => __('Deseja realmente se inscrever na eletiva #{0}?', $eletiva->id)]);
                        }else{
                            echo "<button class='btn btn-success btn-fill' disabled>Inscrever-se</button>";
                        }
                    ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} no total')]) ?></p>
    </div>
    <?php else: ?>
        <h1>Nenhuma eletiva disponível para esse dia :(</h1>
    <?php endif; ?>
    <?php endif; ?>
</div>