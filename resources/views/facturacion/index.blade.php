@extends ('layouts.boxed')

@section ('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{route('facturacion.index')}}">Facturación</a>
    </li>
</ol>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><strong>SELECCION PARA PRE-FACTURACIÓN</strong></h3>
    </div>
    <div class="box-body">
        {!! Form::open(['route' => 'facturacion.prefacturacion', 'class' => 'form-horizontal', 'method'=>'get']) !!}
        <div class="form-group">
            <div class="col-md-3">
                <label for="desde">Fecha inicio</label>
                <input type="text" class="form-control" name="desde" id="desde" required="required" autocomplete="off">
            </div>
            <div class="col-md-3">
                <label for="hasta">Fecha fin</label>
                <input type="text" class="form-control" name="hasta" id="hasta" required="required" autocomplete="off">
            </div>
            <div class="col-md-3">
                <label for="hasta" class="control-label">Filtrar por</label>
                <select name="campo_fecha" id="campo_fecha" class="form-control">
                    <option value="ambas">Ambas</option>
                    <option value="arrival">Llegadas</option>
                    <option value="departure">Salidas</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="agencia" class="control-label">Agencia</label>
                {{ Form::select('agencia_id', $agencias, null,
                    ['class'=>'form-control', 'placeholder'=>'Todas las agencias'])
                }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                {{ Form::submit('Buscar', ['class'=>'btn btn-primary']) }}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection

@section ('footer-scripts')
    <script>
        $(document).ready(function() {
            $('.form-horizontal').validate();
            $('#desde').datetimepicker({ format: 'DD/MM/YYYY' });
            $('#hasta').datetimepicker({
                format: 'DD/MM/YYYY',
                useCurrent: false,
            });
            $("#desde").on("dp.change", function (e) {
                $('#hasta').data("DateTimePicker").minDate(e.date);
            });
            $("#hasta").on("dp.change", function (e) {
                $('#desde').data("DateTimePicker").maxDate(e.date);
            });
        });
    </script>
@endsection