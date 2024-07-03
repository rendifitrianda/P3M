<x-starter>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <h4 class="pb-3 card-title">Usulan Penelitian</h4>
                        <div class="rounded card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8"></div>
                                    <div class="col-md-4">
                                        <div class="mb-0 mb-3"><label for="thn_pelaksanaan"
                                                class="form-label card-title">Tahun
                                                Pelaksanaan</label>
                                            <div class="input-group"><button disabled=""
                                                    class="btn btn-primary disabled"><i
                                                        class="fa fa-filter"></i></button><select class="form-control"
                                                    name="thn_pelaksanaan">
                                                    <option>Pilih Tahun</option>
                                                    <option value="2025">2025</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2020">2020</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped mt-3 table">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="width: 40px;">No</th>
                                                    <th class="">Ketua</th>
                                                    <th class="">Judul</th>
                                                    <th class="">Bidang Fokus</th>
                                                    <th class="" style="text-align: center;">Tahun Pelaksanaan
                                                    </th>
                                                    <th class="" style="text-align: center;">Peran</th>
                                                    <th class="" style="text-align: center;">Status Usulan</th>
                                                    <th class="" style="text-align: center;">Hasil Penilaian</th>
                                                    <th class="" style="text-align: center;">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($list_penelitian_usulan_baru as $penelitian_usulan_baru)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <a href="{{ url('frontend/dashboard/show', $dosen->id) }}"
                                                                    class="btn btn-info">
                                                                    <i class="ri-file-info-line"></i>
                                                                </a>
                                                                <a href="{{ url('frontend/dashboard/edit', $dosen->id) }}"
                                                                    class="btn btn-warning">
                                                                    <i class="ri-edit-circle-line"></i>
                                                                </a>
                                                                <x-button.delete
                                                                    id="{{ $penelitian_usulan_baru->id }}" />
                                                            </div>
                                                        </td>
                                                        <td>{{ $penelitian_usulan_baru->ketua }}</td>
                                                        <td>{{ $penelitian_usulan_baru->judul }}</td>
                                                        <td>{{ $penelitian_usulan_baru->tempat_lahir }}</td>
                                                        <td>{{ $penelitian_usulan_baru->tanggal_lahir }}</td>
                                                        <td>{{ $penelitian_usulan_baru->program_studi }}</td>
                                                        <td>{{ $penelitian_usulan_baru->jabatan_akademik }}</td>
                                                    </tr>
                                                @endforeach
                                                {{-- <tr>
                                                    <td colspan="11" class="text-center">Data tidak tersedia!</td>
                                                </tr> --}}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-starter>
