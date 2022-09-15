<div class="row">
    <br><br><br><br><br>
    <h4 class="text-center">PAINEL DO ADMINISTRADOR</h4>
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <hr>
        <?= $this->Form->create() ?>        
            <div class="form-group">
                <?= $this->Form->control('login', ['class' => 'form-control', 'placeholder' => 'Digite seu login de acesso', 'label' => 'Login']) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('senha', ['class' => 'form-control', 'placeholder' => 'Digite sua senha', 'type' => 'password']) ?>
            </div>
            <?= $this->Form->button(__('ENTRAR'), ['class' => 'btn btn-success btn-block btn-fill']); ?>
            <?= $this->Html->link(__('VOLTAR'), '/' , ['class' => 'btn btn-danger btn-block btn-fill']); ?>
        <?= $this->Form->end() ?>
    </div>
</div>