@section('berita')
    {{-- detail --}}
    <div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Judul Berita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Deskripsi
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    {{-- hapus --}}
    <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Berita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Yakin Hapus Berita ?
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Tambah Berita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="forms-sample">
                        <div class="form-group row">
                            <label for="judul" class="col-sm-3 col-form-label">Judul</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="judul" placeholder="Judul Berita">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kategori" class="col-sm-3 col-form-label">Kategori (berdasarkan list
                                kategori)</label>
                            <div class="col-sm-9">
                                <select class="form-control form-control" id="kategori">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="deskripsi" rows="5" placeholder="Deskripsi"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="foto_utama" class="col-sm-3 col-form-label">Foto</label>
                            <div class="col-sm-9">
                                <div class="input-group ">
                                    <input type="file" accept=".jpg, .png, .jpeg" class="form-control file-upload-info"
                                        placeholder="Upload Foto">
                                </div>
                            </div>
                        </div>



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
                    <h5 class="modal-title" id="exampleModalLongTitle">Ubah Berita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="forms-sample">
                        <div class="form-group row">
                            <label for="judul" class="col-sm-3 col-form-label">Judul</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="judul" placeholder="Judul Berita">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kategori" class="col-sm-3 col-form-label">Kategori</label>
                            <div class="col-sm-9">
                                <select class="form-control form-control" id="kategori">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="deskripsi" rows="5" placeholder="Deskripsi"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="foto_utama" class="col-sm-3 col-form-label">Foto</label>
                            <div class="col-sm-9">
                                <div class="input-group ">
                                    <input type="file" accept=".jpg, .png, .jpeg"
                                        class="form-control file-upload-info" placeholder="Upload Foto">
                                </div>
                            </div>
                        </div>



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
                    <h3>List Berita</h3>
                    <button type="button" class="btn btn-inverse-success btn-fw" data-toggle="modal"
                        data-target="#tambah">Tambah
                        Berita</button>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6 my-3">
                <div class="card card-black">
                    <div class="card-body row">
                        <div class="col-3 d-flex align-items-center">
                            <img src="https://avatars.akamai.steamstatic.com/fab9f6e14530bb7ab8f259edfab656b97d6111e2_full.jpg"
                                alt="" style="width:100%; border-radius:10px">
                        </div>
                        <div class="col-9">
                            <p class="fs-30">
                                Judul </p>
                            <p class="text-truncate">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur
                                a
                                autem
                                natus iusto praesentium eius hic nesciunt odio repellat, non cupiditate labore? Odit fugit
                                assumenda facilis quas distinctio ad tempora. Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Quasi, vel necessitatibus asperiores labore sequi cupiditate ut
                                exercitationem aliquid dicta? Inventore tempore, odio optio iure minus praesentium quos!
                                Odit, dolor ut.</p>
                            <div class="mt-5">
                                <button type="button" class="btn btn-inverse-info btn-fw btn-sm" data-toggle="modal"
                                    data-target="#detail">Detail
                                    Berita</button>

                                <button type="button" class="btn btn-inverse-warning btn-fw btn-sm" data-toggle="modal"
                                    data-target="#edit">Ubah
                                    Berita</button>

                                <button type="button" class="btn btn-inverse-danger btn-fw btn-sm" data-toggle="modal"
                                    data-target="#hapus">Hapus
                                    Berita</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
