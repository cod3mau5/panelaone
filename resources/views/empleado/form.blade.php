@isset ($record)
    {!! Form::model($record,
        ['route'=> ['empleado.update', $record->id], 'method'=>'put', 'class'=>'form-horizontal'])
    !!}
@else
    {!! Form::open(['route' => 'empleado.store', 'class' => 'form-horizontal']) !!}
@endisset

<div class="row">
    <div class="col-md-4">
        <label for="nombre" class="control-label">Nombre del empleado:</label>
        {{ Form::text('nombre', null, ['class'=>'form-control', 'required'=>'required']) }}
    </div>
    <div class="col-md-4">
        <label for="telefono" class="control-label">Teléfono:</label>
        {{ Form::text('telefono', null, ['class'=>'form-control']) }}
    </div>
    <div class="col-md-4">
        <label for="rfc" class="control-label">RFC:</label>
        {{ Form::text('rfc', null, ['class'=>'form-control']) }}
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <label for="domicilio" class="control-label">Domicilio:</label>
        {{ Form::text('domicilio', null, ['class'=>'form-control']) }}
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <label for="licencia_num" class="control-label">Licencia número:</label>
        {{ Form::text('licencia_num', null, ['class'=>'form-control']) }}
    </div>
    <div class="col-md-4">
        <label for="licencia_tipo" class="control-label">Licencia tipo:</label>
        {{ Form::text('licencia_tipo', null, ['class'=>'form-control']) }}
    </div>
    <div class="col-md-4">
        <label for="licencia_exp" class="control-label">Licencia expiración:</label>
        {{ Form::text('licencia_exp', null, ['class'=>'form-control', 'id'=>'licencia_exp']) }}
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <label for="licencia_num" class="control-label">Certificado médico número:</label>
        {{ Form::text('cert_medico', null, ['class'=>'form-control']) }}
    </div>
    <div class="col-md-4">
        <label for="licencia_tipo" class="control-label">Certificado fecha expedición:</label>
        {{ Form::text('cert_medico_fecha', null, ['class'=>'form-control', 'id'=>'cert_medico_fecha']) }}
    </div>
    <div class="col-md-4">
        <label for="licencia_exp" class="control-label">Certificado fecha expiración:</label>
        {{ Form::text('cert_medico_exp', null, ['class'=>'form-control', 'id'=>'cert_medico_exp']) }}
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