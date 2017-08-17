<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
         h1{text-align: center;}
         table{margin: 0 auto;}

    </style>
  </head>
  <body>
     <h1>Detalle de empleado</h1>

     <table  cellpadding="7" cellspacing="4" border="1">
         <tr>
            <td>Name</td>
            <td><?php echo $detalleEmpleado['name'] ?></td>
         </tr>
         <tr>
            <td>Email</td>
            <td><?php echo $detalleEmpleado['email'] ?></td>
         </tr>
         <tr>
            <td>Phone</td>
            <td><?php echo $detalleEmpleado['phone'] ?></td>
         </tr>
         <tr>
            <td>Address</td>
            <td><?php echo $detalleEmpleado['address'] ?></td>
         </tr>
         <tr>
            <td>Position</td>
            <td><?php echo $detalleEmpleado['position'] ?></td>
         </tr>
         <tr>
            <td>Salary</td>
            <td><?php echo $detalleEmpleado['salary'] ?></td>
         </tr>
         <tr>
            <td>Skills</td>
            <td>
              <ol>
                <?php
                 foreach ($detalleEmpleado['skills'] as $skill) {
                    echo "<li>".$skill['skill']."</li>";
                 }
                ?>
              </ol>
            </td>
         </tr>
     </table>

  </body>
</html>
