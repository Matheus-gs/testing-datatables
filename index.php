<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- CSS -->
  <link rel="stylesheet" href="global.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <title>Document</title>
</head>

<body>
  <div id="root">
    <table id="example" class="table table-striped table-hover display" style="width: 100%">
      <thead>
        <tr>
          <th>Placa</th>
          <th>Modelo</th>
          <th>Km</th>
          <th>Ano modelo</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include("db_connect.php");

        $sql = $pdo->prepare("SELECT * FROM veiculo");
        $sql->execute();

        foreach ($sql->fetchAll() as $key => $value) {
          print "<tr>";
          print "<td>" . $value['placa_veiculo'] . "</td>";
          print "<td>" . $value['modelo_veiculo'] . "</td>";
          print "<td>" . $value['km_veiculo'] . "</td>";
          print "<td>" . $value['ano_modelo'] . "</td>";
          print "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
  <!-- JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="main.js"></script>
</body>

</html>