<x-layouts.operator_layouts.app>
    <section class="content">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-sm-2">
                    <div class="card-title">
                        <a href="{{ url('operator/dosen/create') }}" class="btn btn-primary">
                            <i class="fas fa-info">Tambah Data</i>
                        </a>
                    </div>
                </div>
                @csrf
                <div class="mb-5 row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <!-- Default Table -->
                                <div class="table-responsive ">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Action</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Tempat Lahir</th>
                                                <th scope="col">Tgl Lahir</th>
                                                <th scope="col">Program Studi</th>
                                                <th scope="col">Jabatan Akademik</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($dosen as $dosen)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="{{ url('operator/dosen/show', $dosen->id) }}"
                                                                class="btn btn-info">
                                                                <i class="ri-file-info-line"></i>
                                                            </a>
                                                            <a href="{{ url('operator/dosen/edit', $dosen->id) }}"
                                                                class="btn btn-warning">
                                                                <i class="ri-edit-circle-line"></i>
                                                            </a>
                                                            <button class="btn btn-danger" type="button"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#hapus{{ $dosen->id }}">
                                                                <i class="ri-chat-delete-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                    <td>{{ $dosen->nama }}</td>
                                                    <td>{{ $dosen->alamat }}</td>
                                                    <td>{{ $dosen->tempat_lahir }}</td>
                                                    <td>{{ $dosen->tanggal_lahir }}</td>
                                                    <td>{{ $dosen->program_studi }}</td>
                                                    <td>{{ $dosen->jabatan_akademik }}</td>
                                                </tr>
                                                <x-form.delete id="hapus{{ $dosen->id }}"
                                                    action="{{ url('operator/dosen/delete', $dosen->id) }}" />
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <!-- End Default Table Example -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.operator_layouts.app>
