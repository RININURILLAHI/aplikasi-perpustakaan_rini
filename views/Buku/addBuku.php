
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Data Buku</h4>
                        <br>
                        <form action="model/buku/prosesaddbuku.php" method="POST">
                            <table class="table">
                                <tr>
                                    <td>Judul buku</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="Judul_Buku" id="Judul_Buku"></td>
                                </tr>
                                <tr>
                                    <td>Penulis</td>
                                    <td>:</td>
                                    <td>
                                        <select class="form-control" name="Penulis" id="Penulis">
                                           
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Penerbit</td>
                                    <td>:</td>
                                    <td><textarea class="form-control" name="Penerbit" id="Penerbit" cols="10" rows="6"></textarea></td>
                                </tr>
                                <tr>
                                    <td>Tahun terbit</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="Tahun_Penerbit" id="Tahun_Penerbit"></td>
                                </tr>
                                <tr>
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