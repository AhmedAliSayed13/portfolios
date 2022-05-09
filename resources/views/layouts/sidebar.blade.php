<nav class="navbar navbar-expand-md  fixed-left">
    <a class="navbar-brand" href="#">
        <img src="{{asset('imgs/myphoto.jpg')}}" width="100%" height="auto" class="image1">
        <img src="{{asset('imgs/myphoto2.jpg')}}" width="100%" height="auto" class="image2">
        <h4 class="myname text-center">Ahmed Ali</h4>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>

    </button>

    <div class=" navbar-collapse collapse hide" id="navbarsExampleDefault">
        <ul class="navbar-nav lists" id="lists">
            <li class="nav-item" data-target="home">

                <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="{{route('home')}}">
                    <i class="fas fa-home"></i> Home</a>
            </li>
            <li class="nav-item " data-target="about">
                <a class="nav-link {{ (request()->is('about')) ? 'active' : '' }}" href="{{route('about')}}"> <i class="fas fa-user"></i> About Me</a>
            </li>
            <li class="nav-item" data-target="skills">

                <a class="nav-link {{ (request()->is('skills')) ? 'active' : '' }}" href="{{route('skills')}}"> <i class="fas fa-list"></i> Skills</a>
            </li>
            <li class="nav-item" data-target="experience">

                <a class="nav-link {{ (request()->is('experience')) ? 'active' : '' }}" href="{{route('experience')}}"> <i class="fas fa-id-badge"></i> Experience</a>
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ (request()->segment(1)=='portfolio') ? 'active' : '' }}" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-briefcase"></i>  Portfolio
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{route('Travel2Drive')}}">Travel2Drive</a>
                <a class="dropdown-item" href="{{route('almaali')}}">Almaali</a>
                <a class="dropdown-item" href="{{route('apptriner')}}">Apptriner</a>
                
                </div>
            </li>
            <li class="nav-item" data-target="Contact">

                <a class="nav-link {{ (request()->is('contact')) ? 'active' : '' }}" href="{{route('contact')}}"> <i class="far fa-envelope"></i> Contact Me</a>
            </li>

        </ul>
        <ul class="navbar-nav list-inline">
            <li class="list-inline-item">
                <a class="nav-link d-inline" data-class="fixed-left"
                    href="https://www.facebook.com/profile.php?id=100004327276319" style="color: #4267B2;">
                    <i class="fab fa-facebook d-inline " style="color: var(--pinkC);font-size: 20px"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="nav-link d-inline" data-class="fixed-top" href="https://twitter.com/AhmedA1o1"
                    style="color: #1DA1F2;">
                    <i class="fab fa-twitter d-inline fa-1x" style="color: var(--pinkC);font-size: 20px"></i>

                </a>
            </li>
            <li class="list-inline-item">
                <a class="nav-link d-inline" data-class="fixed-top"
                    href="https://www.linkedin.com/in/ahmed-ali-a267b2172/" style="color: #1DA1F2;">
                    <i class="fab fa-linkedin d-inline fa-1x" style="color: var(--pinkC);font-size: 20px"></i>

                </a>
            </li>

        </ul>
        <div class="cv-div d-none d-sm-none d-md-block">
            <span><a href="Ahmed-Ali-CV.pdf"><i class="fas fa-download"></i> CV</a></span>
        </div>
        <div class="copy-right d-none d-sm-none d-md-block">
            <span>2020 © <a href="#"><span class="name"> Ahmed Ali</span></a>
                All Right Reserved.</span>

        </div>




    </div>
</nav>