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
            <div class="bg-white container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between align-baseline p-1 row">
                            <div class="d-flex col-md-7">
                                <h4 class="text-uppercase font-size-20 card-title p-2">Tambah Data Prodi</h4>
                                <div class="pt-1"> <i class="fa fa-question-circle pointer" id="Tooltop-UNTFcTgDtO"></i>
                                </div>
                            </div>
                            <div class="d-flex gap-1 pb-5 col-md-5"><input type="text" class="form-control"
                                    placeholder="Cari Kode Prodi" value=""><button
                                    class="btn btn-primary btn-block" disabled="">Cek</button>
                            </div>
                            <div class="text-center">
                                <img src=" <?php echo e(url('assets')); ?>/assets/img/gambar-3.png" class="w-25" alt="Not Found">
                                <h5 class="mt-3 card-title text-center">Data tidak tersedia</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white mt-5 container-fluid">
                <div class="d-flex justify-content-between align-baseline p-1 row">
                    <div class="col-md-7">
                        <h4 class="text-uppercase font-size-20 card-title p-2">DAFTAR PROGRAM STUDI</h4>
                    </div>
                    <div class="d-flex gap-1 pb-1 col-md-5"><select class="form-select form-select-md">
                            <option value="nama_prodi">Berdasarkan Nama Prodi</option>
                            <option value="kode_prodi">Berdasarkan Kode Prodi</option>
                        </select><select class="form-select form-select-md">
                            <option value="25">Jumlah Baris</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                            <option value="9999999">semua</option>
                        </select></div>
                </div>
            </div>
            <div class=" bg-white container-fluid">
                <div>
                    <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                        <div class="gridjs-head">
                            <div class="gridjs-search"><input type="search"
                                    placeholder="Cari Nama Prodi atau Kode Prodi"
                                    aria-label="Cari Nama Prodi atau Kode Prodi"
                                    class="gridjs-input gridjs-search-input"></div>
                        </div>
                        <div class="gridjs-wrapper" style="height: auto;">
                            <table role="grid" class="gridjs-table" style="height: auto;">
                                <thead class="gridjs-thead">
                                    <tr class="gridjs-tr">
                                        <th data-column-id="number" class="gridjs-th gridjs-th-fixed"
                                            style="min-width: 70px; width: 97px; top: 0px;">
                                            <div class="gridjs-th-content">No.</div>
                                        </th>
                                        <th data-column-id="kodeProdi" class="gridjs-th gridjs-th-fixed"
                                            style="min-width: 120px; width: 167px; top: 0px;">
                                            <div class="gridjs-th-content">Kode Prodi</div>
                                        </th>
                                        <th data-column-id="namaProdi" class="gridjs-th gridjs-th-fixed"
                                            style="min-width: 395px; width: 552px; top: 0px;">
                                            <div class="gridjs-th-content">Nama Prodi</div>
                                        </th>
                                        <th data-column-id="jenjang" class="gridjs-th gridjs-th-fixed"
                                            style="min-width: 103px; width: 143px; top: 0px;">
                                            <div class="gridjs-th-content">Jenjang</div>
                                        </th>
                                        <th data-column-id="action" class="gridjs-th gridjs-th-fixed"
                                            style="min-width: 102px; width: 142px; top: 0px;">
                                            <div class="gridjs-th-content">Action</div>
                                        </th>
                                        <th data-column-id="status" class="gridjs-th gridjs-th-fixed"
                                            style="min-width: 107px; width: 149px; top: 0px;">
                                            <div class="gridjs-th-content">Status</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="gridjs-tbody">
                                    <tr class="gridjs-tr">
                                        <td data-column-id="number" class="gridjs-td">1</td>
                                        <td data-column-id="kodeProdi" class="gridjs-td">
                                            <div>
                                                <p class="font-size-13 text-black card-title m-0">21408 </p>
                                            </div>
                                        </td>
                                        <td data-column-id="namaProdi" class="gridjs-td">
                                            <div>
                                                <p class="font-size-13 text-black card-title m-0">Pemeliharaan
                                                    Mesin</p>
                                            </div>
                                        </td>
                                        <td data-column-id="jenjang" class="gridjs-td">
                                            <div>
                                                <p class="font-size-13 text-black card-title m-0">D3</p>
                                            </div>
                                        </td>
                                        <td data-column-id="action" class="gridjs-td">
                                            <div>
                                                <p class="badge bg-success"><b>Aktif</b></p>
                                            </div>
                                        </td>
                                        <td data-column-id="status" class="gridjs-td">
                                            <div><button type="button" title="Sinkronisasi Data Prodi dengan PDDIKTI"
                                                    class="btn btn-outline-primary btn-sm"><span><i
                                                            class="fas fa-sync"></i> Sync</span></button></div>
                                        </td>
                                    </tr>
                                    <tr class="gridjs-tr">
                                        <td data-column-id="number" class="gridjs-td">2</td>
                                        <td data-column-id="kodeProdi" class="gridjs-td">
                                            <div>
                                                <p class="font-size-13 text-black card-title m-0">31401 </p>
                                            </div>
                                        </td>
                                        <td data-column-id="namaProdi" class="gridjs-td">
                                            <div>
                                                <p class="font-size-13 text-black card-title m-0">Teknologi
                                                    Pertambangan</p>
                                            </div>
                                        </td>
                                        <td data-column-id="jenjang" class="gridjs-td">
                                            <div>
                                                <p class="font-size-13 text-black card-title m-0">D3</p>
                                            </div>
                                        </td>
                                        <td data-column-id="action" class="gridjs-td">
                                            <div>
                                                <p class="badge bg-success"><b>Aktif</b></p>
                                            </div>
                                        </td>
                                        <td data-column-id="status" class="gridjs-td">
                                            <div><button type="button" title="Sinkronisasi Data Prodi dengan PDDIKTI"
                                                    class="btn btn-outline-primary btn-sm"><span><i
                                                            class="fas fa-sync"></i> Sync</span></button></div>
                                        </td>
                                    </tr>
                                    <tr class="gridjs-tr">
                                        <td data-column-id="number" class="gridjs-td">3</td>
                                        <td data-column-id="kodeProdi" class="gridjs-td">
                                            <div>
                                                <p class="font-size-13 text-black card-title m-0">41433 </p>
                                            </div>
                                        </td>
                                        <td data-column-id="namaProdi" class="gridjs-td">
                                            <div>
                                                <p class="font-size-13 text-black card-title m-0">Teknologi
                                                    Hasil Perkebunan</p>
                                            </div>
                                        </td>
                                        <td data-column-id="jenjang" class="gridjs-td">
                                            <div>
                                                <p class="font-size-13 text-black card-title m-0">D3</p>
                                            </div>
                                        </td>
                                        <td data-column-id="action" class="gridjs-td">
                                            <div>
                                                <p class="badge bg-success"><b>Aktif</b></p>
                                            </div>
                                        </td>
                                        <td data-column-id="status" class="gridjs-td">
                                            <div><button type="button" title="Sinkronisasi Data Prodi dengan PDDIKTI"
                                                    class="btn btn-outline-primary btn-sm"><span><i
                                                            class="fas fa-sync"></i> Sync</span></button></div>
                                        </td>
                                    </tr>
                                    <tr class="gridjs-tr">
                                        <td data-column-id="number" class="gridjs-td">4</td>
                                        <td data-column-id="kodeProdi" class="gridjs-td">
                                            <div>
                                                <p class="font-size-13 text-black card-title m-0">41411 </p>
                                            </div>
                                        </td>
                                        <td data-column-id="namaProdi" class="gridjs-td">
                                            <div>
                                                <p class="font-size-13 text-black card-title m-0">Agroindustri
                                                </p>
                                            </div>
                                        </td>
                                        <td data-column-id="jenjang" class="gridjs-td">
                                            <div>
                                                <p class="font-size-13 text-black card-title m-0">D3</p>
                                            </div>
                                        </td>
                                        <td data-column-id="action" class="gridjs-td">
                                            <div>
                                                <p class="badge bg-success"><b>Aktif</b></p>
                                            </div>
                                        </td>
                                        <td data-column-id="status" class="gridjs-td">
                                            <div><button type="button" title="Sinkronisasi Data Prodi dengan PDDIKTI"
                                                    class="btn btn-outline-primary btn-sm"><span><i
                                                            class="fas fa-sync"></i> Sync</span></button></div>
                                        </td>
                                    </tr>
                                    <tr class="gridjs-tr">
                                        <td data-column-id="number" class="gridjs-td">5</td>
                                        <td data-column-id="kodeProdi" class="gridjs-td">
                                            <div>
                                                <p class="font-size-13 text-black card-title m-0">22401 </p>
                                            </div>
                                        </td>
                                        <td data-column-id="namaProdi" class="gridjs-td">
                                            <div>
                                                <p class="font-size-13 text-black card-title m-0">Teknik Sipil
                                                </p>
                                            </div>
                                        </td>
                                        <td data-column-id="jenjang" class="gridjs-td">
                                            <div>
                                                <p class="font-size-13 text-black card-title m-0">D3</p>
                                            </div>
                                        </td>
                                        <td data-column-id="action" class="gridjs-td">
                                            <div>
                                                <p class="badge bg-danger"><b>Non Aktif</b></p>
                                            </div>
                                        </td>
                                        <td data-column-id="status" class="gridjs-td">
                                            <div><button type="button" title="Sinkronisasi Data Prodi dengan PDDIKTI"
                                                    class="btn btn-outline-primary btn-sm"><span><i
                                                            class="fas fa-sync"></i> Sync</span></button></div>
                                        </td>
                                    </tr>
                                    <tr class="gridjs-tr">
                                        <td data-column-id="number" class="gridjs-td">6</td>
                                        <td data-column-id="kodeProdi" class="gridjs-td">
                                            <div>
                                                <p class="font-size-13 text-black card-title m-0">20403 </p>
                                            </div>
                                        </td>
                                        <td data-column-id="namaProdi" class="gridjs-td">
                                            <div>
                                                <p class="font-size-13 text-black card-title m-0">Teknologi
                                                    Listrik</p>
                                            </div>
                                        </td>
                                        <td data-column-id="jenjang" class="gridjs-td">
                                            <div>
                                                <p class="font-size-13 text-black card-title m-0">D3</p>
                                            </div>
                                        </td>
                                        <td data-column-id="action" class="gridjs-td">
                                            <div>
                                                <p class="badge bg-success"><b>Aktif</b></p>
                                            </div>
                                        </td>
                                        <td data-column-id="status" class="gridjs-td">
                                            <div><button type="button" title="Sinkronisasi Data Prodi dengan PDDIKTI"
                                                    class="btn btn-outline-primary btn-sm"><span><i
                                                            class="fas fa-sync"></i> Sync</span></button></div>
                                        </td>
                                    </tr>
                                    <tr class="gridjs-tr">
                                        <td data-column-id="number" class="gridjs-td">7</td>
                                        <td data-column-id="kodeProdi" class="gridjs-td">
                                            <div>
                                                <p class="font-size-13 text-black card-title m-0">55401 </p>
                                            </div>
                                        </td>
                                        <td data-column-id="namaProdi" class="gridjs-td">
                                            <div>
                                                <p class="font-size-13 text-black card-title m-0">Teknologi
                                                    Informasi</p>
                                            </div>
                                        </td>
                                        <td data-column-id="jenjang" class="gridjs-td">
                                            <div>
                                                <p class="font-size-13 text-black card-title m-0">D3</p>
                                            </div>
                                        </td>
                                        <td data-column-id="action" class="gridjs-td">
                                            <div>
                                                <p class="badge bg-success"><b>Aktif</b></p>
                                            </div>
                                        </td>
                                        <td data-column-id="status" class="gridjs-td">
                                            <div><button type="button" title="Sinkronisasi Data Prodi dengan PDDIKTI"
                                                    class="btn btn-outline-primary btn-sm"><span><i
                                                            class="fas fa-sync"></i> Sync</span></button></div>
                                        </td>
                                    </tr>
                                    <tr class="gridjs-tr">
                                        <td data-column-id="number" class="gridjs-td">8</td>
                                        <td data-column-id="kodeProdi" class="gridjs-td">
                                            <div>
                                                <p class="font-size-13 text-black card-title m-0">54371 </p>
                                            </div>
                                        </td>
                                        <td data-column-id="namaProdi" class="gridjs-td">
                                            <div>
                                                <p class="font-size-13 text-black card-title m-0">Teknologi
                                                    Produksi Tanaman Perkebunan</p>
                                            </div>
                                        </td>
                                        <td data-column-id="jenjang" class="gridjs-td">
                                            <div>
                                                <p class="font-size-13 text-black card-title m-0">D4</p>
                                            </div>
                                        </td>
                                        <td data-column-id="action" class="gridjs-td">
                                            <div>
                                                <p class="badge bg-success"><b>Aktif</b></p>
                                            </div>
                                        </td>
                                        <td data-column-id="status" class="gridjs-td">
                                            <div><button type="button" title="Sinkronisasi Data Prodi dengan PDDIKTI"
                                                    class="btn btn-outline-primary btn-sm"><span><i
                                                            class="fas fa-sync"></i> Sync</span></button></div>
                                        </td>
                                    </tr>
                                    <tr class="gridjs-tr">
                                        <td data-column-id="number" class="gridjs-td">9</td>
                                        <td data-column-id="kodeProdi" class="gridjs-td">
                                            <div>
                                                <p class="font-size-13 text-black card-title m-0">22301 </p>
                                            </div>
                                        </td>
                                        <td data-column-id="namaProdi" class="gridjs-td">
                                            <div>
                                                <p class="font-size-13 text-black card-title m-0">Teknologi
                                                    Rekayasa Konstruksi Jalan dan Jembatan</p>
                                            </div>
                                        </td>
                                        <td data-column-id="jenjang" class="gridjs-td">
                                            <div>
                                                <p class="font-size-13 text-black card-title m-0">D4</p>
                                            </div>
                                        </td>
                                        <td data-column-id="action" class="gridjs-td">
                                            <div>
                                                <p class="badge bg-success"><b>Aktif</b></p>
                                            </div>
                                        </td>
                                        <td data-column-id="status" class="gridjs-td">
                                            <div><button type="button" title="Sinkronisasi Data Prodi dengan PDDIKTI"
                                                    class="btn btn-outline-primary btn-sm"><span><i
                                                            class="fas fa-sync"></i> Sync</span></button></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="gridjs-footer">
                            <div class="gridjs-pagination">
                                <div role="status" aria-live="polite" class="gridjs-summary" title="Page 1 of 1">
                                    Showing <b>1</b> to <b>9</b> of <b>9</b> results</div>
                                <div class="gridjs-pages"><button tabindex="0" role="button" disabled=""
                                        title="Previous" aria-label="Previous"
                                        class="">Previous</button><button tabindex="0" role="button"
                                        class="gridjs-currentPage" title="Page 1"
                                        aria-label="Page 1">1</button><button tabindex="0" role="button"
                                        disabled="" title="Next" aria-label="Next" class="">Next</button>
                                </div>
                            </div>
                        </div>
                        <div id="gridjs-temp" class="gridjs-temp"></div>
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
<?php /**PATH C:\laragon\www\P3M\resources\views/frontend/data_pendukung/singkronasi_prodi/index.blade.php ENDPATH**/ ?>