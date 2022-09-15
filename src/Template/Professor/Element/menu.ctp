<html>
<!-- Menu lateral adm-->
<ul class="nav">
    <li <?= $pagina == 'Professores' ? 'class="active"' : '' ?>>
        <?= $this->Html->link(
            '<i class="ti ti-pie-chart"></i>'.__('Página inicial'),
            ['controller' => 'Professores', 'action' => 'index'], ['escape' => false])
        ?>
    </li>
    <!-- <li <?= $pagina == 'Eletivas' ? 'class="active"' : '' ?>>
        <?= $this->Html->link(
            '<i class="ti ti-agenda"></i>'.__('Eletivas'),
            ['controller' => 'Eletivas','action' => 'view'], ['escape' => false])
        ?> -->
</ul>
</html>