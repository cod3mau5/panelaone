@isset ($zona)
{!! Form::model($zona, ['route'=> ['zonas.update', $zona->id], 'method'=>'put', 'class'=>'form-horizontal']) !!}
@else
{!! Form::open(['route' => 'zonas.store', 'class' => 'form-horizontal']) !!}
@endisset

<div class="row">
    <div class="col-md-8">
        <label for="nombre" class="control-label">Nombre de la zona:</label>
        {{ Form::text('nombre', null,
            ['id'=>'nombre', 'class'=>'form-control','required'=>'required','placeholder'=>'Nombre']) }}
    </div>
    <div class="col-md-3">
        <label class="control-label d-block">&nbsp;</label>
        @isset($zona)
        {{ Form::button('Cancelar', ['class'=>'btn-cancelar btn btn-default']) }}
        @endisset
        {{ Form::submit($submit_label, ['class'=>'btn btn-primary']) }}
    </div>
</div>

{!! Form::close() !!}