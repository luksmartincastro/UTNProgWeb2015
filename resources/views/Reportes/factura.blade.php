<!DOCTYPE html>
<html>
<head>
  <title>Factura PDF</title>
  <meta charset="UTF-8">
  <style type="text/css">
    

   table {
      
      border-collapse: collapse;
      border: 1px solid black;
      width: 100%;

    }
    
  table,  th, td {

      height: 40px;
      text-align: left;
      padding: 1px 5px 1px 15px;
      font-size: 18px;
     /*border: 1px solid black;*/
    }
        .fuente {
          font-size: 25px;
        }
  </style>
</head>
<body>
     <div>
       <table>
         <tr>
           <th><strong class="fuente" >SEL-Servicio tecnico multimarca</strong></th>
           <th></th>
         </tr>
         <tr>
           <td><b>Direcion: </b><?php echo $parameter['direc']; ?></td>
           <td></td>
         </tr>
         <tr>
           <td><b>Telefono: </b><?php echo $parameter['tel']; ?></td>
           <td><b>N Factura:</b>-0<?php echo $parameter['numOr']; ?></td>
         </tr>
         <tr>
           <td><b>CUIT: </b><?php echo $parameter['cuit']; ?></td>
           <td><b>Fecha: </b><?php echo $parameter['fecha']; ?></td>
         </tr>
       </table>
     </div>
     <br>
     <div>
       <table>
         <tr>
           <td><b>Nombre y Apellido: </b><?php echo $parameter['apenom']; ?></td>
         </tr>
         <tr>
           <td><b>Telefono: </b><?php echo $parameter['telefono']; ?></td>
         </tr>
       </table>
     </div>
      <br>
      <div>
        <table>
          <tr>
            <th>Marca y Modelo</th>
            <th> IMEI</th>
            <th>Detalle </th>
          </tr>          
          <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
          <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// --> 
          <tr>            
            <td><?php echo $parameter['marca']; ?> <?php echo $parameter['modelo']; ?></td>
            <td><?php echo $parameter['imei']; ?> </td>
            <td><?php echo $parameter['servicio']; ?></td>
          </tr>
          <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
          <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->          
          <tr>
            
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </table>
      </div>
      <br>
      <div>
        <table>
          <tr>
            <td><b>Importe Total: </b><?php echo $parameter['total']; ?></td>
          </tr>
        </table>
      </div>

</body>
</html>
      
    