@extends("layouts.shopping")

@section("title")
    Products
@endsection

@section("content")
    <h1>Your Cart</h1>
    <p>{{$products_amount}}</p>
    <form class="shopping-Cart" method="post">
        <ul class="shopping-Cart_Items">
            @foreach ($products as $product)
                <li class="shopping-Cart_Product">
                    <img src="{{$product["image"]}}" alt="" class="shopping-Cart_Product_Image">
                    <p class="shopping-Cart_Product_Title">{{$product ["title"]}}</p>
                    <p class="shopping-Cart_Product_Price">${{$product ["price"]}}</p>
                </li>
            @endforeach
        </ul>
        <div class="shopping-Cart_Buttons">
            <p>{{$total}}</p><button class="shopping-Cart_Buttons_Button" type="submit" name="clear" value="clear">Clear Cart</button>
            <button CLASS="shopping-Cart_Buttons_Checkout shopping-Cart_Buttons_Button">Checkout</button>
            @csrf
        </div>
    </form>
@endsection
