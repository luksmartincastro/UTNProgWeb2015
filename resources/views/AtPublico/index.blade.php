@extends('layout2')

@section('menu')
    
    <ul class="nav nav-sidebar">
      <li class="active"><a href="#">Presupuesto </a></li>
      <li><a href="#">Recepcion</a></li>
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

      <div class="row"><!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div class="col-md-7">
       
          <h1 class="page-header">Datos del cliente</h1>
          <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">

                  <div class="row"><!-- ************************************************ -->
                    <div class="col-md-8">
                    
                      <div class="form-group">
                          
                          <input type="text" class="form-control" id="exampleInputName2" placeholder="Apellido y nombre del cliente">
                      </div>

                    </div>
                    <!-- *************************************************************** -->
                    <div class="col-md-2">
                    
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#ModalTelefono">
                      <i class="glyphicon glyphicon-phone-alt"></i>
                        
                      </button>

                    </div>
                    <div class="col-md-2">
                                                            
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#ModalDomicilio">
                      <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                      </button>

                    </div>
                  </div><!-- *********************************************************** -->
                  <div class="form-group">                                        
                      <textarea class="form-control" rows="2"placeholder="Urgencia o situacion especial"></textarea>
                  </div>

                </div>
          </div>

        </div>
        <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div class="col-md-5">
                  
          <h1 class="page-header">Presupuesto</h1>
          <div class="panel panel-default">
            <div class="panel-body">
              Basic panel example
            </div>
          </div>

        </div>
      </div><!-- //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    
      <h1 class="sub-header">Detalle del trabajo
        <!-- Large modal -->
        <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target=".bs-example-modal-lg">
        <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
        </button>           
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
                <button type="button" class="btn btn-success btn-xs btn-block" data-toggle="modal" data-target="#ModalDetalle">
                <i class="glyphicon glyphicon-list-alt"></i>                          
                </button>
              </td>
              <td>
                <button type="button" class="btn btn-danger btn-xs btn-block">
                <b>X</b>
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
                <b>X</b>
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
                <b>X</b>
                </button>
              </td>
            </tr>
            
          </tbody>
        </table>
      </div>

      <div class="panel panel-default">
        <div class="panel-body">
          Basic panel example
        </div>
      </div>

      <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
      <!-- /////////////////////////////////  MODAL PRESUPUESTO  ////////////////////////////////////////////////// -->
      <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">PRESUPUESTO</h4>
            </div>
            <div class="modal-body">
              ...
              ...Modal Presupuesto
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary">Guardar cambios</button>
            </div>

          </div>
        </div>
      </div>
      <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
      <!-- ////////////////////////////////////  MODAL TELEFONO  ////////////////////////////////////////////////// -->
      <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
      <!-- Modal -->
      <div class="modal fade" id="ModalTelefono" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">TELEFONO DEL USUARIO</h4>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary">Guardar cambios</button>
            </div>
          </div>
        </div>
      </div>
      <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
      <!-- ///////////////////////////////////  MODAL DOMICILIO  ////////////////////////////////////////////////// -->
      <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
      <!-- Modal -->
      <div class="modal fade" id="ModalDomicilio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">DOMICILIO DEL USUARIO</h4>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary">Guardar cambios</button>
            </div>
          </div>
        </div>
      </div>
      <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
      <!-- ////////////////////////////////////  MODAL DETALLES  ////////////////////////////////////////////////// -->
      <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
      <!-- Modal -->
      <div class="modal fade" id="ModalDetalle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">DETALLE DE EQUIPO</h4>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary">Guardar cambios</button>
            </div>
          </div>
        </div>
      </div>

@endsection

