@extends("layouts.main")

@section("title")
    Login
@endsection

@section("content")
    <header class="main-Header"><h1 class="main-Header_Text">Welcome Back!</h1></header>
    <main>
        <form action="" class="main-LoginForm">
            <label for="user">User</label><input type="text" id="user" name="username" placeholder="Placeholder" class="main-LoginForm_Input">
            <label for="pass">Password</label><input type="password" id="pass" name="password"
                                                     placeholder="Placeholder" class="main-LoginForm_Input">
            <button class="main-LoginForm_Button">Login</button>
        </form>
    </main>
@endsection
