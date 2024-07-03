<x-layouts.dosen_layouts.app>
    <div class="card">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-sm-3">
                        <div class="card-title">
                            Tambah Data
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="card-body">
                    <form action="{{ url('layout/usulan_baru') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Ketua</b></label>
                                    <input type="text" name="ketua" class="form-control"required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Judul</b></label>
                                    <input type="text" name="judul" class="form-control"required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Bidang Fokus</b></label>
                                    <input type="text" name="bidang_fokus" class="form-control"required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Instiusi</b></label>
                                    <input type="text" name="Institusi" class="form-control"required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Tahun Pelaksanaan</b></label>
                                    <input type="number" name="tahun_pelaksanaan" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Peran</b></label>
                                    <input type="text" name="peran" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Status Usulan</b></label>
                                    <input type="text" name="status_usulan" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Hasil Penelitian</b></label>
                                    <input type="text" name="hasil_penelitian" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md- mt-4">
                                <button class="float-end btn btn-primary"> <i class="fas fa-save"></i>Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</x-layouts.dosen_layouts.app>
