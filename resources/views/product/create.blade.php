@extends('layouts.app')

@section('content')
    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="">
            <div class="add_product">
                <div class="product_header">
                    <h1 class="title">Добавить продукт</h1>
                    <img class="close" src="{{ asset('images/Close_round.svg') }}" alt="" srcset="">
                </div>

                <div class='product_input'>
                    <x-input-label required>Артикл</x-input-label>
                    <x-text-input type="text" name="article" />
                    @error('article')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class='product_input'>
                    <x-input-label required>Название</x-input-label>
                    <x-text-input type="text" name="name" />
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class='product_input'>
                    <x-input-label required>Статус</x-input-label>
                    <select name="status" id="status">
                        <option value="available">Доступен</option>
                        <option value="unavailable">Не доступен</option>
                    </select>
                </div>

                <div class='product_input'>
                    <p class="attribute_title">
                        Атрибуты
                    </p>
                    <div id="attributes_container">

                    </div>
                    <div class="add_attribute" id ="attributeEvent">
                        + Добавить атрибут
                    </div>
                </div>
                <x-button type="submit" class="btn_submit btn-t">Добавить</x-button>
            </div>
        </div>
    </form>
@endsection
