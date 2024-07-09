@extends('dashboard.index')

@section('content')
<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4"><br>
    <h1 class="page-title txt-color-blueDark"><i class="fa fa-table fa-fw"></i> Recepciones <span>> Nota Recepción</span></h1>
</div>

<table id="pdfTable" class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Entrega</th>
            <th>Lote</th>
            <th>Fecha</th>
            <th>Guía</th>
            <th>Productor</th>
            <th>Especie</th>
            <th>Variedad</th>
            <th>Kilos</th>
            <th>Bins</th>
            <th>Descarga</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $row)
            <tr>
                <td>{{ $row['Entrega'] }}</td>
                <td>{{ $row['Lote'] }}</td>
                <td>{{ $row['Fecha'] }}</td>
                <td>{{ $row['Guía'] }}</td>
                <td>{{ $row['Productor'] }}</td>
                <td>{{ $row['Especie'] }}</td>
                <td>{{ $row['Variedad'] }}</td>
                <td>{{ $row['Kilos'] }}</td>
                <td>{{ $row['Bins'] }}</td>
                <td>{!! $row['Descarga'] !!}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#pdfTable').DataTable({
            processing: true,
            serverSide: false,
            columns: [
                { data: 'Entrega', orderable: true }, // Ordenable
                { data: 'Lote', orderable: true },    // Ordenable
                { data: 'Fecha', orderable: true },   // Ordenable
                { data: 'Guía', orderable: true },    // Ordenable
                { data: 'Productor', orderable: false }, // Ordenable
                { data: 'Especie', orderable: true },   // Ordenable
                { data: 'Variedad', orderable: true },  // Ordenable
                { data: 'Kilos', orderable: false },     // Ordenable
                { data: 'Bins', orderable: false },      // Ordenable
                { data: 'Descarga', orderable: false }  // No ordenable
            ],
            dom: '<"top"lf>rt<"bottom"ip><"clear">',
            language: {
                "sProcessing":    "Procesando...",
                "sLengthMenu":    "Mostrar _MENU_ registros",
                "sZeroRecords":   "No se encontraron resultados",
                "sEmptyTable":    "Ningún dato disponible en esta tabla",
                "sInfo":          "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":     "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":  "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":   "",
                "sSearch":        "Buscar:",
                "sUrl":           "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "buttons": {
                    "copyTitle": 'Copiar filas al portapapeles',
                    "copySuccess": {
                        _: '%d filas copiadas',
                        1: '1 fila copiada'
                    }
                }
            }
        });

        //Oculta cantidad de tabla
        $('#pdfTable_length').hide();

    });
</script>
@endsection
