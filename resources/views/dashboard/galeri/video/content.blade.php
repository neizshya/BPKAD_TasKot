@section('video_galeri')
    {{-- hapus --}}
    <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Video</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Yakin Hapus Video ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </div>
            </div>
        </div>
    </div>
    {{-- tambah --}}
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambah" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tambah Video</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="forms-sample">
                        <div class="form-group row">
                            <label for="judul" class="col-sm-3 col-form-label">ID Youtube</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="id_youtube_tambah" placeholder="ID Youtube">
                            </div>
                        </div>
                        <p class="font-weight-bold">ID youtube didapatkan dari link url yang di tuju</p>
                        <p class="font-weight-bold ">contoh link https://www.youtube.com/watch?v=b2KXsyoaBF4 </p>
                        <p class="font-weight-bold mb-3">11 kombinasi huruf dan angka setelah v= adalah id dari video
                            (b2KXsyoaBF4)</p>
                        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                        <button class="btn btn-light" data-dismiss="modal" aria-label="Close">Batal</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
    {{-- edit --}}
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="tambah" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Ubah Video</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="forms-sample">
                        <div class="form-group row">
                            <label for="judul" class="col-sm-3 col-form-label">ID Youtube</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="id_youtube_edit" placeholder="ID Youtube">
                            </div>
                        </div>
                        <p class="font-weight-bold">ID youtube didapatkan dari link url yang di tuju</p>
                        <p class="font-weight-bold ">contoh link https://www.youtube.com/watch?v=b2KXsyoaBF4 </p>
                        <p class="font-weight-bold mb-3">11 kombinasi huruf dan angka setelah v= adalah id dari video
                            (b2KXsyoaBF4)</p>
                        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                        <button class="btn btn-light" data-dismiss="modal" aria-label="Close">Batal</button>
                    </form>


                </div>
            </div>
        </div>
    </div>


    <div class="content-wrapper">
        <div class=" stretch-card">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <h3>Video Galeri</h3>
                    <button type="button" class="btn btn-inverse-success btn-fw" data-toggle="modal"
                        data-target="#tambah">Tambah
                        Video</button>
                </div>
            </div>
        </div>

        <div class=" stretch-card mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover text-center">
                            <thead class="">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">ID Video</th>
                                    <th scope="col">Video Youtube</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Photoshop</td>
                                    <td> <a href="https://www.youtube.com/watch?v=b2KXsyoaBF4" data-toggle="lightbox"
                                            data-gallery="video-gallery" data-type="video">
                                            <img src="https://img.youtube.com/vi/b2KXsyoaBF4/hqdefault.jpg "
                                                alt="" class=""
                                                style=" width:10rem;height:10rem;border-radius:10px">
                                        </a></td>
                                    <td>
                                        <button type="button" class="btn btn-inverse-warning btn-fw btn-sm"
                                            data-toggle="modal" data-target="#edit">Ubah
                                            Video</button>

                                        <button type="button" class="btn btn-inverse-danger btn-fw btn-sm"
                                            data-toggle="modal" data-target="#hapus">Hapus
                                            Video</button>

                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
