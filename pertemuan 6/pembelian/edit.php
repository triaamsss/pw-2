<?php
require_once '../dbkoneksi.php';
?>

<?php ini_set('display_errors', 0);
$_idedit = $_GET['idedit'];
if (!empty($_idedit)) {
  $sql = "SELECT * FROM vendor WHERE id=?";
  $st = $dbh->prepare($sql);
  $st->execute([$_idedit]);
  $row = $st->fetch();
} else {
  $row = [];
}

?>

<form method="POST" action="proses.php">
    <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">Nomor</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div>
                </div>
                <input id="nomor" name="nomor" type="text" class="form-control" value="">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="tanggal" name="tanggal" type="date" class="form-control" value="">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="jumlah" name="jumlah" type="number" class="form-control" value="">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="harga" class="col-4 col-form-label">Harga</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="harga" name="harga" type="number" class="form-control" value="">
            </div>
        </div>
    </div>

    <div class="form-group row">
    <div class="offset-4 col-8">
                            <?php $button = (empty($_idedit)) ? "Simpan":"Update"; ?>
                            <input type="submit" name="proses" type="submit" class="btn btn-primary"
                                value="<?=$button?>" />
                            <input type="hidden" name="idedit" value="<?=$_idedit?>" />
                        </div>
    </div>
</form>