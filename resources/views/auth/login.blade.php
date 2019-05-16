@extends('layouts.master')

@section('heading')
    <div class="w3-container" style="margin-top:80px" id="showcase">
        <h1 class="w3-jumbo"><b>Account</b></h1>
        <h1 class="w3-xxxlarge w3-text-teal"><b>Login</b></h1>
        <hr style="width:50px;border:5px solid teal" class="w3-round">
    </div>
@endsection

@section('content')



    Don't have an account? <a href='/register'>Register here...</a>
    <br>
    <br>

    <form method='POST' action='{{ route('login') }}'>
        <table>
            {{ csrf_field() }}
            <tr>
                <td>
                    <label for='email'>E-Mail Address</label>
                </td>
                <td>
                    <input id='email' type='email' name='email' value='{{ old('email') }}' required autofocus>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='password'>Password</label>
                </td>
                <td>
                    <input id='password' type='password' name='password' required>
                </td>
            <tr>
            </tr>
            <td>
                <label>
                    Remember Me
                </label>
            </td>
            <td><input type='checkbox' name='remember' {{ old('remember') ? 'checked' : '' }}>
            </td>
            </td>
            <tr>
            </tr>
        </table>
        <br>
        <button type='submit' class='btn btn-primary'>Login</button>
        <br>
        <br>
        <a class='btn btn-link' href='{{ route('password.request') }}'>Forgot Your Password?</a>

    </form>

@endsection