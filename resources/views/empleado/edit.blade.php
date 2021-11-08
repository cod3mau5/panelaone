@extends ('layouts.boxed')

@section ('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="/administracion">Administración</a>
    </li>
    <li class="breadcrumb-item active">Editar Empleado</li>
</ol>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><strong>EDITAR EMPLEADO</strong></h3>
    </div>
    <div class="box-body">
        <div id="agregar">
            @include('empleado.form')
        </div>
    </div><!-- /.box-body -->
</div>
@endsection

@section ('footer-scripts')
    <script>
        $(document).ready(function() {
             $('#licencia_exp')
                .mask('00/00/0000', {placeholder: "__/__/____"})
                .datetimepicker({ format: 'DD/MM/YYYY'});
            $('#cert_medico_exp')
                .mask('00/00/0000', {placeholder: "__/__/____"})
                .datetimepicker({ format: 'DD/MM/YYYY'});
            $('#cert_medico_fecha')
                .mask('00/00/0000', {placeholder: "__/__/____"})
                .datetimepicker({ format: 'DD/MM/YYYY'});

            $('.form-horizontal').validate();
        });
    </script>
@endsection