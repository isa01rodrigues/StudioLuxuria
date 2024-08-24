<!-------PAGINA INDEX DO ADMIN / DASHBOARD--------------------------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studio Luxuria</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="../css/reset.css">

    <link rel="stylesheet" href="../css/stely.css">
    <link rel="stylesheet" href="css/responsiv.css">
</head>
<body>

    <header id="menuFixo">
        <section>
          <div>
                <div>
                
                       <h1>MINHA AGENDA</h1>
                </div>

            </div>
        </section>
    </header>
    
    <section class="blocoCad">
          <section class="conteudoCad">
                <div>
                    <ul>
                        <li><a href="index.php?p=dashboard" class="<?php echo (@$_GET['p'] == 'dashboard') ? 'menuAtivo' : ''; ?>">DASHBOARD</a></li>
                        <li><a href="index.php?p=cliente" class="<?php echo (@$_GET['p'] == 'cliente') ? 'menuAtivo' : ''; ?>">CLIENTE</a></li>
                        <li><a href="index.php?p=agendamento" class="<?php echo (@$_GET['p'] == 'agendamento') ? 'menuAtivo' : ''; ?>">AGENDAMENTO</a></li>
                        <li><a href="index.php?p=ajuda" class="<?php echo (@$_GET['p'] == 'ajuda') ? 'menuAtivo' : ''; ?>">AJUDA</a></li>
                    </ul>
                </div>
            </section>

            <section class="BOX">

                <div class="box">
                    <!--echo  '<h2>'.$pagina. '<h2>';-->
                    <?php

                    $pagina = @$_GET['p'];

                    switch ($pagina) {

                        case 'dashboard':
                            require_once('dashboard/painel.php');
                            break;



                        case 'cliente':
                            require_once('cliente/cliente.php');
                            break;


                        case 'agendamento':
                                require_once('agendamento/agenda.php');
                            break;
    
                            case 'ajuda':
                                echo 'Página ajuda';
                                break;
    
                        default:
                            echo 'PG DASHBOARD';
                            break;
                    }

                    ?>

                </div>

            </section>
</main>

    </body>
    </html>