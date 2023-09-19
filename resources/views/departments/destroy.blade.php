<div class="modal fade" id="destroy-department-{{ $department->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
     tabindex="-1"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="destroy-form" action="{{ route('departments.destroy', $department->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title"><i class="ri-alert-line text-danger"></i> Hapus Jurusan?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div><!-- modal-header -->
                <div class="modal-body">
                    Semua data yang terkait dengan jurusan ini akan ikut terhapus. Apakah Anda yakin ingin
                    menghapusnya?
                </div><!-- modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Ya</button>
                </div><!-- modal-footer -->
            </form>
        </div><!-- modal-content -->
    </div><!-- modal-content -->
</div><!-- modal -->
