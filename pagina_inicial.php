<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RODAPE TESTE</title>
    <script src="rodape.js"></script>
    <link rel="stylesheet" href="pagina_inicial.css">
    
    
</head>


<body>
    
    <div class="cabecalho">
        <div class="logo" onclick="Aparecer();"> 
            <div class="menu"></div>
            <div class="menu"></div>
            <div class="menu"></div>
        </div>
        <div class="logo"><img src="LOGO FUT VILLE.png" width="280px"></div>
        <div class="logo"></div>
    </div>


        <div class="lateral" id="lateral">
            <div onclick="Fechar();" class="fechar"><img src=img/x.png width="20px"></div>
            <div class="menu_conta"></div>    
            <div class="rodape2">Cadastro</div><br>
            <div class="rodape2">Escalação</div><br>
            <div class="rodape2">Competições</div><br>
            <div class="rodape2">Ranking</div><br>
            <div class="rodape2">Notícias</div><br>
            <div class="rodape2">Dashboard</div><br>
        </div>

        <div class="quadrado_anuncio"></div>


        
        <h1>OS MAIS ESCALADOS</h1>
        <div class="escalados">
            <div class="botao">
                <div class="titulares">Titulares</div>
            </div>
            <hr>
            <?php
            include("conecta.php"); // conectar com banco de dados
            $comando = $pdo->prepare("SELECT * FROM `escalados` ORDER BY escalação DESC LIMIT 3;");
            $resultado = $comando->execute();  

            while ( $linhas = $comando->fetch() )
            {
                $nome = $linhas ["nome"];
                $foto= $linhas ["foto"];
                $i=base64_encode($foto);
                $time = $linhas ["time"];
                $posicao = $linhas ["posicao"];
                echo("
                
                <div class=\"jogadores\">

                    <div class=\"jogador\">
                        <img class=\"foto\" src=\"data:image/jpeg;base64,$i\">
                        <div class=\"time\">$time</div>
                    </div>

                    <div class=\"jorge\">
                        <div class=\"nome\">$nome</div>
                        <div class=\"posicao\">$posicao</div>
                    </div>
                </div>
                <hr>
                ");
            }
            

        ?>

            <b>Ver todos</b>
        </div>

        

        <div class="jogos"></div>

        
    <div class="rodape">© 2022-2023 FutVille FC - Liga Joinvilense de Futebol</div>
</body>
</html>