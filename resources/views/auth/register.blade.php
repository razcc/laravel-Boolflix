@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">

            <div class="col-4 dark_opacity text-center">
                <h2 class="text-white text-center my-4">Registrati</h2>


                <form class="px-4" method="POST" action="{{ route('register') }}">
                    @csrf


                    <input id="name" type="text"
                        class="text-center mb-4 form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nome">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                    <input id="email" type="email"
                        class="text-center mb-4 form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror



                    <input id="password" type="password"
                        class="text-center mb-4 form-control @error('password') is-invalid @enderror" name="password"
                        required autocomplete="new-password" placeholder="Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input id="password-confirm" type="password" class="text-center mb-4 form-control"
                        name="password_confirmation" required autocomplete="new-password" placeholder="Conferma Password">

                    <button href="admin.profiles.index" type="submit" class="mb-4 btn btn-danger">
                        Register
                    </button>



                    <div class="mb-4">
                        <span class="text-secondary ">Se possiedi già un account, effetua il</span>
                        <a class="text-white" href="{{ route('login') }}">{{ __('Login') }}</a>

                    </div>
                </form>

            </div>

        </div>
    </div>
@endsection
