<div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-toggleable-md navbar-light bg-info" id="topNavbar">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Navbar</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ url('/msys') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          ADMISSION
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="{{ url('/msys/student-profile') }}">Student Profile</a>
                          <a class="dropdown-item" href="{{ url('msys/student-profile/create') }}">Apply Now</a>
                          <a class="dropdown-item" href="{{ url('/msys/admission') }}">Admission test result</a>
                        </div>
                      </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>
        </div>
      </div>
    </div>


    