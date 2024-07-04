<x-layouts.operator_layouts.app>
    <div class="card">
        <div class="pt-4 card-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="pt-4">
                        <div class="row">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <p class="text-muted mb-0">NAMA</p>
                                    <h5 class="font-size-12 mb-3 text-primary">{{ $dosen->nama }}</h5>
                                    <p class="text-muted mb-0">NIDN/NIDK</p>
                                    <h5 class="font-size-12 mb-3 text-primary">{{ $dosen->nidn }}</h5>
                                    <p class="text-muted mb-0">Klaster</p>
                                    <h5 class="font-size-12 mb-3 text-primary">Kelompok PT Madya
                                    </h5>
                                    <p class="text-muted mb-0">Institusi</p>
                                    <h5 class="font-size-12 mb-3 text-primary">{{ $dosen->institusi }}</h5>
                                    <p class="text-muted mb-0">Program Studi</p>
                                    <h5 class="font-size-12 mb-3 text-primary">{{ $dosen->program_studi }}</h5>
                                    <p class="text-muted mb-0">Jenjang Pendidikan</p>
                                    <h5 class="font-size-12 mb-3 text-primary">{{ $dosen->jenjang_pendidikan }}</h5>
                                    <p class="text-muted mb-0">Jabatan Akademik</p>
                                    <h5 class="font-size-12 mb-3 text-primary">{{ $dosen->jabatan_akademik }}</h5>
                                    <p class="text-muted mb-0">Alamat</p>
                                    <h5 class="font-size-12 mb-3 text-primary">{{ $dosen->alamat }}</h5>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <p class="text-muted mb-0">Tempat Tanggal Lahir</p>
                                    <h5 class="font-size-12 mb-3 text-primary">
                                        {{ $dosen->tempat_lahir }},{{ $dosen->tanggal_lahir }}</h5>
                                    <p class="text-muted mb-0">No KTP</p>
                                    <h5 class="font-size-12 mb-3 text-primary">{{ $dosen->nomor_ktp }}</h5>
                                    <p class="text-muted mb-0">No HP</p>
                                    <h5 class="font-size-12 mb-3 text-primary">{{ $dosen->nomor_hp }}</h5>
                                    <p class="text-muted mb-0">Alamat Surel</p>
                                    <h5 class="font-size-12 mb-3 text-primary">{{ $dosen->alamat_surel }}</h5>
                                    <p class="text-muted mb-0">Website Personal</p>
                                    <h5 class="font-size-12 mb-3 text-primary">{{ $dosen->website_personal }}</h5>
                                </div>
                            </div>
                            <div class="text-right col-sm-12">
                                <hr><a class="btn btn-warning "
                                    href="{{ url('frontend/dashboard/edit', $dosen->id) }}"><i
                                        class="fas fa-pen"></i>Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.operator_layouts.app>
