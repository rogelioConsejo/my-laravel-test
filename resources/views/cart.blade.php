@extends("layouts.shopping")

@section("title")
    Products
@endsection

@section("content")
    <ul class="shopping-Cart">
        @foreach ($products as $product)
            <li class="shopping-Cart_Product">
                <img src="{{$product["image"]}}" alt="" class="shopping-Cart_Product_Image">
                <p class="shopping-Cart_Product_Title">{{$product ["title"]}}</p>
                <p class="shopping-Cart_Product_Price">${{$product ["price"]}}</p>
            </li>
        @endforeach
    </ul>
@endsection
