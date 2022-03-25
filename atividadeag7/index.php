<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <title>Tabela Estados</title>
</head>
<body class="w3-black">
 <div class="w3-paddingw3-content w3-half w3-display-topmiddle w3-
margin">
 <h1 class="w3-center w3-orange w3-round-large w3-
margin">Estados</h1>
 <table class="w3-table-all w3-centered w3-text-black">
 <thead>
 <tr class="w3-center w3-orange ">
 <th>Código</th>
 <th>Nome</th>
 <th>Sigla</th>

</tr>
<?php
 $host = "localhost";
 $usuario = "root";
 $senha = '';
 $bd = "estados";
 try{
 $conecta = new PDO("mysql:dbname=$bd; host=$host; port=3306; ch
arset=utf8", $usuario, $senha);
 $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo '
 <div class="w3-paddingw3-content w3-half w3-displaytopmiddle w3-margin">
 <h1 class="w3-center w3-indigo w3-round-large w3-
margin">Lista de Estados</h1>
 <table class="w3-table-all w3-centered w3-text-black">
 <thead>
 <tr class="w3-center w3-indigo">
 <th>Código</th>
<th>Nome</th>
<th>Sigla</th>
</tr>
 <thead>
 ';
 $sql = "SELECT * FROM estado" ;
 $resultado = $conecta->query($sql);
 if($resultado != null)
 foreach($resultado as $linha) {
 echo '<tr>';
 echo '<td>'.$linha['idestado'].'</td>';
 echo '<td>'.$linha['nome'].'</td>';
 echo '<td>'.$linha['sigla'].'</td>';
 echo '</tr>';
 }
 echo '
 </table>
 </div>';
 }catch(PDOException $e){
 echo "falha ao conectar: ". $e->getMessage();
 }
 ?>
 </div>
</body>
</html>




</table>
</div>
</body>
</html>