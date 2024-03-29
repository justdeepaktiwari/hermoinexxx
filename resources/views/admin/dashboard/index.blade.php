@extends('admin.index')

@section('title', 'Dashboard')

@section('action-btn')

@endsection

@section('content')
<div class="container">
    <div class="d-flex flex-wrap gap-2"> 

        <div class="col-md-3 col-sm-6 col-12">
            <div class="card" role="button" onclick="window.location.href = `{{ route('videos.index') }}`">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex justify-content-around">
                            <div class="align-self-center text-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-play-btn" viewBox="0 0 16 16">
                                    <path d="M6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z" />
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm15 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                </svg>
                            </div>
                            <div class="media-body text-right">
                                <h3>{{ $count_video }}</h3>
                                <span>Videos</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-3 col-sm-6 col-12">
            <div class="card w-100" role="button" onclick="window.location.href = `{{ route('photos.index') }}`">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex justify-content-around">
                            <div class="align-self-center text-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                    <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
                                </svg>
                            </div>
                            <div class="media-body text-right">
                                <h3>{{ $count_photo }}</h3>
                                <span>Photos</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-md-3 col-sm-6 col-12">
            <div class="card" role="button" onclick="window.location.href = `{{ route('users.index') }}`">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex justify-content-around">
                            <div class="align-self-center text-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-hearts" viewBox="0 0 16 16">
                                     <path fill-rule="evenodd" d="M11.5 1.246c.832-.855 2.913.642 0 2.566-2.913-1.924-.832-3.421 0-2.566ZM9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4Zm13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276ZM15 2.165c.555-.57 1.942.428 0 1.711-1.942-1.283-.555-2.281 0-1.71Z"/>
                                </svg>
                            </div>
                            <div class="media-body text-right">
                                <h3>{{ $count_partner }}</h3>
                                <span>Users/Partners</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-md-3 col-sm-6 col-12">
            <div class="card" role="button" onclick="window.location.href = `{{ route('products.index') }}`">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex justify-content-around">
                            <div class="align-self-center text-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                    <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                            </div>
                            <div class="media-body text-right">
                                <h3>{{ $count_product }}</h3>
                                <span>Products</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-3 col-sm-6 col-12">
            <div class="card" role="button" onclick="window.location.href = `{{ route('category-tag.index') }}`">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex justify-content-around">
                            <div class="align-self-center text-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-tags" viewBox="0 0 16 16">
                                <path d="M3 2v4.586l7 7L14.586 9l-7-7H3zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2z"/>
                                <path d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z"/>
                            </svg>
                            </div>
                            <div class="media-body text-right">
                                <h3>{{ $count_tag }}</h3>
                                <span>Tag</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-3 col-sm-6 col-12">
            <div class="card" role="button" onclick="window.location.href = `{{ route('category-tag.index') }}`">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex justify-content-around">
                            <div class="align-self-center text-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-bookmarks-fill" viewBox="0 0 16 16">
                                <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4z"/>
                                <path d="M4.268 1A2 2 0 0 1 6 0h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L13 13.768V2a1 1 0 0 0-1-1H4.268z"/>
                            </svg>
                            </div>
                            <div class="media-body text-right">
                                <h3>{{ $count_category }}</h3>
                                <span>Category</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection