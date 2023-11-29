    <div class="header_top" id="home">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    @if(Session::has('clientstatus'))
		                    <a class="nav-link">{{Session::get('client_name')}}</a>
                        <li class="nav-item">
                          <a class="nav-link" href="/logout">Sign Out</a>
                        </li>
		                @else
                      <li class="nav-item">
                        <a class="nav-link" href="/login">Sign In</a>
                      </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    @if(Session::has('clientstatus'))
                        <li class="nav-item">
                        <a class="nav-link" href="/cart"><i class="fa fa-cart-plus fa-2x"></i></a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>

    </div>
