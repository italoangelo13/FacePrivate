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
    $status ="";
    
    if ($pontos <= 6) {
        $perfil = "Perfil Inseguro ou usado para Negócios";
        $img = "assets/img/fraco.png";
        $texto = "O seu perfil contem muitas informações privadas que acabam sendo mostradas para qualquer um na internet, pois você deixa as configurações de privacidade destas informações como publicas. É recomendado que você mantenha as suas informações pessoais, fotos e videos com uma configuração que apenas seus amigos possam visualizar, aumentando assim a sua segurança.";
        $status = "Fraco";
    }
    else if ($pontos >= 7 || $pontos <= 12) {
        $perfil = "Perfil Ainda oferece riscos";
        $img = "assets/img/medio.png";
        $texto = "O seu perfil Não contem muitas informações pessoais que estão em publico, porem, ainda pode oferecer riscos pois ainda estão visiveis para os amigos de seus amigos.";
        $status = "Mediano";    
    }
    else if ($pontos >= 13 || $pontos <= 18) {
        $perfil = "Perfil que 'pode' ser considerado Seguro";
        $img = "assets/img/ideal.png";
        $texto = "O seu perfil esta com um nivel de segurança ideal, pois suas informações estão liberadas apenas para seus amigos mais proximos e/ou conhecidos. Porem, mesmo com esse nivel de privacidade, o seu perfil ainda pode ter algumas informações vuneraveis.";
        $status = "Ideal";    
    }
    else if ($pontos > 18) {
        $perfil = "Não existe pessoas com perfis assim.";
        $img = "assets/img/forte.png";
        $texto = "O seu perfil estão com a maioria das informações com a privacidade 'somente Eu', provavelmente você não mudou as opções do teste ou você é uma pessoa que não gosta que ninguem veja nada do que você faz, o seu perfil é tão seguro que somente você pode ver algumas de suas informações.";
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
    </head>
    <body>
        <div class="container-fluid">
            <header class="row cabecalho">
                <div class="col-lg-4">
                    <img src="assets/img/faceprivate.png" width="50%" alt="FacePrivate" title="FacePrivate"/>  
                </div>
            </header>
            
            <section class="row" style="padding: 10px;">
                <div class="col-lg-2">
                    <img style="border: 2px #000 solid; border-radius: 500px;" src="<?php echo $img; ?>" title="<?php echo $status; ?>" alt="<?php echo $status; ?>" width="50%"/>
                </div>
                <div class="col-lg-10">
                    <h1 class="alert alert-warning"><?php echo $perfil; ?> </h1>
                </div>
            </section>
            
            
            
            
            
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
