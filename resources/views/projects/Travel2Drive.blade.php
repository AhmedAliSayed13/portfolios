@extends('layouts.master')
@section('css')
<script src="{{asset('js/jquery.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}" />
<script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
@endsection

@section('content')

<section class="portfolio wow swing" id="portfolio">
    <div class="container">
        <h2>Travel2Drive</h2>
        <hr class="break">
        <div class="col-lg-12 project-details">
            <div class="col-md-12 col-sm-12 py-4">
                <header>System Business</header>

                <p>
                    <span class="project-info-head">
                        Website is a convenient online platform designed to streamline the process of obtaining a
                        driver's license in the USA.
                        Through this website, individuals can navigate the often complex and time-consuming process of
                        getting licensed to
                        drive
                    </span>
                </p>
            </div>
        </div>
        <div class="row mt-2 filter-sections">






            <?php for ($i=1;$i<=19;$i++){?>
            <div
                class="col-lg-4 mt-4 float-left col-md-12 col-xs-12 item-filter playful scrollbar style-2 travel2drive">
                <figure class="softeffect">
                    <img src="{{asset('imgs/portfolio/travel2drive/'.$i.'.png')}}"
                        class="img-responsive lazy img-item-filter" />
                    <figcaption>
                        <h4><p data-fancybox="gallery-travel2drive"
                                href="{{asset('imgs/portfolio/travel2drive/'.$i.'.png')}}"><i class="fas fa-eye"></i>Full Screen
                            </p></h4>
                        <p data-toggle="modal" data-target="#Modal_travel2drive_<?php echo $i;?>"><i
                                class="fa  fa-list"></i> More Details</p>
                    </figcaption>
                </figure>
            </div>
            <?php }?>














        </div>
    </div>
</section>

<!-- Button trigger modal -->

<!-- Modal -->


<?php for ($i=1;$i<=19;$i++){?>
<div class="modal fade" id="Modal_travel2drive_<?php echo $i;?>" tabindex="-1" role="dialog"
    aria-labelledby="Modal_travel2drive_<?php echo $i;?>" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Travel 2 Drive Website</h5>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="item-filter-pop-up playful scrollbar style-2">
                                <img src="{{asset('imgs/portfolio/travel2drive/'.$i.'.png')}}"
                                    class="img-responsive lazy img-item-filter" />
                            </div>
                        </div>
                        <div class="col-lg-6 project-details">
                            <header> Technical Skills</header>
                            <ul class="ul-project-describe">
                                <li>Responsive WebSite with flex box and media Query..</li>
                                <li>Using Wordpress Management System .</li>
                                <li>Using Mysql.</li>
                                <li>Using HTML,CSS,Boostrap.</li>
                                <li>Using Jquery,Javascript.</li>
                                <li>Using Git.</li>
                                <li>Create Child Themes.</li>
                                <li>Create Plugin.</li>
                                <li>Edit Plugin.</li>
                            </ul>
                            <header>Project Informations</header>
                            <ul class="ul-project-describe">
                                <li><span class="project-info-head">Client : </span>Travel2Drive Company</li>
                                <li><span class="project-info-head">Development : </span>Web Development</li>
                                <li><span class="project-info-head">Service : </span>Web Development</li>
                            </ul>
                            <a href="https://dev.travel2drive.com/" class="btn btn-info"><i class="fa fa-globe"></i>
                                WebSite</a>
                            <a class="btn btn-info" href="Ahmed-Ali-CV.pdf" target="_blank"><i class="fas fa-eye"></i>
                                Ahmed Ali CV</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span> Close
                    </button>

                </div>
            </div>
        </div>
    </div>
</div>
<?php }?>




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

<script>
    VANTA.NET({
                el: "#portfolio",
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
            });


            $('filter-links li a').click(function () {
                alert('run');
            });





            // filterSelection("all");
            filterSelection("travel2drive");
            function filterSelection(c) {
                var x, i;
                x = document.getElementsByClassName("item-filter");
                if (c == "all") c = "";
                // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
                for (i = 0; i < x.length; i++) {
                    w3RemoveClass(x[i], "view");
                    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "view");
                }
            }

            // Show filtered elements
            function w3AddClass(element, name) {
                var i, arr1, arr2;
                arr1 = element.className.split(" ");
                arr2 = name.split(" ");
                for (i = 0; i < arr2.length; i++) {
                    if (arr1.indexOf(arr2[i]) == -1) {
                        element.className += " " + arr2[i];
                    }
                }
            }

            // Hide elements that are not selected
            function w3RemoveClass(element, name) {
                var i, arr1, arr2;
                arr1 = element.className.split(" ");
                arr2 = name.split(" ");
                for (i = 0; i < arr2.length; i++) {
                    while (arr1.indexOf(arr2[i]) > -1) {
                        arr1.splice(arr1.indexOf(arr2[i]), 1);
                    }
                }
                element.className = arr1.join(" ");
            }

            // Add active class to the current control button (highlight it)
            var btnContainer = document.getElementById("myBtnContainer");
            var btns = btnContainer.getElementsByClassName("filter-link");
            for (var i = 0; i < btns.length; i++) {
                btns[i].addEventListener("click", function() {
                    var current = document.getElementsByClassName("active");
                    current[0].className = current[0].className.replace(" active", "");
                    this.className += " active";
                });
            }


            $(document).ready(function() {
                $(".fancybox").fancybox({
                    openEffect	: 'none',
                    closeEffect	: 'none'
                });
            });

            $(function() {
                $('.lazy').lazy();
            });
</script>

@endsection
