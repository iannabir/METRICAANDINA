<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
         h1{text-align: center;}
         table{margin: 0 auto;}
         .searchbox{width: 400px;margin: 0 auto;margin-bottom: 20px;}
    </style>
  </head>
  <body>
     <h1>Listado de empleados</h1>
     <div class="searchbox">
        <span>Buscar por email:</span>
        <input type="text" name="" value="">
        <button type="button" name="button">Buscar</button>
     </div>
     <table cellpadding="7" cellspacing="4" border="1">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Position</th>
          <th>Salary</th>
          <th>Ver</th>
        </tr>
        <?php
         foreach ($empleados as $empleado) {
            echo "<tr>";
            echo "<td>".$empleado['name']."</td>";
            echo "<td>".$empleado['email']."</td>";
            echo "<td>".$empleado['position']."</td>";
            echo "<td>".$empleado['salary']."</td>";
            echo "<td><a href='detalle/$empleado[id]'>Detalle</a></td>";
            echo "</tr>";
         }
         ?>
     </table>

  </body>
</html>
