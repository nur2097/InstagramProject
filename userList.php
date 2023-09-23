<?php
require_once("connect.php");

$userId = @$_GET["id"];

$sorgu = $pdo->prepare("SELECT * FROM info");
$sorgu->execute();
$sorguKayitlari = $sorgu->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanici Listesi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<div class="card" style="width: 92rem;background-color: ghostwhite;height: 700px;margin-top: 24px;margin-left: auto;margin-right: auto;border-radius: 1%">
    <!--<form action="insert.php" method="post"> -->
        <a href="registerForm.php" class="btn btn-primary box" role="button" style="width: 117px;margin-left: 1345px;margin-top: 8px;color: white;text-decoration: none">Kullanıcı Ekle</a>
        <table class="table table-bordered" style="margin-top: 10px">
            <thead class="table-light">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">E-posta</th>
                    <th scope="col">Cep Telefonu Numarası</th>
                    <th scope="col">Adı Soyadı</th>
                    <th scope="col">Kullanıcı Adı</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach($sorguKayitlari as $sorguKayit){?>
                    <tr>
                        <td><?php echo $sorguKayit["id"]; ?></td>
                        <td><?php echo $sorguKayit["email"]; ?></td>
                        <td><?php echo $sorguKayit["number"]; ?></td>
                        <td><?php echo $sorguKayit["name_surname"]; ?></td>
                        <td><?php echo $sorguKayit["username"]; ?></td>
                    
                        <th scope="col" style="width: 56px;"><a class="btn btn-primary box" href="registerForm.php?id=<?php echo $sorguKayit["id"]; ?>" role="button" style="margin-left: auto; width: 83px;color: white;text-decoration: none">Düzenle</a></th>
                        <th scope="col" style="width: 72px;"><a class="btn btn-danger box" href="delete.php?id=<?php echo $sorguKayit["id"]; ?>" role="button" style="margin-left: auto; width: 56px;color: white;text-decoration: none">Sil</a></th>

                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    <!--</form>--->
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>