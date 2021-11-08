<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Reporte de llegadas {{$fechaString}}</title>
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                font-size: 0.8rem;
            }
            span {
                font-size: 1rem;
            }
            .pure-table th {
                padding: 2rem 1rem;
            }
            .pure-table td, .pure-table th {
                padding: 0.3rem;
                font-size: 0.7rem;
            }
            footer { position: fixed; bottom: 0; left: -50px; right: -50px; height: 50px; }
        </style>
    </head>
    <body>
        <footer>
            <img src="img/footer-swoop.png" alt="" style="display: block; width: 100%; height: auto;">
        </footer>
        <div class="pure-g">
            <div class="pure-u-24-24" style="text-align: center;">
                <img src="img/color_lg_big.jpg" alt="" style="height: 90px;">
            </div>
        </div>
        <div class="pure-g">
            <div class="pure-u-24-24">
                <p style="text-align: center;">REPORTE DE LLEGADAS DEL <span>{{$fechaString}}</span></p>
                <p style="text-align: center;"><strong>LISTA DE PASAJEROS A TRASLADAR DE LA TRANSPORTADORA CAPE TRAVEL, S.A. DE C.V.
                <br>Y OTRAS TRANSPORTADORAS CONTRATADAS POR LA MISMA PARA TRASLADAR DE AEROPUERTO A HOTELES</strong></p>
            </div>
        </div>
        <div class="pure-g">
            <div class="pure-u-24-24">
                <table class="pure-table pure-table-bordered" style="margin-bottom: 30px; width: 100%;">
                    <thead>
                        <tr>
                            <th style="width: 7%;">HORA</th>
                            <th style="width: 7%;">FECHA</th>
                            <th style="width: 10%;">VUELO</th>
                            <th style="width: 3%;">PAX</th>
                            <th style="width: 15%;">HOTEL</th>
                            <th style="width: 15%;">NOMBRE</th>
                            <th style="width: 7%;">SALIDA</th>
                            <th style="width: 15%;">AGENCIA</th>
                            <th style="width: 5%;">ASIG</th>
                            <th style="width: 16%;">OBSERVACIONES</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($reservas as $row)
                        <tr>
                            <td>{{$row->arrival_time}}</td>
                            <td>{{$row->arrival_date}}</td>
                            <td>{{$row->arrival_flight}}</td>
                            <td style="text-align: center;">{{$row->pax}}</td>
                            <td>{{$row->hotel->nombre}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->departure_date}}</td>
                            <td>{{$row->agencia->nombre}}</td>
                            <td>{{$row->asig}}</td>
                            <td>{{$row->comments}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>