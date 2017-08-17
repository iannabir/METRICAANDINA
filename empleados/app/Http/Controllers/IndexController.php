<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class IndexController extends Controller
{
    public function index() {
        $empleados = getJsonDecode();
        return view('index')->with('empleados',$empleados);
    }

    public function detalle($id){
      $empleados = getJsonDecode();
      $detalleEmpleado = array();
      foreach ($empleados as $empleado) {
         if ($empleado['id'] == $id){
           $detalleEmpleado = $empleado;
         }
      }
       return view('detalle')->with('detalleEmpleado',$detalleEmpleado);
    }

    public function webservicexml($min, $max){
      $empleados = getJsonDecode();
      $filtroSalary = array();
      foreach ($empleados as $empleado) {
         if (substr($empleado['salary'],1) > number_format($min) && substr($empleado['salary'],1) < number_format($max)){
           $filtroSalary[] = $empleado;
         }
      }

      $content = "<employees>";
      foreach ($filtroSalary as $filtroEmployee) {
         $content .= "<employee>";
         $content .= "<id>".$filtroEmployee['id']."</id>";
         $content .= "<isOnline>".$filtroEmployee['isOnline']."</isOnline>";
         $content .= "<salary>".$filtroEmployee['salary']."</salary>";
         $content .= "<age>".$filtroEmployee['age']."</age>";
         $content .= "<position>".$filtroEmployee['position']."</position>";
         $content .= "<name>".$filtroEmployee['name']."</name>";
         $content .= "<gender>".$filtroEmployee['gender']."</gender>";
         $content .= "<email>".$filtroEmployee['email']."</email>";
         $content .= "<phone>".$filtroEmployee['phone']."</phone>";
         $content .= "<address>".$filtroEmployee['address']."</address>";
         $content .= "</employee>";
      }

        $content .= "</employees>";
      return response($content,200)->header('Content-Type', 'text/xml');

    }

}

?>
