<div class="sidebar">
    <div class="logo">
        <a href="#" class="logo-normal"></a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ Request::is('products') ? 'active':'';}}">
                <a href="{{url('/product')}}" class="nav-link">Продукты</a>
            </li>
        </ul>
    </div>
</div>