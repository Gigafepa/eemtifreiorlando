<div class="container-fluid">
    <div class="row">
        <div class="card card-plain">
        <div class="alunos content">
        <h3>#<?= str_pad($aluno->id, 5, '0', STR_PAD_LEFT) ?></h3>
        <table class="table">
            <tr>
                <th scope="row"><?= __('Nome') ?></th>
                <td><?= h($aluno->nome) ?></td>
                <th scope="row"><?= __('Matricula') ?></th>
                <td><?= h($aluno->matricula) ?></td>
                <th scope="row"><?= __('Turma') ?></th>
                <td><?= $aluno->has('turma') ? $this->Html->link($aluno->turma->full_name, ['controller' => 'Alunos', 'action' => 'viewTur', $aluno->turma->id]) : '' ?></td>
                           
            </tr>
            
            </table>
            <div class="header">
                <h4 class="title">Minhas inscrições</h4>
            </div>
            <?php if(empty($dados)): ?>
                <h1>VOCÊ NÃO EFETUOU NENHUMA INSCRIÇÃO AINDA.</h1>
            <?php else: ?>
            <div class="content table-responsive">
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id', '#') ?></th>
                            <th><?= $this->Paginator->sort('eletiva_id') ?></th>
                            <th><?= $this->Paginator->sort('data_eletiva') ?></th>
                            <th><?= $this->Paginator->sort('professor_id') ?></th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($dados as $inscricao): ?>
                        <tr>
                            <td><?= str_pad($inscricao->id, 5, '0', STR_PAD_LEFT) ?></td>
                            <td><?= $inscricao->eletiva->titulo ?></td>
                            <td><?= $inscricao->eletiva->data_eletiva ?></td>
                            <td><?= $inscricao->eletiva->professor->nome ?></td>
                            <td class="actions">
                                <?php //$this->Html->link(__('Ver alunos inscritos'), ['action' => 'view', $inscricao->id], ['class' => 'btn btn-primary']) ?>
                                <?php //$this->Form->postLink(__('Cancelar inscrição'), ['action' => 'cancelar', $inscricao->id], ['class' => 'btn btn-danger btn-fill', 'confirm' => __('Deseja realmente cancelar inscrição na eletiva #{0}?', $inscricao->id)]) ?>
                                <button class="btn btn-success btn-fill"><i class="ti ti-check"></i> Inscrito</button>
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
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>