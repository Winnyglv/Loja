<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAINEL ADMINISTRATIVO</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
 <?php
require_once ("conectar.php");
$sql = "SELECT * FROM cadastros";
$exibe = mysqli_query($con, $sql );
echo "<table border='1'>
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
    </tr";
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
echo "</table>";

?>
</body>
</html>