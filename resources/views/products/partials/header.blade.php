<div class="text-white navbar-section border-bottom border-dark position-sticky top-0 d-flex flex-wrap align-items-center justify-lg-content-start justify-md-content-start justify-content-center py-2" style="background: linear-gradient(0deg,rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('{{ asset("assets/images/eyes.webp") }}') no-repeat center center/cover;">

    <div class="toogle-btn p-2">
        <a href="{{ route('user-videos') }}" class="text-decoration-none text-white">
            <img src="{{ asset('assets/images/logo.webp') }}" alt="" id="logo">
        </a>
    </div>
    <div class="search-bar d-flex align-items-center flex-wrap gap-2 flex-grow-1 justify-content-center">

        <div class="col-11 col-lg-5 col-md-6">
            <form action="{{ route('lists.product') }}" method="get">
                <div class="input-group postion-relative">
                    @if (Request::get('type'))
                    <input type="hidden" value="{{ Request::get('type') }}" name="type" class="form-control rounded-0 on-focus-show" id="on-focus-show" placeholder="Search Here" aria-describedby="button-addon2" value="{{ isset($search) ? $search : '' }}" autocomplete="off">

                    @endif
                    <input type="text" value="{{ Request::get('search') }}" name="search" class="form-control rounded-0 on-focus-show" id="on-focus-show" placeholder="Search Here" aria-describedby="button-addon2" value="{{ isset($search) ? $search : '' }}" autocomplete="off">
                    <button class="btn btn-danger rounded-0" type="submit" id="button-addon2">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div>
        @if(auth()->check())
        <div class="mx-2 fs-6 rounded-0 px-3 btn-sm btn-danger btn shadow-0" onclick="document.getElementById('logout-form').submit()">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
            </svg>
            LogOut
        </div>
        <form action="{{ route('logout') }}" method="POST" id="logout-form" class="d-none">
            @csrf
        </form>
        @else
        <div class="mx-1 fs-6 rounded-0 px-3 btn-sm btn-dark btn" onclick="window.location.href = `{{ route('login') }}`">LogIn</div>
        <div class="mx-1 fs-6 rounded-0 px-3 btn-sm btn-dark btn" onclick="window.location.href = `{{ route('register') }}`">SignUp</div>
        @endif

        <div class="me-3 fs-6 rounded-0 px-3 btn-sm btn-danger btn position-relative" onclick="window.location.href = `{{ route('product.cart') }}`">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
            </span>

            <span class="position-absolute top-0 start-100 translate-middle p-1 bg-success border border-light rounded-circle small totalCart">{{countCart()}}
            </span>
        </div>
    </div>
</div>