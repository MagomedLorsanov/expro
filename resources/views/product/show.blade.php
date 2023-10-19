@extends('layouts.app')

@section('content')
        <div class=" modal-window text-left" id="modalEdit" tabindex="1" role="dialog" aria-hidden="false">
            <div class="modal_header">
                <div class="product-name">headphones for macbook </div>
                <div class="product-tools">
                    <div class="admin-tools"></div>
                    <div class="close"><img class="" src="{{ asset('images/Close_round.png') }}" alt=""
                            srcset=""></div>
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
                        {{ $product['status'] }}
                    </div>
                </div>
                <div class="item">
                    <div class="product-title">
                        Статус
                    </div>
                    <div class="product-content ms-5">
                        <div class="table-attributes">
                            @foreach ($product['data'] as $key => $value)
                                <div>{{ $key }}: {{ $value }}</div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
