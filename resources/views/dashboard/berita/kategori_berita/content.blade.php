@section('kategori_berita')
    {{-- hapus --}}
    <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Yakin Hapus Kategori ?
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
                            <label for="judul" class="col-sm-3 col-form-label">Kategori</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="kategori_tambah" placeholder="Kategori">
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Ubah Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="forms-sample">
                        <div class="form-group row">
                            <label for="judul" class="col-sm-3 col-form-label">Kategori</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="kategori_edit" placeholder="Kategori">
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
                    <h3>Kategori Berita</h3>
                    <button type="button" class="btn btn-inverse-success btn-fw" data-toggle="modal"
                        data-target="#tambah">Tambah
                        Kategori</button>
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
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Photoshop</td>
                                    <td>
                                        <button type="button" class="btn btn-inverse-warning btn-fw btn-sm"
                                            data-toggle="modal" data-target="#edit">Ubah
                                            Kategori</button>

                                        <button type="button" class="btn btn-inverse-danger btn-fw btn-sm"
                                            data-toggle="modal" data-target="#hapus">Hapus
                                            Kategori</button>

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
