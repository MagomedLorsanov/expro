@extends('layouts.app')

@section('content')
    <div class="show-container modal-window">
        <div class="modal_header">
            <div class="product-name">headphones for macbook </div>
            <div class="product-tools">
                <div class="admin-tools">
                    <img onclick="window.location='{{ route('product.edit', $product['id']) }}'"
                        class="edit-icon" src="{{ asset('images/edit.svg') }}">
                        <form id="deleteForm" action="{{ route('product.destroy', $product['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="javascript:{}" onclick='deleteProduct()'>
                        <img src="{{ asset('images/delete.svg') }}"></a>
                        </form>
                </div>
                <div ><img class="close" src="{{ asset('images/Close_round.svg') }}"></div>
            </div>
        </div>
        <div class="modal-body">
            <div class="item">
                <div class="product-title">
                    Артикул
                </div>
                <div class="product-content ms-5">
                    {{ $product['article'] }}
                </div>
            </div>
            <div class="item">
                <div class="product-title">
                    Название
                </div>
                <div class="product-content ms-5">
                    {{ $product['name'] }}
                </div>
            </div>
            <div class="item">
                <div class="product-title">
                    Статус
                </div>
                <div class="product-content ms-5">
                {{ $product['status'] == 'available' ? 'Доступен':'Не доступен' }}
                </div>
            </div>
            <div class="item">
                <div class="product-title">
                    Статус
                </div>
                <div class="product-content ms-5">
                    @if (!empty($product['data']))
                        <div class="table-attributes">
                            @foreach (json_decode($product['data']) as $key => $value)
                                <div>{{ $key }}: {{ $value }}</div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
