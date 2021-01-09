<?php
session_start();
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro - PHP + MySQL - Canal TI</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" href="estilos.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Cadastro de orçamentos</h3>
                    <?php
                    if(isset($_SESSION['status_cadastro'])):
                        ?>
                        <div class="notification is-success">
                          <p>Cadastro efetuado!</p>
                      </div>
                      <?php
                  endif;
                  unset($_SESSION['status_cadastro']);
                  ?>
                  <p style="color: black">Cadastre e depois volte à tela de login<a href="login.php" style= "text-decoration: underline;"> aqui</a></p>
              </div>

              <?php
              if(isset($_SESSION['usuario_existe'])):
                ?>

                <div class="notification is-info">
                    <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
                </div>
                <?php
            endif;
            unset($_SESSION['usuario_existe']);
            ?>

            <div class="box" style="max-width: 350px; display: block; margin: auto">
                <form action="cadastrar.php" method="POST">
                    <label>Nome do cliente</label>
                    <div class="field">
                        <div class="control"> <!-- nome do cliente -->
                            <input name="nome" type="text" class="input is-large" autofocus>
                        </div>
                    </div>
                    <label>Usuário</label>
                    <div class="field">
                        <div class="control"> <!-- usuario -->
                            <input name="usuario" type="text" class="input is-large">
                        </div>
                    </div>
                    <label>Senha</label>
                    <div class="field">
                        <div class="control"> <!-- SENHA -->
                            <input name="senha" class="input is-large" type="password">
                        </div>
                    </div>
                    <label>Vendedor</label>
                    <div class="field">
                        <div class="control"> <!-- vendedor -->
                            <input name="vendedor" class="input is-large">
                        </div>
                    </div>
                    <label>Data e hora do orçamento</label>
                    <div class="field"> 
                        <div class="control">
                            <input name="datahora" class="input is-large" type="text" placeholder="O sistema já identifica o horário." disabled>
                      </div>
                  </div>
                  <label>Valor orçado</label>
                  <div class="field"> 
                    <div class="control"> <!-- Valor orçado -->
                        <input name="valorOrcado" class="input is-large">
                    </div>
                </div>
                <label>Descrição do orçamento</label>
                <div class="field">
                    <div class="control"> <!-- descrição do orçamento -->
                        <textarea name="descricao" class="input is-large" style="width: 350px; height: 150px;">
                        </textarea>
                    </div>
                </div>
                <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
            </form>
        </div>
    </div>
</div>
</div>
</section>
</body>

</html>