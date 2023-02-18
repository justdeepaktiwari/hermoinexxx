<div class="text-white navbar-section border-bottom border-dark position-sticky top-0 d-flex flex-wrap align-items-center justify-lg-content-start justify-md-content-start justify-content-center py-2">

    <div class="toogle-btn p-2">
        <span class="px-2 me-2" role="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </span>
        <img src="{{ asset('assets/images/logo.webp') }}" alt="" id="logo">
    </div>

    <div class="search-bar d-flex align-items-center flex-wrap gap-2 flex-grow-1 justify-content-center">

        <div class="col-11 col-lg-5 col-md-6">
            <div class="input-group">
                <input type="text" class="form-control rounded-0" placeholder="Search Here" aria-describedby="button-addon2">
                <button class="btn btn-danger rounded-0" type="button" id="button-addon2">Search</button>
            </div>
        </div>

        <div class="dropdown">
            <button class="btn btn-dark rounded-0 d-flex align-items-center gap-2 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-sharp fa-solid fa-mars-and-venus" style="color: white; font-size: 17px; margin-right: 5px;"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-dark rounded-0" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item py-2" href="#"><i class="fa-sharp fa-solid fa-mars-and-venus me-3"></i> Straight</a></li>
                <li><a class="dropdown-item py-2" href="#"><i class="fa-solid fa-mars-double me-3"></i> Gay</a>
                </li>
                <li><a class="dropdown-item py-2" href="#"><i class="fa-sharp fa-solid fa-transgender me-3"></i>
                        Transgender</a></li>
            </ul>
        </div>
    </div>

</div>