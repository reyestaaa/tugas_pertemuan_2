<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>SOAL 3</title>
</head>
<body>

    <div class="title">
        <h1>SOAL 3</h1>
        <p>MUHAMMAD ADRIAN REYESTA <br>
           DZULFIQAR ABDUL KARIM<br>
        XII-RPL2
        </p>
    </div>

    <table border="1" height="200px">
        <tr>
            <th>Nip</th>
            <th>Nama</th>
            <th>Kelamin</th>
            <th>Tanggal lahir</th>
            <th>Status</th>
            <th>Mulai Kerja</th>
        </tr>

        <?php
        
        include("Connection/Controller.php");
        $view = new Controller;
        $pegawai = $view->tugas_4('pbo_pegawai');

        foreach ($pegawai as $pgw){
        ?>

            <tr>
                <td>
                    <?php echo $pgw['nip'] ?>
                </td>
                <td>
                    <?php echo $pgw['nama'] ?>
                </td>
                <td>
                    <?php echo $pgw['jns_kel'] ?>
                </td>
                <td>
                    <?php echo $pgw['tgl_lahir'] ?>
                </td>
                <td>
                    <?php echo $pgw['status'] ?>
                </td>
                <td>
                    <?php echo $pgw['mulai_kerja'] ?>
                </td>
            </tr>

        <?php } ?>  

    </table>
    
</body>
</html>