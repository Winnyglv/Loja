 <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página De cadastro de clientes</title>
    <link href="styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    
    <main><h1 class="title">CADASTRO DE CLIENTES</h1></main><br>
<div class="site-content">
    <div class="container">
 <div class="row">
    <div class="jumbotron">
<form method="post" class="row g-3">
<div class="col-md-6">Email:
<input type="text" name="email" class="form-control"><br>
</div>
<div class="col-md-6">Nome Completo:
    <input type="text" name="nome" class="form-control"><br>
    </div>
    <div class="col-md-6">CPF:
    <input type="text" name="cpf" class="form-control"><br>
    </div>
    <div class="col-md-6"> R.G
    <input type="text" name="rg" class="form-control"><br>
    </div>
    <div class="col-md-4">Data de Nascimento
    <input type="date" name="nascimento" class="form-control">
    </div>
    <div class="col-12">
<br>Sexo:<br>
    <input type="radio" name="sexo" value="F"> Feminino<br>
    <input type="radio" name="sexo" value="M"> Masculino<br>
    </div>
    <div class="col-md-6">Telefone
    <input type="text" name="telefone" class="form-control"><br>
    </div>
    <div class="col-md-6"> Telefone
    <input type="text" name="telefone2" class="form-control"><br>
    </div>
    <div class="col-md-6">Escolha uma senha:
    <input type="password" name="senha" class="form-control"><br>
    </div>
    <div class="col-md-6">Redigite:
    <input type="password" name="redigite" class="form-control"><br>
    </div>
    <div class="col-md-4">CEP:
    <input type="text" name="cep" class="form-control">
    </div>
    <div class="col-12">
    <br>Tipo de Endereço:<br>
    <input type="radio" name="tipo">  Residencial<br>
    <input type="radio" name="tipo">  Comercial<br>
    </div>
    <div class="col-md-6">Rua:
    <input type="text" name="rua" class="form-control"><br>
    </div>
    <div class="col-md-2">N°
    <input type="text" name="numero" class="form-control"><br>
    </div>
    <div class="col-md-6">Complemento:
    <input type="text" name="complemento" placeholder="Condominio, AP, Bloco, Referencia... " class="form-control"><br>
    </div>
    <div class="col-md-6">Bairro:
    <input type="text" name="bairro" class="form-control">
    </div>
    <div class="col-md-6">
    <br>Estado<br>
    <select name="estado">
    <option value="ac">Acre - AC</option>
    <option value="al">Alagoas - AL</option>
    <option value="ap">Amapá - AP</option>
    <option value="am">Amazonas - AM</option>
    <option value="ba">Bahia - BA</option>
    <option value="ce">Ceara - CE</option>
    <option value="es">Espírito Santo - ES</option>
    <option value="go">Goiás - GO</option>
    <option value="ma">Maranhão - MA</option>
    <option value="mt">Mato Grosso - MT</option>
    <option value="ms">Mato Grosso do Sul - MS</option>
    <option value="mg">Minas Gerais - MG</option>
    <option value="pa">Pará - PA</option>
    <option value="pb">Paraíba - PB</option>
    <option value="pr">Paraná - PR</option>
    <option value="pe">Pernambuco - PE</option>
    <option value="pi">Piauí - PI</option>
    <option value="rj">Rio de Janeiro - RJ</option>
    <option value="rn">Rio Grande do Norte - RN</option>
    <option value="rs">Rio Grande do Sul - RS</option>
    <option value="ro">Rondônia - RO</option>
    <option value="rr">Roraima - RR</option>
    <option value="sc">Santa Catarina - SC</option>
    <option value="sp">São Paulo - SP</option>
    <option value="se">Sergipe - SE</option>
    <option value="to">Tocantins - TO</option>
    <option value="df">Distrito Federal - DF</option>
    </select></div>
    <br> <br>
    <div class="col-md-6">Cidade:
    <input type="text" name="cidade" class="form-control"> <br>
    </div>
    <div><input type="submit" name="btn" value="CADASTRAR"></div>
 </div>
</div>
</div>
</div>
</form>
    <?php 
    require_once ("conectar.php");

if(isset($_POST['submit']) && !empty($_POST['submit'])) //verifica se o botão foi clicado
    { 
      if(
            empty ($_POST['nome'])
            or
            empty ($_POST['senha'])
            or
            empty ($_POST['nascimento'])
            or
            empty ($_POST['redigite'])
       )
    {
            echo"Todos os campos são obrigatórios. Confira os dados antes de finalizar o cadastro.";
    }
    
  
//obtem os dados do formulario
$email = $_POST['email'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$nascimento = $_POST['nascimento'];
$sexo = $_POST['sexo'];
$telefone = $_POST['telefone'];
$telefone2 = $_POST['telefone2'];
$senha= password_hash($_POST['senha'], PASSWORD_DEFAULT);
$redigite= password_hash($_POST['redigite'], PASSWORD_DEFAULT);
$cep= $_POST['cep'];
$tipo= $_POST['tipo'];
$rua= $_POST['rua'];
$numero= $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];

//instrução sql de gravação no banco de dados

$sql = "INSERT INTO cadastros
(email,nome,cpf,rg,nascimento,sexo,telefone,telefone2,senha,redigite,cep,tipo,rua,numero,complemento,bairro,estado,cidade)
VALUES ('$email', '$nome', '$cpf', '$rg', '$nascimento', '$sexo', '$telefone', '$telefone2', '$senha', '$redigite', '$cep', '$tipo', '$rua','$numero', '$complemento','$bairro','$estado','$cidade')";
//no values só precisa por aspas simples, nos campos que foram definidos como varchar
mysqli_query($conexao, $sql); //executa a instrução sql somente se o botao for clicado
//unset limpa os dados do formulario
unset($_POST['email']);
unset($_POST['nome']);
unset($_POST['cpf']);
unset($_POST['rg']);
unset($_POST['nascimento']);
unset($_POST['sexo']);
unset($_POST['telefone']);
unset($_POST['telefone2']);
unset($_POST['senha']);
unset($_POST['redigite']);
unset($_POST['cep']);
unset($_POST['tipo']);
unset($_POST['rua']);
unset($_POST['numero']);
unset($_POST['complemento']);
unset($_POST['bairro']);
unset($_POST['estado']);
unset($_POST['cidade']);

mysqli_close($conexao); //encerra conexão com o banco
};
?>



<footer>
<div class="boxs">
    <h2>Inicio</h2>
<ul>
<li><a href="telainicial.php">Home</a></li>
<li><a href="formulario.php">Cadastre-se</a></li>
<li><a href="">Produtos</a></li>
</ul>
</div>

<div class="boxs">
    <h2>Redes Sociais</h2>
<ul>
<li><a href="https://www.facebook.com/profile.php?id=100054443501375&mibextid=ZbWKwL">Facebook</a></li>
<li><a href="https://instagram.com/vestindoestacoes?igshid=YmMyMTA2M2Y=">Instragram</a></li>
</ul>
</div>

<div class="boxs">
    <h2>Contato</h2>
<ul>
<li><a href="">Telefone</a></li>
<li><a href="winnysouza83@gmail.com">Email</a></li>
<li><a href="https://wa.me/qr/DKHXDPYTP5FGN1">Whatsapp</a></li>
</ul> 
</div>

<div class="boxs">
    <h2>Nossa Empresa</h2>
<ul>
<li><a href="">Duvidas Frequentes</a></li>
<li><p>Rua: xxxxx, N°xx 12345-678 - Jd. xxxxx</p></li>
<li><p>ATENDIMENTO: Segunda á Sexta das 8h as 18h</p></li>
</ul> 
</div>

 </footer>
</body>
</html>