<x-starter>
    <section class="content">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-sm-2">
                    <div class="card-title">
                        <a href="{{ url('layout/dashboard/create') }}" class="btn btn-primary">
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
                                                <th scope="col">Klaster</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Program Studi</th>
                                                <th scope="col">Nomor Ktp</th>
                                                <th scope="col">Jabatan Akademik</th>
                                                <th scope="col">Tempat Lahir</th>
                                                <th scope="col">Tgl Lahir</th>
                                                <th scope="col">Nomor Hp</th>
                                                <th scope="col">Alamat Surel</th>
                                                <th scope="col">Jabatan Akademik</th>
                                                <th scope="col">Jenjang Pendidikan</th>
                                                <th scope="col">Website Personal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($list_dosen as $dosen)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>

                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="{{ url('layout/dashboard', $dosen->id) }}"
                                                                class="btn btn-info">
                                                                <i class="bi fa-info"></i>
                                                            </a>
                                                            <a href="{{ url('layout/dashboard', $dosen->id) }}/edit"
                                                                class="btn btn-warning">
                                                                <i class="ri-edit-circle-line"></i>
                                                            </a>
                                                            {{-- <x-button.delete id="{{ $date->id }}" /> --}}
                                                        </div>
                                                    </td>
                                                    <td>{{ $dosen->nama }}</td>
                                                    <td>{{ $dosen->klaster }}</td>
                                                    <td>{{ $dosen->jenjang_pendidikan }}</td>
                                                    <td>{{ $dosen->program_studi }}</td>
                                                    <td>{{ $dosen->nomor_ktp }}</td>
                                                    <td>{{ $dosen->jabatan_akademik }}</td>
                                                    <td>{{ $dosen->alamat }}</td>
                                                    <td>{{ $dosen->tanggal_lahir }}</td>
                                                    <td>{{ $dosen->tempat_lahir }}</td>
                                                    <td>{{ $dosen->nomor_hp }}</td>
                                                    <td>{{ $dosen->alamat_surel }}</td>
                                                    <td>{{ $dosen->website_personal }}</td>
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
</x-starter>
