@extends('kutty.layouts.default')

@section('content')
    <form class="w-full md:w-4/12 mx-auto py-10" method="POST" action="{{ route('login') }}">
        @csrf

        @if (!empty($errors) && $errors->has('email'))
        <div class="callout small alert text-center" id="emailHelpText">
            <p>{{ $errors->first('email') }}</p>
        </div>
        @endif
        <label class="block text-sm mb-1" for="email">Email</label>
        <input class="form-input" type="email" aria-describedby="emailHelpText" placeholder="Email" id="email" required autofocus name="email"
            value="{{ old('email') }}" />
        @if (!empty($errors) && $errors->has('password'))
            <div class="callout small alert text-center" id="passwordHelpText">
                <p>{{ $errors->first('password') }}</p>
            </div>
        @endif
        <label class="block text-sm mb-1 mt-4" for="passwordinput">Password</label>
        <input class="form-input" id="password" type="password" name="password" aria-describedby="passwordHelpText" placeholder="••••••••" required>
        <label class="flex items-center mt-4">
            <input type="checkbox" class="form-checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} />
            <span class="ml-2 cursor-pointer text-sm">Remember me</span>
        </label>
        <input type="submit" class="btn btn-primary w-full mt-4" value="Login" />

        {{-- <div class="grid-container">
            <div class="grid-x grid-padding-y">
                <div class="medium-6 medium-offset-3 cell email">
                    <h4 class="text-center">Login</h4>

                    @if (!empty($errors) && $errors->has('email'))
                        <div class="callout small alert text-center" id="emailHelpText">
                            <p>{{ $errors->first('email') }}</p>
                        </div>
                    @endif

                    <label for="email">
                        E-Mail Address
                        <input id="email" type="email" name="email" value="{{ old('email') }}" aria-describedby="emailHelpText" required autofocus>
                    </label>

                    @if (!empty($errors) && $errors->has('password'))
                        <div class="callout small alert text-center" id="passwordHelpText">
                            <p>{{ $errors->first('password') }}</p>
                        </div>
                    @endif

                    <label for="password">
                        Password
                        <input id="password" type="password" name="password" aria-describedby="passwordHelpText" required>
                    </label>

                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>

                    <button type="submit" class="button expanded">Login</button>

                    <p class="text-center"><a href="{{ route('password.request') }}">Forgot Your Password?</a></p>
                </div>
            </div>
        </div> --}}
    </form>
@endsection
