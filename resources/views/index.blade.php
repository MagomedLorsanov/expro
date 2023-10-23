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
                @if (empty($products))
                    <h4 class="product">No product is available</h4>
                @endif 
                @foreach ($products as $product)
                        <tr id="{{ $product['id'] }}" class = "product" onclick="window.location='{{ route('product.show',  $product['id']) }}'">
                            <td>{{ $product['article'] }}</td>
                            <td>{{ $product['name'] }}</td>
                            <td>{{ $product['status'] == 'available' ? 'Доступен':'Не доступен' }}</td>
                            <td>
                                @if (!empty($product['data']))
                                    <div class="table-attributes">
                                        @foreach (json_decode($product['data']) as $key => $attr)
                                            <div>{{ $key }}: {{ $attr }}</div>
                                        @endforeach
                                    </div>
                                @endif
                            </td>
                        </tr>
                @endforeach
            </tbody>
        </table>
        <div class="btn-container">
            <x-button class="btn btn-t" onclick="window.location='{{ route('product.create') }}'">Добавить</x-button>
            
        </div>
    </div>
@endsection
