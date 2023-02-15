@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/user-video.css') }}">
@endsection

@section('content')
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
                <button class="btn btn-dark rounded-0 d-flex align-items-center gap-2 dropdown-toggle" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-sharp fa-solid fa-mars-and-venus"
                        style="color: white; font-size: 17px; margin-right: 5px;"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-dark rounded-0" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item py-2" href="#"><i
                                class="fa-sharp fa-solid fa-mars-and-venus me-3"></i> Straight</a></li>
                    <li><a class="dropdown-item py-2" href="#"><i class="fa-solid fa-mars-double me-3"></i> Gay</a>
                    </li>
                    <li><a class="dropdown-item py-2" href="#"><i class="fa-sharp fa-solid fa-transgender me-3"></i>
                            Transgender</a></li>
                </ul>
            </div>
        </div>

    </div>

    <aside class="toggle-with-button d-md-block d-none position-fixed top-0 left-0 col-12 h-100  z-index-99"
        style="width: 80px;">
        <div class="position-sticky top-20 text-white px-3">
            <div class="d-flex justify-content-center align-items-center gap-3 home-icon" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-house-door" viewBox="0 0 16 16">
                    <path
                        d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z" />
                </svg>
                <span class="text-white fs-6 fw-bold d-none text-nowrap">Home</span>
            </div>
            <div style="height: 30px;"></div>
            <div class="porn-video-icon d-flex justify-content-center gap-3" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dice-6" viewBox="0 0 16 16">
                    <path d="M13 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h10zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                    <path d="M5.5 4a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm8 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-4a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-8 4a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-4a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                </svg>
                <span class="text-white fs-6 fw-bold d-none text-nowrap">History</span>
            </div>
            <div style="height: 30px;"></div>
            <div class="categories-icon d-flex justify-content-center gap-3" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-stack" viewBox="0 0 16 16">
                    <path
                        d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z" />
                    <path
                        d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z" />
                </svg>
                <span class="text-white fs-6 fw-bold d-none text-nowrap">Categories</span>
            </div>
            <div style="height: 30px;"></div>
            <div class="latest-video-icon d-flex justify-content-center gap-3" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-award" viewBox="0 0 16 16">
                    <path
                        d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z" />
                    <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
                </svg>
                <span class="text-white fs-6 fw-bold d-none text-nowrap">Live Cam</span>
            </div>
            <div style="height: 30px;"></div>
            <div class="history-video-icon d-flex justify-content-center gap-3" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-hourglass-split" viewBox="0 0 16 16">
                    <path
                        d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />
                </svg>
                <span class="text-white fs-6 fw-bold d-none text-nowrap">Community</span>
            </div>
            <div style="height: 30px;"></div>
            <div class="history-video-icon d-flex justify-content-center gap-3" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-hourglass-split" viewBox="0 0 16 16">
                    <path
                        d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />
                </svg>
                <span class="text-white fs-6 fw-bold d-none text-nowrap">Members</span>
            </div>
            <div style="height: 30px;"></div>
            <div class="history-video-icon d-flex justify-content-center gap-3" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-hourglass-split" viewBox="0 0 16 16">
                    <path
                        d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />
                </svg>
                <span class="text-white fs-6 fw-bold d-none text-nowrap">About Us</span>
            </div>
            <div style="height: 30px;"></div>
            <div class="history-video-icon d-flex justify-content-center gap-3" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-hourglass-split" viewBox="0 0 16 16">
                    <path
                        d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />
                </svg>
                <span class="text-white fs-6 fw-bold d-none text-nowrap">Chat Support</span>
            </div>
            <div style="height: 30px;"></div>
            <div class="history-video-icon d-flex justify-content-center gap-3" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-hourglass-split" viewBox="0 0 16 16">
                    <path
                        d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />
                </svg>
                <span class="text-white fs-6 fw-bold d-none text-nowrap">Term Of Services</span>
            </div>

            <div style="height: 30px;"></div>
            <div class="history-video-icon d-flex justify-content-center gap-3" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-hourglass-split" viewBox="0 0 16 16">
                    <path
                        d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />
                </svg>
                <span class="text-white fs-6 fw-bold d-none text-nowrap">Language</span>
            </div>

            <div class="border-top border-danger pop-up-modal-home bg-black-color text-white p-2">
                <div class="full-width row">
                    <div class="col-md-3">
                        <div class="fs-4 fw-bold ms-2">
                            Porn Videos
                        </div>
                    </div>
                    <div class="col-md-9 row">
                        <div class="fs-5 fw-bold ms-2">
                            Recommended Videos
                        </div>
                        <div class="col-md-4 video-hover mb-2" role="button">
                            <div class="position-relative" style="height: 100px;">
                                <video class="video" onmouseover="this.play()"
                                    onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                    <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                                </video>
                                <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                    4:19
                                </span>
                                <span
                                    class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-2">Title - Video</div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">276 views</span><span
                                    class="mt-1 small text-muted">77%</span>
                            </div>
                        </div>
                        <div class="col-md-4 video-hover mb-2" role="button">
                            <div class="position-relative" style="height: 100px;">
                                <video class="video" onmouseover="this.play()"
                                    onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                    <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                                </video>
                                <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                    4:19
                                </span>
                                <span
                                    class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-2">Title - Video</div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">276 views</span><span
                                    class="mt-1 small text-muted">77%</span>
                            </div>
                        </div>
                        <div class="col-md-4 video-hover mb-2" role="button">
                            <div class="position-relative" style="height: 100px;">
                                <video class="video" onmouseover="this.play()"
                                    onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                    <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                                </video>
                                <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                    4:19
                                </span>
                                <span
                                    class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-2">Title - Video</div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">276 views</span><span
                                    class="mt-1 small text-muted">77%</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <hr>
                        </div>
                        <div class="col-md-4 video-hover mb-2" role="button">
                            <div class="position-relative" style="height: 100px;">
                                <video class="video" onmouseover="this.play()"
                                    onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                    <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                                </video>
                                <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                    4:19
                                </span>
                                <span
                                    class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-2">Title - Video</div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">276 views</span><span
                                    class="mt-1 small text-muted">77%</span>
                            </div>
                        </div>
                        <div class="col-md-4 video-hover mb-2" role="button">
                            <div class="position-relative" style="height: 100px;">
                                <video class="video" onmouseover="this.play()"
                                    onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                    <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                                </video>
                                <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                    4:19
                                </span>
                                <span
                                    class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-2">Title - Video</div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">276 views</span><span
                                    class="mt-1 small text-muted">77%</span>
                            </div>
                        </div>
                        <div class="col-md-4 video-hover mb-2" role="button">
                            <div class="position-relative" style="height: 100px;">
                                <video class="video" onmouseover="this.play()"
                                    onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                    <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                                </video>
                                <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                    4:19
                                </span>
                                <span
                                    class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-2">Title - Video</div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">276 views</span><span
                                    class="mt-1 small text-muted">77%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-top border-danger pop-up-modal-porn-video bg-black-color text-white">
                <div class="full-width row">
                    <div class="col-md-3">
                        <div class="fs-4 fw-bold ms-2">
                            Porn Videos
                        </div>
                    </div>
                    <div class="col-md-9 row">
                        <div class="fs-5 fw-bold ms-2">
                            Recommended Videos
                        </div>
                        <div class="col-md-4 video-hover mb-2" role="button">
                            <div class="position-relative" style="height: 100px;">
                                <video class="video" onmouseover="this.play()"
                                    onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                    <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                                </video>
                                <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                    4:19
                                </span>
                                <span
                                    class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-2">Title - Video</div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">276 views</span><span
                                    class="mt-1 small text-muted">77%</span>
                            </div>
                        </div>
                        <div class="col-md-4 video-hover mb-2" role="button">
                            <div class="position-relative" style="height: 100px;">
                                <video class="video" onmouseover="this.play()"
                                    onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                    <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                                </video>
                                <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                    4:19
                                </span>
                                <span
                                    class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-2">Title - Video</div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">276 views</span><span
                                    class="mt-1 small text-muted">77%</span>
                            </div>
                        </div>
                        <div class="col-md-4 video-hover mb-2" role="button">
                            <div class="position-relative" style="height: 100px;">
                                <video class="video" onmouseover="this.play()"
                                    onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                    <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                                </video>
                                <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                    4:19
                                </span>
                                <span
                                    class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-2">Title - Video</div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">276 views</span><span
                                    class="mt-1 small text-muted">77%</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <hr>
                        </div>
                        <div class="col-md-4 video-hover mb-2" role="button">
                            <div class="position-relative" style="height: 100px;">
                                <video class="video" onmouseover="this.play()"
                                    onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                    <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                                </video>
                                <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                    4:19
                                </span>
                                <span
                                    class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-2">Title - Video</div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">276 views</span><span
                                    class="mt-1 small text-muted">77%</span>
                            </div>
                        </div>
                        <div class="col-md-4 video-hover mb-2" role="button">
                            <div class="position-relative" style="height: 100px;">
                                <video class="video" onmouseover="this.play()"
                                    onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                    <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                                </video>
                                <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                    4:19
                                </span>
                                <span
                                    class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-2">Title - Video</div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">276 views</span><span
                                    class="mt-1 small text-muted">77%</span>
                            </div>
                        </div>
                        <div class="col-md-4 video-hover mb-2" role="button">
                            <div class="position-relative" style="height: 100px;">
                                <video class="video" onmouseover="this.play()"
                                    onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                    <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                                </video>
                                <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                    4:19
                                </span>
                                <span
                                    class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-2">Title - Video</div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">276 views</span><span
                                    class="mt-1 small text-muted">77%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-top border-danger pop-up-modal-categories bg-black-color text-white">
                <div class="full-width row">
                    <div class="col-md-3">
                        <div class="fs-4 fw-bold ms-2">
                            Porn Videos
                        </div>
                    </div>
                    <div class="col-md-9 row">
                        <div class="fs-5 fw-bold ms-2">
                            Recommended Videos
                        </div>
                        <div class="col-md-4 video-hover mb-2" role="button">
                            <div class="position-relative" style="height: 100px;">
                                <video class="video" onmouseover="this.play()"
                                    onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                    <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                                </video>
                                <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                    4:19
                                </span>
                                <span
                                    class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-2">Title - Video</div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">276 views</span><span
                                    class="mt-1 small text-muted">77%</span>
                            </div>
                        </div>
                        <div class="col-md-4 video-hover mb-2" role="button">
                            <div class="position-relative" style="height: 100px;">
                                <video class="video" onmouseover="this.play()"
                                    onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                    <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                                </video>
                                <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                    4:19
                                </span>
                                <span
                                    class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-2">Title - Video</div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">276 views</span><span
                                    class="mt-1 small text-muted">77%</span>
                            </div>
                        </div>
                        <div class="col-md-4 video-hover mb-2" role="button">
                            <div class="position-relative" style="height: 100px;">
                                <video class="video" onmouseover="this.play()"
                                    onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                    <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                                </video>
                                <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                    4:19
                                </span>
                                <span
                                    class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-2">Title - Video</div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">276 views</span><span
                                    class="mt-1 small text-muted">77%</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <hr>
                        </div>
                        <div class="col-md-4 video-hover mb-2" role="button">
                            <div class="position-relative" style="height: 100px;">
                                <video class="video" onmouseover="this.play()"
                                    onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                    <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                                </video>
                                <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                    4:19
                                </span>
                                <span
                                    class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-2">Title - Video</div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">276 views</span><span
                                    class="mt-1 small text-muted">77%</span>
                            </div>
                        </div>
                        <div class="col-md-4 video-hover mb-2" role="button">
                            <div class="position-relative" style="height: 100px;">
                                <video class="video" onmouseover="this.play()"
                                    onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                    <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                                </video>
                                <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                    4:19
                                </span>
                                <span
                                    class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-2">Title - Video</div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">276 views</span><span
                                    class="mt-1 small text-muted">77%</span>
                            </div>
                        </div>
                        <div class="col-md-4 video-hover mb-2" role="button">
                            <div class="position-relative" style="height: 100px;">
                                <video class="video" onmouseover="this.play()"
                                    onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                    <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                                </video>
                                <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                    4:19
                                </span>
                                <span
                                    class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-2">Title - Video</div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">276 views</span><span
                                    class="mt-1 small text-muted">77%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-top border-danger pop-up-modal-latest-video bg-black-color text-white">
                <div class="full-width row">
                    <div class="col-md-3">
                        <div class="fs-4 fw-bold ms-2">
                            Porn Videos
                        </div>
                    </div>
                    <div class="col-md-9 row">
                        <div class="fs-5 fw-bold ms-2">
                            Recommended Videos
                        </div>
                        <div class="col-md-4 video-hover mb-2" role="button">
                            <div class="position-relative" style="height: 100px;">
                                <video class="video" onmouseover="this.play()"
                                    onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                    <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                                </video>
                                <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                    4:19
                                </span>
                                <span
                                    class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-2">Title - Video</div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">276 views</span><span
                                    class="mt-1 small text-muted">77%</span>
                            </div>
                        </div>
                        <div class="col-md-4 video-hover mb-2" role="button">
                            <div class="position-relative" style="height: 100px;">
                                <video class="video" onmouseover="this.play()"
                                    onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                    <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                                </video>
                                <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                    4:19
                                </span>
                                <span
                                    class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-2">Title - Video</div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">276 views</span><span
                                    class="mt-1 small text-muted">77%</span>
                            </div>
                        </div>
                        <div class="col-md-4 video-hover mb-2" role="button">
                            <div class="position-relative" style="height: 100px;">
                                <video class="video" onmouseover="this.play()"
                                    onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                    <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                                </video>
                                <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                    4:19
                                </span>
                                <span
                                    class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-2">Title - Video</div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">276 views</span><span
                                    class="mt-1 small text-muted">77%</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <hr>
                        </div>
                        <div class="col-md-4 video-hover mb-2" role="button">
                            <div class="position-relative" style="height: 100px;">
                                <video class="video" onmouseover="this.play()"
                                    onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                    <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                                </video>
                                <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                    4:19
                                </span>
                                <span
                                    class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-2">Title - Video</div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">276 views</span><span
                                    class="mt-1 small text-muted">77%</span>
                            </div>
                        </div>
                        <div class="col-md-4 video-hover mb-2" role="button">
                            <div class="position-relative" style="height: 100px;">
                                <video class="video" onmouseover="this.play()"
                                    onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                    <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                                </video>
                                <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                    4:19
                                </span>
                                <span
                                    class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-2">Title - Video</div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">276 views</span><span
                                    class="mt-1 small text-muted">77%</span>
                            </div>
                        </div>
                        <div class="col-md-4 video-hover mb-2" role="button">
                            <div class="position-relative" style="height: 100px;">
                                <video class="video" onmouseover="this.play()"
                                    onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                    <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                                </video>
                                <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                    4:19
                                </span>
                                <span
                                    class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-2">Title - Video</div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">276 views</span><span
                                    class="mt-1 small text-muted">77%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-top border-danger pop-up-modal-history-video bg-black-color text-white">
                <div class="full-width row">
                    <div class="col-md-3">
                        <div class="fs-4 fw-bold ms-2">
                            Porn Videos
                        </div>
                    </div>
                    <div class="col-md-9 row">
                        <div class="fs-5 fw-bold ms-2">
                            Recommended Videos
                        </div>
                        <div class="col-md-4 video-hover mb-2" role="button">
                            <div class="position-relative" style="height: 100px;">
                                <video class="video" onmouseover="this.play()"
                                    onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                    <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                                </video>
                                <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                    4:19
                                </span>
                                <span
                                    class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-2">Title - Video</div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">276 views</span><span
                                    class="mt-1 small text-muted">77%</span>
                            </div>
                        </div>
                        <div class="col-md-4 video-hover mb-2" role="button">
                            <div class="position-relative" style="height: 100px;">
                                <video class="video" onmouseover="this.play()"
                                    onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                    <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                                </video>
                                <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                    4:19
                                </span>
                                <span
                                    class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-2">Title - Video</div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">276 views</span><span
                                    class="mt-1 small text-muted">77%</span>
                            </div>
                        </div>
                        <div class="col-md-4 video-hover mb-2" role="button">
                            <div class="position-relative" style="height: 100px;">
                                <video class="video" onmouseover="this.play()"
                                    onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                    <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                                </video>
                                <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                    4:19
                                </span>
                                <span
                                    class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-2">Title - Video</div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">276 views</span><span
                                    class="mt-1 small text-muted">77%</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <hr>
                        </div>
                        <div class="col-md-4 video-hover mb-2" role="button">
                            <div class="position-relative" style="height: 100px;">
                                <video class="video" onmouseover="this.play()"
                                    onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                    <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                                </video>
                                <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                    4:19
                                </span>
                                <span
                                    class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-2">Title - Video</div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">276 views</span><span
                                    class="mt-1 small text-muted">77%</span>
                            </div>
                        </div>
                        <div class="col-md-4 video-hover mb-2" role="button">
                            <div class="position-relative" style="height: 100px;">
                                <video class="video" onmouseover="this.play()"
                                    onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                    <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                                </video>
                                <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                    4:19
                                </span>
                                <span
                                    class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-2">Title - Video</div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">276 views</span><span
                                    class="mt-1 small text-muted">77%</span>
                            </div>
                        </div>
                        <div class="col-md-4 video-hover mb-2" role="button">
                            <div class="position-relative" style="height: 100px;">
                                <video class="video" onmouseover="this.play()"
                                    onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                    <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                                </video>
                                <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                    4:19
                                </span>
                                <span
                                    class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-2">Title - Video</div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">276 views</span><span
                                    class="mt-1 small text-muted">77%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <div class="text-white w-md-responsive ms-auto">
        <main class="content-section">
            <div class="user-tab border-bottom border-dark text-uppercase d-flex flex-wrap">
                <div class="border-end  border-dark w-20 py-2 text-center fs-6" role="button">
                    videos
                </div>
                <div class="border-end  border-dark w-20 py-2 text-center fs-6" role="button">
                    Pictures
                </div>
                <div class="border-end  border-dark w-20 py-2 text-center fs-6" role="button">
                    Webcam
                </div>
                <div class="border-end  border-dark w-20 py-2 text-center fs-6" role="button">
                    Wellness
                </div>
                <div class="border-start  border-dark w-20 py-2 text-center fs-6" role="button">
                    Shop
                </div>
            </div>

            <div class="d-flex flex-wrap w-md-responsive p-2 ms-auto mt-3 justify-lg-content-between justify-md-content-between justify-content-center">
                <div class="col-md-9 col-12 row">
                    <div class="fs-4 fw-bold  my-2">Videos Being Watched</div>

                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;"
                                playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;"
                                playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;"
                                playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;"
                                playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;"
                                playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;"
                                playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;"
                                playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span
                                class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()"
                                onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span
                                class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 text-end px-2">
                    <div class="bg-white ad-section  mx-2" style="height: 45%; min-height: 180px;"></div>
                    <div class="ad-section mx-2 d-flex align-items-center" style="height: 10%;  min-height: 80px;">
                        <button class="btn btn-outline-secondary rounded-0 w-100">Purchase Panties & Socks</button>
                    </div>
                    <div class="bg-white ad-section  mx-2" style="height: 45%;  min-height: 180px;"></div>
                </div>
            </div>

            <div class="d-flex flex-wrap w-md-responsive p-2 ms-auto mt-3">
                <div class="col-12 row">
                    <div class="fs-4 fw-bold my-2">Recommended</div>
                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()"
                                onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span
                                class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()"
                                onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span
                                class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()"
                                onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span
                                class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()"
                                onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span
                                class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-wrap w-md-responsive p-2 ms-auto mt-3">
                <div class="col-12 row">
                    <div class="fs-4 fw-bold d-flex justify-content-between my-2">
                        <span>New Videos</span>
                        <span class="btn btn-outline-secondary rounded-0" style="width: 150px;">Latest</span>
                    </div>
                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()"
                                onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span
                                class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()"
                                onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span
                                class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()"
                                onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span
                                class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()"
                                onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span
                                class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>

                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()"
                                onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span
                                class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()"
                                onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span
                                class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()"
                                onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span
                                class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()"
                                onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span
                                class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>

                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()"
                                onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span
                                class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()"
                                onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span
                                class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()"
                                onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span
                                class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()"
                                onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span
                                class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>

                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()"
                                onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span
                                class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()"
                                onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span
                                class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()"
                                onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span
                                class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()"
                                onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span
                                class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>

                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()"
                                onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span
                                class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()"
                                onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span
                                class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()"
                                onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span
                                class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()"
                                onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span
                                class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>

                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()"
                                onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span
                                class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()"
                                onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span
                                class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()"
                                onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span
                                class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 video-hover mb-2" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <video class="video" onmouseover="this.play()"
                                onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                4:19
                            </span>
                            <span
                                class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2">Title - Video</div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted">276 views</span><span
                                class="mt-1 small text-muted">77%</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pagination-section py-3 text-center">
                <nav aria-label="Page navigation example bg-danger">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link bg-dark border-danger text-white" href="#"
                                aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link  bg-dark border-danger text-white"
                                href="#">1</a>
                        </li>
                        <li class="page-item"><a class="page-link  bg-dark border-danger text-white"
                                href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link  bg-dark border-danger text-white"
                                href="#">3</a>
                        </li>
                        <li class="page-item"><a class="page-link  bg-dark border-danger text-white"
                                href="#">...</a>
                        </li>
                        <li class="page-item"><a class="page-link  bg-dark border-danger text-white"
                                href="#">13</a></li>
                        <li class="page-item">
                            <a class="page-link  bg-dark border-danger text-white" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </main>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $(".toogle-btn span").click(function(e) {

                if ($(this).hasClass("active")) {
                    $(".toggle-with-button").animate({
                        width: "80px"
                    })

                    $(".toggle-with-button").find("div span")
                    .addClass("d-none").parent()
                    .addClass("justify-content-center")
                    .removeClass("justify-content-start");

                    $(this).removeClass("active");
                } else {
                    $(".toggle-with-button").animate({
                        width: "200px"
                    })

                    $(".toggle-with-button").find("div span")
                    .removeClass("d-none").parent()
                    .addClass("justify-content-start")
                    .removeClass("justify-content-center");

                    $(this).addClass("active");
                }
            });
        });
    </script>
@endsection
