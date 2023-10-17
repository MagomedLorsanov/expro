@extends('layouts.app')

@section('content')
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
                <td>{{$product['article']}}</td>
                <td>{{$product['name']}}</td>
                <td>{{$product['status']}}</td>
                <td class="d-flex flex-column">
                @foreach ($product['data'] as $key => $attr)
                {{$key}}: {{$attr}}
                @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
</table>
<button type="button">добавить</button>
@endsection