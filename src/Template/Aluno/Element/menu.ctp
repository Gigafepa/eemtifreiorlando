
<ul class="nav">
    <li <?= $pagina == 'Aluno' ? 'class="active"' : '' ?>>
        <?= $this->Html->link('<i class="ti ti-notepad"></i>'.__('Página inicial'),['controller' => 'Alunos','action' => 'index'], ['escape' => false])?>
    </li>
    <li <?= $pagina == 'Aluno' ? 'class="active"' : '' ?>>
        <?= $this->Html->link('<i class="ti ti-pencil-alt"></i>'.__('Minhas inscrições'),['controller' => 'Alunos','action' => 'inscritos'], ['escape' => false])?>
    </li>
</ul>