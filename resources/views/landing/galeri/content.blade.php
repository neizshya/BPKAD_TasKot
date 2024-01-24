@section('galeri')
    <div class="position-relative px-5 mt-5">
        <nav aria-label="breadcrumb " data-bs-theme="dark">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-white h3">Galeri</li>
            </ol>
        </nav>
        <div class="container-fluid px-3">
            <ul class="nav nav-underline " id="myTab" role="tablist" style="--bs-nav-link-font-size:1.3rem"
                data-bs-theme="dark">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#galeri-foto"
                        type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true"
                        href="#">Foto</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="#" id="profile-tab" data-bs-toggle="tab" data-bs-target="#galeri-video"
                        type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Video</a>
                </li>
            </ul>
            <div class="tab-content" id="galeri">
                <div class="tab-pane fade show active" id="galeri-foto" role="tabpanel" aria-labelledby="home-tab"
                    tabindex="0">
                    <div class="row mt-3 g-4 mb-5" style="min-height:60vh">
                        <a href="https://cdn.pixabay.com/photo/2023/12/30/17/39/kombucha-8478515_1280.jpg"
                            class="col-12 col-md-6 col-xl-4 col-xxl-3 d-flex justify-content-center" data-toggle="lightbox"
                            data-gallery="image-gallery" data-type="image" data-caption="img 1">
                            <img src="https://cdn.pixabay.com/photo/2023/12/30/17/39/kombucha-8478515_1280.jpg"
                                alt="" class="rounded-4 w-100" style=" height:20rem;">
                        </a>
                        {{-- <a href="https://avatars.akamai.steamstatic.com/fab9f6e14530bb7ab8f259edfab656b97d6111e2_full.jpg"
                            class="col-12 col-md-6 col-xl-4 col-xxl-3 d-flex justify-content-center" data-toggle="lightbox"
                            data-gallery="image-gallery" data-type="image" data-caption="img 2">
                            <img src="https://avatars.akamai.steamstatic.com/fab9f6e14530bb7ab8f259edfab656b97d6111e2_full.jpg"
                                alt="" class="rounded-4 w-100" style=" height:20rem;">
                        </a> --}}
                        <a href="https://cdn.pixabay.com/photo/2023/12/22/09/46/cotton-top-tamarin-8463471_1280.jpg"
                            class="col-12 col-md-6 col-xl-4 col-xxl-3 d-flex justify-content-center" data-toggle="lightbox"
                            data-gallery="image-gallery" data-type="image" data-caption="img 3">
                            <img src="https://cdn.pixabay.com/photo/2023/12/22/09/46/cotton-top-tamarin-8463471_1280.jpg"
                                alt="" class="rounded-4 w-100" style=" height:20rem;">
                        </a>

                        <a href="https://cdn.pixabay.com/photo/2023/08/08/10/35/ghosts-8177036_1280.jpg"
                            class="col-12 col-md-6 col-xl-4 col-xxl-3 d-flex justify-content-center" data-toggle="lightbox"
                            data-gallery="image-gallery" data-type="image" data-caption="img 4">
                            <img src="https://cdn.pixabay.com/photo/2023/08/08/10/35/ghosts-8177036_1280.jpg" alt=""
                                class="rounded-4 w-100" style=" height:20rem;">
                        </a>


                    </div>
                    <div class="w-100 d-flex justify-content-center justify-content-lg-end mt-5">
                        <nav aria-label="Page navigation example" data-bs-theme="dark">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&lt;</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&gt;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>


                <div class="tab-pane fade" id="galeri-video" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                    <div class="row mt-3 g-4 mb-5" style="min-height:60vh">

                        {{-- untuk video, user harus mengambil id dari video
                            contoh link
                            https://www.youtube.com/watch?v=b2KXsyoaBF4
                            11 kumpulan huruf dan angka setelah v= adalah id dari video
                            b2KXsyoaBF4
                            --}}
                        <a href="https://www.youtube.com/watch?v=b2KXsyoaBF4"
                            class="col-12 col-md-6 col-xl-4 col-xxl-3 d-flex justify-content-center video-gallery"
                            data-toggle="lightbox" data-gallery="video-gallery" data-type="video">
                            <img src="https://img.youtube.com/vi/b2KXsyoaBF4/hqdefault.jpg " alt=""
                                class="rounded-4 w-100" style=" height:20rem;">
                        </a>
                        <a href="https://www.youtube.com/watch?v=hLvWy2b857I"
                            class="col-12 col-md-6 col-xl-4 col-xxl-3 d-flex justify-content-center video-gallery"
                            data-toggle="lightbox" data-gallery="video-gallery" data-type="video">
                            <img src="https://img.youtube.com/vi/hLvWy2b857I/hqdefault.jpg " alt=""
                                class="rounded-4 w-100" style=" height:20rem;">
                        </a>
                        <a href="https://www.youtube.com/watch?v=hLvWy2b857I"
                            class="col-12 col-md-6 col-xl-4 col-xxl-3 d-flex justify-content-center video-gallery"
                            data-toggle="lightbox" data-gallery="video-gallery" data-type="video">
                            <img src="https://img.youtube.com/vi/hLvWy2b857I/hqdefault.jpg " alt=""
                                class="rounded-4 w-100" style=" height:20rem;">
                        </a>
                        <a href="https://www.youtube.com/watch?v=hLvWy2b857I"
                            class="col-12 col-md-6 col-xl-4 col-xxl-3 d-flex justify-content-center video-gallery"
                            data-toggle="lightbox" data-gallery="video-gallery" data-type="video">
                            <img src="https://img.youtube.com/vi/hLvWy2b857I/hqdefault.jpg " alt=""
                                class="rounded-4 w-100" style=" height:20rem;">
                        </a>
                        <a href="https://www.youtube.com/watch?v=hLvWy2b857I"
                            class="col-12 col-md-6 col-xl-4 col-xxl-3 d-flex justify-content-center video-gallery"
                            data-toggle="lightbox" data-gallery="video-gallery" data-type="video">
                            <img src="https://img.youtube.com/vi/hLvWy2b857I/hqdefault.jpg " alt=""
                                class="rounded-4 w-100" style=" height:20rem;">
                        </a>
                        <a href="https://www.youtube.com/watch?v=hLvWy2b857I"
                            class="col-12 col-md-6 col-xl-4 col-xxl-3 d-flex justify-content-center video-gallery"
                            data-toggle="lightbox" data-gallery="video-gallery" data-type="video">
                            <img src="https://img.youtube.com/vi/hLvWy2b857I/hqdefault.jpg " alt=""
                                class="rounded-4 w-100" style=" height:20rem;">
                        </a>

                        <a href="https://www.youtube.com/watch?v=hLvWy2b857I"
                            class="col-12 col-md-6 col-xl-4 col-xxl-3 d-flex justify-content-center video-gallery"
                            data-toggle="lightbox" data-gallery="video-gallery" data-type="video">
                            <img src="https://img.youtube.com/vi/hLvWy2b857I/hqdefault.jpg " alt=""
                                class="rounded-4 w-100" style=" height:20rem;">
                        </a>

                        <a href="https://www.youtube.com/watch?v=hLvWy2b857I"
                            class="col-12 col-md-6 col-xl-4 col-xxl-3 d-flex justify-content-center video-gallery"
                            data-toggle="lightbox" data-gallery="video-gallery" data-type="video">
                            <img src="https://img.youtube.com/vi/hLvWy2b857I/hqdefault.jpg " alt=""
                                class="rounded-4 w-100" style=" height:20rem;">
                        </a>
                    </div>
                    <div class="w-100 d-flex justify-content-center justify-content-lg-end mt-5">
                        <nav aria-label="Page navigation example" data-bs-theme="dark">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&lt;</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&gt;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
