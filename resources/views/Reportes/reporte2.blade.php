<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Orden de reparacion</title>    

    <style type="text/css">
      * {        
        margin-top: 30px;
        margin-left: 5px;
        margin-right: 5px;
        margin-bottom: 5px;
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
    foreach($parameter as $parameter)
    {  
    ?>
    <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

    <table class="tblContenedor">      

      <tr class="filaEncabezado">
        <!-- ///////////////////////////////////////////////////// -->
        <td>
        <strong>SEL-Servicio tecnico multimarca</strong>
        
        <table class="tblContenedor">                       
            <tr>
              <td>Orden - 0{{$numOr}}</td>
              <td>fecha: {{$fecha}}</td>              
            </tr>
            <tr>
              <td>CUIT:</td>
              <td>{{$cuit}}</td>              
            </tr>
            <tr>
              <td>Direccion:</td>
              <td>{{$direc}}</td>              
            </tr>
            <tr>
              <td>Telefono:</td>
              <td>{{$tel}}</td>              
            </tr>
          </table>

        </td>        
        <!-- ///////////////////////////////////////////////////// -->
        <td>
        <strong>SEL-Servicio tecnico multimarca</strong>
        
        <table class="tblContenedor">                       
            <tr>
              <td>Orden - 0{{$numOr}}</td>
              <td>fecha: {{$fecha}}</td>              
            </tr>
            <tr>
              <td>CUIT:</td>
              <td>{{$cuit}}</td>              
            </tr>
            <tr>
              <td>Direccion:</td>
              <td>{{$direc}}</td>              
            </tr>
            <tr>
              <td>Telefono:</td>
              <td>{{$tel}}</td>              
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
          <table class="tblContenedor">                       
            <tr>
              <td>Apellido y nombre:</td>
              <td>{{$apenom}}</td>              
            </tr>
            <tr>
              <td>Telefonoo de contacto:</td>
              <td>{{$telefono}}</td>              
            </tr>
            <tr>
              <td>Domicilio:</td>
              <td>{{$domicilio}}</td>              
            </tr>
            <tr>
              <td>Cantidad Equipos: 0000</td>
              <td>Anticipo ${{$anticipo}}</td>              
            </tr>            
          </table>

        </td>
        <!-- ///////////////// -->      
        <td class="filaDetalle"><!-- ///////////////// -->      
          <strong>DATOS DEL CLIENTE</strong>
          <table class="tblContenedor">                       
            <tr>
              <td>Apellido y nombre:</td>
              <td>{{$apenom}}</td> 
            </tr>
            <tr>
              <td>Telefonoo de contacto:</td>
              <td>{{$telefono}}</td>              
            </tr>
            <tr>
              <td>Domicilio:</td>
              <td>{{$domicilio}}</td>              
            </tr>
            <tr>
              <td>Cantidad Equipos: 0000</td>
              <td>Anticipo ${{$anticipo}}</td>              
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
          <table class="tblContenedor">                       
            <tr>
              <td>Presup estimado ${{$presupEst}}</td>
              <td>Fecha entrega: {{$fechaEntrega}}</td>              
            </tr>
            <tr>
              <td>Marca: {{$marca}}</td>
              <td>Modelo: {{$modelo}}</td>
            </tr>
            <tr>
              <td>IMEI:</td>
              <td>{{$imei}}</td>              
            </tr>
            <tr>
              <td>Descrip falla:</td>
              <td>{{$descripFalla}}</td>              
            </tr>
            <tr>
              <td>Descrip servicio:</td>
              <td>{{$servicio}}</td>              
            </tr> 
            <tr>
              <td>Repuestos:</td>
              <td>{{$repuesto}}</td>              
            </tr>               
            <tr>
              <td>Accesorio:</td>
              <td>{{$accesorio}}</td>              
            </tr>     
          </table>

        </td> <!-- ///////////////// -->      
        <td class="filaDetalle"><!-- ///////////////// -->      
          <strong>DETALLE DEL EQUIPO</strong>
          <table class="tblContenedor">                       
            <tr>
              <td>Presup estimado ${{$presupEst}}</td>
              <td>Fecha entrega: {{$fechaEntrega}}</td>              
            </tr>
            <tr>
              <td>Marca: {{$marca}}</td>
              <td>Modelo: {{$modelo}}</td>
            </tr>
            <tr>
              <td>IMEI:</td>
              <td>{{$imei}}</td>              
            </tr>
            <tr>
              <td>Descrip falla:</td>
              <td>{{$descripFalla}}</td>              
            </tr>
            <tr>
              <td>Descrip servicio:</td>
              <td>{{$servicio}}</td>              
            </tr>
            <tr>
              <td>Repuestos:</td>
              <td>{{$repuesto}}</td>              
            </tr>        
            <tr>
              <td>Accesorio:</td>
              <td>{{$accesorio}}</td>              
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