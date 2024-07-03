<?php if (isset($component)) { $__componentOriginal7ae6b45c011e855a5545a671a7f3568e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7ae6b45c011e855a5545a671a7f3568e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="main-content">
        <div class="page-content">
            <div class="my-3 container-fluid">
                <div class="bg-white row">
                    <div class="d-flex col-md-7">
                        <h4 class="text-uppercase font-size-20 card-title p-2">Tambah Data Dosen</h4>
                        <div class="pt-1"> <i class="fa fa-question-circle pointer" id="Tooltop-tcZjyf7iec"></i></div>
                    </div>
                    <div class="d-flex gap-1 pb-5 col-md-5"><input type="text" class="form-control"
                            placeholder="Cari NIDN Dosen" value=""><button class="btn btn-primary btn-block"
                            disabled="">Cek</button>
                    </div>
                    <div class="text-center col-md-12">
                        <img src=" <?php echo e(url('assets')); ?>/assets/img/gambar-3.png" class="w-25" alt="Not Found">
                        <h5 class="mt-3 card-title">Data tidak tersedia</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white container-fluid">
            <div class="d-flex justify-content-between align-baseline p-1 row">
                <div class="col-md-6">
                    <h4 class="text-uppercase font-size-20 card-title p-2">Daftar Dosen</h4>
                </div>
                <div class="d-flex gap-1 pb-1 col-md-5"><input type="text" class="form-control"
                        placeholder="Cari Data Dosen" value=""><select class="form-select form-select-md">
                        <option value="nama">Berdasarkan Nama</option>
                        <option value="nidn">Berdasarkan Nidn</option>
                    </select><button class="btn btn-primary btn-block">Cari</button></div>
                <div class="col-md-1"><select class="form-select form-select-md">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                        <option value="50">50</option>
                    </select></div>
            </div>
        </div>
        <div class="p-3 bg-white container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Institusi</th>
                                    <th>Personal</th>
                                    <th>Identitas</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p>PT</p>
                                            </div>
                                            <div class="col-md-8">
                                                <p><b>Politeknik Negeri Ketapang</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">Prodi</div>
                                            <div class="col-md-8">
                                                <p><b>Perawatan Dan Perbaikan Mesin</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">Pendidikan</div>
                                            <div class="col-md-8">
                                                <p><b>Non Pendidikan Tinggi</b></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-5">NIDN</div>
                                            <div class="col-md-7">
                                                <p><b>1108068503</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Nama</div>
                                            <div class="col-md-7">
                                                <p><b>RUDI HARIANSYAH</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Jenis Kelamin</div>
                                            <div class="col-md-7">
                                                <p><b>Laki-Laki</b></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-5">Jabatan Fungsional</div>
                                            <div class="col-md-7">
                                                <p><b>Tidak Punya</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Alamat</div>
                                            <div class="col-md-7">
                                                <p><b></b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">No. HP</div>
                                            <div class="col-md-7">
                                                <p><b></b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Surel</div>
                                            <div class="col-md-7">
                                                <p><b></b></p>
                                            </div>
                                        </div>
                                        <p>
                                        <div class="row">
                                            <div class="col-md-5">Status</div>
                                            <div class="col-md-7"><span class="badge bg-danger">Keluar</span></div>
                                        </div>
                                        </p>
                                    </td>
                                    <td class="d-flex flex-column"><button type="button"
                                            title="Sinkronisasi Data Dosen dengan PDDIKTI"
                                            class="btn btn-outline-primary btn-sm"><span><i class="fas fa-sync"></i>
                                                Sync</span></button><a class="my-3"
                                            href="/operator/data-pendukung/sinkronisasi-dosen/1108068503"><button
                                                title="Lihat detail data Dosen"
                                                class="btn btn-outline-success btn-sm"><span><i
                                                        class="fas fa-eye"></i></span> Lihat</button></a><a
                                            href="/operator/data-pendukung/sinkronisasi-dosen/edit-dosen/1108068503"><button
                                                title="Edit data Dosen"
                                                class="px-3 btn btn-outline-warning btn-sm"><span><i
                                                        class="fas fa-pen"></i><br></span>Edit</button></a></td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p>PT</p>
                                            </div>
                                            <div class="col-md-8">
                                                <p><b>Politeknik Negeri Ketapang</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">Prodi</div>
                                            <div class="col-md-8">
                                                <p><b>Teknik Pertambangan</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">Pendidikan</div>
                                            <div class="col-md-8">
                                                <p><b>Non Pendidikan Tinggi</b></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-5">NIDN</div>
                                            <div class="col-md-7">
                                                <p><b>1112128302</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Nama</div>
                                            <div class="col-md-7">
                                                <p><b>CITRA EKA SYANDI</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Jenis Kelamin</div>
                                            <div class="col-md-7">
                                                <p><b>Laki-Laki</b></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-5">Jabatan Fungsional</div>
                                            <div class="col-md-7">
                                                <p><b>Tidak Punya</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Alamat</div>
                                            <div class="col-md-7">
                                                <p><b></b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">No. HP</div>
                                            <div class="col-md-7">
                                                <p><b></b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Surel</div>
                                            <div class="col-md-7">
                                                <p><b></b></p>
                                            </div>
                                        </div>
                                        <p>
                                        <div class="row">
                                            <div class="col-md-5">Status</div>
                                            <div class="col-md-7"><span class="badge bg-danger">Keluar</span>
                                            </div>
                                        </div>
                                        </p>
                                    </td>
                                    <td class="d-flex flex-column"><button type="button"
                                            title="Sinkronisasi Data Dosen dengan PDDIKTI"
                                            class="btn btn-outline-primary btn-sm"><span><i class="fas fa-sync"></i>
                                                Sync</span></button><a class="my-3"
                                            href="/operator/data-pendukung/sinkronisasi-dosen/1112128302"><button
                                                title="Lihat detail data Dosen"
                                                class="btn btn-outline-success btn-sm"><span><i
                                                        class="fas fa-eye"></i></span> Lihat</button></a><a
                                            href="/operator/data-pendukung/sinkronisasi-dosen/edit-dosen/1112128302"><button
                                                title="Edit data Dosen"
                                                class="px-3 btn btn-outline-warning btn-sm"><span><i
                                                        class="fas fa-pen"></i><br></span>Edit</button></a></td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p>PT</p>
                                            </div>
                                            <div class="col-md-8">
                                                <p><b>Politeknik Negeri Ketapang</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">Prodi</div>
                                            <div class="col-md-8">
                                                <p><b>Perawatan Dan Perbaikan Mesin</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">Pendidikan</div>
                                            <div class="col-md-8">
                                                <p><b>S1</b></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-5">NIDN</div>
                                            <div class="col-md-7">
                                                <p><b>1123028401</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Nama</div>
                                            <div class="col-md-7">
                                                <p><b>ADI RUSIANDI</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Jenis Kelamin</div>
                                            <div class="col-md-7">
                                                <p><b>Laki-Laki</b></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-5">Jabatan Fungsional</div>
                                            <div class="col-md-7">
                                                <p><b>Tidak Punya</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Alamat</div>
                                            <div class="col-md-7">
                                                <p><b></b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">No. HP</div>
                                            <div class="col-md-7">
                                                <p><b></b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Surel</div>
                                            <div class="col-md-7">
                                                <p><b></b></p>
                                            </div>
                                        </div>
                                        <p>
                                        <div class="row">
                                            <div class="col-md-5">Status</div>
                                            <div class="col-md-7"><span class="badge bg-danger">Keluar</span>
                                            </div>
                                        </div>
                                        </p>
                                    </td>
                                    <td class="d-flex flex-column"><button type="button"
                                            title="Sinkronisasi Data Dosen dengan PDDIKTI"
                                            class="btn btn-outline-primary btn-sm"><span><i class="fas fa-sync"></i>
                                                Sync</span></button><a class="my-3"
                                            href="/operator/data-pendukung/sinkronisasi-dosen/1123028401"><button
                                                title="Lihat detail data Dosen"
                                                class="btn btn-outline-success btn-sm"><span><i
                                                        class="fas fa-eye"></i></span> Lihat</button></a><a
                                            href="/operator/data-pendukung/sinkronisasi-dosen/edit-dosen/1123028401"><button
                                                title="Edit data Dosen"
                                                class="px-3 btn btn-outline-warning btn-sm"><span><i
                                                        class="fas fa-pen"></i><br></span>Edit</button></a></td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p>PT</p>
                                            </div>
                                            <div class="col-md-8">
                                                <p><b>Politeknik Negeri Ketapang</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">Prodi</div>
                                            <div class="col-md-8">
                                                <p><b>Teknologi Listrik</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">Pendidikan</div>
                                            <div class="col-md-8">
                                                <p><b>S2 Terapan</b></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-5">NIDN</div>
                                            <div class="col-md-7">
                                                <p><b>0028059303</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Nama</div>
                                            <div class="col-md-7">
                                                <p><b>FACHRUL ROZIE S.T, M.Tr.T.</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Jenis Kelamin</div>
                                            <div class="col-md-7">
                                                <p><b>Laki-Laki</b></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-5">Jabatan Fungsional</div>
                                            <div class="col-md-7">
                                                <p><b>Asisten Ahli</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Alamat</div>
                                            <div class="col-md-7">
                                                <p><b>Jl. Suka Maju - Bujang Garang</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">No. HP</div>
                                            <div class="col-md-7">
                                                <p><b>-081255442202</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Surel</div>
                                            <div class="col-md-7">
                                                <p><b>frozie.28@gmail.com</b></p>
                                            </div>
                                        </div>
                                        <p>
                                        <div class="row">
                                            <div class="col-md-5">Status</div>
                                            <div class="col-md-7"><span class="badge bg-success">Aktif
                                                    Mengajar</span></div>
                                        </div>
                                        </p>
                                    </td>
                                    <td class="d-flex flex-column"><button type="button"
                                            title="Sinkronisasi Data Dosen dengan PDDIKTI"
                                            class="btn btn-outline-primary btn-sm"><span><i class="fas fa-sync"></i>
                                                Sync</span></button><a class="my-3"
                                            href="/operator/data-pendukung/sinkronisasi-dosen/0028059303"><button
                                                title="Lihat detail data Dosen"
                                                class="btn btn-outline-success btn-sm"><span><i
                                                        class="fas fa-eye"></i></span> Lihat</button></a><a
                                            href="/operator/data-pendukung/sinkronisasi-dosen/edit-dosen/0028059303"><button
                                                title="Edit data Dosen"
                                                class="px-3 btn btn-outline-warning btn-sm"><span><i
                                                        class="fas fa-pen"></i><br></span>Edit</button></a></td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p>PT</p>
                                            </div>
                                            <div class="col-md-8">
                                                <p><b>Politeknik Negeri Ketapang</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">Prodi</div>
                                            <div class="col-md-8">
                                                <p><b>Perawatan Dan Perbaikan Mesin</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">Pendidikan</div>
                                            <div class="col-md-8">
                                                <p><b>Non Pendidikan Tinggi</b></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-5">NIDN</div>
                                            <div class="col-md-7">
                                                <p><b>1125058601</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Nama</div>
                                            <div class="col-md-7">
                                                <p><b>EDY MARWAZI</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Jenis Kelamin</div>
                                            <div class="col-md-7">
                                                <p><b>Laki-Laki</b></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-5">Jabatan Fungsional</div>
                                            <div class="col-md-7">
                                                <p><b>Tidak Punya</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Alamat</div>
                                            <div class="col-md-7">
                                                <p><b></b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">No. HP</div>
                                            <div class="col-md-7">
                                                <p><b></b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Surel</div>
                                            <div class="col-md-7">
                                                <p><b></b></p>
                                            </div>
                                        </div>
                                        <p>
                                        <div class="row">
                                            <div class="col-md-5">Status</div>
                                            <div class="col-md-7"><span class="badge bg-danger">Keluar</span>
                                            </div>
                                        </div>
                                        </p>
                                    </td>
                                    <td class="d-flex flex-column"><button type="button"
                                            title="Sinkronisasi Data Dosen dengan PDDIKTI"
                                            class="btn btn-outline-primary btn-sm"><span><i class="fas fa-sync"></i>
                                                Sync</span></button><a class="my-3"
                                            href="/operator/data-pendukung/sinkronisasi-dosen/1125058601"><button
                                                title="Lihat detail data Dosen"
                                                class="btn btn-outline-success btn-sm"><span><i
                                                        class="fas fa-eye"></i></span> Lihat</button></a><a
                                            href="/operator/data-pendukung/sinkronisasi-dosen/edit-dosen/1125058601"><button
                                                title="Edit data Dosen"
                                                class="px-3 btn btn-outline-warning btn-sm"><span><i
                                                        class="fas fa-pen"></i><br></span>Edit</button></a></td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>6</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p>PT</p>
                                            </div>
                                            <div class="col-md-8">
                                                <p><b>Politeknik Negeri Ketapang</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">Prodi</div>
                                            <div class="col-md-8">
                                                <p><b>Teknologi Rekayasa Konstruksi Jalan dan Jembatan</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">Pendidikan</div>
                                            <div class="col-md-8">
                                                <p><b>S2</b></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-5">NIDN</div>
                                            <div class="col-md-7">
                                                <p><b>0011109401</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Nama</div>
                                            <div class="col-md-7">
                                                <p><b>Ir ALAN PUTRANTO S.T, M.T</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Jenis Kelamin</div>
                                            <div class="col-md-7">
                                                <p><b>Laki-Laki</b></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-5">Jabatan Fungsional</div>
                                            <div class="col-md-7">
                                                <p><b>Asisten Ahli</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Alamat</div>
                                            <div class="col-md-7">
                                                <p><b>Dsn Gerai Kiri</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">No. HP</div>
                                            <div class="col-md-7">
                                                <p><b>085245662591</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Surel</div>
                                            <div class="col-md-7">
                                                <p><b>alanputranto@politap.ac.id</b></p>
                                            </div>
                                        </div>
                                        <p>
                                        <div class="row">
                                            <div class="col-md-5">Status</div>
                                            <div class="col-md-7"><span class="badge bg-warning">Tugas
                                                    Belajar</span></div>
                                        </div>
                                        </p>
                                    </td>
                                    <td class="d-flex flex-column"><button type="button"
                                            title="Sinkronisasi Data Dosen dengan PDDIKTI"
                                            class="btn btn-outline-primary btn-sm"><span><i class="fas fa-sync"></i>
                                                Sync</span></button><a class="my-3"
                                            href="/operator/data-pendukung/sinkronisasi-dosen/0011109401"><button
                                                title="Lihat detail data Dosen"
                                                class="btn btn-outline-success btn-sm"><span><i
                                                        class="fas fa-eye"></i></span> Lihat</button></a><a
                                            href="/operator/data-pendukung/sinkronisasi-dosen/edit-dosen/0011109401"><button
                                                title="Edit data Dosen"
                                                class="px-3 btn btn-outline-warning btn-sm"><span><i
                                                        class="fas fa-pen"></i><br></span>Edit</button></a></td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>7</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p>PT</p>
                                            </div>
                                            <div class="col-md-8">
                                                <p><b>Politeknik Negeri Ketapang</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">Prodi</div>
                                            <div class="col-md-8">
                                                <p><b>Teknologi Listrik</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">Pendidikan</div>
                                            <div class="col-md-8">
                                                <p><b>S2</b></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-5">NIDN</div>
                                            <div class="col-md-7">
                                                <p><b>1123098601</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Nama</div>
                                            <div class="col-md-7">
                                                <p><b>YUDI CHANDRA S.ST, M.T.</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Jenis Kelamin</div>
                                            <div class="col-md-7">
                                                <p><b>Laki-Laki</b></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-5">Jabatan Fungsional</div>
                                            <div class="col-md-7">
                                                <p><b>Lektor</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Alamat</div>
                                            <div class="col-md-7">
                                                <p><b>Jl. Suka Maju - Tj. Pasar</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">No. HP</div>
                                            <div class="col-md-7">
                                                <p><b>083151676737</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Surel</div>
                                            <div class="col-md-7">
                                                <p><b>chandra.yudi.2386@gmail.com</b></p>
                                            </div>
                                        </div>
                                        <p>
                                        <div class="row">
                                            <div class="col-md-5">Status</div>
                                            <div class="col-md-7"><span class="badge bg-success">Aktif
                                                    Mengajar</span></div>
                                        </div>
                                        </p>
                                    </td>
                                    <td class="d-flex flex-column"><button type="button"
                                            title="Sinkronisasi Data Dosen dengan PDDIKTI"
                                            class="btn btn-outline-primary btn-sm"><span><i class="fas fa-sync"></i>
                                                Sync</span></button><a class="my-3"
                                            href="/operator/data-pendukung/sinkronisasi-dosen/1123098601"><button
                                                title="Lihat detail data Dosen"
                                                class="btn btn-outline-success btn-sm"><span><i
                                                        class="fas fa-eye"></i></span> Lihat</button></a><a
                                            href="/operator/data-pendukung/sinkronisasi-dosen/edit-dosen/1123098601"><button
                                                title="Edit data Dosen"
                                                class="px-3 btn btn-outline-warning btn-sm"><span><i
                                                        class="fas fa-pen"></i><br></span>Edit</button></a></td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>8</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p>PT</p>
                                            </div>
                                            <div class="col-md-8">
                                                <p><b>Politeknik Negeri Ketapang</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">Prodi</div>
                                            <div class="col-md-8">
                                                <p><b>Agroindustri</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">Pendidikan</div>
                                            <div class="col-md-8">
                                                <p><b>S2</b></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-5">NIDN</div>
                                            <div class="col-md-7">
                                                <p><b>1117098305</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Nama</div>
                                            <div class="col-md-7">
                                                <p><b>ADHA PANCA WARDANU S.TP, M.P.</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Jenis Kelamin</div>
                                            <div class="col-md-7">
                                                <p><b>Laki-Laki</b></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-5">Jabatan Fungsional</div>
                                            <div class="col-md-7">
                                                <p><b>Lektor</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Alamat</div>
                                            <div class="col-md-7">
                                                <p><b>Jalan HM Suwignyo No 12
                                                        Kel. Sungai Jawi, Kec. Pontianak Kota
                                                        Kota Pontianak 7</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">No. HP</div>
                                            <div class="col-md-7">
                                                <p><b>081345028801</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Surel</div>
                                            <div class="col-md-7">
                                                <p><b>ap_wardhanu@yahoo.co.id</b></p>
                                            </div>
                                        </div>
                                        <p>
                                        <div class="row">
                                            <div class="col-md-5">Status</div>
                                            <div class="col-md-7"><span class="badge bg-success">Aktif
                                                    Mengajar</span></div>
                                        </div>
                                        </p>
                                    </td>
                                    <td class="d-flex flex-column"><button type="button"
                                            title="Sinkronisasi Data Dosen dengan PDDIKTI"
                                            class="btn btn-outline-primary btn-sm"><span><i class="fas fa-sync"></i>
                                                Sync</span></button><a class="my-3"
                                            href="/operator/data-pendukung/sinkronisasi-dosen/1117098305"><button
                                                title="Lihat detail data Dosen"
                                                class="btn btn-outline-success btn-sm"><span><i
                                                        class="fas fa-eye"></i></span> Lihat</button></a><a
                                            href="/operator/data-pendukung/sinkronisasi-dosen/edit-dosen/1117098305"><button
                                                title="Edit data Dosen"
                                                class="px-3 btn btn-outline-warning btn-sm"><span><i
                                                        class="fas fa-pen"></i><br></span>Edit</button></a></td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>9</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p>PT</p>
                                            </div>
                                            <div class="col-md-8">
                                                <p><b>Politeknik Negeri Ketapang</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">Prodi</div>
                                            <div class="col-md-8">
                                                <p><b>Teknologi Rekayasa Konstruksi Jalan dan Jembatan</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">Pendidikan</div>
                                            <div class="col-md-8">
                                                <p><b>S2</b></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-5">NIDN</div>
                                            <div class="col-md-7">
                                                <p><b>1101108301</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Nama</div>
                                            <div class="col-md-7">
                                                <p><b>NELY KURNILA S.Pd, M.Pd</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Jenis Kelamin</div>
                                            <div class="col-md-7">
                                                <p><b>Perempuan</b></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-5">Jabatan Fungsional</div>
                                            <div class="col-md-7">
                                                <p><b>Asisten Ahli</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Alamat</div>
                                            <div class="col-md-7">
                                                <p><b>Jalan Lingkar Kota, BTN Darussalam 4 Blok D No 2</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">No. HP</div>
                                            <div class="col-md-7">
                                                <p><b>081322399603</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Surel</div>
                                            <div class="col-md-7">
                                                <p><b>sister.nelykurnila@gmail.com</b></p>
                                            </div>
                                        </div>
                                        <p>
                                        <div class="row">
                                            <div class="col-md-5">Status</div>
                                            <div class="col-md-7"><span class="badge bg-success">Aktif
                                                    Mengajar</span></div>
                                        </div>
                                        </p>
                                    </td>
                                    <td class="d-flex flex-column"><button type="button"
                                            title="Sinkronisasi Data Dosen dengan PDDIKTI"
                                            class="btn btn-outline-primary btn-sm"><span><i class="fas fa-sync"></i>
                                                Sync</span></button><a class="my-3"
                                            href="/operator/data-pendukung/sinkronisasi-dosen/1101108301"><button
                                                title="Lihat detail data Dosen"
                                                class="btn btn-outline-success btn-sm"><span><i
                                                        class="fas fa-eye"></i></span> Lihat</button></a><a
                                            href="/operator/data-pendukung/sinkronisasi-dosen/edit-dosen/1101108301"><button
                                                title="Edit data Dosen"
                                                class="px-3 btn btn-outline-warning btn-sm"><span><i
                                                        class="fas fa-pen"></i><br></span>Edit</button></a></td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>10</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p>PT</p>
                                            </div>
                                            <div class="col-md-8">
                                                <p><b>Politeknik Negeri Ketapang</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">Prodi</div>
                                            <div class="col-md-8">
                                                <p><b>Teknologi Listrik</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">Pendidikan</div>
                                            <div class="col-md-8">
                                                <p><b>S2</b></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-5">NIDN</div>
                                            <div class="col-md-7">
                                                <p><b>1104058401</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Nama</div>
                                            <div class="col-md-7">
                                                <p><b>AKHDIYATUL S.ST, M.T</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Jenis Kelamin</div>
                                            <div class="col-md-7">
                                                <p><b>Laki-Laki</b></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-5">Jabatan Fungsional</div>
                                            <div class="col-md-7">
                                                <p><b>Lektor</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Alamat</div>
                                            <div class="col-md-7">
                                                <p><b>Jl. PLAMBOYAN NO.12, KEL.KANTOR, KEC.DELTA PAWAN, KETAPANG,
                                                        KALIMANTAN BARAT</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">No. HP</div>
                                            <div class="col-md-7">
                                                <p><b>085252672001</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">Surel</div>
                                            <div class="col-md-7">
                                                <p><b>ariendhya@gmail.com</b></p>
                                            </div>
                                        </div>
                                        <p>
                                        <div class="row">
                                            <div class="col-md-5">Status</div>
                                            <div class="col-md-7"><span class="badge bg-success">Aktif
                                                    Mengajar</span></div>
                                        </div>
                                        </p>
                                    </td>
                                    <td class="d-flex flex-column"><button type="button"
                                            title="Sinkronisasi Data Dosen dengan PDDIKTI"
                                            class="btn btn-outline-primary btn-sm"><span><i class="fas fa-sync"></i>
                                                Sync</span></button><a class="my-3"
                                            href="/operator/data-pendukung/sinkronisasi-dosen/1104058401"><button
                                                title="Lihat detail data Dosen"
                                                class="btn btn-outline-success btn-sm"><span><i
                                                        class="fas fa-eye"></i></span> Lihat</button></a><a
                                            href="/operator/data-pendukung/sinkronisasi-dosen/edit-dosen/1104058401"><button
                                                title="Edit data Dosen"
                                                class="px-3 btn btn-outline-warning btn-sm"><span><i
                                                        class="fas fa-pen"></i><br></span>Edit</button></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex gap-3 justify-content-end"><button type="button" disabled=""
                                    class="btn btn-primary btn-sm disabled">Prev</button>
                                <h5>1</h5><button type="button" class="btn btn-primary btn-sm">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7ae6b45c011e855a5545a671a7f3568e)): ?>
<?php $attributes = $__attributesOriginal7ae6b45c011e855a5545a671a7f3568e; ?>
<?php unset($__attributesOriginal7ae6b45c011e855a5545a671a7f3568e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7ae6b45c011e855a5545a671a7f3568e)): ?>
<?php $component = $__componentOriginal7ae6b45c011e855a5545a671a7f3568e; ?>
<?php unset($__componentOriginal7ae6b45c011e855a5545a671a7f3568e); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\P3M\resources\views/frontend/data_pendukung/singkronasi_dosen/index.blade.php ENDPATH**/ ?>