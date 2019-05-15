@extends('layouts.master')

@section('heading')
    <div class="w3-container" style="margin-top:80px" id="showcase">
        <h1 class="w3-jumbo"><b>Account</b></h1>
        <h1 class="w3-xxxlarge w3-text-teal"><b>Register</b></h1>
        <hr style="width:50px;border:5px solid teal" class="w3-round">
    </div>
@endsection

@section('content')


    Already have an account? <a href='/login'>Login here...</a>
    <br>
    <br>

    <form method='POST' action='{{ route('register') }}'>
        {{ csrf_field() }}
        <table>
            <tr>
                <td>
                    <label for='name'>Name</label>
                </td>
                <td>
                    <input id='name' type='text' name='name' value='{{ old('name') }}' required autofocus>
                </td>
            </tr>
            <td>
                <label for='email'>E-Mail Address</label>
            </td>
            <td>
                <input id='email' type='email' name='email' value='{{ old('email') }}' required>
            </td>
            </tr>
            <td>
                <label for='password'>Password (min: 8)</label>
            </td>
            <td>
                <input id='password' type='password' name='password' required>
            </td>
            </tr>
            <td>
                <label for='password-confirm'>Confirm Password</label>
            </td>
            <td>
                <input id='password-confirm' type='password' name='password_confirmation' required>

            </td>
            </tr>
        </table>
        <br>
        <br>
        <button type='submit' class='btn btn-primary'>Register</button>
    </form>
@endsection