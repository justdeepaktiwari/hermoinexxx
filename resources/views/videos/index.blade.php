@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{ asset('assets/css/user-video.css') }}">
@endsection

@section('content')

@include("videos.partials.header")

@include("videos.partials.sidebar")

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
                <a class="col-md-3 col-12 video-hover mb-2 text-decoration-none text-white" href="{{ route('user-videos.video-detail', 'uerwbdan') }}" role="button">
                    <div class="position-relative" style="height: 160px;">
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                            </svg>
                        </span>
                    </div>
                    <div class="mt-2">Title - Video</div>
                    <div class="d-flex justify-content-between">
                        <span class="small text-muted">276 views</span><span class="mt-1 small text-muted">77%</span>
                    </div>
                </a>
                <div class="col-md-3 col-12 video-hover mb-2" role="button">
                    <div class="position-relative" style="height: 160px;">
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                            </svg>
                        </span>
                    </div>
                    <div class="mt-2">Title - Video</div>
                    <div class="d-flex justify-content-between">
                        <span class="small text-muted">276 views</span><span class="mt-1 small text-muted">77%</span>
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                            </svg>
                        </span>
                    </div>
                    <div class="mt-2">Title - Video</div>
                    <div class="d-flex justify-content-between">
                        <span class="small text-muted">276 views</span><span class="mt-1 small text-muted">77%</span>
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
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
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('assets/videos/welcome.mp4') }}" type="video/mp4">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            4:19
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                            </svg>
                        </span>
                    </div>
                    <div class="mt-2">Title - Video</div>
                    <div class="d-flex justify-content-between">
                        <span class="small text-muted">276 views</span><span class="mt-1 small text-muted">77%</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="pagination-section py-3 text-center">
            <nav aria-label="Page navigation example bg-danger">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link bg-dark border-danger text-white" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link  bg-dark border-danger text-white" href="#">1</a>
                    </li>
                    <li class="page-item"><a class="page-link  bg-dark border-danger text-white" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link  bg-dark border-danger text-white" href="#">3</a>
                    </li>
                    <li class="page-item"><a class="page-link  bg-dark border-danger text-white" href="#">...</a>
                    </li>
                    <li class="page-item"><a class="page-link  bg-dark border-danger text-white" href="#">13</a></li>
                    <li class="page-item">
                        <a class="page-link  bg-dark border-danger text-white" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <div style="height: 20px;"></div>
        <div style="height: 20px;"></div>
        
        @include("videos.partials.footer")
    </main>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $(".toogle-btn span").click(function(e) {

            if($(window).width() < 600){
                $(".small-size-screen-sidebar").slideDown("easing");
                return;
            }
            
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

    function slideUp() {
        $(".small-size-screen-sidebar").slideUp("easing");
        return;
    }
</script>
@endsection