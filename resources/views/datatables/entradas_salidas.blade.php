@extends('layouts.skeleton')
@section('title', 'Expediente Fundación Casa Ronald McDonald')
@section('description-page', 'Expediente y registro de entradas y salidas')
@section('titule-og', 'Expediente Fundación Casa Ronald McDonald')
@section('description-og', 'Expediente Fundación Casa Ronald McDonald y sistema de registro de entradas y salidas')
@section('description-tc', 'Expediente Fundación Casa Ronald McDonald y sistema de registro de entradas y salidas')
@section('description-td', 'Expediente Fundación Casa Ronald McDonald y sistema de registro de entradas y salidas')
@section('content')
	@include('parts.sidebar')
    <div class="container" id="entradas_salidas" style="background-color: white">
        <h1>Registros | Entradas y salidas</h1>
        <table class="table table-bordered data-table" id="data-table-entradas-salidas">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>QR</th>
                    <th>Entrada</th>
                    <th>Salida</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        
    </div>
    <script>
        $(function () {
            var table = $('#data-table-entradas-salidas').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('get-entradas-salidas-datatable') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'QR', name: 'QR'},
                    {data: 'entrada', name: 'entrada'},
                    {data: 'salida', name: 'salida'},
                ]
            });
        });

    </script>
    </div>
@endsection