@section('peraturan_pemerintah')
    <div class="position-relative px-5 mt-5">
        <nav aria-label="breadcrumb " data-bs-theme="dark">
            <ol class="breadcrumb">
                <li class="breadcrumb-item breadcrumb-nonactive ">Regulasi</li>
                <li class="breadcrumb-item active " aria-current="page">Peraturan Pemerintah</li>
            </ol>
        </nav>
        <div class="container-fluid row p-0 px-xxl-5 g-3">

            <div class="col-lg-12">
                <div class="card text-white bg-glass-card-regulasi py-3 px-3 rounded-4">
                    <div class="hstack gap-5 px-4 px-xxl-0">
                        <div class="p-2 ms-4 d-none d-md-block">
                            <img src="https://cdn.pixabay.com/photo/2023/12/30/17/39/kombucha-8478515_1280.jpg"
                                alt="" class="rounded-4" style="width:6rem; height:6rem">
                        </div>
                        <div class="d-none d-md-flex" style="height: 6rem">
                            <div class="vr"></div>
                        </div>
                        <div class="row gy-3 mt-1 d-flex justify-content-center align-items-center">
                            <div class="col-12 p-0">
                                <p class="h3 text-white">
                                    Nama-file
                                </p>
                            </div>
                            <div class="p-0 col-12 text-secondary breadcrumb "
                                style="--bs-breadcrumb-margin-bottom:0;--bs-breadcrumb-divider-color:#6c757d">
                                <p class="breadcrumb-item text-secondary ">10-10-10</p>
                                <a href="javascript:void(0)" class="breadcrumb-item link-secondary  text-decoration-none"><i
                                        class="bi bi-eye me-1"></i> Preview</a>
                                <a href="javascript:void(0)" class="breadcrumb-item link-secondary text-decoration-none"><i
                                        class="bi bi-download me-1"></i> Unduh</a>

                            </div>
                        </div>

                    </div>

                </div>
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
@endsection
