@extends('layouts.master')
@section('css')

@endsection

@section('content')

<section class="contact wow slideInLeft" id="contact">
    <div class="container">
        <h2>Contact Me</h2>
        <hr class="break">
        <div class="row">
            <div class="col-md-6 offset-md-3 col-xs-12">
                <form name="myform" action="/" method="GET" id="form">
                    <div id="errorname"></div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                    </div>
                    <div id="errormail"></div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Your email">
                    </div>
                    <div id="errormessage"></div>
                    <div class="form-group">
                        <textarea class="form-control" id="message" rows="4" placeholder="your message" maxlength="200"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block text-center">Send</button>
                    </div>
                </form>

            </div>
        </div>
        <div class="contact-info">
            <h2>Be In Touch</h2>
            <hr class="break">
            <div class="row">
                <div class="col-md-4 col-xs-12 text-center">
                    <i class="fa fa-map-marker fa-2x"></i>
                    <h5 class="py-1">Imbaba - Giza - Egypt</h5>



                </div>
                <div class="col-md-4 col-xs-12 text-center">
                    <i class="fa fa-phone fa-2x"></i>
                    <h5 class="py-1">0111 291 2233</h5>



                </div>
                <div class="col-md-4 col-xs-12 text-center">
                    <i class="fa fa-envelope fa-2x"></i>
                    <h5 class="py-1"> ahmedalisayed13@gmail.com</h5>



                </div>
            </div>

        </div>

    </div>



</section>


@endsection

@section('js')
<script>
    VANTA.NET({
        el: "#contact",
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