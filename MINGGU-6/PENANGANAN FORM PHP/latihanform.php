<html>
<head><title>Form</title></head> <body>
    <body>
        <FORM ACTION="" METHOD="POST">
            NIM             : <input type="text" name="nim"><br>
            Program Studi   : 
            <select name="prodi">
                <option value="Pilih Data">Pilih Data</option>
                <option value="Teknik Informatika S1">Teknik Informatika S1</option>
                <option value="Sistem Informasi S1">Sistem Informasi S1</option>
                <option value="Teknik Informatika D3">Teknik Informatika D3</option>
            </select>
            <br>
            Nilai Tugas     : <input type="text" name="tugas" placeholder="Masukkan Angka 0-100"><br>
            Nilai UTS       : <input type="text" name="uts" placeholder="Masukkan Angka 0-100"><br>
            Nilai UAS       : <input type="text" name="uas" placeholder="Masukkan Angka 0-100"><br>
            Catatan Khusus  :
            <div>
            <p><input type="checkbox" name="catatan[]" value="Kehadiran >= 70%" />Kehadiran >= 70%</p>
            <p><input type="checkbox" name="catatan[]" value="Interaktif di kelas" />Interaktif Di Kelas</p>
            <p><input type="checkbox" name="catatan[]" value="Tidak Terlambat Mengumpulkan Tugas" />Tidak Terlambat Mengumpulkan Tugas</p>
            </div>

            <input type="submit" name="Input" value="Input">

        </FORM>

<?php
if (isset($_POST['Input'])) 
{
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $tugas = $_POST['tugas'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];

    $akhir = (0.4 * $tugas) + (0.3 * $uts) + (0.3 * $uas);
        if ($akhir > 84) {
            $status = 'Lulus';
        } elseif ($akhir > 70) {
            $status = 'Lulus';
        } elseif ($akhir > 60) {
            $status = 'Lulus';
        } elseif ($akhir > 50) {
            $status = 'Tidak Lulus';
        } else {
            $status = "Tidak Lulus";
        }

        $selected_catatan = "";
        if (!empty($_POST['catatan'])) {
            foreach ($_POST['catatan'] as $catatan) {
                $selected_catatan .= $catatan . " <br> ";
            }
        }

    echo "
    <table border=2>
        <thead>
            <tr>
                <th>Program Studi</th>
                <th>NIM</th>
                <th>Nilai AKhir</th>
                <th>Status</th>
                <th>Catatan Khusus</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>$prodi</td>
                <td>$nim</td>
                <td>$akhir</td>
                <td>$status</td>
                <td>$selected_catatan</td>
            </tr>
        </tbody>
    </table>
    ";
}

?>
</body>
</html>


