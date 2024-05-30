<x-app>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Rekap Usulan</h4>
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <div class="col-md-12"><label class="font-size-13 mb-1 form-label">
                                    <h9 class="card-title">Jenis Kegiatan</h9>
                                </label><select class="form-select form-select-md">
                                    <option value="0">Pilih Jenis Kegiatan</option>
                                    <option value="1">Penelitian</option>
                                    <option value="2">Pengabdian</option>
                                    <option value="141">Prototipe</option>
                                    <option value="143">Kosabangsa</option>
                                </select></div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center row">
                    <div class="mb-2 col-md-2"><button type="button" disabled=""
                            class="btn btn-success btn btn-secondary disabled"><i
                                class="bi bi-file-earmark-excel font-size-10 align-middle me-2"></i>Excel</button></div>
                    <div class="d-flex justify-content-end col-md-10">
                        <h9 class="card-title">Jumlah Proposal:0</h9>
                    </div>
                    {{-- <i class="bi bi-file-earmark-excel"></i> --}}
                </div>
                <div class="mb-2 row">
                    <div class="col-md-12">
                        <h1 class="card-title">Daftar Usulan</h1>
                    </div>
                </div>
                <div class="card">
                    <div class="p-1 card-body">
                        <div class="text-center"><img src="/static/media/notfound.bb73258a.svg" class="w-25"
                                alt="Not Found">
                            <h5 class="mt-3 card-title">Data tidak tersedia</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
