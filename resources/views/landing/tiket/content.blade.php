@section('tiket')
    <div class="position-relative px-5 mt-5">
        <nav aria-label="breadcrumb " data-bs-theme="dark">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-white h3">Cek Tiket</li>
            </ol>
        </nav>
        <div class="container">
            <form action="">
                <div class="input-group mb-3" data-bs-theme="dark">
                    <input type="text" class="form-control" placeholder="Masukan Tiket" aria-label="Masukan Tiket"
                        aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cek</button>
                </div>
            </form>
        </div>
        <div class="container-fluid table-responsive">
            <table class="rounded-corners w-100">
                <thead>
                    <tr>
                        <th scope="col" class="p-3 col">Tiket</th>
                        <th scope="col" class="p-3 col">Tanggal</th>
                        <th scope="col" class="p-3 col-1">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="p-3">1</th>
                        <td class="p-3">Mark</td>
                        <td class="p-3">
                            <span class="badge text-bg-secondary">Belum Dijawab</span>
                            <span class="badge text-bg-success">Silahkan cek email anda</span>
                            <span class="badge text-bg-danger">Pertanyaan ditolak</span>

                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>
@endsection
