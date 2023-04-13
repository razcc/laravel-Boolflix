@extends('layouts.baseBoot')

@section('content')
    <div class="vh-100 container-fluid bg-dark d-flex justify-content-center align-items-center flex-column">
        <h1 class="text-white">Chi vuole guardare Netflix?</h1>


        <div class="row d-flex justify-content-center">


            <div class="col-8 d-flex justify-content-center">
                {{-- Profili Esistenti --}}
                @foreach ($profiles as $profile)
                    <span class="text-center">
                        <a class="text-white text-decoration-none" href="{{ route('admin.home.index') }}">
                            <img class="img-fluid w-50" src="{{ asset('images/profili/profilo_man1.png') }}" alt="ProfiloIMG">
                            <div>
                                {{ $profile->name }}
                            </div>
                        </a>
                    </span>
                @endforeach


                {{-- Crea profilo --}}
                <span>
                    <a href="{{ route('admin.create') }}">
                        <img class="img-fluid w-50" src="{{ asset('images/profili/addprofile.png') }}" alt="ProfiloIMG">
                    </a>
                </span>
            </div>

        </div>



    </div>
@endsection
