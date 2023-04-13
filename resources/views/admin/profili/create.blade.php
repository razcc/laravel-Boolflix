@extends('layouts.baseBoot')

@section('content')
    <div class="vh-100 bg-dark d-flex justify-content-center align-items-center flex-column">
        <h1 class="text-white">Aggiungi un profilo</h1>


        <form class="text-center" method="POST" action="{{ route('admin.store') }}">
            @csrf
            <img class="img-fluid w-25" src="{{ asset('images/profili/profilo_man1.png') }}" alt="">
            <input required class="text-center my-4 form-control" name="name" type="text" placeholder="name">

            <button class="btn btn-danger" type="submit">Crea</button>
        </form>

    </div>
@endsection
