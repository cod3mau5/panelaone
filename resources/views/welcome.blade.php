@extends ('layouts.boxed')

@section ('content')

<div class="box">
	<div class="box-header">
		<h3 class="box-title">Pacientes</h3>
		<a class="btn btn-success pull-right" href="/paciente/create">Nuevo paciente</a>
		<a class="btn btn-default pull-right" href="/consulta/create">Iniciar consulta</a>
	</div>
<!-- /.box-header -->
	<div class="box-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Fecha - Edad</th>
					<th>Sexo</th>
					<th>Correo	</th>
					<th>Telefono</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Rogelio García</td>
					<td>17/08/1954 - 62 años</td>
					<td>Masculino</td>
					<td>rogelio_garcia@yahoo.es</td>
					<td>6241500037</td>
				</tr>
				<tr>
					<td>Andrea Garcia</td>
					<td>17/08/1983 - 34 años</td>
					<td>Femenino</td>
					<td>andrea_garcia@mas.com.mx</td>
					<td>6241251141</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<th>Nombre</th>
					<th>Fecha - Edad</th>
					<th>Sexo</th>
					<th>Correo	</th>
					<th>Telefono</th>
				</tr>
			</tfoot>
		</table>
	</div>
<!-- /.box-body -->
</div>
  <!-- /.box -->
@endsection

@section('footer-scripts')
	<style>
		tr.selected {
    		background-color: #acbad4 !important;
		}
	</style>
	<script>
  		$(document).ready(function() {
	  		var table = $('#example1').DataTable({
				'paging'      : true,
				'lengthChange': false,
				'searching'   : true,
				'ordering'    : true,
				'info'        : true,
				'autoWidth'   : false
	    	});

	    	$('#example1 tbody').on( 'click', 'tr', function () {
		        if ( $(this).hasClass('selected') ) {
		            $(this).removeClass('selected');
		        }
        		else {
            		table.$('tr.selected').removeClass('selected');
            		$(this).addClass('selected');
        		}
    		});
  		});
	</script>
@endsection