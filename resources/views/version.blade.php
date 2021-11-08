@extends ('layouts.boxed')

@section('content')
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Changelog</div>

                <div class="panel-body">
                    <h5>Versión 0.9 - <small>Cambios en esta versión</small></h5>
                    <ul>
                        <li>Se quitó como campo obligatorio el teléfono y el correo.</li>
                        <li>Se agregó One Way Salida como tipo de salida.</li>
                        <li>Se agregó One Way Hotel como tipo de salida.</li>
                        <li>Cambios menos al reporte de salidas para dar soporte a One Way Hotel.</li>
                    </ul><br>
                    <h5>Versión 0.8 - <small>Cambios en esta versión</small></h5>
                    <ul>
                        <li>Bugfix. Se corrigieron formatos de fecha en editar empleado, no se mostraban los campos.</li>
                        <li>Bugfix. Se corrigió un error que impedia guardar correctamente los usuarios.</li>
                        <li>Se agregó el rol al usuario en el formulario de editar.</li>
                        <li>Se agregó una validación al editar el usuario que hacía que mostrara un error fatal en ciertos escenarios.</li>
                        <li>El proceso de pre-facturación ahora muestra la moneda, el monto y el total.</li>
                        <li>Se agregó el rol de usuario de Representante Aeropuerto.</li>
                    </ul><br>
                    <h5>Versión 0.7 - <small>Cambios en esta versión</small></h5>
                    <ul>
                        <li>Bugfix. Se arregló la zona horaria para mostrar correctamente la fecha de ultima modificación de una reservación.</li>
                        <li>Bugfix. Se corrigió error del usuario de la última modificación era el mismo inicial de captura en el detalle de la reservación.</li>
                        <li>Bugfix. Se corrigió una etiqueta en domicilio de la agencia.</li>
                        <li>Ahora las fechas en el formato de captura de reservación además de tener una mascara de captura también muestran un calendario para selección de fecha.</li>
                        <li>Se agregó una imagen de bienvenida al inicio del sistema.</li>
                        <li>El ASIG se puede editar ahora antes de mandar a imprimir un reporte de llegadas o salidas.</li>
                        <li>El estatus editable del estatus del pago ya no se puede editar.</li>
                    </ul><br>
                    <h5>Versión 0.6 - <small>Cambios en esta versión</small></h5>
                    <ul>
                        <li>Se terminó el reporte personalizado.</li>
                        <li>Se agregó el reporte imprimible para los resultados del reporte personalizado.</li>
                    </ul><br>
                    <h5>Versión 0.5 - <small>Cambios en esta versión</small></h5>
                    <ul>
                        <li>Se agregó una ventana modal que se abre cuando se selecciona Limousine en el formulario de reservas.</li>
                        <li>Se pueden ver las solicitudes especiales desde editar reservación.</li>
                        <li>Primer borrador de reportes personalizados.</li>
                        <li>Formato de vouchers imprimible terminado.</li>
                        <li>Se puede imprimir un voucher individual desde la tabla de resultados de reservaciones.</li>
                        <li>Se puede imprimir la lista de vouchers desde los resultados del reporte de llegadas.</li>
                    </ul><br>
                </div>
            </div>
        </div>
@endsection
