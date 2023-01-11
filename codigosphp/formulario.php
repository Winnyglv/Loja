 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página De cadastro de clientes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
 <div class="row">
<form method="post">
<div class="col">
<input type="text"name="email" placeholder="Email" class="form-control"><br>
</div>
    <input type="text" name="nome"class="form-control">  Nome Completo<br>
    <input type="text" name="cpf"class="form-control">  CPF<br>
    <input type="text" name="rg"class="form-control">  R.G<br>
    <input type="date" name="nascimento"class="form-control">  Data de Nascimento<br>
    <input type="radio" name="sexo" value="F"> Feminino
    <input type="radio" name="sexo" value="M"> Masculino<br>
    <input type="text" name="telefone"class="form-control">  Telefone 1<br>
    <input type="text" name="telefone2"class="form-control">  Telefone 2<br>
    <input type="password" name="senha"class="form-control">  Escolha uma senha<br>
    <input type="password" name="redigite"class="form-control">  Redigite<br>
    <input type="text" name="cep"class="form-control">  CEP<br>
    <input type="radio" name="tipo">  Residencial<br>
    <input type="radio" name="tipo">  Comercial<br>
    <input type="text" name="rua"class="form-control">  Rua<br>
    <input type="text" name="numero"class="form-control">  N°<br>
    <input type="text" name="complemento"class="form-control">  Complemento<br>
    <input type="text" name="bairro"class="form-control">  Bairro<br>
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
    </select>
    <br>
    <input type="text" name="cidade" class="form-control">  Cidade<br>
    <br>
    <input type="submit" name="btn" value="CADASTRAR"></form>

</div>
   

    <?php 
require_once ("conectar.php");
if(isset($_POST['btn']))
    { 
      if(
            empty ($_POST['nome'])
            or
            empty ($_POST['cpf'])
            or
            empty ($_POST['senha'])
          or
          empty ($_POST['redigite'])
       )
    {
            echo"Os campos: Nome,CPF e Senha são obrigatorios! Confira os dados antes de finalizar o cadastro.";
            exit;
    }
    };
    
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

$sql = "INSERT INTO cadastros
(email,nome,cpf,rg,nascimento,sexo,telefone,telefone2,senha,redigite,cep,tipo,rua,numero,complemento,bairro,estado,cidade)
VALUES ('$email', '$nome', '$cpf', '$rg', '$nascimento', '$sexo', '$telefone', '$telefone2', '$senha', '$redigite', '$cep', '$tipo', '$rua','$numero', '$complemento','$bairro','$estado','$cidade')";
mysqli_query($con, $sql);
?>
</body>
</html>