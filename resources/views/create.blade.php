@extends('layouts.app')

@section('content')
<div class="add_product">
    <h1 class="title">Добавить продукт</h1>
    <div class='product_input'>
        <p class="product_title">
            Артикл
        </p>
        <input type="text" name="article">
    </div>
    <div class='product_input'>
        <p class="product_title">
            Название
        </p>
        <input type="text" name="article">
    </div>
    <div class='product_input'>
        <p class="product_title">
            Статус
        </p>
        <select name="status" id="status">
        <option value="available">Доступен</option>
        <option value="unavailable">Не доступен</option>
        </select>
    </div>
</div>
@endsection