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
                    <form action="<?php echo e(url('frontend/dashboard', $dosen->id)); ?>" method="POST">
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
                                        class="form-control"required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>NIDN/NIDK</b></label>
                                    <input type="text" name="nidn" value="<?php echo e($dosen->nama); ?>"
                                        class="form-control"required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Institusi</b></label>
                                    <input type="text" name="institusi" value="<?php echo e($dosen->klaster); ?>"
                                        class="form-control"required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label"><b>Jenjang Pendidikan</b></label>
                                    <select name="jenjang_pendidikan" class="form-select  "required>
                                        <option value=""></option>
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
                                        <option value=""></option>
                                        <option value="teknik_informasi">Teknik Informasi</option>
                                        <option value="teknik_sipil">Teknik Sipil</option>
                                        <option value="teknik_elektro">Teknik Elektro</option>
                                        <option value="teknik_pertambangan">Teknik Pertambangan</option>
                                        <option value="teknik_mesin">Teknik Mesin</option>
                                        <option value="agro_industri">Agro Industri</option>
                                        <option value="tptp">Teknologi Produksi Tanaman Perkebuna</option>
                                        <option value="tphp">Teknologi Hasil Perkebunan</option>
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
                                    <input type="text" name="alamat_surel" class="form-control" required>
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
<?php if (isset($__attributesOriginal7ae6b45c011e855a5545a671a7f3568e)): ?>
<?php $attributes = $__attributesOriginal7ae6b45c011e855a5545a671a7f3568e; ?>
<?php unset($__attributesOriginal7ae6b45c011e855a5545a671a7f3568e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7ae6b45c011e855a5545a671a7f3568e)): ?>
<?php $component = $__componentOriginal7ae6b45c011e855a5545a671a7f3568e; ?>
<?php unset($__componentOriginal7ae6b45c011e855a5545a671a7f3568e); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\P3M\resources\views/frontend/dashboard/edit.blade.php ENDPATH**/ ?>