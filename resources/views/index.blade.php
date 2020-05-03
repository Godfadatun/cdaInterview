
@extends('layouts.main')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container  text-center text-capitalize font-weight-light " data-aos="fade-up" data-aos-delay="500">
        <h1>{{$home->title}}</h1>
            <div class="d-flex justify-content-center">
            <div style="padding: 1.5px; background-color: white; width: 600px;"></div>
            </div>
        </div>
    </section><!-- End Hero -->

    <section id="about" class="">
        <div class="container">
            {{-- {{$home}} --}}
        <span class="theHeader">{{$home->heading}}</span>
        <br />
        {!! $home->content !!}

        </div>
    </section><!-- End About Section -->
@endsection
