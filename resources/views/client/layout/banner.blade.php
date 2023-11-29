    <header>
        <div class="top-bar_sub container-fluid">
            <div class="row">
                <div class="col-md-4 top-forms text-left mt-4"  data-aos="fade-up">
                    <span>Welcome Back!</span>
                    @if(Session::has('clientstatus'))
		                    <a href="#" ><i class="mx-lg-4 mx-md-2  mx-1 fas fa-user" aria-hidden="true"></i> {{Session::get('client_name')}} </a>
		                    <a href="/logout" ><i class="mx-lg-4 mx-md-2  mx-1 fas fa-unlock" aria-hidden="true"></i> Sign Out </a>
		                @else
                    <span class="mx-lg-4 mx-md-2  mx-1">
                        <a href="/login">
                            <i class="fas fa-lock"></i> Sign In</a>
                    </span>
                    <span>
                        <a href="/register">
                            <i class="far fa-user"></i> Register</a>
                    </span>
                    @endif
                </div>
                <div class="col-md-4 logo text-center" data-aos="fade-up">
                    <a class="navbar-brand" href="/">
                        <i class="fab fa-gitkraken"></i> Baked</a>
                </div>

                <div class="col-md-4 log-icons text-right"  data-aos="fade-up">

                    <ul class="social_list1 mt-4">

                        <li>
                            <a href="#" class="facebook1 mx-2">
                                <i class="fab fa-facebook-f"></i>

                            </a>
                        </li>
                        <li>
                            <a href="#" class="twitter2">
                                <i class="fab fa-twitter"></i>

                            </a>
                        </li>
                        <li>
                            <a href="#" class="dribble3 mx-2">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="pin">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
