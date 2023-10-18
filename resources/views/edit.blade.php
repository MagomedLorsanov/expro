@extends('layouts.app')

@section('content')
    <div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="add_product">
                <div class="modal_header">
                    <div class="product-name">Редактировать headphones for macbook </div>
                    <div class="product-tools">
                        <div class="admin-tools"></div>
                        <div class="close"><img class="" src="{{ asset('images/Close_round.png') }}" alt=""
                                srcset=""></div>
                    </div>
                </div>

                <div class='product_input'>
                    <x-input-label required>Артикл</x-input-label>
                    <x-text-input type="text" name="article" value="{{ $product['article'] }}" />
                </div>

                <div class='product_input'>
                    <x-input-label required>Название</x-input-label>
                    <x-text-input type="text" name="name" value="{{ $product['name'] }}" />
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
                        @foreach($product['data'] as $key => $value)
                            <div class="attributes">
                                <div class="attribute">
                                    <label class='product_title'>Название</label>
                                    <input type="text" name="attr{{$loop->index}}" value="{{$key}}"/>
                                </div>
                                <div class="attribute attribute_value">
                                    <label class='product_title'>Значение</label>
                                    <input type="text" name="value{{$loop->index}}" value="{{$value}}"/>
                                </div>
                                <div class="basket">
                                    <img class = "delete_attr{{$loop->index}}" src="{{asset('images/delete.png')}}" alt="" srcset="">
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="add_attribute" id ="attributeEvent">
                        + Добавить атрибут
                    </div>
                </div>
                <x-button type="submit" class="btn_submit">Добавить</x-button>
            </div>
        </form>
    </div>
