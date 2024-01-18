@section('pesan')
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
                                            data-toggle="modal" data-target="#detail-file">Jawab Pesan</button>
                                        <button type="button" class="btn btn-inverse-danger btn-fw btn-sm"
                                            data-toggle="modal" data-target="#hapus">Tolak Jawab</button>

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
