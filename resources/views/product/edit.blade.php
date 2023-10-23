@extends('layouts.app')

@section('content')
    <form action="{{ route('product.update', $product['id']) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="add_product">
            <div class="modal_header">
                <div class="product-name">Редактировать headphones for macbook </div>
                <div class="product-tools">
                    <div class="close"><img class="" src="{{ asset('images/Close_round.svg') }}"></div>
                </div>
            </div>

            <div class='product_input'>
                <x-input-label required>Артикл</x-input-label>
                @if ($is_admin)
                <x-text-input type="text" name="article" value="{{ $product['article'] }}" />
                @else
                <x-text-input type="text" name="article" value="{{ $product['article'] }}" readonly/>
                @endif
                @error('article')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class='product_input'>
                <x-input-label required>Название</x-input-label>
                <x-text-input type="text" name="name" value="{{ $product['name'] }}" />
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class='product_input'>
                <x-input-label required>Статус</x-input-label>
                <select name="status" id="status">
                    <option value="available" {{ $product['status'] == 'available' ? 'selected':'' }}>Доступен</option>
                    <option value="unavailable" {{ $product['status'] == 'unavailable' ? 'selected':'' }}>Не доступен</option>
                </select>
            </div>

            <div class='product_input'>
                <p class="attribute_title">
                    Атрибуты
                </p>
                <div id="attributes_container">
                    @if (!empty($product['data']))
                        @foreach (json_decode($product['data']) as $key => $value)
                            <div class="attributes">
                                <div class="attribute">
                                    <label class='product_title'>Название</label>
                                    <input type="text" name="keys[]" value="{{ $key }}" />
                                </div>
                                <div class="attribute attribute_value">
                                    <label class='product_title'>Значение</label>
                                    <input type="text" name="values[]" value="{{ $value }}" />
                                </div>
                                <div class="basket">
                                    <img class = "delete_attr{{ $loop->index }}" src="{{ asset('images/delete_atr.svg') }}"
                                        alt="" srcset="">
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="add_attribute" id ="attributeEvent">
                    + Добавить атрибут
                </div>
            </div>
            <x-button type="submit" class=" btn-t">Сохранить</x-button>
        </div>
    </form>
@endsection
