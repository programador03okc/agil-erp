@extends('themes.base')
@include('layouts.menu_proyectos')
@include('layouts.option')

@section('cabecera') Tipo de Insumos @endsection

@section('estilos')
    <link rel="stylesheet" href="{{ asset('template/adminlte2-4/plugins/datatables/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/adminlte2-4/plugins/datatables/extensions/Buttons/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/adminlte2-4/plugins/datatables/extensions/Buttons/css/buttons.bootstrap.min.css') }}">
@endsection

@section('breadcrumb')
<ol class="breadcrumb">
    <li><a href="{{route('proyectos.index')}}"><i class="fas fa-tachometer-alt"></i> Proyectos</a></li>
    <li>Variables de Entorno</li>
    <li class="active">Tipo de Insumos</li>
</ol>
@endsection

@section('cuerpo')
<div class="page-main" type="tipo_insumo">
    <div class="row">
        <div class="col-md-6">
            <fieldset class="group-table">
                <table class="mytable table table-condensed table-bordered table-okc-view" id="listaTipoInsumo">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Código</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                            <th>Fecha Registro</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </fieldset>
        </div>
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-body">
                    <form id="form-tipo_insumo" type="register" form="formulario">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
                        <div class="row">
                            <div class="col-md-4">
                                <h5>Codigo</h5>
                                <input type="hidden" name="id_tp_insumo" primary="ids">
                                <input type="text" class="form-control activation" name="codigo">
                            </div>
                            <div class="col-md-8">
                                <h5>Descripción</h5>
                                <input type="text" class="form-control activation" name="descripcion">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h5 id="fecha_registro">Fecha Registro: <label></label></h5>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('template/adminlte2-4/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/adminlte2-4/plugins/datatables/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/adminlte2-4/plugins/datatables/extensions/Buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('template/adminlte2-4/plugins/datatables/extensions/Buttons/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/adminlte2-4/plugins/datatables/extensions/Buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('template/adminlte2-4/plugins/datatables/extensions/Buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('template/adminlte2-4/plugins/datatables/extensions/Buttons/js/jszip.min.js') }}"></script>

    <script src="{{ asset('js/proyectos/variables/tipo_insumo.js') }}"></script>
@endsection
