<?php if (isset($component)) { $__componentOriginalfc295a45e885bd4bf50b27cf4a5c3753 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfc295a45e885bd4bf50b27cf4a5c3753 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.operator_layouts.app','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.operator_layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
                    <form action="<?php echo e(url('operator/dosen')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Nama</b></label>
                                    <input type="text" name="nama" value="<?php echo e($dosen->nama); ?>"
                                        class="form-control"required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Klaster</b></label>
                                    <input type="text" name="klaster" value="<?php echo e($dosen->klaster); ?>"
                                        class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>NIDN/NIDK</b></label>
                                    <input type="number" name="nidn" value="<?php echo e($dosen->nidn); ?>"
                                        class="form-control"required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Institusi</b></label>
                                    <input type="text" name="institusi" value="<?php echo e($dosen->institusi); ?>"
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
                                        <option value="s1" <?php if($dosen->s1 == 'teknik_informasi'): ?> selected <?php endif; ?>>S1
                                        </option>

                                        <option value="s2" <?php if($dosen->s2 == 'teknik_informasi'): ?> selected <?php endif; ?>>S2
                                        </option>

                                        <option value="s3" <?php if($dosen->s3 == 'teknik_informasi'): ?> selected <?php endif; ?>>S3
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
                                            <?php if($dosen->program_studi == 'teknik_informasi'): ?> selected <?php endif; ?>>Teknik Informasi
                                        </option>

                                        <option value="teknik_sipil" <?php if($dosen->program_studi == 'teknik_sipil'): ?> selected <?php endif; ?>>
                                            Teknik Sipil
                                        </option>

                                        <option value="teknik_elektro"
                                            <?php if($dosen->program_studi == 'teknik_elektro'): ?> selected <?php endif; ?>>Teknik Elektro
                                        </option>
                                        <option value="teknik_pertambangan"
                                            <?php if($dosen->program_studi == 'teknik_pertambangan'): ?> selected <?php endif; ?>>Teknik Pertambangan
                                        </option>

                                        <option value="teknik_mesin" <?php if($dosen->program_studi == 'teknik_mesin'): ?> selected <?php endif; ?>>
                                            Teknik Mesin
                                        </option>

                                        <option value="agro_industri" <?php if($dosen->program_studi == 'agro_industri'): ?> selected <?php endif; ?>>
                                            Agro Industri
                                        </option>

                                        <option value="tptp" <?php if($dosen->program_studi == 'tptp'): ?> selected <?php endif; ?>>
                                            Teknologi Produksi Tanaman Perkebuna
                                        </option>

                                        <option value="tphp" <?php if($dosen->program_studi == 'tphp'): ?> selected <?php endif; ?>>
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
                                    <input type="number" name="nomor_ktp" value="<?php echo e($dosen->nomor_ktp); ?>"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Jabatan akademik</b></label>
                                    <input type="text" name="jabatan_akademik" value="<?php echo e($dosen->jabatan_akademik); ?>"
                                        class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>tanggal lahir</b></label>
                                    <input type="date" name="tanggal_lahir" value="<?php echo e($dosen->tanggal_lahir); ?>"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Tempat Lahir</b></label>
                                    <input type="text" name="tempat_lahir" value="<?php echo e($dosen->tempat_lahir); ?>"
                                        class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Nomor Hp</b></label>
                                    <input type="number" name="nomor_hp" value="<?php echo e($dosen->nomor_hp); ?>"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Alamat Surel</b></label>
                                    <input type="text" name="alamat_surel" value="<?php echo e($dosen->alamat_surel); ?>"
                                        class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>alamat</b></label>
                                    <input type="text" name="alamat" value="<?php echo e($dosen->alamat); ?>"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Website Personal</b></label>
                                    <input type="text" name="website_personal"
                                        value="<?php echo e($dosen->website_personal); ?>" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Username</b></label>
                                    <input type="text" name="username" value="<?php echo e($dosen->username); ?>"
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
                                
                                <button class="btn btn-primary"> <i class="fa fa-save"></i>Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfc295a45e885bd4bf50b27cf4a5c3753)): ?>
<?php $attributes = $__attributesOriginalfc295a45e885bd4bf50b27cf4a5c3753; ?>
<?php unset($__attributesOriginalfc295a45e885bd4bf50b27cf4a5c3753); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc295a45e885bd4bf50b27cf4a5c3753)): ?>
<?php $component = $__componentOriginalfc295a45e885bd4bf50b27cf4a5c3753; ?>
<?php unset($__componentOriginalfc295a45e885bd4bf50b27cf4a5c3753); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\P3M\resources\views/operator/dosen/edit.blade.php ENDPATH**/ ?>