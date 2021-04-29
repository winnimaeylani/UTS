<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    <form method="POST" name="frmpost" action="">
        <table align="center" border="3" cellpadding="2" cellspacing="5">
            <tr align="center">
                <td>
                    <h2><b><u>Silahkan Masukkan Data</u></b></h2>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="450" border=0 cellpadding="0" cellspacing="10" align="center">
                        <tr>
                            <td>Wilayah</td>
                            <td> : </td>
                            <td>  
                                <select name="wilayah" id="wilayah">
                                    <option value=""></option>
                                    <option value="DKI Jakarta">DKI Jakarta</option>
                                    <option value="Jawa Barat">Jawa Barat</option>
                                    <option value="Banten">Banten</option>
                                    <option value="Jawa Tengah">Jawa Tengah</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah Positif</td>
                            <td> : </td>
                            <td><input type="text" name="positif" size="40"></td>
                        </tr>
                        <tr>
                            <td>Jumlah Dirawat</td>
                            <td> : </td>
                            <td><input type="text" name="rawat" size="40"></td>
                        </tr>
                        <tr>
                            <td>Jumlah Sembuh</td>
                            <td> : </td>
                            <td><input type="text" name="sembuh" size="40"></td>
                        </tr>
                        <tr>
                            <td>Jumlah Meninggal</td>
                            <td> : </td>
                            <td><input type="text" name="meninggal" size="40"></td>
                        </tr>
                        <tr>
                            <td>Nama Operator</td>
                            <td> : </td>
                            <td><input type="text" name="nama" size="40"></td>
                        </tr>
                        <tr>
                            <td>Nim Mahasiswa</td>
                            <td> : </td>
                            <td><input type="text" name="nim" size="40"></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><input type="submit" name="btnOk" value="Simpan"></td>
                            <td><input type="submit"  value="Refresh Page" onClick="document.location.reload(true)"></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
<br><br><br>
<center>
    <?php
        function getClientIP() {

            if (isset($_SERVER)) {

                if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
                    return $_SERVER["HTTP_X_FORWARDED_FOR"];

                if (isset($_SERVER["HTTP_CLIENT_IP"]))
                    return $_SERVER["HTTP_CLIENT_IP"];

                return $_SERVER["REMOTE_ADDR"];
            }

            if (getenv('HTTP_X_FORWARDED_FOR'))
                return getenv('HTTP_X_FORWARDED_FOR');

            if (getenv('HTTP_CLIENT_IP'))
                return getenv('HTTP_CLIENT_IP');

            return getenv('REMOTE_ADDR');
}
?>
    <?php date_default_timezone_set('Asia/Jakarta'); ?>
    <?php if (isset($_POST['btnOk'])) {
        echo '<h3>Data Pemantaun Covid19 Wilayah ' . $_POST['wilayah'] . ' <br> Per '.date('d F Y H:i:s').' <br> '. $_POST['nama'] .' / '. $_POST['nim'] .' / '. getClientIP() .'</h3>';
        echo '<table border="1" cellpadding="10" cellspacing="0">';
        echo '<thead>';
        echo '<tr>
                <th>Positif</th>
                <th>Dirawat</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
                </tr>';
        echo ' </thead>';
        echo '<tbody>
                <td width="150">'.$_POST['positif'] .'</td>
                <td width="150">'. $_POST['rawat'] .'</td>
                <td width="150">'. $_POST['sembuh'] .'</td>
                <td width="150">'. $_POST['meninggal'] .'</td>
              </tbody>';
        echo '</table>';
    } ?>
<script>
    function reloadpage()
    {
    location.reload()
    }
</script>
</center>
</body>
</html>

