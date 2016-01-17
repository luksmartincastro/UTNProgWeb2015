<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Orden de reparacion</title>    

    <style type="text/css">
      * {        
        margin: 0px;        
        padding:0;
      }
      
      body
      {
        font:14px Georgia, serif;
      }
      
      td{
         border:1px solid #ccc;
         padding:10px;
      }
      
      .tblContenedor
      {
        margin-top: 70px;
        margin-left: 5px;
        margin-right: 5px;
        margin-bottom: 40px;        
        width: 100%; 
        border: 1px solid black;
      }

      .tblContEncabezado
      {
        margin-top: 25px;
        margin-left: 5px;
        margin-right: 5px;
        margin-bottom: 20px;        
        width: 100%; 
        border: 1px solid black;
      }

      .tblContCliente
      {
        margin-top: 25px;
        margin-left: 5px;
        margin-right: 5px;
        margin-bottom: 20px;        
        width: 100%; 
        border: 1px solid black;
      }

      .tblContEquipo
      {
        margin-top: 25px;
        margin-left: 5px;
        margin-right: 5px;
        margin-bottom: 20px;        
        width: 100%; 
        border: 1px solid black;
      }

      .filaEncabezado
      {
        padding: 15px;
        text-align: center;
      }
      
      .filaDetalle
      {
        text-align: center;        
      }

      
    </style>


  </head>
  <body> 
    
    <?php 
    foreach($parameters as $parameter)
    {  
    ?>
    <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

    <table class="tblContenedor">      

      <tr class="filaEncabezado">
        <!-- ///////////////////////////////////////////////////// -->
        <td>
        <strong>SEL-Servicio tecnico multimarca</strong>
        
        <table class="tblContEncabezado">                       
            <tr>
              <td>Orden - 0<?php echo $parameter['numOr']; ?></td>
              <td>fecha: <?php echo $parameter['fecha']; ?></td>              
            </tr>
            <tr>
              <td>CUIT:</td>
              <td><?php echo $parameter['cuit']; ?></td>              
            </tr>
            <tr>
              <td>Direccion:</td>
              <td><?php echo $parameter['direc']; ?></td>              
            </tr>
            <tr>
              <td>Telefono:</td>
              <td><?php echo $parameter['tel']; ?></td>              
            </tr>
          </table>

        </td>        
        <!-- ///////////////////////////////////////////////////// -->
        <td>
        <strong>SEL-Servicio tecnico multimarca</strong>
        
        <table class="tblContEncabezado">                       
            <tr>
              <td>Orden - 00<?php echo $parameter['numOr']; ?></td>
              <td>fecha: <?php echo $parameter['fecha']; ?></td>              
            </tr>
            <tr>
              <td>CUIT:</td>
              <td><?php echo $parameter['cuit']; ?></td>              
            </tr>
            <tr>
              <td>Direccion:</td>
              <td><?php echo $parameter['direc']; ?></td>              
            </tr>
            <tr>
              <td>Telefono:</td>
              <td><?php echo $parameter['tel']; ?></td>              
            </tr>
          </table>

        </td>        
      </tr>
      <!-- ////////////////////////////////////////////////////////////// -->
      <!-- /////////////////////DATOS DEL CLIENTE//////////////////////// -->
      <!-- ////////////////////////////////////////////////////////////// -->
      <tr>
        <td class="filaDetalle"><!-- ///////////////// -->      
        <strong>DATOS DEL CLIENTE</strong>
          <table class="tblContCliente">                       
            <tr>
              <td>Apellido y nombre:</td>
              <td><?php echo $parameter['apenom']; ?></td>              
            </tr>
            <tr>
              <td>Telefonoo de contacto:</td>
              <td><?php echo $parameter['telefono']; ?></td>              
            </tr>
            <tr>
              <td>Domicilio:</td>
              <td><?php echo $parameter['domicilio']; ?></td>              
            </tr>
            <tr>
              <td>Cantidad Equipos: <?php echo $parameter['cantEq']; ?></td>
              <td>Anticipo $<?php echo $parameter['anticipo']; ?></td>              
            </tr>            
          </table>

        </td>
        <!-- ///////////////// -->      
        <td class="filaDetalle"><!-- ///////////////// -->      
          <strong>DATOS DEL CLIENTE</strong>
          <table class="tblContCliente">                       
            <tr>
              <td>Apellido y nombre:</td>
              <td><?php echo $parameter['apenom']; ?></td> 
            </tr>
            <tr>
              <td>Telefonoo de contacto:</td>
              <td><?php echo $parameter['telefono']; ?></td>              
            </tr>
            <tr>
              <td>Domicilio:</td>
              <td><?php echo $parameter['domicilio']; ?></td>              
            </tr>
            <tr>
              <td>Cantidad Equipos: <?php echo $parameter['cantEq']; ?></td>
              <td>Anticipo $<?php echo $parameter['anticipo']; ?></td>              
            </tr>            
          </table>

        </td><!-- ///////////////// -->              
      </tr>
      <!-- ////////////////////////////////////////////////////////////// -->
      <!-- /////////////////////DETALLE DE EQUIPO//////////////////////// -->
      <!-- ////////////////////////////////////////////////////////////// -->
      <tr>
        <td class="filaDetalle"><!-- ///////////////// -->      
        <strong>DETALLE DEL EQUIPO</strong>
          <table class="tblContEquipo">                       
            <tr>
              <td>Presup estimado $<?php echo $parameter['presupEst']; ?></td>
              <td>Fecha entrega: <?php echo $parameter['fechaEntrega']; ?></td>              
            </tr>
            <tr>
              <td>Marca: <?php echo $parameter['marca']; ?></td>
              <td>Modelo: <?php echo $parameter['modelo']; ?></td>
            </tr>
            <tr>
              <td>IMEI:</td>
              <td><?php echo $parameter['imei']; ?></td>              
            </tr>
            <tr>
              <td>Descrip falla:</td>
              <td><?php echo $parameter['descripFalla']; ?></td>              
            </tr>
            <tr>
              <td>Descrip servicio:</td>
              <td><?php echo $parameter['servicio']; ?></td>              
            </tr> 
            <tr>
              <td>Repuestos:</td>
              <td><?php echo $parameter['repuesto']; ?></td>              
            </tr>               
            <tr>
              <td>Accesorio:</td>
              <td><?php echo $parameter['accesorio']; ?></td>              
            </tr>     
          </table>

        </td> <!-- ///////////////// -->      
        <td class="filaDetalle"><!-- ///////////////// -->      
          <strong>DETALLE DEL EQUIPO</strong>
          <table class="tblContEquipo">                       
            <tr>
              <td>Presup estimado $<?php echo $parameter['presupEst']; ?></td>
              <td>Fecha entrega: <?php echo $parameter['fechaEntrega']; ?></td>              
            </tr>
            <tr>
              <td>Marca: <?php echo $parameter['marca']; ?></td>
              <td>Modelo: <?php echo $parameter['modelo']; ?></td>
            </tr>
            <tr>
              <td>IMEI:</td>
              <td><?php echo $parameter['imei']; ?></td>              
            </tr>
            <tr>
              <td>Descrip falla:</td>
              <td><?php echo $parameter['descripFalla']; ?></td>              
            </tr>
            <tr>
              <td>Descrip servicio:</td>
              <td><?php echo $parameter['servicio']; ?></td>              
            </tr>
            <tr>
              <td>Repuestos:</td>
              <td><?php echo $parameter['repuesto']; ?></td>              
            </tr>        
            <tr>
              <td>Accesorio:</td>
              <td><?php echo $parameter['accesorio']; ?></td>              
            </tr>            
          </table>

        </td><!-- ///////////////// -->              
      </tr>
      <!-- ////////////////////////////////////////////////////////////// -->
      <!-- /////////////////////DATOS DEL FOOTER///////////////////////// -->
      <!-- ////////////////////////////////////////////////////////////// -->
      <tr>
        <td>        
          <table class="tblContenedor">                       
            <tr>
              <td>Ud fue atendido por:</td>
              <td>Juan Perez</td>              
            </tr>            
          </table>
        </td>
        <!-- ///////////////// -->
        <td>        
          <table class="tblContenedor">                       
            <tr>
              <td>Ud fue atendido por:</td>
              <td>Juan Perez</td>              
            </tr>            
          </table>
        </td>        
      </tr>
    </table>   
    
    <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <?php     
    }  
    ?>

    
   
  </body>
</html>