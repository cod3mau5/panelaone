@isset ($record)
    {!! Form::model($record,
        ['route'=> ['moneda.update', $record->id], 'method'=>'put', 'class'=>'form-horizontal'])
    !!}
@else
    {!! Form::open(['route' => 'moneda.store', 'class' => 'form-horizontal']) !!}
@endisset

<div class="row">
    <div class="col-md-6">
        <label for="nombre" class="control-label">Moneda de pago:</label>
        {{ Form::text('nombre', null, ['class'=>'form-control', 'required'=>'required']) }}
    </div>
    <div class="col-md-6 text-left">

        <label class="control-label d-block">&nbsp;</label>

        @isset($record)
        {{ Form::button('Cancelar', ['class'=>'btn-cancelar btn btn-default']) }}
        <input type="hidden" name="id" value="{{$record->id}}">
        @endisset

        {{ Form::submit($submit_label, ['class'=>'btn btn-primary']) }}
    </div>
</div>

{!! Form::close() !!}