<x-app>
    <div class="overflow-hidden bg-white card">
        <div class=" bg-soft" style="background-color: rgb(100, 100, 220)">
            <div class="row" style="height: 100px;">
                <div class="col-8">
                    <div class="text-primary p-3">
                        <h5 class="text-black bold ">YUDI CHANDRA</h5>
                        <p class="text-black mb-0 card-title">Program Studi Teknologi Listrik</p>
                    </div>
                </div>
                <div class="text-right col-4"><img src="/static/media/blank_avatar.b909b106.png" alt=""
                        style="height: 100px;"></div>
            </div>
        </div>
        <div class="pt-0 card-body">
            <div class="pt-3 row">
                <div class="col-md-12">
                    <form class="needs-validation">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 mb-3"><label for="nomor_ktp" class="form-label">Nomor KTP <b
                                            class="text-danger">*</b></label><input name="nomor_ktp"
                                        placeholder="Nomor KTP" type="text" class="form-control form-control"
                                        value="6104172309860002"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3"><label for="tempat_lahir" class="form-label">Tempat
                                                Lahir</label><input name="tempat_lahir" type="text"
                                                class="form-control form-control" value="KETAPANG"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3"><label for="tanggal_lahir" class="form-label">Tanggal
                                                Lahir</label><input name="tanggal_lahir" type="date"
                                                class="form-control form-control" value="1986-09-23"></div>
                                    </div>
                                </div>
                                <div class="mb-3"><label for="nomor_hp" class="form-label">No Hp</label><input
                                        name="nomor_hp" type="text" class="form-control form-control"
                                        value="083151676737"></div>
                                <div class="mb-3"><label for="nomor_telepon" class="form-label">Nomor
                                        Telpon</label><input name="nomor_telepon" type="text"
                                        class="form-control form-control" value=" "></div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3"><label for="surel" class="form-label">Email <b
                                            class="text-danger">*</b></label><input name="surel" type="email"
                                        class="form-control form-control" value="chandra.yudi.2386@gmail.com"></div>
                                <div class="mb-3"><label for="website_personal" class="form-label">Website
                                        Personal</label><input name="website_personal" type="text"
                                        class="form-control form-control" value="-"></div>
                                <div class="mb-3 mb-3"><label for="alamat" class="form-label">Alamat</label><input
                                        name="alamat" type="text" class="form-control form-control"
                                        value="Jl. Suka Maju - Tj. Pasar"></div>
                                <div class="mb-3"><label for="status_aktif" class="form-label">Status Aktif <b
                                            class="text-danger">*</b></label><select class="form-control">
                                        <option value="0">Non Aktif</option>
                                        <option value="2">Cuti</option>
                                        <option value="3">Studi Lanjut</option>
                                        <option value="4">Pensiun</option>
                                        <option value="5">Keluar</option>
                                        <option value="6">Meninggal</option>
                                        <option value="7">Tugas di Instansi Lain</option>
                                        <option value="A">Tugas Belajar</option>
                                        <option value="B">Ijin Belajar</option>
                                        <option value="C">Ganti NIDN</option>
                                        <option value="D">Hapus NIDN</option>
                                        <option value="Z">Lainnya</option>
                                    </select></div>
                            </div>
                            <div class="d-flex justify-content-end"><button type="submit"
                                    class="btn btn-primary btn-small">Submit</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app>
