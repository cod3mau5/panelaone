@isset ($record)
    {!! Form::model($record,
        ['route'=> ['tipo.update', $record->id], 'method'=>'put', 'class'=>'form-horizontal'])
    !!}
@else
    {!! Form::open(['route' => 'tipo.store', 'class' => 'form-horizontal']) !!}
@endisset

<div class="row">
    <div class="col-md-4">
        <label for="nombre" class="control-label">Nombre del Servicio:</label>
        {{ Form::text('nombre', null, ['class'=>'form-control', 'required'=>'required']) }}
    </div>
    <div class="col-md-4">
        <label for="nombre" class="control-label">Tipo de Servicio:</label>
        {{ Form::select('tipo',
            [
                'ow'=>'One Way',
                'rt'=>'Round Trip',
                'os'=>'Open Service',
                'ws'=>'One Way Salida',
                'wh'=>'One Way Hotel'
            ], null,
            ['class'=>'form-control', 'placeholder'=>'Seleccione el tipo', 'required'=>'required'])
        }}
    </div>
    <div class="col-md-4 text-left">

        <label class="control-label d-block">&nbsp;</label>

        @isset($record)
        {{ Form::button('Cancelar', ['class'=>'btn-cancelar btn btn-default']) }}
        <input type="hidden" name="id" value="{{$record->id}}">
        @endisset

        {{ Form::submit($submit_label, ['class'=>'btn btn-primary']) }}
    </div>
</div>

{!! Form::close() !!}