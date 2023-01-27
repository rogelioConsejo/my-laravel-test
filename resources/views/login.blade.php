@extends("layouts.main")

@section("title")
    Login
@endsection

@section("content")
    <header><h1>Welcome Back!</h1></header>
    <main>
        <form action="" class="loginForm">
            <label for="user">User</label><input type="text" id="user" name="username" placeholder="Placeholder">
            <label for="pass">Password</label><input type="password" id="pass" name="password"
                                                     placeholder="Placeholder">
            <button>Login</button>
        </form>
    </main>
@endsection
