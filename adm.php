<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAINEL ADMINISTRATIVO</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<main>
    <div class="site-content">
 <?php
require_once ("conectar.php");
$sql = "SELECT * FROM cadastros";
$exibe = mysqli_query($con, $sql );
echo "
<div class='container'>
<div class='jumbotron'>
<table class='table table-bordered'>
    <tr>
    <th>  id   </th>
    <th>  email   </th>
    <th>  Nome   </th>
    <th>  CPF   </th>
    <th>  RG   </th>
    <th>  Nascimento   </th>
    <th>  sexo   </th>
    <th>  telefone   </th>
    <th>  telefone   </th>
    <th>  cep   </th>
    <th>  tipo   </th>
    <th>  rua   </th>
    <th>  numero   </th>
    <th>  complemento   </th>
    <th>  bairro   </th>
    <th>  estado   </th>
    <th>  cidade   </th>
    </tr>";
while($linha = mysqli_fetch_array($exibe))
{ echo "
    <tr>
    <td>$linha[0]</td>
    <td>$linha[1]</td>
    <td>$linha[2]</td>
    <td>$linha[3]</td>
    <td>$linha[4]</td>
    <td>$linha[5]</td>
    <td>$linha[6]</td>
    <td>$linha[7]</td>
    <td>$linha[8]</td>
    <td>$linha[11]</td>
    <td>$linha[12]</td>
    <td>$linha[13]</td>
    <td>$linha[14]</td>
    <td>$linha[15]</td>
    <td>$linha[16]</td>
    <td>$linha[17]</td>
    <td>$linha[18]</td>
    </tr>";
}
echo "</table></div></div>";
?>
</div>
</main>
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