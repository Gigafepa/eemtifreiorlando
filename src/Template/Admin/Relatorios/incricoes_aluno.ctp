<?php ob_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Cormorant+Garamond');
            @font-face {
                font-family: 'Garamond';
                src: url('CormorantGaramond-Regular.ttf');
            }
            body {    
                font-family: 'Cormorant Garamond';
            }
            .float-left { float: left; }
            .text-center { text-align: center; }
            .col-1 { width: 20%; }
            .col-2 { width: 60%; }
            header div { margin: 20px 0 20px 0; }
            .table { width: 100%; border-collapse: collapse; margin-top: 20px; }
            .table td, .table th { border: 1px solid #000; padding: 4px; }
        </style>
    </head>
    <body>
        <section>
            <table>
                <tr>
                    <td rowspan="2" width="14%">
                        <?= $this->Html->image('logo-ceara.png', ['height' => '100%']) ?>
                    </td>
                    <td style="font-size: 70pt">
                        <center >
                        <strong>ESCOLA DE ENSINO MÉDIO EM TEMPO INTEGRAL CAPELÃO FREI ORLANDO
                        </strong></center>
                    </td>
                    <td rowspan="2" width="16%" style="text-align:right">
                        <?= $this->Html->image('logo-escola-2.jpeg', ['height' => '100%']) ?>
                    </td>
                </tr>
                <tr>
                    <td style="font-size:70pt">
                        <center>Endereço: Paulino Barroso, 1289 Imaculada Conceição Tel.85-33436814 Canindé/Ceará Código MEC: 23264640</center>
                    </td>
                </tr>
            </table>
            <br/>
            <table width="100%">
                <tr>
                    <td colspan="2" style="font-weight:bold">RELAÇÃO DOS ALUNOS DA ELETIVA: <?= $eletivas->titulo ?></td>
                </tr>
                <tr>
                    <td style="font-weight:bold">PROFESSOR(A): <?= $aluno -> nome ?></td>

                    
                </tr>
            </table>
            <div>
                /*Criando professor id no banco de dados*/
                <table class="table">
                    <colgroup>
                        <col width="28"/>
                        <col width="548"/>
                        <col width="132"/>
                    </colgroup>
                    <tbody>
                        <tr style="background-color:lightgreen">
                            <td style="text-align:center">
                                <p dir="ltr">Nº</p>
                            </td>
                            <td style="text-align:center">
                                <p dir="ltr">MATRÍCULA</p>
                            </td>
                   
                            </td>
                        </tr>

                        

                        <?php $k = 1; foreach($eletivas->inscricoes as $value): ?>
                            <tr>
                            <td style="text-align:center"><?= $k ?></td>
                                <td style="text-align:center"><?= $value->eletiva->titulo ?></td>
                                <td style="text-align:center"><?= $value->created?></td>


                            </tr>
                        <?php $k++; endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </body>
</html>

<?php
    $html = ob_get_contents();
    ob_end_clean();
    $mpdf = new \Mpdf\Mpdf(['default_font' => 'Cormorant Garamond']);
    $mpdf->WriteHTML($html);
    $mpdf->Output();
    exit;
?>