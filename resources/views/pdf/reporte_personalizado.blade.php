<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>REPORTE PERSONALIZADO {{$fechaString}}</title>
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
                <p style="text-align: center;"><strong><span>REPORTE PERSONALIZADO {{$fechaString}}</span></strong></p>
            </div>
        </div>
        <div class="pure-g">
            <div class="pure-u-24-24">
                <table class="pure-table pure-table-bordered" style="margin-bottom: 30px; width: 100%;">
                    <thead>
                        @foreach ($reservas as $rowIndex => $row)
                            @if($rowIndex > 0)
                                @break
                            @endif
                            <tr>
                                @foreach ($row as $index => $item)
                                <th>{{$etiquetas[$index]}}</th>
                                @endforeach
                            </tr>
                        @endforeach
                    </thead>

                    <tbody>
                        @foreach ($reservas as $row)
                            <tr>
                                @foreach ($row as $item)
                                <td>{{$item}}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>