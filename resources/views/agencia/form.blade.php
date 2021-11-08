@isset ($record)
    {!! Form::model($record,
        ['route'=> ['agencia.update', $record->id], 'method'=>'put', 'class'=>'form-horizontal'])
    !!}
@else
    {!! Form::open(['route' => 'agencia.store', 'class' => 'form-horizontal']) !!}
@endisset

<div class="row">
    <div class="col-md-6">
            <label for="nombre" class="control-label">Nombre de la agencia:</label>
            {{ Form::text('nombre', null, ['class'=>'form-control', 'required'=>'required']) }}
    </div>
    <div class="col-md-6">
            <label for="telefono" class="control-label">Teléfono:</label>
            {{ Form::text('telefono', null, ['class'=>'form-control']) }}
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <label for="domicilio" class="control-label">Domicilio de la agencia:</label>
        {{ Form::text('domicilio', null, ['class'=>'form-control']) }}
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <label for="contacto_nombre" class="control-label">Nombre del contacto:</label>
        {{ Form::text('contacto_nombre', null, ['class'=>'form-control']) }}
    </div>
    <div class="col-md-6">
        <label for="periodo_facturacion" class="control-label">Periodo de facturación:</label>
        {{ Form::text('periodo_facturacion', null, ['class'=>'form-control']) }}
    </div>
</div>

<div class="row">
    <div class="col-md-12 text-right submit">
        @isset($record)
        {{ Form::button('Cancelar', ['class'=>'btn-cancelar btn btn-default']) }}
        <input type="hidden" name="id" value="{{$record->id}}">
        @endisset
        {{ Form::submit($submit_label, ['class'=>'btn btn-primary']) }}
    </div>
</div>

{!! Form::close() !!}