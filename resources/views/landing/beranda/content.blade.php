@section('beranda')
    <div class="image-container" id="beranda">
        <div class="image-overlay"></div>
        <img src="https://images.unsplash.com/photo-1703758435024-c91738662ab8?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            class="image" alt="">
    </div>
    <div class="container container-beranda-image">
        <div class="row  d-flex align-items-center">
            <div class="col-0 col-lg-6"></div>
            <div class="col-12 col-lg-6 ">
                <div class="card text-white bg-glass-card py-4 px-3 ">
                    <p class="h2">
                        Badan Pengelola Keuangan dan Aset Daerah (BPKAD) Kota Tasikmalaya
                    </p>
                    <p class="h4" style="text-align: justify">
                        adalah lembaga keuangan yang bertanggung jawab mengelola dan mengawasi keuangan kota Tasikmalaya.
                        Kami memastikan <span class="text-black fw-semibold">transparansi</span>, <span
                            class="text-black fw-semibold">efisiensi</span>, dan
                        <span class="text-black fw-semibold">akuntabilitas</span> dana publik.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid container-beranda-carousel">
        <div class="text-center h1 text-white mb-5">
            Berita Terbaru
        </div>
        <div id="berita_terbaru" class=" px-5 carousel slide custom-carousel carousel-fade " data-bs-ride="caraousel">
            <div class="carousel-indicators ">
                <button type="button" data-bs-target="#berita_terbaru" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#berita_terbaru" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#berita_terbaru" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner h-100">
                <div class="carousel-item active">
                    <img src="https://avatars.akamai.steamstatic.com/fab9f6e14530bb7ab8f259edfab656b97d6111e2_full.jpg"
                        class="d-block w-100 custom-carousel" alt="...">
                    <div class="carousel-caption  bg-glass-card-carousel px-3">
                        <h5>First slide label</h5>
                        <p class="text-truncate">Some representative placeholder content for the first slide.</p>
                        <a href="#" class="btn btn-primary">BACA SELENGKAPNYA</a>

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://avatars.cloudflare.steamstatic.com/d787554503b1712803bb816def2ceb91862680c6_full.jpg"
                        class="d-block w-100 custom-carousel" alt="...">
                    <div class="carousel-caption  bg-glass-card-carousel px-3">
                        <h5>Second slide label</h5>
                        <p class="text-truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, cumque quo
                            optio, ipsam temporibus eum atque alias modi commodi officiis facilis rerum illo! Rerum aut
                            voluptate delectus dicta inventore harum.</p>
                        <a href="#" class="btn btn-primary">BACA SELENGKAPNYA</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.pexels.com/photos/18578343/pexels-photo-18578343/free-photo-of-a-woman-in-a-white-dress-and-hat-walking-through-a-field.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        class="d-block w-100 custom-carousel" alt="...">
                    <div class="carousel-caption  bg-glass-card-carousel px-3">
                        <h5>Third slide label</h5>
                        <p class="text-truncate">Some representative placeholder content for the third slide.</p>
                        <a href="#" class="btn btn-primary">BACA SELENGKAPNYA</a>

                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#berita_terbaru" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#berita_terbaru" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="container-fluid  container-beranda-berita">
        <div class="row gy-5 ">
            <div class="col-12 col-md-6 mb-5 mb-xl-5 mb-xxl-0 col-xxl-3 pb-5  position-relative">
                <div class="card bg-white card-berita mx-auto">
                    <div class="card-header bg-transparent border-0 py-5 mb-5 mt-sm-3 mb-md-5 mb-lg-5 mb-xl-3 mb-xxl-3">
                        <img id="hat" src="https://cdn.pixabay.com/photo/2023/12/10/03/00/peacock-8440548_1280.jpg"
                            alt="hat">
                    </div>
                    <div class="card-body px-4 mt-5 mt-sm-5 mt-md-3 pt-5">
                        <small>Category</small>
                        <p class="h2 fw-semibold my-2">
                            Title
                        </p>
                        <p class="h6 fw-medium line-clamp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis
                            soluta eos
                            illo iusto cupiditate magni, eveniet repellat sequi odit ipsam tenetur possimus facere aperiam
                            vero iure quo ex debitis iste? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil
                            deleniti distinctio unde possimus repellendus rem culpa ducimus sunt nam aliquid eaque, non,
                            voluptatem sit velit ad ipsam soluta earum atque.</p>
                    </div>
                    <a href="#" class="card-footer bg-transparent border-0 text-end text-decoration-none arrow-hover">
                        <p class="h-6">Selengkapnya <i class="bi bi-arrow-right"></i></p>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-5 mb-xl-5 mb-xxl-0 col-xxl-3 pb-5  position-relative">
                <div class="card bg-white card-berita mx-auto">
                    <div class="card-header bg-transparent border-0 py-5 mb-5 mt-sm-3 mb-md-5 mb-lg-5 mb-xl-3 mb-xxl-3">
                        <img id="hat" src="https://via.placeholder.com/50" alt="hat">

                    </div>
                    <div class="card-body px-4 mt-5 mt-sm-5 mt-md-3 pt-5">
                        <small>Category</small>
                        <p class="h2 fw-semibold my-2">
                            Title
                        </p>
                        <p class="h6 fw-medium line-clamp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis
                            soluta eos
                            illo iusto cupiditate magni, eveniet repellat sequi odit ipsam tenetur possimus facere aperiam
                            vero iure quo ex debitis iste? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil
                            deleniti distinctio unde possimus repellendus rem culpa ducimus sunt nam aliquid eaque, non,
                            voluptatem sit velit ad ipsam soluta earum atque.</p>
                    </div>
                    <a href="#"
                        class="card-footer bg-transparent border-0 text-end text-decoration-none arrow-hover">
                        <p class="h-6">Selengkapnya <i class="bi bi-arrow-right"></i></p>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-5 mb-xl-5 mb-xxl-0 col-xxl-3 pb-5  position-relative">
                <div class="card bg-white card-berita mx-auto">
                    <div class="card-header bg-transparent border-0 py-5 mb-5 mt-sm-3 mb-md-5 mb-lg-5 mb-xl-3 mb-xxl-3">
                        <img id="hat" src="https://via.placeholder.com/50" alt="hat">

                    </div>
                    <div class="card-body px-4 mt-5 mt-sm-5 mt-md-3 pt-5">
                        <small>Category</small>
                        <p class="h2 fw-semibold my-2">
                            Title
                        </p>
                        <p class="h6 fw-medium line-clamp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis
                            soluta eos
                            illo iusto cupiditate magni, eveniet repellat sequi odit ipsam tenetur possimus facere aperiam
                            vero iure quo ex debitis iste? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil
                            deleniti distinctio unde possimus repellendus rem culpa ducimus sunt nam aliquid eaque, non,
                            voluptatem sit velit ad ipsam soluta earum atque.</p>
                    </div>
                    <a href="#"
                        class="card-footer bg-transparent border-0 text-end text-decoration-none arrow-hover">
                        <p class="h-6">Selengkapnya <i class="bi bi-arrow-right"></i></p>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-5 mb-xl-5 mb-xxl-0 col-xxl-3 pb-5  position-relative">
                <div class="card bg-white card-berita mx-auto">
                    <div class="card-header bg-transparent border-0 py-5 mb-5 mt-sm-3 mb-md-5 mb-lg-5 mb-xl-3 mb-xxl-3">
                        <img id="hat" src="https://via.placeholder.com/50" alt="hat">

                    </div>
                    <div class="card-body px-4 mt-5 mt-sm-5 mt-md-3 pt-5">
                        <small>Category</small>
                        <p class="h2 fw-semibold my-2">
                            Title
                        </p>
                        <p class="h6 fw-medium line-clamp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis
                            soluta eos
                            illo iusto cupiditate magni, eveniet repellat sequi odit ipsam tenetur possimus facere aperiam
                            vero iure quo ex debitis iste? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil
                            deleniti distinctio unde possimus repellendus rem culpa ducimus sunt nam aliquid eaque, non,
                            voluptatem sit velit ad ipsam soluta earum atque.</p>
                    </div>
                    <a href="#"
                        class="card-footer bg-transparent border-0 text-end text-decoration-none arrow-hover">
                        <p class="h-6">Selengkapnya <i class="bi bi-arrow-right"></i></p>
                    </a>
                </div>
            </div>



        </div>
        <div class="my-3 d-flex justify-content-center align-items-center">
            <a href="javascript:void(0)" class="text-white  text-decoration-none h3 arrow-hover">Lihat Berita Lainnya
                <span class="h4">
                    <i class="bi bi-chevron-right"></i></span></a>
        </div>
    </div>
@endsection
