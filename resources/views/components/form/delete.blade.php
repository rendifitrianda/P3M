<!-- Modal -->
<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ $action }}" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-body d-flex flex-direction-col gap-2 align-items-center justify-content-center">
                    <div class="card-title">
                        <div>
                            <h1>Yakin ingin menghapus data ini ?!</h1>

                        </div>
                        <p>Data yang telah dihapus tidak bisa dikembalikan lagi</p>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">BATAL</button>
                    <button type="submit" class="btn btn-danger">TETAP HAPUS</button>
                </div>
            </div>
        </form>
    </div>
</div>
