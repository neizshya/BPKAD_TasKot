@section('pesan')
    <div class="modal fade" id="jawab" tabindex="-1" role="dialog" aria-labelledby="jawab" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Jawab Pesan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="forms-sample">
                        <div class="form-group row">
                            <label for="nama_file" class="col-sm-3 col-form-label">Jawaban Pesan</label>
                            <div class="col-sm-9">
                                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Kirim</button>
                        <button class="btn btn-light" data-dismiss="modal" aria-label="Close">Batal</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="tolak" tabindex="-1" role="dialog" aria-labelledby="jawab" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tolak Pesan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mb-3">Yakin Tolak Pesan ?</p>




                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger mr-2">Ya</button>
                    <button class="btn btn-light" data-dismiss="modal" aria-label="Close">Tidak</button>
                </div>
            </div>
        </div>
    </div>

    <div class="content-wrapper">
        <div class=" stretch-card">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <h3>Pesan</h3>
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
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Pesan</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td> nama file
                                    </td>
                                    <td>RENJA</td>
                                    <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit iste tempore
                                        consectetur alias officiis corporis, unde eveniet consequatur magni vel eos! Totam
                                        quibusdam quam aspernatur tempore possimus, molestiae sequi quia!</td>
                                    <td>
                                        <div class="badge badge-success">
                                            Dijawab
                                        </div>
                                        <div class="badge badge-danger">
                                            Ditolak
                                        </div>
                                        <div class="badge badge-secondary">
                                            Belum Dijawab
                                        </div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-inverse-success btn-fw btn-sm"
                                            data-toggle="modal" data-target="#jawab">Jawab Pesan</button>
                                        <button type="button" class="btn btn-inverse-danger btn-fw btn-sm"
                                            data-toggle="modal" data-target="#tolak">Tolak Jawab</button>

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
