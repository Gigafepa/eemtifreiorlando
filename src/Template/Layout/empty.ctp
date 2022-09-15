<!DOCTYPE html>
<html>
    <head>
        <title>SISTEMA DE ELETIVAS FREI ORLANDO</title>
        <?= $this->Html->css(['normalize', 'paper-dashboard/bootstrap.min', 'paper-dashboard/paper-dashboard', 'paper-dashboard/animate.min.css', 'paper-dashboard/themify-icons.css']) ?>
        <?= $this->Html->script(['paper-dashboard/jquery.min', 'paper-dashboard/bootstrap.min', 'paper-dashboard/bootstrap-notify']) ?>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?= $this->fetch('content') ?>
                </div>
            </div>
        </div>
        <?= $this->Flash->render() ?>
    </body>
</html>