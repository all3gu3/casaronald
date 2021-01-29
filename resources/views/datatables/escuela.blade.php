@extends('layouts.skeleton')
@section('title', 'Expediente Fundación Casa Ronald McDonald')
@section('description-page', 'Expediente y registro de entradas y salidas')
@section('titule-og', 'Expediente Fundación Casa Ronald McDonald')
@section('description-og', 'Expediente Fundación Casa Ronald McDonald y sistema de registro de entradas y salidas')
@section('description-tc', 'Expediente Fundación Casa Ronald McDonald y sistema de registro de entradas y salidas')
@section('description-td', 'Expediente Fundación Casa Ronald McDonald y sistema de registro de entradas y salidas')
@section('content')
	@include('parts.sidebar')
    <div class="container" id="escuela" style="background-color: white">
        <h1>Registros | Escuelita</h1>
        <table class="table table-bordered data-table" id="data-table-escuela">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>QR</th>
                    <th>Servicio</th>
                    <th>Fecha y hora</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        
    </div>
    <script>
        $(function () {
            var table = $('#data-table-escuela').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('get-escuela-datatable') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'QR', name: 'QR'},
                    {data: 'servicio', name: 'servicio'},
                    {data: 'fecha_hora', name: 'fecha_hora'},
                ]
            });
        });

    </script>
    </div>
@endsection