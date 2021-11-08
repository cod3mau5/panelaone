@extends ('layouts.boxed')

@section ('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="/administracion">Administración</a>
    </li>
    <li class="breadcrumb-item active">Editar Monedas de Pago</li>
</ol>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><strong>EDITAR MONEDAS DE PAGO</strong></h3>
    </div>
    <div class="box-body">
        <div id="agregar">
            @include('moneda.form')
        </div>
    </div><!-- /.box-body -->
</div>
@endsection

@section ('footer-scripts')
    <script>
        $(document).ready(function() {
            $('.form-horizontal').validate();
        });
    </script>
@endsection