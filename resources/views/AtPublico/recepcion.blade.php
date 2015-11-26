@extends('layout2')

@section('menu')
    
    <ul class="nav nav-sidebar">
      <li><a href="#">Presupuesto </a></li>
      <li class="active"><a href="#">Recepcion</a></li>
      <li><a href="#">Entrega</a></li>            
    </ul>

@endsection

@section('panelUsuario')

    <h1 class="page-header">Usuario actual</h1>
    <div class="panel panel-default">
      <div class="panel-body">
        Basic panel example
      </div>
    </div>

    <h1 class="page-header">Estadisticas</h1>
    <div class="panel panel-default">
      <div class="panel-body">
        Basic panel example
      </div>
    </div>

    <h1 class="page-header">Chat</h1>
    <div class="panel panel-default">
      <div class="panel-body">
        Basic panel example
      </div>
    </div>
    
@endsection

@section('content')
    
        <h1 class="page-header">Datos del cliente</h1>
        <div class="panel panel-default">
              <div class="panel-heading"></div>
              <div class="panel-body">

                <div class="row"><!-- ************************************************ -->
                  <div class="col-md-6">
                  
                    <div class="form-group">
                        
                        <input type="text" class="form-control" id="exampleInputName2" placeholder="Apellido y nombre del cliente">
                    </div>

                  </div>
                  <!-- *************************************************************** -->
                  <div class="col-md-3">
                  
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#ModalTelefono">
                    <i class="glyphicon glyphicon-phone-alt"></i>
                      
                    </button>

                  </div>
                  <div class="col-md-3">
                                                          
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal">
                    <i class="glyphicon glyphicon-home"></i> 
                      
                    </button>

                  </div>
                </div><!-- *********************************************************** -->
                <div class="form-group">                                        
                    <textarea class="form-control" rows="2"placeholder="Urgencia o situacion especial"></textarea>
                </div>

              </div>
            </div>

      <h1 class="sub-header">Detalle del trabajo
      
      <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#bookmarkModal">
        <i class="glyphicon glyphicon-plus-sign"></i> 
        
      </a>            

      </h1>

      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Marca modelo</th>
              <th>Gama</th>
              <th>IMEI</th>
              <th>Presup Estimado</th>
              <th>Fecha Estimada</th>
              <th>Detalle</th>
              <th>Eliminar</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td> <i class="glyphicon glyphicon-ok"></i> </td>
              <td>Motorola MotoG</td> 
              <td>Alta</td>
              <td>15-321654-9875</td>
              <td>$ 94</td>
              <td>5/12/2015</td>
              <td>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success btn-xs btn-block" data-toggle="modal" data-target="#DetalleModal">
                <i class="glyphicon glyphicon-list-alt"></i>                          
                </button>
              </td>
              <td>
                <button type="button" class="btn btn-danger btn-xs btn-block">
                <i class="glyphicon glyphicon-minus-sign"></i>
                </button>
              </td>
            </tr>
            <tr>
              <td> <i class="glyphicon glyphicon-ok"></i> </td>
              <td>Motorola X</td> 
              <td>Alta</td>
              <td>15-321654-9875</td>
              <td>$ 215</td>
              <td>5/12/2015</td>
              <td>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success btn-xs btn-block" data-toggle="modal" data-target="#DetalleModal">
                <i class="glyphicon glyphicon-list-alt"></i>
                </button>
              </td>
              <td>
                <button type="button" class="btn btn-danger btn-xs btn-block">
                <i class="glyphicon glyphicon-minus-sign"></i>
                </button>
              </td>
            </tr>
            <tr>
              <td> <i class="glyphicon glyphicon-ok"></i> </td>
              <td>Motorola MotoG</td> 
              <td>Alta</td>
              <td>15-321654-9875</td>
              <td>$ 94</td>
              <td>5/12/2015</td>
              <td>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success btn-xs btn-block" data-toggle="modal" data-target="#DetalleModal">
                <i class="glyphicon glyphicon-list-alt"></i>                          
                </button>
              </td>
              <td>
                <button type="button" class="btn btn-danger btn-xs btn-block">
                <i class="glyphicon glyphicon-minus-sign"></i>
                </button>
              </td>
            </tr>
            
          </tbody>
        </table>
      </div>

      <h1 class="page-header">Detalle de presupuesto</h1>
      <div class="panel panel-default">
        <div class="panel-body">
          Basic panel example
        </div>
      </div>

@endsection

