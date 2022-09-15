<?php
    $cakeDescription = 'Eletivas';
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SISTEMA DE ELETIVAS FREI ORLANDO: ALUNO</title>

        <?= $this->Html->meta('icon') ?>
        <!-- css -->
        <?= $this->Html->css(['paper-dashboard/bootstrap.min.css', 'paper-dashboard/animate.min.css', 'paper-dashboard/animate.min.css', 'paper-dashboard/paper-dashboard.css', "https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css", 'paper-dashboard/font-muli.css', 'paper-dashboard/animate.min.css', 'paper-dashboard/themify-icons.css', 'datepicker.min'], ['block' => 'css']) ?>
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
    </head>
    <body>
        <div class="sidebar" data-background-color="white" data-active-color="danger">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <?= $this->Html->image('logo-sistema.png', ['width' => '100%']) ?>
                </div>
                <?= $this->element('menu', ['pagina' => $this->request->params['controller']]) ?>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                        <a class="navbar-brand" href="#">BEM VINDO</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <!-- <a href="#">
                                    <i class="ti-close"></i>
                                    <p>Sair</p>
                                </a> -->
                                <?= $this->Html->link('<i class="ti-close"></i> Sair', ['action' => 'logout'], ['escape' => false]) ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <?= $this->fetch('content') ?>
                    </div>
                </div>
            </div>
            
            <!-- footer -->
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright pull-right">
                        &copy; <script>document.write(new Date().getFullYear())</script>, EEMTI Capelão Frei Orlando
                    </div>
                </div>
            </footer>
        </div>

        <!-- script -->
        <?= $this->Html->script(['paper-dashboard/jquery.min.js', 'paper-dashboard/bootstrap.min.js', 'paper-dashboard/bootstrap-checkbox-radio.js', 'paper-dashboard/bootstrap-notify.js', 'paper-dashboard/paper-dashboard.js', 'mascara-cpf', 'datepicker.min', 'aluno'], ['block' => 'script']) ?>
        <?= $this->fetch('script') ?>
        <script>
            // traducao do datepicker
            $.fn.datepicker.language['ru'] = {
                days: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
                daysShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb'],
                daysMin: ['D','S','T','Q','Q','S','S'],
                months: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                monthsShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
                today: 'Hoje',
                clear: 'Limpar',
                dateFormat: 'dd de MM de yyyy',
                timeFormat: 'hh:ii aa',
                firstDay: 0
            }
        </script>
        <?= $this->Flash->render() ?>
    </body>
</html>
