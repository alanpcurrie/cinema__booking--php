@extends('layouts.app')

@section('content')

              <div class="m-form-container">
                  <div class="m-form-container__group">

                    <form class="m-form-login" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

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

                        <div class="m-form-group">
                              <div class="">
                                    <label>
                                        <input type="checkbox" name="remember" > Remember Me
                                    </label>
                            </div>
                        </div>

                        <div class="m-form-group">

                                <button type="submit" class="a-button__large--full-width-dark">
                                    Login
                                </button>
                        </div>

                        <div class="m-form-group">
                               <a class="a-button__large--full-width-dark" href="{{ url('/password/reset') }}">
                                   Forgot Your Password?
                               </a>
                       </div>
                    </form>
                    </div>
                </div>


@endsection
