<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de login para adm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
 <div class="container">
    <div class="panel panel-default">
        <div class="panel-heading text-center">LOGIN</div>
        <div class="panel-body">
<form action="" method="POST">
    <div class="input-group">
        <span class="input-group-addon">
                <i class="glyphicon glyphicon-user"></i>
        </span>
    <input type="text"name="usuario" placeholder="USUARIO" class="form-control">
    </div>
<br>
    <div class="input-group">
        <span class="input-group-addon">
                <i class="glyphicon glyphicon-lock"></i>
        </span>
        <input type="password"name="senha" placeholder="senha" class="form-control">
    </div><br>
        <input type="submit" name="btn" value="ENTRAR" class="btn btn-success">
    
    </form>
        </div>
   </div>
 </div>
</body>
</html>