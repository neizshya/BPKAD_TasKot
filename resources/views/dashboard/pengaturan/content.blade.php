@section('pengaturan')
    <div class="content-wrapper">
        <div class=" stretch-card">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <h3>Pengaturan</h3>

                </div>
            </div>
        </div>
        <div class=" stretch-card mt-3">
            <div class="card">

                <div class="card-body ">
                    <a class="text-decoration-none text-dark" data-bs-toggle="collapse" href="#collapse_change_password"
                        aria-expanded="false" aria-controls="collapseExample" id="changePasswordLink">
                        <div class="w-100">
                            <div class="row ">
                                <div class="col-11 ">
                                    <p>
                                        Ubah Kata Sandi
                                    </p>
                                </div>
                                <div class="col-1">
                                    <i class="ti-angle-right menu-icon"></i>
                                    <i class="ti-angle-down menu-icon d-none"></i>

                                </div>

                            </div>
                        </div>
                    </a>
                    <div class="collapse" id="collapse_change_password">
                        <form action="">
                            <div class="mb-3">
                                <label for="currentPassword">Kata Sandi Saat Ini</label>
                                <input type="password" class="form-control" id="currentPassword">
                            </div>
                            <div class="mb-3">
                                <label for="newPassword">Kata Sandi Baru (Kombinasi minimal 1 huruf kapital dan 1
                                    angka)</label>
                                <input type="password" class="form-control" id="newPassword">
                            </div>
                            <div class="mb-3">
                                <label for="newPassword">Masukan Ulang Kata Sandi Baru</label>
                                <input type="password" class="form-control" id="re-newPassword">
                            </div>
                            <button type="submit" class="btn bg-secondary" id="change_password_submit" disabled>Simpan
                                Perubahan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
