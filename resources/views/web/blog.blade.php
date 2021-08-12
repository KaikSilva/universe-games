@extends('web.master.master')

@section('content')
    <section style="background-image: url({{ asset('frontend/images/hero-1-bg.png') }});" class="section bg-light overflow-hidden" id="feature">
        <div style="" class="container">
            <div class="row align-items-center">


                @foreach($posts as $post)
                    <div class="card" style="margin:10px;width: 18rem;">
                        <img src="https://images.pexels.com/photos/275033/pexels-photo-275033.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=650&amp;w=940" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->id }} {{ $post->title }}</h5>
                            <p class="card-text">{{ $post->subtitle }}</p>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </section>
        

@endsection