<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>biodata diri</title>
</head>
<?php
     $nama = "Siti Nur Rohmatul Ummah";
     $tempat_lahir = "Sidoarjo";
     $tanggal_lahir = date('Y-m-d', strtotime('2003-09-02'));
     $universitas = "UPN Veteran Jawa Timur";
     $jurusan = "Informatika";
     $npm = 21081010272;
     $alamat = "krian, tropodo, sidoarjo";
     $no_handpone = "081239521176";
     $email = "sitinurrohmatulummah3@gmail.com";
     $instagram = "@ummah.a_";
     $birthDate = new \DateTime($tanggal_lahir);
    $today = new \DateTime("today");
    $y = $today->diff($birthDate)->y;
?>
<body>
    <div class="container">
        <div class="biodatabox">
            <table cellspacing="20px">
                <tr colspan="2">
                    <td colspan="2" class="hed"><?php echo "BIODATA" ?><br><?php echo "___________" ?><br></td>

                </tr>
                <tr colspan="2">
                    <td colspan="2" class="heds"> <?php echo " Data Diri"?><br><br></td>
                </tr>

                <tr>
                    <td class="given"> <?php echo "nama :"?></td>
                    <td class="ans b"><span class="nama"><?php echo $nama ?></span></td>
                </tr>
                <tr>
                    <td class="given"> <?php echo "Tempat Tanggal Lahir :" ?></td>
                    <td class="ans b"><?php echo $tempat_lahir .", ". $tanggal_lahir . ", " . $y . " tahun"?><br></td>
                </tr>
                <tr>
                    <td class="given"><?php echo "Universitas : "?></td>
                    <td class="ans"><?php echo $universitas?></td>
                </tr>
                <tr>
                    <td class="given"><?php echo "Prodi : "?></td>
                    <td class="ans"><?php echo $jurusan?></td>
                </tr>
                <tr>
                    <td class="given"><?php echo "NPM : "?></td>
                    <td class="ans"><?php echo $npm?></td>
                </tr>
                <tr>
                    <td class="given"><?php echo "Alamat :"?></td>
                    <td class="ans"><?php echo $alamat?></td>
                </tr>
            </table>
            <fieldset class="field">
                <legend class="hedsa">&nbsp;&nbsp;--SOCIAL MEDIA--&nbsp;&nbsp;&nbsp;&nbsp;</legend>
                <table cellspacing="20px">

                    <tr>
                        <td class="given"><?php echo "No. Handpone :"?></td>
                        <td class="ans"><?php echo $no_handpone?></td>
                    </tr>
                    <tr>
                        <td class="given"><?php echo "Email :"?></td>
                        <td class="ans"><?php echo $email?></td>
                    </tr>
                    <tr>
                        <td class="given"><?php echo "instagram :"?></td>
                        <td class="ans"><?php echo $instagram?></td>
                    </tr>
                    

</body>
</html>