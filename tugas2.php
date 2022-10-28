<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 PHP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>

    <div class="container p-4">
        <h1 class="text-center mb-3">
            Data Pegawai
        </h1>
        <div class="row justify-content-center">
            <div class="col-md-7 mb-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Input Data Pegawai</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <!-- NAMA -->
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Nama pegawai</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nama" name="nama">
                                </div>
                            </div>
                            <!-- AGAMA -->
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Agama pegawai</label>
                                <div class="col-sm-9">
                                    <select class="form-select" aria-label="Default select example" name="agama">
                                        <option selected>Pilih agama pegawai</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen katolik">Kristen katolik</option>
                                        <option value="Kristen protestan">Kristen protestan</option>
                                        <option value="Konghucu">Konghucu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Hindu">Hindu</option>
                                    </select>
                                </div>
                            </div>
                            <!-- JABATAN -->
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-3 pt-0">Jabatan pegawai</legend>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jabatan" id="jabatan1"
                                            value="Manager">
                                        <label class="form-check-label"> Manager</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jabatan" id="jabatan2"
                                            value="Asisten">
                                        <label class="form-check-label"> Asisten</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jabatan" id="jabatan3"
                                            value="Kabag">
                                        <label class="form-check-label"> Kabag</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jabatan" id="jabatan4"
                                            value="Staff">
                                        <label class="form-check-label"> Staff</label>
                                    </div>
                                </div>
                            </fieldset>
                            <!-- STATUS -->
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-3 pt-0">Status pegawai</legend>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="status1"
                                            value="Menikah">
                                        <label class="form-check-label"> Menikah</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="status2"
                                            value="Belum menikah">
                                        <label class="form-check-label"> Belum menikah</label>
                                    </div>
                                </div>
                            </fieldset>
                            <!-- JUMLAH ANAK -->
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Jumlah anak</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="jml_anak" name="jml_anak">
                                </div>
                            </div>
                            <div class="row">
                                <button type="submit" name="proses"
                                    class="btn btn-primary btn-sm col-sm">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Tampil Data Pegawai</h3>
                    </div>
                    <div class="card-body">
                        <?php
                        error_reporting(0);
                        $nama = $_POST['nama'];
                        $agama = $_POST['agama'];
                        $jabatan = $_POST['jabatan'];
                        $status = $_POST['status'];
                        $jml_anak = $_POST['jml_anak'];
                        $submit = $_POST['proses'];

                        // gapok
                        switch ($jabatan) {
                            case 'Manager':
                                $gapok = '20000000';
                                break;
                            case 'Asisten':
                                $gapok = '15000000';
                                break;
                            case 'Kabag':
                                $gapok = '10000000';
                                break;
                            case 'Staff':
                                $gapok = '4000000';
                                break;
                            default:
                                $gapok = '';
                        }

                        // tunjab
                        $tunjab = $gapok * 0.2;

                        // tunkel
                        if ($status == 'Menikah' && $jml_anak <= 2) {
                            $tunkel = $gapok * 0.05;
                        } else if ($status == 'Menikah' && $jml_anak >= 3 && $jml_anak <= 5) {
                            $tunkel = $gapok * 0.1;
                        } else if ($status == 'Menikah' && $jml_anak > 5) {
                            $tunkel = $gapok * 0.15;
                        } else $tunkel = '0';

                        // gator
                        $gator = $gapok + $tunjab + $tunkel;

                        //zaprof 
                        $zaprof = ($agama == 'Islam' && $gator >= 6000000) ? $zaprof = $gator * 0.025 : $zaprof = 0;

                        // THP
                        $thp = $gator - $zaprof;

                        if (isset($submit)) {
                        ?>
                        <table class="table table-hover table-sm table-bordered border-primary">
                            <tr>
                                <th>Nama pegawai</th>
                                <td> <?= $nama ?> </td>
                            </tr>
                            <tr>
                                <th>Agama Pegawai</th>
                                <td>
                                    <?= $agama ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Jabatan Pegawai</th>
                                <td>
                                    <?= $jabatan ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Status Pegawai</th>
                                <td>
                                    <?= $status ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Jumlah Anak</th>
                                <td>
                                    <?= $jml_anak ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Gaji Pokok</th>
                                <td>
                                    <?= number_format($gapok, 2, ',', '.'); ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Tunjangan Jabatan</th>
                                <td>
                                    <?= number_format($tunjab, 2, ',', '.'); ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Tunjangan Keluarga</th>
                                <td>
                                    <?= number_format($tunkel, 2, ',', '.'); ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Gaji Kotor</th>
                                <td>
                                    <?= number_format($gator, 2, ',', '.'); ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Zakat Profesi</th>
                                <td>
                                    <?= number_format($zaprof, 2, ',', '.'); ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Take Home Pay</th>
                                <td>
                                    <?= number_format($thp, 2, ',', '.'); ?>
                                </td>
                            </tr>
                        </table>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>