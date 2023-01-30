@extends("layouts.shopping")

@section("title")
    Products
@endsection

@section("content")
    <div class="shopping-ProductDetail">
        <h1 class="shopping-ProductDetail_Title">{{$name}}</h1>
        <img src="{{$img}}" alt="" class="shopping-ProductDetail_Image">
        <p class="shopping-ProductDetail_Price">${{$price}}</p>
        <p>{{$description}}</p>
        <form action="" method="post">
            @csrf
            <label for="quantity" class="shopping-ProductDetail_Label">Quantity: </label>
            <input type="number" min="0" name="amount" id="quantity" value="{{$amount}}">
            <button class="shopping-ProductDetail_AddToCart" type="submit">Add To Cart</button>
        </form>
    </div>

@endsection
