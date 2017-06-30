<?php
$nome = $_REQUEST['nome'];
$turma = $_REQUEST['turma'];
$serie = $_REQUEST['serie'];
$postagem = $_REQUEST['postagem'];
$fotos = $_REQUEST['fotos'];
$videos = $_REQUEST['videos'];
$pessoais = $_REQUEST['pessoais'];
$paginas = $_REQUEST['paginas'];
$amigos = $_REQUEST['amigos'];

$pontos = $postagem + $fotos + $videos + $pessoais + $paginas + $amigos;
$perfil = "";
$img = "";
$texto = "";
$status = "";

if ($pontos <= 6) {
    $perfil = "Perfil Inseguro ou usado para Negócios";
    $img = "assets/img/fraco.png";
    $texto = "O seu perfil contem muitas informações privadas que acabam sendo mostradas para qualquer um na internet, pois você deixa as configurações de privacidade destas informações como publicas. É recomendado que você mantenha as suas informações pessoais, fotos e videos com uma configuração que apenas seus amigos possam visualizar, aumentando assim a sua segurança.";
    $status = "Fraco";
} else if ($pontos >= 7 && $pontos <= 12) {
    $perfil = "Perfil Ainda oferece riscos";
    $img = "assets/img/medio.png";
    $texto = "O seu perfil Não contem muitas informações pessoais que estão em publico, porem, ainda pode oferecer riscos pois ainda estão visiveis para os amigos de seus amigos.";
    $status = "Mediano";
} else if ($pontos >= 13 && $pontos <= 18) {
    $perfil = "Perfil que 'pode' ser considerado Seguro";
    $img = "assets/img/ideal.png";
    $texto = "O seu perfil esta com um nivel de segurança ideal, pois suas informações estão liberadas apenas para seus amigos mais proximos e/ou conhecidos. Porem, mesmo com esse nivel de privacidade, o seu perfil ainda pode ter algumas informações vuneraveis.";
    $status = "Ideal";
} else if ($pontos > 18) {
    $perfil = "Não existe pessoas com perfis assim.";
    $img = "assets/img/forte2.png";
    $texto = "O seu perfil está com a maioria das informações com a privacidade 'somente Eu', provavelmente você não mudou as opções do teste ou você é uma pessoa que não gosta que ninguem veja nada do que você faz, o seu perfil é tão seguro que somente você pode ver algumas de suas informações.";
    $status = "Forte";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>FacePrivate</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/estilo.css" />
        <style type="text/css">
            .color{
                background: #feffff; /* Old browsers */
                background: -moz-linear-gradient(top, #feffff 0%, #ddf1f9 35%, #a0d8ef 100%); /* FF3.6-15 */
                background: -webkit-linear-gradient(top, #feffff 0%,#ddf1f9 35%,#a0d8ef 100%); /* Chrome10-25,Safari5.1-6 */
                background: linear-gradient(to bottom, #feffff 0%,#ddf1f9 35%,#a0d8ef 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#feffff', endColorstr='#a0d8ef',GradientType=0 ); /* IE6-9 */
            }

            strong{
                color: #269abc;
            }

            .cabecalho{
                background: #3b5998;
                padding: 10px;
            }

        </style>
    </head>
    <body>
        <div class="container-fluid">
            <header class="row cabecalho">
                <div class="col-lg-4">
                    <img src="assets/img/faceprivate.png" width="50%" alt="FacePrivate" title="FacePrivate"/>  
                </div>
                <div class="col-lg-8">
                    <h4 style="color: #fff; float: right;">Ola, <?php echo $nome; ?></h4>
                </div>
            </header>

            <div class="jumbotron row color">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <img class="img-circle" src="<?php echo $img; ?>" alt="<?php echo $status; ?>" title="<?php echo $status; ?>" width="100%"/>
                        </div>

                        <div class="col-lg-8">
                            <h1 style="text-align: center;"><?php echo $perfil; ?></h1>
                            <p style="text-align: justify;"><?php echo $texto; ?></p>
                            <p>Nivel de segurança: <span class="label label-warning"><?php echo $status; ?></span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <h3 class="col-lg-12"><center>Veja Algumas dicas Para Você manter o Seu Perfil Seguro!</center></h3>
            </div>

            <div class="jumbotron row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1 style="text-align: center;">Ative as aprovações e os alertas de login</h1>
                            <p style="text-align: justify;">As <strong>“Aprovações de Login”</strong> servem como uma camada extra de segurança: a chamada autenticação em duas etapas. Toda vez que você acessa sua conta por meio de um dispositivo diferente, uma notificação é enviada a respeito, juntamente com um código para você completar o registro e entrar no seu perfil.</p>
                            <p style="text-align: justify;">Os <strong>“Alertas de Login”</strong> atuam de forma semelhante, contudo, em vez dos códigos, são enviados avisos sobre conexão para monitomento de possíveis intrusos na rede.</p>
                        </div>

                        <div class="col-lg-6">
                            <img src="assets/img/img1.jpg" alt="Alertas de Login" title="Alertas de Login" width="100%"/>
                        </div>

                    </div>
                </div>
            </div>


            <div class="jumbotron row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1 style="text-align: center;">Mude para senhas mais complexas</h1>
                            <p style="text-align: justify;">Chega de datas de aniversários ou nomes de familiares e animais de estimação. Tudo isso facilita muito a vida de quem quer invadir sua conta. <strong>Dificulte o acesso dessas pessoas com senhas</strong> que possuam ao menos seis caracteres e uma combinação de números, letras e pontuações. Observe a força da sua escolha ao cadastrá-la e use um conjunto bem diferente do que já utiliza nos serviços bancários e no correio eletrônico pessoal.</p>
                        </div>

                        <div class="col-lg-6">
                            <img src="assets/img/img2.jpg" alt="Alertas de Login" title="Alertas de Login" width="100%"/>
                        </div>

                    </div>
                </div>
            </div>

            <div class="jumbotron row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1 style="text-align: center;">Escolha bem o nível de privacidade</h1>
                            <p style="text-align: justify;">Sabe que aquela postagem bacana para os amigos pode ser inadequada para os colegas de trabalho, certo? Então, o melhor é você definir com mais detalhes quem pode ver o seu conteúdo. Isso pode ser feito facilmente na <strong>seleção de audiência</strong>.</p>
                            <p style="text-align: justify;">Como devem ter notado, todas essa dicas já fazem parte do material didático de segurança do próprio Facebook, disponível por completo em <strong>“Privacy Basics”</strong>. Mantenha tudo isso em dia e vai perceber que os problemas com isso vão diminuir bastante. E faça o seu papel nesse Dia da Internet Segura: compartilhe essas ideias!</p>
                        </div>

                        <div class="col-lg-6">
                            <img src="assets/img/img3.jpg" alt="Alertas de Login" title="Alertas de Login" width="100%"/>
                        </div>

                    </div>
                </div>
            </div>



            <footer class="row" style="background: #3b5998; padding: 10px; margin-top: 6%; color: #fff;">

                <div class="col-lg-12">
                    <address>
                        <h5>Central de Informatica</h5>
                        <h5>
                            <p>Rua Kaquende, 168, Centro, Sabará - MG</p>
                            <p>(31) 3671-4333</p>
                        </h5>
                    </address>
                </div>
            </footer>
        </div>
    </body>
</html>
