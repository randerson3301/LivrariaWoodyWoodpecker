<?php 
    /* Essas variaveis armazenam os dados necessários para a conexão com o banco*/
    $host = "localhost";
    $database = "db_woody_woodpecker";
    $user = "randerson";
    $password = "r@nd3rs0n";
    
    if(!$conexao = mysqli_connect($host, $user, $password, $database)) {
        echo("<script>
                alert('Não foi possível realizar a conexão');
        </script>");
    }

    if(isset($_GET["btnSubmit"])) {
        
        #Resgatando os values do form
        $nome = $_GET["txtNome"];
        $email = $_GET["txtEmail"];
        $sexo = $_GET["rdoSexo"];
        $profissao = $_GET["txtProfissao"];
        $telefone = $_GET["txtTel"];
        $celular = $_GET["txtCel"];
        $homepage = $_GET["txtHomePage"];
        $contaface = $_GET["txtLinkFace"];
        /*critica ou sugestão*/
        $critOuSug =  $_GET["txtSugCrit"];
        $infoProduto =  $_GET["txtInfoProduto"];
        
        $sql = "insert into tbl_fale_conosco(nomeContato, emailContato, sexoContato, profissao, telefone, celular, homePage, contaFacebook, critica_e_sugestao, infoProduto) values('".$nome."', '".$email."', '".$sexo."', '".$profissao."', '".$telefone."', '".$celular."', '".$homepage."', '".$contaface."', '".$critOuSug."', '".$infoProduto."')";
        
    //echo($sql);
        
        mysqli_query($conexao, $sql);
        header('location:faleConosco.php');
    }
    
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Fale Conosco</title>
        <link href="css/reset.css" rel="stylesheet" type="text/css"> 
        <link href="css/style.css" rel="stylesheet" type="text/css">

    </head>
    
    <body>
        <!-- Cabeçalho do site-->
        <header>
            <a href="home.html"><div id="logo"> </div></a>
            <nav id="menu">
                <ul id="menu-header">
                    <li class="item"><a class="link" href="autores.html">Autores</a></li>
                    <li class="item"><a class="link" href="sobre.html">Sobre</a></li>
                    <li class="item"><a class="link" href="promocoes.html">Promoções</a></li>
                    <li class="item"><a class="link" href="nossas-lojas.html">Lojas</a></li>
                    <li class="item"><a class="link" href="livro-do-mes.html">Livro do Mês</a></li>
                    
                        <li class="item"><a href="faleConosco.php">Contato</a></li>
                 </ul>
            </nav>
            <div id="login">
                  <div id="containerLogin">
                    <form action="faleConosco.php" name="FrmLogin" >
                        <div class="txtLogin">
                        Usuário
                        </div>
                        <div class="txtLogin">
                        Senha
                        </div>
                        <div class="campo">
                            <input type="text" name="txtUser" class="txtDados" maxlength="40">
                        </div>
                        <div class="campo">
                            <input type="password" name="txtSenha" class="txtDados" maxlength="40">
                        </div>
                        
                        <div id="containerBtn">
                            <input type="submit" name="btnLogar" id="btnLogar" value="Ok">
                        </div>
                    </form>
                </div>
            </div>
        </header>
        <!-- FIM DO Cabeçalho-->
        
        <!-- Conteúdo da page-->
            <div id="containerGeral">
                <div class="divisorLateral"> 
                    <div class="containerLinks">
                        <a href="https://www.facebook.com/" target="_blank">
                            <div class="iconRedeSocial" id="faceIcon"></div>
                        </a>
                        <a href="https://twitter.com/" target="_blank">
                            <div class="iconRedeSocial" id="twitterIcon"></div>
                        </a>
                        <a href="https://instagram.com/" target="_blank">
                            <div class="iconRedeSocial" id="instaIcon"></div>
                         </a>   
                    </div>
                    </div>
                <div id="containerCentral">
                    <div id="containerForm">
                        <form action="#" name="FrmContato" id="FrmContato">
                            <fieldset>
                                <legend>Entre em Contato conosco:</legend>
                                <label for="txtNome">Nome:</label> <input type="text" class="txtDados" name="txtNome" id="txtNome" required>*<br><br>
                                <label for="txtEmail">E-mail:</label> <input type="email" class="txtDados" name="txtEmail" id="txtEmail" required>*<br><br>
                                Sexo:*<br>
                                <input type="radio" name="rdoSexo" class="rdoSexo" value="M">Masculino
                                <input type="radio" name="rdoSexo"
                                value="F" >Feminino
                                <br><br>
                                <label for="txtProfissao">Profissão:</label> <input type="text" class="txtDados" name="txtProfissao" id="txtProfissao" required>*
                                <br><br>
                                <label for="txtTel">Telefone:<br></label> <input type="tel" class="txtDados shortxt" name="txtTel" id="txtTel" ><br><br>
                                <label for="txtCel">Celular:<br></label> <input type="text" class="txtDados shortxt" name="txtCel" id="txtCel" required>*
                                <br><br>
                                <label for="txtHomePage">Sua Home Page:</label> <input type="text" class="txtDados" name="txtHomePage" id="txtHomePage" >
                                <br><br>
                                <label for="txtLinkFace">Deixe seu link do face:</label> <input type="text" class="txtDados" name="txtLinkFace" id="txtLinkFace" >
                                <br><br>
                                <label for="txtSugCrit">Deixe sua Crítica/Sugestão:</label> <textarea name="txtSugCrit" id="txtSugCrit"> </textarea>
                                <br><br>
                                <label for="txtInfoProduto">Informações de Produto:</label> <textarea name="txtInfoProduto" id="txtInfoProduto"> </textarea>
                                <br>
                                <span id="txtObg">"*" significa obrigatório </span>
                                <br><br>
                                <input type="submit" value="Enviar" name="btnSubmit"
                                   id="btnSubmit">
                          </fieldset>
                        </form>
                    </div>
                    
                     <!-- FIM CONTEÚDO -->
                     <!-- INICIO RODAPÉ -->
                    <footer>

                    </footer>
                <!-- FIM RODAPÉ -->
                </div>
                
                </div>
            
       </body>
</html>