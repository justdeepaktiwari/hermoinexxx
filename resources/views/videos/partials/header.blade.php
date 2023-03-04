<div class="text-white navbar-section border-bottom border-dark position-sticky top-0 d-flex flex-wrap align-items-center justify-lg-content-start justify-md-content-start justify-content-center py-2" style="background: linear-gradient(0deg,rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('{{ asset("assets/images/eyes.webp") }}') no-repeat center center/cover;">

    <div class="toogle-btn p-2">
        <span class="px-2 me-2" role="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </span>
        <a href="{{ route('user-videos') }}" class="text-decoration-none text-white">
                <img src="{{ asset('assets/images/logo.webp') }}" alt="" id="logo">
        </a>
    </div>
    <div class="search-bar d-flex align-items-center flex-wrap gap-2 flex-grow-1 justify-content-center">

        <div class="col-11 col-lg-5 col-md-6">
            <form action="{{ route('user-videos.search') }}" method="get">
                <div class="input-group postion-relative">
                    <input type="text" name="search" class="form-control rounded-0 on-focus-show" id="on-focus-show" placeholder="Search Here" aria-describedby="button-addon2" value="{{ isset($search) ? $search : '' }}" autocomplete="off">
                    <button class="btn btn-danger rounded-0" type="submit" id="button-addon2">Search</button>
                    <div class="search-bar-desc position-absolute top-100 start-0 w-100 bg-dark p-2" style="z-index: 99999999999999999 !important;">
                        @if(count($recent_search))
                        <div class="recent-search">
                            Recent Searches
                            @foreach($recent_search as $search)
                                <div class="my-2">
                                    <div class="selected-elem p-1 rounded-1 border text-white d-inline-block mx-2" role="button">
                                        <span onclick="changeText(this.innerText)">{{ $search->search }}</span>
                                    </div>

                                    <span class="me-1 float-end"  onclick="removeItem(this)" role="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                        </svg>
                                    </span>
                                </div>
                            @endforeach
                        </div>
                        @endif
                        <div class="trending-search">
                            Trending Searches
                            @foreach($trending_searches as $trending_search)
                                <div class="my-2">
                                    <div class="tags p-1 rounded-1 border text-white d-inline-block mx-2" role="button"  onclick="changeText(this.innerText)">
                                        <span class="text-danger me-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                                                <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z"/>
                                            </svg>
                                        </span>
                                        {{ $trending_search->search }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </form>
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
    <div>
        <div class="mx-1 fs-6 rounded-0 px-3 btn-sm btn-dark btn">LogIn</div>
        <div class="mx-1 fs-6 rounded-0 px-3 btn-sm btn-dark btn">SignUp</div>
    </div>
</div>