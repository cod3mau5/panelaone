@extends ('layouts.boxed')

@section ('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="/administracion">Administración</a>
    </li>
    <li class="breadcrumb-item active">Agencias</li>
</ol>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><strong>AGENCIAS</strong></h3>
        <button type="button" class="btn btn-primary pull-right"
            data-toggle="collapse"
            href="#agregar"
            aria-expanded="false"
            aria-controls="agregar"
        >
            Nuevo
        </button>
    </div>
    <div class="box-body">
        <div class="collapse" id="agregar">
            @include('agencia.form')
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered" id="datatable">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Contacto</th>
                            <th>Teléfono</th>
                            <th>Período Facturación</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div><!-- /.box-body -->
</div>
@endsection


@section ('footer-scripts')
    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
            });

            var table = $('#datatable').DataTable({
                pageLength: 25,
                processing: true,
                serverSide: true,
                ajax: '{!! route('agencia.data') !!}',
                columns: [
                    { data: 'nombre', name: 'nombre' },
                    { data: 'contacto_nombre', name: 'contacto_nombre' },
                    { data: 'telefono', name: 'telefono' },
                    { data: 'periodo_facturacion', name: 'periodo_facturacion' },
                    { data: 'action',  name: 'action', orderable: false, searchable: false }
                ],
                rowId: 'id',
                createdRow: function( row, data, dataIndex ) {
                    $( row ).find('td:eq(4)').css('text-align', 'center');
                }
            });

            $('.form-horizontal').validate();
        });
    </script>
@endsection
