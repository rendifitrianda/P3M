<x-app>
    <section class="content">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-sm-2">
                    <div class="card-title">
                        <a href="{{ url('frontend/dashboard/create') }}" class="btn btn-primary">
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
                                            @foreach ($list_dosen as $dosen)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>

                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="{{ url('frontend/dashboard', $dosen->id) }}"
                                                                class="btn btn-info">
                                                                <i class="ri-file-info-line"></i>
                                                            </a>
                                                            <a href="{{ url('frontend/dashboard', $dosen->id) }}"
                                                                class="btn btn-warning">
                                                                <i class="ri-edit-circle-line"></i>
                                                            </a>
                                                            <x-button.delete id="{{ $dosen->id }}" />
                                                        </div>
                                                    </td>
                                                    <td>{{ $dosen->nama }}</td>
                                                    <td>{{ $dosen->alamat }}</td>
                                                    <td>{{ $dosen->tempat_lahir }}</td>
                                                    <td>{{ $dosen->tanggal_lahir }}</td>
                                                    <td>{{ $dosen->program_studi }}</td>
                                                    <td>{{ $dosen->jabatan_akademik }}</td>
                                                </tr>
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
</x-app>
