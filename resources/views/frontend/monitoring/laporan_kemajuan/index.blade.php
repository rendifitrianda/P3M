<x-app>
    <div class="main-content">
        <div class="page-content">
            <div class="card">
                <div class="card-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <h4 class="text-uppercase font-size-20 card-title">Laporan Kemajuan</h4>
                            </div>
                            <div class="col-md-3"><select class="form-select form-select-md">
                                    <option value="1">Penelitian</option>
                                    <option value="2">Pengabdian</option>
                                    <option value="141">Prototipe</option>
                                    <option value="143">Kosabangsa</option>
                                </select></div>
                            <div class="col-md-3"><select class="form-control form-select form-select-md">
                                    <option value="Pilih Tahun">Pilih Tahun</option>
                                    <option value="2024">2024</option>
                                    <option value="2023">2023</option>
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                </select></div>
                        </div>
                        <div class="row">

                            <div class="card-body">
                                <div class="mb-2 col-md-2"><button type="button" disabled=""
                                        class="btn btn-success btn btn-secondary disabled"><i
                                            class="bi bi-file-earmark-excel font-size-10 align-middle me-2"></i>Excel</button>
                                </div>
                                <!-- Default Table -->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Skema</th>
                                            <th scope="col">Jml.Didanai</th>
                                            <th scope="col">Sudah Unggah</th>
                                            <th scope="col">Belum Unggah</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Brandon Jacob</td>
                                            <td>Designer</td>
                                            <td>28</td>
                                            <td>28</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Bridie Kessler</td>
                                            <td>Developer</td>
                                            <td>35</td>
                                            <td>35</td>
                                            <td>35</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Ashleigh Langosh</td>
                                            <td>Finance</td>
                                            <td>45</td>
                                            <td>45</td>
                                            <td>45</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Angus Grady</td>
                                            <td>HR</td>
                                            <td>HR</td>
                                            <td>HR</td>
                                            <td>34</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Raheem Lehner</td>
                                            <td>Dynamic Division Officer</td>
                                            <td>47</td>
                                            <td>47</td>
                                            <td>47</td>
                                        </tr>
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
</x-app>
