<div class="modal fade" id="new-graduation" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <form id="new-graduation-form" action="{{ route('graduations.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Wisuda</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div><!-- modal-header -->
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="name" class="form-label">Nama Wisuda <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nama jurusan" required>
                        </div>
                        <div class="col">
                            <label for="quota" class="form-label">Kuota Wisuda <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="quota" name="quota" placeholder="Kuota wisuda" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="batch" class="form-label">Gelombang <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="batch" name="batch" required placeholder="Gelombang wisuda">
                        </div>
                        <div class="col">
                            <label for="session" class="form-label">Sesi <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="session" name="session" placeholder="Sesi wisuda" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="type" class="form-label">Jenis Wisuda <span class="text-danger">*</span></label>
                            <select class="form-select select2-new-graduation" id="type" name="type" required>
                                <option selected disabled>-- Pilih Jenis Wisuda --</option>
                                <option value="online">Online</option>
                                <option value="offline">Offline</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="schedule" class="form-label">Tanggal Pelaksanaan <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="schedule" name="schedule" placeholder="Tanggal pelaksanaan" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="start_date" class="form-label">Tanggal Mulai Pendaftaran <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="start_date" name="start_date" placeholder="Tanggal mulai pendaftaran" required>
                        </div>
                        <div class="col">
                            <label for="end_date" class="form-label">Tanggal Selesai Pendaftaran <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="end_date" name="end_date" placeholder="Tanggal selesai pendaftaran" required>
                        </div>
                    </div>
                </div><!-- modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div><!-- modal-footer -->
            </form>
        </div><!-- modal-content -->
    </div><!-- modal-content -->
</div><!-- modal -->
