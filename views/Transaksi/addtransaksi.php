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
                                    <td>id_transaksi</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" nama="id_transaksi" id="nama_transaksi"></td>
                                </tr>
                                <tr>
                                    <td>tanggal_transaksi</td>
                                    <td>:</td>
                                    <td>
                                        <select class="form-control" name="tanggal_transaksi" id="tanggal_transaksi">

                                    </td>
                                </tr>
                                <tr>
                                    <td>id_anggota</td>
                                    <td>:</td>
                                <td><textarea class="form-control" name="id_anggota" id="id_anggota" cols="10" rows="6"></textarea></td>
                                </tr>
                                <tr>
                                    <td>id_pegawai</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="id_pegawai" id="id_pegawai"></td>
                                </tr>
                                <tr>
                                <td>id_buku</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="id_buku" id="id_buku"></td>
                                </tr>
                                <tr>
                                <td>quantity</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" nama="quantity" id="quantity"></td>
                                    </tr>
                                    <tr>
                                    <td>jenis_transaksi</td>
                                    <td>:</td>
                                <td><textarea class="form-control" name="jenis_transaksi" id="jenis_transaksi" cols="10" rows="6"></textarea></td>
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