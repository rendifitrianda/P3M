<x-app>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="mb-3 row">
                    <div class="col-md-6">
                        <h4 class="text-uppercase font-size-20 card-title">MONITORING USULAN PENELITIAN</h4>
                    </div>
                    <div class="mb-1 col-md-3">
                        <p class="mb-0 pb-0 text-primary">Program Hibah</p><select class="form-select form-select-md">
                            <option value="2">Penelitian Kompetitif Nasional</option>
                            <option value="1">Penelitian Desentralisasi</option>
                            <option value="6">Penelitian Penugasan</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <p class="mb-0 pb-0 text-primary">Jenis Kegiatan</p><select disabled=""
                            class="form-select form-select-md">
                            <option value="1">Penelitian</option>
                        </select>
                    </div>
                </div>
                <div class="mb-4 row">
                    <div class="col-md-6"></div>
                    <div class="col-md-3">
                        <p class="mb-0 pb-0 text-primary">Tahun Usulan</p><select class="form-select form-select-md"
                            name="thn_usulan">
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <p class="mb-0 pb-0 text-primary">Tahun Pelaksanaan</p><select
                            class="form-select form-select-md" name="thn_pelaksanaan">
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-2 col-md-12"></div>
                </div>
                <div class="mt-5 row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="mini-stats-wid card"><a
                                href="/operator/monitoring/usulan/list-usulan-draft?tahun_pelaksanaan=2024&amp;kd_jenis_kegiatan=1&amp;kd_program_hibah=2&amp;tahun_usulan=2023">
                                <div class="menu_profile_items card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <h8 class="card-title">Rekap Usulan</h8>
                                            <P></P>
                                            <h4 class="mb-0 menu_profile_desc">3</h4>
                                        </div>
                                        <div class="icon" style="font-size: 50px;">
                                            <i class="ri-file-text-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="mini-stats-wid card"><a
                                href="/operator/monitoring/usulan/list-usulan-dikirim?tahun_pelaksanaan=2024&amp;kd_jenis_kegiatan=1&amp;kd_program_hibah=2&amp;tahun_usulan=2023">
                                <div class="menu_profile_items card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <h8 class="card-title">Usulan Dikirim</h8>
                                            <P></P>
                                            <h4 class="mb-0 menu_profile_desc">0</h4>
                                        </div>
                                        <div class="icon" style="font-size: 50px;">
                                            <i class="ri-send-plane-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="mini-stats-wid card"><a
                                href="/operator/monitoring/usulan/list-usulan-belum-ditinjau?tahun_pelaksanaan=2024&amp;kd_jenis_kegiatan=1&amp;kd_program_hibah=2&amp;tahun_usulan=2023">
                                <div class="menu_profile_items card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <h8 class="card-title">Usulan Belum Ditinjau</h8>
                                            <p></p>
                                            <h4 class="mb-0 menu_profile_desc">0</h4>
                                        </div>
                                        <div class="icon" style="font-size: 50px;">
                                            <i class="ri-24-hours-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="mini-stats-wid card"><a
                                href="/operator/monitoring/usulan/list-usulan-disetujui?tahun_pelaksanaan=2024&amp;kd_jenis_kegiatan=1&amp;kd_program_hibah=2&amp;tahun_usulan=2023">
                                <div class="menu_profile_items card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <h8 class="card-title">Usulan Disetujui</h8>
                                            <p></p>
                                            <h4 class="mb-0 menu_profile_desc">12</h4>
                                        </div>
                                        <div class="icon" style="font-size: 50px;">
                                            <i class="ri-checkbox-circle-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="mini-stats-wid card"><a
                                href="/operator/monitoring/usulan/list-usulan-ditolak?tahun_pelaksanaan=2024&amp;kd_jenis_kegiatan=1&amp;kd_program_hibah=2&amp;tahun_usulan=2023">
                                <div class="menu_profile_items card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <h8 class="card-title">Usulan Ditolak</h8>
                                            <p></p>
                                            <h4 class="mb-0 menu_profile_desc">0</h4>
                                        </div>
                                        <div class="icon" style="font-size: 50px;">
                                            <i class="ri-close-circle-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                </div>
                <div class="mb-5 row">
                    <div class="col-md-12">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Rekap Usulan</h5>

                        <!-- Default Table -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">o</th>
                                    <th scope="col">Nama Skema</th>
                                    <th scope="col">Usulan Draft</th>
                                    <th scope="col">Dikirim</th>
                                    <th scope="col">Belum Ditinjau</th>
                                    <th scope="col">Disetujui</th>
                                    <th scope="col">Tidak Disetujui</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Brandon Jacob</td>
                                    <td>Designer</td>
                                    <td>28</td>
                                    <td>2016-05-25</td>
                                    <td>2016-05-25</td>
                                    <td>2016-05-25</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Bridie Kessler</td>
                                    <td>Developer</td>
                                    <td>35</td>
                                    <td>2014-12-05</td>
                                    <td>2014-12-05</td>
                                    <td>2014-12-05</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Ashleigh Langosh</td>
                                    <td>Finance</td>
                                    <td>45</td>
                                    <td>2011-08-12</td>
                                    <td>2011-08-12</td>
                                    <td>2011-08-12</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Angus Grady</td>
                                    <td>HR</td>
                                    <td>34</td>
                                    <td>2012-06-11</td>
                                    <td>2012-06-11</td>
                                    <td>2012-06-11</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Raheem Lehner</td>
                                    <td>Dynamic Division Officer</td>
                                    <td>47</td>
                                    <td>2011-04-19</td>
                                    <td>2011-04-19</td>
                                    <td>2011-04-19</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
