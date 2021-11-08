<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>VOUCHER <?php if (count($reservas)>1) echo "S"; ?> ROUNDTRIP {{$fechaString}}</title>
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            div.breakNow { page-break-inside:avoid; page-break-after:always; }
            body {
                font-size: 0.8rem;
            }
            span {
                font-size: 0.8rem;
            }
            .pure-table th {
                padding: 2rem 1rem;
            }
            .pure-table td, .pure-table th {
                padding: 0.3rem;
                font-size: 0.7rem;
            }
            table {
                width: 100%;
            }
            @page { margin-bottom:0px; }

        </style>
    </head>
    <body>
        @foreach ($reservas as $index => $row)
            @include('pdf._voucher_contents')
            <br><hr><br>
            @include('pdf._voucher_contents')
            @if ($index < count($reservas)-1)
            <div class="breakNow"></div>
            @endif
        @endforeach
    </body>
</html>