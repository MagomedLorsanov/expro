@extends('layouts.app')

@section('content')
    <div class="main-container">
        <table>
            <thead>
                <tr>
                    <th>АРТИКЛ</th>
                    <th>НАЗВАНИЕ</th>
                    <th>СТАТУС</th>
                    <th>АТРИБУТЫ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product['article'] }}</td>
                        <td>{{ $product['name'] }}</td>
                        <td>{{ $product['status'] }}</td>
                        <td>
                            <div class="table-attributes">
                                @foreach ($product['data'] as $key => $attr)
                                    <div>{{ $key }}: {{ $attr }}</div>
                                @endforeach
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="btn-container">
            <x-button class="btn_add" data-toggle="modal" data-target="#ModalCreate">Добавить</x-button>
        </div>
    </div>
@include('product.create')
@endsection
