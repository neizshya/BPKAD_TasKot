@section('informasi_publik')
    {{-- hapus --}}
    <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus File</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Yakin Hapus File ?
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Tambah File</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="forms-sample">
                        <div class="form-group row">
                            <label for="nama_file" class="col-sm-3 col-form-label">Nama File</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama_file" placeholder="Nama File">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-sm-3 col-form-label">File</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="file" placeholder="File" accept=".pdf">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tipe" class="col-sm-3 col-form-label">Tipe</label>
                            <div class="col-sm-9">
                                <select class="form-control form-control" id="tipe">
                                    <option selected disabled hidden>Pilih Tipe</option>
                                    <option value="renstra">RENSTRA</option>
                                    <option value="renja">RENJA</option>
                                    <option value="iku">IKU</option>
                                    <option value="cascading">CASCADING</option>
                                    <option value="lkip">LKIP</option>
                                    <option value="rencana_aksi">Rencana Aksi</option>
                                    <option value="mobne">MONEV</option>
                                    <option value="perjanjian_kinerja">Perjanjian Kinerja</option>
                                    <option value="pohon_kinerja">Pohon Kinerja</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="tanggal" placeholder="Tanggal">
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Ubah File</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="forms-sample">
                        <div class="form-group row">
                            <label for="nama_file" class="col-sm-3 col-form-label">Nama File</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama_file_ubah" placeholder="Nama File">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tipe" class="col-sm-3 col-form-label">Tipe</label>
                            <div class="col-sm-9">
                                <select class="form-control form-control" id="tipe_ubah">
                                    <option selected disabled hidden>Pilih Tipe</option>
                                    <option value="renstra">RENSTRA</option>
                                    <option value="renja">RENJA</option>
                                    <option value="iku">IKU</option>
                                    <option value="cascading">CASCADING</option>
                                    <option value="lkip">LKIP</option>
                                    <option value="rencana_aksi">Rencana Aksi</option>
                                    <option value="mobne">MONEV</option>
                                    <option value="perjanjian_kinerja">Perjanjian Kinerja</option>
                                    <option value="pohon_kinerja">Pohon Kinerja</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-sm-3 col-form-label">File</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="file_ubah" placeholder="File"
                                    accept=".pdf">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="tanggal_ubah" placeholder="Tanggal">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                        <button class="btn btn-light" data-dismiss="modal" aria-label="Close">Batal</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
    {{-- detail --}}
    <div class="modal fade" id="detail-file" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header" data-bs-theme="dark">
                    <h5 class="modal-title" id="exampleModalLabel">Nama File</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <embed width="100%" height="650"
                        src="https://drive.google.com/file/d/1Camvj78lOd8LsmEBTgJvipaux7DYdlY9/view"
                        type="application/pdf">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        aria-label="Close">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <div class="content-wrapper">
        <div class=" stretch-card">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <h3>Informasi Publik</h3>
                    <button type="button" class="btn btn-inverse-success btn-fw" data-toggle="modal"
                        data-target="#tambah">Tambah
                        File</button>
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
                                    <th scope="col">Nama Fiile</th>
                                    <th scope="col">Tipe</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td> nama file
                                    </td>
                                    <td>RENJA</td>
                                    <td>20/20/20</td>
                                    <td>
                                        <button type="button" class="btn btn-inverse-info btn-fw btn-sm"
                                            data-toggle="modal" data-target="#detail-file">Detail
                                            File</button>
                                        <button type="button" class="btn btn-inverse-warning btn-fw btn-sm"
                                            data-toggle="modal" data-target="#edit">Ubah
                                            File</button>

                                        <button type="button" class="btn btn-inverse-danger btn-fw btn-sm"
                                            data-toggle="modal" data-target="#hapus">Hapus
                                            File</button>

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
