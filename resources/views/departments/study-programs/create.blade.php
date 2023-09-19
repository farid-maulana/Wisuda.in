<div class="modal fade" id="new-prodi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="new-prodi-form" action="{{ route('study-programs.store') }}" method="POST">
                @csrf
                <input type="hidden" name="department_id" value="{{ $department->id }}">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Program Studi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div><!-- modal-header -->
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="grade" class="form-label">Pilih Jenjang <span class="text-danger">*</span></label>
                            <select class="form-select select2-new-prodi" name="grade" id="grade" required>
                                <option selected disabled>-- Pilih Jenjang Prodi --</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="D4">D4</option>
                                <option value="S2">S2</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="name" class="form-label">Nama Program Studi <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nama program studi" required>
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
