<?php
  require_once 'config.php';

  $temp = "";

  if ($_POST["resolucion"] != "") {
    $sql = $pdo->query("select e.radicacion, e.fecharad, e.solicitante, e.direccion, e.modalidad, x.resolucion, x.fecharesol, x.archivo from expediente e, expedidos x where e.idexpediente=x.idexpediente and x.resolucion=" . $_POST["resolucion"] .  " and (year(x.fecharesol)='" . $_POST["vigencia"] . "' or year(x.fecharesol)='0000' or x.fecharesol is null) order by x.fecharesol");
  }

  $temp = "<table>";
  while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
    $temp .= "<tr><td>Radicación:</td><td>" . $row["radicacion"] . "</td></tr>
              <tr><td>Fecha Rad:</td><td>" . $row["fecharad"] . "</td></tr>
              <tr><td>Solicitante:</td><td>" . $row["solicitante"] . "</td></tr>
              <tr><td>Modalidad:</td><td>" . $row["modalidad"] . "</td></tr>
              <tr><td>Dirección:</td><td>" . $row["direccion"] . "</td></tr>
              <tr><td>Resolución N°</td><td>" . $row["resolucion"] . "</td></tr>
              <tr><td>Fecha Resol:</td><td>" . $row["fecharesol"] . "</td></tr>
              <tr><td></td><td><a href=https://resoluciones.s3.us-east-2.amazonaws.com/2bq/" . $row["archivo"] . ">Ver Resolucion</a></td></tr>";
  }
  //https://resoluciones.s3.us-east-2.amazonaws.com/2bq/resol/0102.pdf
  $temp .= "</table>";

  echo $temp;
?>
  