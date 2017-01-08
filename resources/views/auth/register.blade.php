@extends('layout')

@section('content')

    <div class="m-form-container">
        <div class="m-form-container__group">

        <form class="m-form-login" role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}
            <h2>Sign up for icinema</h2>
            <div class="m-form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                    <label for="name" class="m-form__label--username" placeholder="Name"><span class="hidden">Name</span></label>
                    <input id="name" class="m-form-login__username" type="text" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
    </div>

    <div class="m-form-group{{ $errors->has('dob') ? ' has-error' : '' }}">

        <label for="dob" class="m-form__label--dob" placeholder="DOB"><span class="hidden">DOB</span></label>
        <input id="dob" type="date" class="m-form-login__dob" name="dob" placeholder="Date of Birth" value="{{ old('dob') }}" required>

    @if ($errors->has('dob'))
        <span class="help-block">
            <strong>{{ $errors->first('dob') }}</strong>
        </span>
    @endif
    </div>

    <div class="m-form-group{{ $errors->has('email') ? ' has-error' : '' }}">

            <label for="email" class="m-form__label--email" placeholder="Email"><span class="hidden">Email</span></label>
            <input id="email" type="email" class="m-form-login__email" name="email"placeholder="Email Address" value="{{ old('email') }}" required>

    @if ($errors->has('email'))
        <span class="m-help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
    </div>

    <div class="m-form-group{{ $errors->has('password') ? ' has-error' : '' }}">

            <label for="password" class="m-form__label--password" placeholder="Password"><span class="hidden">Password</span></label>
            <input id="password" type="password" class="m-form-login__password" name="password" placeholder="Password" required>

    @if ($errors->has('password'))
        <span class="m-help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
    </div>

    <div class="m-form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

            <label for="password-confirm" class="m-form__label--password-confirm" placeholder="Confirm Password"><span class="hidden">Confirm Password</span></label>
            <input id="password-confirm" type="password" class="m-form-login__password-confirm" name="password_confirmation" placeholder="Confirm Password" required>

    @if ($errors->has('password_confirmation'))
        <span class="m-help-block">
            <strong>{{ $errors->first('password_confirmation') }}</strong>
        </span>
    @endif
    </div>

    <div class="m-form-group">
        <button type="submit" class="a-button__large--full-width-dark">
        Register
        </button>
    </div>


    </div>
</form>
</div>

@endsection
