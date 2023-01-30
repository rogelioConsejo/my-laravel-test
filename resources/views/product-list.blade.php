@extends("layouts.shopping")

@section("title")
    Products
@endsection

@section("content")
    <ul class="shopping-Products">
        @foreach ($products as $product)
            <li class="shopping-Products_Product">
                <img src="{{$product->image}}" alt="" class="shopping-Products_Product_Image">
                <p class="shopping-Products_Product_Title"><a href="" class="shopping-Products_Product_Title_Link">{{$product->title}}</a></p>
                <form action="" method="post" class="shopping-Products_Product_AddToCart">
                    @csrf
                    <button class="shopping-Button" type="submit" name="product" value="{{$product->id}}">Add To Cart</button>
                </form>
                <hr class="shopping-Products_Product_Separator">
            </li>
        @endforeach
    </ul>
@endsection
