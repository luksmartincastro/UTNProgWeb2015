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
    
    <table class="tblContenedor">      

      <tr class="filaEncabezado">
        <!-- ///////////////////////////////////////////////////// -->
        <td>
        <strong>ORDEN DE REPARACION - 00000</strong>
        
        <table class="tblContenedor">                       
            <tr>
              <td>SEL-Servicio tecnico multimarca</td>
              <td>fecha: 00/00/00</td>              
            </tr>
            <tr>
              <td>CUIT:</td>
              <td>00-00000000-0</td>              
            </tr>
            <tr>
              <td>Direccion:</td>
              <td>mendoza 1787</td>              
            </tr>
            <tr>
              <td>Telefono:</td>
              <td>381-4324973</td>              
            </tr>
          </table>

        </td>        
        <!-- ///////////////////////////////////////////////////// -->
        <td>
        <strong>ORDEN DE REPARACION - 00000</strong>
        
        <table class="tblContenedor">                       
            <tr>
              <td>SEL-Servicio tecnico multimarca</td>
              <td>fecha: 00/00/00</td>              
            </tr>
            <tr>
              <td>CUIT:</td>
              <td>00-00000000-0</td>              
            </tr>
            <tr>
              <td>Direccion:</td>
              <td>mendoza 1787</td>              
            </tr>
            <tr>
              <td>Telefono:</td>
              <td>381-4324973</td>              
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
              <td>381-6408757 {{$telContac}}</td>              
            </tr>
            <tr>
              <td>Presupuesto estimado $000</td>
              <td>Anticipo $0000</td>              
            </tr>            
          </table>

        </td>
        <!-- ///////////////// -->      
        <td class="filaDetalle"><!-- ///////////////// -->      
          <strong>DATOS DEL CLIENTE</strong>
          <table class="tblContenedor">                       
            <tr>
              <td>Apellido y nombre:</td>
              <td>Juan Roman Riquelme</td>              
            </tr>
            <tr>
              <td>Telefonoo de contacto:</td>
              <td>381-6408757</td>              
            </tr>
            <tr>
              <td>Presupuesto estimado $000</td>
              <td>Anticipo $0000</td>              
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
              <td>Marca: Motorola</td>
              <td>Fecha entrega: 00/00/00</td>              
            </tr>
            <tr>
              <td>Modelo: Moto G</td>
              <td></td>              
            </tr>
            <tr>
              <td>IMEI:</td>
              <td>00000-00000-00000</td>              
            </tr>
            <tr>
              <td>Descrip falla:</td>
              <td>Falla cuando recibe un mensaje - Falla cuando recibe un mensaje - Falla cuando recibe un mensaje</td>              
            </tr>
            <tr>
              <td>Descrip servicio:</td>
              <td>Falla cuando recibe un mensaje - Falla cuando recibe un mensaje - Falla cuando recibe un mensaje</td>              
            </tr>        
            <tr>
              <td>Accesorio:</td>
              <td>Falla cuando recibe un mensaje - Falla cuando recibe un mensaje - Falla cuando recibe un mensaje</td>              
            </tr>     
          </table>

        </td> <!-- ///////////////// -->      
        <td class="filaDetalle"><!-- ///////////////// -->      
          <strong>DETALLE DEL EQUIPO</strong>
          <table class="tblContenedor">                       
            <tr>
              <td>Marca: Motorola</td>
              <td>Fecha entrega: 00/00/00</td>              
            </tr>
            <tr>
              <td>Modelo: Moto G</td>
              <td></td>              
            </tr>
            <tr>
              <td>IMEI:</td>
              <td>00000-00000-00000</td>              
            </tr>
            <tr>
              <td>Descrip falla:</td>
              <td>Falla cuando recibe un mensaje - Falla cuando recibe un mensaje - Falla cuando recibe un mensaje</td>              
            </tr>
            <tr>
              <td>Descrip servicio:</td>
              <td>Falla cuando recibe un mensaje - Falla cuando recibe un mensaje - Falla cuando recibe un mensaje</td>              
            </tr>        
            <tr>
              <td>Accesorio:</td>
              <td>Falla cuando recibe un mensaje - Falla cuando recibe un mensaje - Falla cuando recibe un mensaje</td>              
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
   
  </body>
</html>