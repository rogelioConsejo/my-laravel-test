<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="shopping-Content">
    <header class="shopping-Header">
        <nav>
            <ul class="shopping-Header_Nav_List">
                <li class="shopping-Header_Nav_List_Item shopping-Header_HamburgerMenu">
                    <div class="shopping-Header_HamburgerMenu_Line"></div>
                    <div class="shopping-Header_HamburgerMenu_Line"></div>
                    <div class="shopping-Header_HamburgerMenu_Line"></div>
                </li>
                <li class="shopping-Header_Nav_List_Item">Shopping App</li>
                <li class="shopping-Header_Nav_List_Item shopping-Header_Search"></li>
                <li class="shopping-Header_Nav_List_Item shopping-Header_UserMenu">
                    <div class="shopping-Header_UserMenu_Dot"></div>
                    <div class="shopping-Header_UserMenu_Dot"></div>
                    <div class="shopping-Header_UserMenu_Dot"></div>
                </li>
            </ul></nav>
    </header>
    <main>
        @yield("content")
    </main>
    <footer class="shopping-Footer">
        <nav>
            <ul class="shopping-Footer_List">
                <li class="shopping-Footer_List_Item"><a href="{{url('/login')}}">🏠</a></li>
                <li class="shopping-Footer_List_Item"><a href="{{url('/cart')}}">🛒</a></li>
            </ul>
        </nav>
    </footer>
</div>
</body>
</html>
