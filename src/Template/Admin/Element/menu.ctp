<html>
<!-- Menu lateral adm-->
<ul class="nav">
    <li <?= $pagina == 'Administradores' ? 'class="active"' : '' ?>>
        <?= $this->Html->link(
            '<i class="ti ti-pie-chart"></i>'.__('Página inicial'),
            ['controller' => 'Administradores', 'action' => 'index'], ['escape' => false])
        ?>
    </li>
    <li <?= $pagina == 'Eletivas' ? 'class="active"' : '' ?>>
        <?= $this->Html->link(
            '<i class="ti ti-agenda"></i>'.__('Eletivas'),
            ['controller' => 'Eletivas','action' => 'index'], ['escape' => false])
        ?>
    </li>
    <li <?= $pagina == 'Inscricoes' ? 'class="active"' : '' ?>>
        <?= $this->Html->link(
            '<i class="ti ti-desktop"></i>'.__('Inscrições'),
            ['controller' => 'Inscricoes','action' => 'index'], ['escape' => false])
        ?>
    </li>
    <li <?= $pagina == 'Alunos' ? 'class="active"' : '' ?>>
        <?= $this->Html->link(
            '<i class="ti ti-user"></i>'.__('Alunos'),
            ['controller' => 'Alunos','action' => 'index'], ['escape' => false])
        ?>
    </li>
    <li <?= $pagina == 'Professores' ? 'class="active"' : '' ?>>
        <?= $this->Html->link(
            '<i class="ti ti-user"></i>'.__('Professores'),
            ['controller' => 'professores', 'action' => 'index'], ['escape' => false])
        ?>
    </li>
    <li <?= $pagina == 'Turmas' ? 'class="active"' : '' ?>>
        <?= $this->Html->link(
            '<i class="ti ti-layers"></i>'.__('Turmas'),
            ['controller' => 'Turmas','action' => 'index'], ['escape' => false])
        ?>
    </li>
</ul>
</html>