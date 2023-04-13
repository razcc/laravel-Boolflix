@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center">
            
            <div class="col-4 dark_opacity text-center">
                <h2 class="my-4 text-white text-center">Accedi</h2>


                <form class="px-4" method="POST" action="{{ route('login') }}">
                    @csrf


                    {{-- MAIL --}}
                    <input id="email" type="email" class="text-center mb-4 form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                    {{-- Password --}}
                    <input id="password" type="password"
                        class="text-center mb-4 form-control @error('password') is-invalid @enderror" name="password" required
                        autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    {{-- INVIA --}}
                    <a class="mb-4 btn-danger w-100 p-2" href="{{ route('admin.index') }}">Accedi</a>

                    <div class="mt-4">
                        <input type="checkbox" checked name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember" class="text-white mr-4">
                            Ricordami
                        </label>

                        @if (Route::has('password.request'))
                            <a class="text-white" href="{{ route('password.request') }}">
                                Serve aiuto?
                            </a>
                        @endif
                    </div>
                    <div class="text-center my-4">
                        <span class="text-secondary">Prima volta su Netflix?</span>
                        <a class="fs-5 text-white" href="{{ route('register') }}">Registrati</a>
                    </div>
                </form>


            </div>
        </div>
    </div>
@endsection
