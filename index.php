<?php
include("./credenciais_bootstrap.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pequenos Afazeres</title>
    <link rel="shortcut icon" href="./imagens/iconepag.ico">
    <link rel="stylesheet" href="./css/style.css">
    <link href="<?php echo URL_BOOTSTRAP; ?>" rel="stylesheet" integrity="<?php echo INTEGRITY_BOOTSTRAP; ?>" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg justify-content-end bg-dark fixed-top">
                    <a class="btn btn-outline-light me-1" href="">Entrar</a>
                    <a class="btn btn-outline-light me-2" href="">Cadastrar-se</a>
                </nav>
            </div>
        </header>

        <div class="align-items-center " style="max-width: 80%; margin-left: 10%; margin-right: 10%; margin-top: 10%;">
            <div class="card mb-12 align-items-center" style="max-width: 100%; margin-top: 2%;">
                <div class="row g-0">
                    <div class="col-md-6 align-items-center">
                        <img src="imagens/logomarca.png" class="img-fluid rounded-start" alt="..." style="margin-top: 15%;">
                    </div>
                    <div class="col-md-6 align-items-center">
                        <div class="card-body">
                            <h5 class="card-title">Solicite tarefas para todo<br />
                                o Distrito Federal</h5>
                            <p class="card-text">
                                A Pequenos Afazeres é uma empresa de entregas,<br />
                                buscas e compras que oferece o melhor serviço<br />
                                para realizar aquelas tarefas das quais não<br />
                                sobra tempo no dia-a-dia e do jeito que você precisa.<br />
                                Ideal para quem trabalha em horário comercial<br />
                                e não pode sair a qualquer instante e também<br />
                                para empresas de todos os tamanhos. Solicite<br />
                                quantas tarefas você precisar — seja um só<br />
                                ou mais de mil.
                                <br />
                                Tudo isso sem sair do seu endereço e sem<br />
                                pesar no seu bolso com uma taxa fixa de RS20,00.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div style="width: 100%; height: 100px; background-color: green;"></div>
        <div style="width: 100%; height: 100px; background-color: yellow;"></div>
        <div style="width: 100%; height: 100px; background-color: green;"></div>
        <div style="width: 100%; height: 100px; background-color: yellow;"></div>
        <div style="width: 100%; height: 100px; background-color: green;"></div>
        <div style="width: 100%; height: 100px; background-color: yellow;"></div>
        <div style="width: 100%; height: 100px; background-color: green;"></div>
        <div style="width: 100%; height: 100px; background-color: yellow;"></div>
        <div style="width: 100%; height: 100px; background-color: green;"></div>
        <div style="width: 100%; height: 100px; background-color: yellow;"></div>


    </div>
    <footer class="footer_index">
        <strong><?php echo "Pequenos Afazeres"; ?><br>
            <span style="font-size: 12px;">Logística e Transportes</span><br>
        </strong>
        <p><?php echo "Endereço: Area Especial 00, Lote 0	"; ?></p>
        <p><?php echo "CEP: 00000-000"; ?></p>
        <p><?php echo "Telefone: (00) 0 0000-0000"; ?></p>
        <p><?php echo "CNPJ: 00.000.000/0000-00"; ?></p>

    </footer>

    <script src="<?php echo URL_SCRIPT ?>" integrity="<?php echo INTEGRITY_SCRPT ?>" crossorigin="anonymous"></script>
</body>

</html>