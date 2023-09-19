<div class="modal fade" id="set-quota-{{ $studyProgram->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="set-quota-form" action="{{ route('graduations.set-quota.store') }}" method="POST">
                @csrf
                <input type="hidden" name="graduation_id" value="{{ $graduation->id }}">
                <input type="hidden" name="study_program_id" value="{{ $studyProgram->id }}">
                <div class="modal-header">
                    <h5 class="modal-title text-capitalize">Set Kuota Prodi {{ $studyProgram->name }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div><!-- modal-header -->
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="quota" class="form-label">Kuota Wisuda <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="quota" name="quota" placeholder="Kuota" required>
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
