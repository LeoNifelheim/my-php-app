@extends('layouts.app')
@section('content')
<section class="white-section" id="hobbies">
    <div class="container-fluid">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
            <label>E-mail</label>
            <input name="email" value="{{ old('email') }}" required
                class="form-control{{ $errors->has('email') ? ' is-invalid': '' }}">

            @if ($errors->has('email'))
                <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            </div>

            <div class="form-group">
            <label>Password</label>
            <input name="password" required type="password"
                class="form-control{{ $errors->has('password') ? ' is-invalid': '' }}">

            @if ($errors->has('password'))
                <span class="invalid-feedback">
                <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            </div>

            <div class="form-group">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember"
                    value="{{ old('remember') ? 'checked': '' }}">

                <label class="form-check-label" for="remember">
                    Remember Me
                </label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-dark btn-block">Login!</button>
                </div>
                <div class="col-md-6">
                    <a class="btn btn-light btn-block" href="{{route('register')}}">Register!</a>
                </div>
            </div>
        </form>

    </div>
</section>
@endsection('content')
