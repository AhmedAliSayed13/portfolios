@extends('layouts.master')
@section('css')

@endsection

@section('content')

<section id="about" class="about wow swing" >
    <div class="container">
        <h2>About Me</h2>
        <hr class="break">
        <div class="row">

            <div class="col-md-6 col-sm-12 py-4">
                <h3>Senior Full Stack Developer</h3>

                <p>An ambitious and self-motivated web developer with a considerable technical skill who
                    possesses self- discipline and ability to work with minimum of supervision. Able to play a key
                    role in website development to ensure maximum accessibility, user experience and usability.
                    A quick learner who can absorb new ideas and can communicate clearly and effectively.</p>


            </div>
            <div class="col-md-6 col-sm-12 py-4">
                <h3>Personal Information</h3>
                <ul>
                    <li><span class="title">Name:</span><span class="value"> Ahmed Ali Sayed</span></li>
                    <li><span class="title">Age:</span><span class="value"> 27 Years</span></li>
                    <li><span class="title">Address:</span><span class="value">  Giza - Egypt</span></li>
                    <li><span class="title">Marital Status:</span><span class="value"> Single</span></li>
                    <li><span class="title">Military Status:</span><span class="value"> Exempted</span></li>
                </ul>
            </div>
        </div>
        <h2>Services</h2>
        <hr class="break">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 py-2">
                <i class="fas fa-laptop-code fa-2x"></i>
                <h4 class="py-2">Web Development</h4>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-2">
                <i class="fas fa-mobile-alt fa-2x"></i>
                <h4 class="py-2">Responsive Design</h4>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-2">
                <i class="fas fa-cash-register fa-2x"></i>
                <h4 class="py-2">Backend Developer</h4>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-2">

                <i class="fas fa-eye fa-2x"></i>
                <h4 class="py-2">Frontend Developer</h4>
            </div>
        </div>
    </div>
</section>


@endsection

@section('js')

<script>

    VANTA.NET({
        el: "#about",
        mouseControls: true,
        touchControls: true,
        minHeight: 200.00,
        minWidth: 200.00,
        scale: 1.00,
        scaleMobile: 1.00,
        color: 0xf00052,
        backgroundColor: 0xd0220,
        points: 12.00,
        maxDistance: 22.00,
        spacing: 19.00
    })




</script>

@endsection
