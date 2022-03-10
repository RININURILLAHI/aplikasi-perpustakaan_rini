
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Data Anggota</h4>
                        <br>
                        <form action="model/anggota/prosesaddanggota.php" method="POST">
                            <table class="table">
                                <tr>
                                    <td>id_anggota</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" nama="id_anggota" id="nama_anggota"></td>
                                </tr>
                                <tr>
                                    <td>nama_anggota</td>
                                    <td>:</td>
                                    <td>
                                        <select class="form-control" name="nama_anggota" id="nama_anggota">

                                    </td>
                                </tr>
                                <tr>
                                    <td>jenis_kelamin</td>
                                    <td>:</td>
                                <td><textarea class="form-control" name="jenis_kelamin" id="jenis_kelamin" cols="10" rows="6"></textarea></td>
                                <option value="p">perempuan</option>
                                <option value="p">perempuan</option>
                                <option value="p">perempuan</option>
                                </select>
                                </tr>
                                <tr>
                                    <td>alamat</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="alamat" id="alamat"></td>
                                </tr>
                                <tr>
                                <td>id_anggota</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="no_hp" id="No_hp"></td>
                                </tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-primary" value="Simpan">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>