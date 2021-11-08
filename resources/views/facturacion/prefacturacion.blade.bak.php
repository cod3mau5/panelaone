@extends ('layouts.boxed')

@section ('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{route('facturacion.index')}}">Facturación</a>
    </li>
</ol>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><strong>SELECCIÓN PARA PRE-FACTURACIÓN</strong></h3>
    </div>
    <div class="box-body">
        {!! Form::open(['route' => 'facturacion.prefacturacion', 'class' => 'form-horizontal', 'method'=>'get']) !!}
        <div class="form-group">
            <div class="col-md-3">
                <label for="desde">Fecha inicio</label>
                <input type="text" class="form-control" name="desde" id="desde" required="required" autocomplete="off"
                    value="<?php echo isset($_GET['desde']) ? $_GET['desde'] : ''; ?>"
                >
            </div>
            <div class="col-md-3">
                <label for="hasta">Fecha fin</label>
                <input type="text" class="form-control" name="hasta" id="hasta" required="required" autocomplete="off"
                    value="<?php echo isset($_GET['hasta']) ? $_GET['hasta'] : ''; ?>"
                >
            </div>
            <div class="col-md-3">
                <label for="hasta" class="control-label">Filtrar por</label>
                <select name="campo_fecha" id="campo_fecha" class="form-control">
                    <option value="ambas" <?php if (isset($_GET['campo_fecha']) && $_GET['campo_fecha'] == 'ambas') echo 'selected="selected"'; ?>>Ambas</option>
                    <option value="arrival" <?php if (isset($_GET['campo_fecha']) && $_GET['campo_fecha'] == 'arrival') echo 'selected="selected"'; ?>>Llegadas</option>
                    <option value="departure" <?php if (isset($_GET['campo_fecha']) && $_GET['campo_fecha'] == 'departure') echo 'selected="selected"'; ?>>Salidas</option>
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

@isset($reservas)
{!! Form::open(['route' => 'facturacion.procesar', 'class' => 'form-horizontal', 'id'=>'facturacion_cambiar', 'method'=>'post']) !!}
    <div class="box box-primary">
        <div class="box-header with-border">
            <h4 class="box-title">RESULTADOS <?php echo "DEL ".$_GET['desde']. " HASTA EL ".$_GET['hasta'];?></h4>
            <span class="pull-right">
                <button type="button" class="btn btn-primary btn-cambiar-estatus">Facturar</button>
            </span>
        </div>
        <div class="box-body">
            <table class="table table-condensed">
                <tr>
                    <td>Book #</td>
                    <td>Nombre</td>
                    <td>Llegada</td>
                    <td>Salida</td>
                    <td>Vuelo</td>
                    <td>Pax</td>
                    <td>Hotel</td>
                    <td>Agencia</td>
                    <td>Estatus Pago</td>
                @foreach ($reservas as $row)
                <tr>
                    <td>{{$row->book}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->arrival_date}}</td>
                    <td>{{$row->departure_date}}</td>
                    <td>{{$row->arrival_flight}}</td>
                    <td>{{$row->pax}}</td>
                    <td>{{$row->hotel->nombre}}</td>
                    <td>{{$row->agencia->nombre}}</td>
                    <td>
                        {{$row->pago_estatus}}
                        <input type="hidden" name="Reservacion[{{$row->id}}][pago_estatus]" value="facturada">
                        <select class="form-control estatus_pago" required="required" name="Reservacion[{{$row->id}}][pago_estatus]">
                            <option value="pendiente" <?php if ($row->pago_estatus == 'pendiente') echo 'selected="selected"'; ?>>Pendiente</option>
                            <option value="cobrada" <?php if ($row->pago_estatus == 'cobrada') echo 'selected="selected"'; ?>>Cobrada</option>
                            <option value="facturada" <?php if ($row->pago_estatus == 'facturada') echo 'selected="selected"'; ?>>Facturada</option>
                            <option value="pagada" <?php if ($row->pago_estatus == 'pagada') echo 'selected="selected"'; ?>>Pagada</option>
                        </select>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    {!! Form::close() !!}
@endisset

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

            $('.btn-cambiar-estatus').on('click', function () {
                var changed = false;
                $('.estatus_pago').each(function(index, value) {
                    if (!changed && $(this).val() != 'pendiente') changed = true;
                });
                if (changed) {
                    if (!$('#dataConfirmModal').length) {
                        $('body').append('<div class="modal fade" id="dataConfirmModal" tabindex="-1" role="dialog" aria-labelledby="dataConfirmLabel"><div class="modal-dialog modal-sm" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="dataConfirmLabel">Confirmación</h4></div><div class="modal-body text-justify">Esta a punto de cambiar de estatus algunas reservaciones marcadas como pendientes.<br> <strong>¿Esta seguro de continuar?</strong></div><div class="modal-footer"><a href="" class="btn btn-default" data-dismiss="modal">Cancelar</a><button class="btn btn-primary" id="dataConfirmOK">Continuar</button></div></div></div></div>');
                    } else {
                        $('#dataConfirmModal').unbind('click');
                    }
                    $('body').on('click', '#dataConfirmOK', function() {
                        $('#facturacion_cambiar').submit();
                    });
                    $('#dataConfirmModal').modal({show:true});
                }
            });
        });
    </script>
@endsection