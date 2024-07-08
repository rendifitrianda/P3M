<x-layouts.dosen_layouts.app>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="card-title">
                            <h4 class="pb-3">Usulan Penelitian</h4>
                        </div>
                        <div class="rounded card">
                            <div class="card-header">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8 mt-2">
                                            <div class="card-title">
                                                <a href="{{ url('dosen/usulan/create') }}" class="btn btn-primary">
                                                    <i class="fas fa-plus">Tambah Data</i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card-title">
                                                <div class="mb-0 mb-0">
                                                    <label for="thn_pelaksanaan" class="form-label">Tahun
                                                        Pelaksanaan
                                                    </label>
                                                    <div class="input-group"><button disabled=""
                                                            class="btn btn-primary disabled"><i
                                                                class="fa fa-filter"></i></button><select
                                                            class="form-control" name="thn_pelaksanaan">
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
                                                        <th class="" style="text-align: center;">Status Usulan
                                                        </th>
                                                        <th class="" style="text-align: center;">Hasil Penilaian
                                                        </th>
                                                        <th class="" style="text-align: center;">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($Usulan as $usulan_penelitian_baru)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>

                                                            <td>
                                                                <div class="btn-group">
                                                                    <a href="{{ url('operator/dosen/show', $usulan_penelitian_baru->id) }}"
                                                                        class="btn btn-info">
                                                                        <i class="ri-file-info-line"></i>
                                                                    </a>
                                                                    <a href="{{ url('operator/dosen/edit', $usulan_penelitian_baru->id) }}"
                                                                        class="btn btn-warning">
                                                                        <i class="ri-edit-circle-line"></i>
                                                                    </a>
                                                                    <button class="btn btn-danger" type="button"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#hapus{{ $usulan_penelitian_baru->id }}">
                                                                        <i class="ri-chat-delete-line"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td>{{ $usulan_penelitian_baru->ketua }}</td>
                                                            <td>{{ $usulan_penelitian_baru->judul }}</td>
                                                            <td>{{ $usulan_penelitian_baru->bidang_fokus }}</td>
                                                            <td>{{ $usulan_penelitian_baru->tahun_pelaksanaan }}</td>
                                                            <td>{{ $usulan_penelitian_baru->peran }}</td>
                                                            <td>{{ $usulan_penelitian_baru->status_usulan }}</td>
                                                            <td>{{ $usulan_penelitian_baru->hasil_penilaian }}</td>
                                                        </tr>
                                                        <x-form.delete id="hapus{{ $usulan_penelitian_baru->id }}"
                                                            action="{{ url('operator/dosen/delete', $usulan_penelitian_baru->id) }}" />
                                                    @endforeach
                                                    <tr>
                                                        <td colspan="11" class="text-center">Data tidak
                                                            tersedia!
                                                        </td>
                                                    </tr>
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
    </div>


</x-layouts.dosen_layouts.app>
