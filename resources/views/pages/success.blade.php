@extends('layouts.success')
@section('tittle', 'Checkout Success')

@section('content')
    
    
<main>

    <div class="section-success d-flex align-items-center">

        <div class="col text-center">
            <img src="{{ asset('frontend/images/ic_mail.png') }}" alt="">

            <h1>Yeay! SucCESS</h1>

            <P>We’ve sent you email for trip instruction
                <br> 
                please read it as well</P>

                <a href="{{ route('home') }}" class="btn btn-home-page mt-3 px-5"> Home Page</a>
        </div>
    </div>

  </main>

@endsection