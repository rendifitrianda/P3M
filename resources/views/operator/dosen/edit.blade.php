<x-layouts.operator_layouts.app>
    <div class="card">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-sm-3">
                        <div class="card-title">
                            Edit Data Dosen
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="card-body">
                    <form action="{{ url('operator/dosen') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Nama</b></label>
                                    <input type="text" name="nama" value="{{ $dosen->nama }}"
                                        class="form-control"required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Klaster</b></label>
                                    <input type="text" name="klaster" value="{{ $dosen->klaster }}"
                                        class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>NIDN/NIDK</b></label>
                                    <input type="number" name="nidn" value="{{ $dosen->nidn }}"
                                        class="form-control"required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Institusi</b></label>
                                    <input type="text" name="institusi" value="{{ $dosen->institusi }}"
                                        class="form-control"required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Jenjang Pendidikan</b></label>
                                    <select name="jenjang_pendidikan" class="form-select  "required>
                                        <option value="">--- Pilih ---</option>
                                        <option value="s1" @if ($dosen->s1 == 'teknik_informasi') selected @endif>S1
                                        </option>

                                        <option value="s2" @if ($dosen->s2 == 'teknik_informasi') selected @endif>S2
                                        </option>

                                        <option value="s3" @if ($dosen->s3 == 'teknik_informasi') selected @endif>S3
                                        </option>

                                        <option value="s1">S1</option>
                                        <option value="s2">S2</option>
                                        <option value="s3">S3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Program studi</b></label>
                                    <select name="program_studi" class="form-select ">
                                        <option value="">--- Pilih ---</option>

                                        <option value="teknik_informasi"
                                            @if ($dosen->program_studi == 'teknik_informasi') selected @endif>Teknik Informasi
                                        </option>

                                        <option value="teknik_sipil" @if ($dosen->program_studi == 'teknik_sipil') selected @endif>
                                            Teknik Sipil
                                        </option>

                                        <option value="teknik_elektro"
                                            @if ($dosen->program_studi == 'teknik_elektro') selected @endif>Teknik Elektro
                                        </option>
                                        <option value="teknik_pertambangan"
                                            @if ($dosen->program_studi == 'teknik_pertambangan') selected @endif>Teknik Pertambangan
                                        </option>

                                        <option value="teknik_mesin" @if ($dosen->program_studi == 'teknik_mesin') selected @endif>
                                            Teknik Mesin
                                        </option>

                                        <option value="agro_industri" @if ($dosen->program_studi == 'agro_industri') selected @endif>
                                            Agro Industri
                                        </option>

                                        <option value="tptp" @if ($dosen->program_studi == 'tptp') selected @endif>
                                            Teknologi Produksi Tanaman Perkebuna
                                        </option>

                                        <option value="tphp" @if ($dosen->program_studi == 'tphp') selected @endif>
                                            Teknologi Hasil Perkebunan
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Nomor Ktp</b></label>
                                    <input type="number" name="nomor_ktp" value="{{ $dosen->nomor_ktp }}"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Jabatan akademik</b></label>
                                    <input type="text" name="jabatan_akademik" value="{{ $dosen->jabatan_akademik }}"
                                        class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>tanggal lahir</b></label>
                                    <input type="date" name="tanggal_lahir" value="{{ $dosen->tanggal_lahir }}"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Tempat Lahir</b></label>
                                    <input type="text" name="tempat_lahir" value="{{ $dosen->tempat_lahir }}"
                                        class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Nomor Hp</b></label>
                                    <input type="number" name="nomor_hp" value="{{ $dosen->nomor_hp }}"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Alamat Surel</b></label>
                                    <input type="text" name="alamat_surel" value="{{ $dosen->alamat_surel }}"
                                        class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>alamat</b></label>
                                    <input type="text" name="alamat" value="{{ $dosen->alamat }}"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Website Personal</b></label>
                                    <input type="text" name="website_personal"
                                        value="{{ $dosen->website_personal }}" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Username</b></label>
                                    <input type="text" name="username" value="{{ $dosen->username }}"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Password</b></label>
                                    <input type="password" name="password" class="form-control"
                                        aria-placeholder="Masukkan Password Anda">
                                </div>
                            </div>
                            <div class="col-md-12 mt-4 ">
                                {{-- <x-button.simpan id="simpan" /> --}}
                                <button class="btn btn-primary"> <i class="fa fa-save"></i>Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</x-layouts.operator_layouts.app>
