@extends('layouts.master')
@section('css')

@endsection

@section('content')

<section id="home" class="home wow fadeIn ">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="overlay"></div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block " src="{{asset('imgs/b3.jpg')}}" alt="First slide" >
                <div class="carousel-caption " style="margin: 200px auto;">
                    <h1>Ahmed Ali Sayed</h1>
                    <h4 id="typer" data-text="Senior Full Stack Developer"></h4>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block " src="{{asset('imgs/b2.jpg')}}" alt="Second slide" >
                <div class="carousel-caption" style="margin: 200px auto;">
                    <h1>Ahmed Ali Sayed</h1>
                    <h4 id="typer2" data-text="Senior Full Stack Developer"></h4>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


</section>


@endsection

@section('js')



@endsection