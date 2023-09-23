<?php
require_once("connect.php");

$userId = @$_GET["id"];
$postUrl = "insert.php";

if(isset($userId)){
    $sql = "SELECT * FROM info WHERE id = '$userId'";
    $query = $pdo->prepare($sql);
    $query->execute();

    $user = $query->fetch(PDO::FETCH_OBJ);
    $postUrl = "update.php";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kayit Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<!--BİRİNCİ KART-->
<div class="card" style="width: 39rem;background-color: ghostwhite;height: 770px;margin-left: auto;margin-right: auto;margin-top:23px;margin-bottom: -11px">
    <h5 style="text-align: center;font-family: cursive;font-size: xx-large;margin-top:25px;"><b>INSTAGRAM</b></h5>
    <br>
    <p style="text-align:center;font-size: 21px;font-family:emoji;margin-top: -10px;margin-bottom: 0rem">Arkadaşlarının fotoğraf ve videolarını görmek için kaydol</p>
    <br>
    <button type="submit" class="btn btn-primary" style="width: 390px;margin-left: auto;margin-right: auto"><a href="https://www.facebook.com/" 
        style="color:white;text-decoration: none">Facebook ile Giriş Yap</a></button>
    <br>
    <hr>

    <form style="width: 477px;margin-left: auto;margin-right: auto" action="<?php echo $postUrl; ?>" method="POST">
    <?php if(isset($user)){ ?>
        <input type="hidden" name="user_id" value="<?php echo $userId; ?>"> 
    <?php
    } 
    ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"></label>
            <?php if(isset($user)){ ?>
                <input type="email" name="email" class="form-control" id="email_id" aria-describedby="emailHelp" value="<?php echo $user->email; ?>">
            <?php
            }else{
            ?>
                <input type="email" name="email" class="form-control" id="email_id" placeholder="E-Posta Adresi">
            <?php
            }
            ?>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"></label>
            <?php if(isset($user)){ ?>
                <input type="text" name="number" class="form-control" id="number_id" value="<?php echo $user->number; ?>">
            <?php
            }else{
            ?>
                <input type="text" name="number" class="form-control" id="number_id" placeholder="Cep Telefonu Numarası">
            <?php
            }
            ?>        
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"></label>
            <?php if(isset($user)){ ?>
                <input type="text" name="name_surname" class="form-control" id="name_surname_id" value="<?php echo $user->name_surname; ?>">
            <?php
            }else{
            ?>
                <input type="text" name="name_surname" class="form-control" id="name_surname_id" placeholder="Adı Soyadı">
            <?php
            }
            ?>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"></label>
            <?php if(isset($user)){ ?>
                <input type="text" name="username" class="form-control" id="username_id" value="<?php echo $user->username; ?>">
            <?php
            }else{
            ?>
                <input type="text" name="username" class="form-control" id="username_id" placeholder="Kullanıcı Adı">
            <?php
            }
            ?>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"></label>
            <?php if(isset($user)){ ?>
                <input type="password" name="password" class="form-control" id="password_id" value="<?php echo $user->password; ?>">
            <?php
            }else{
            ?>
                <input type="password" name="password" class="form-control" id="password_id" placeholder="Şifre">
            <?php
            }
            ?>
        </div>
         
        <p style="margin-left: 12px">Hizmetimizi kullanan kişiler sizin iletişim bilgilerinizi Instagram'a yüklemiş olabilir.Kayıt olarak Koşullarımızı, Gizlilik İlkemizi ve Çerezler İlkemizi kabul etmiş olursunuz.</p>
    
        <button type="submit" class="btn btn-primary" style="margin-left: 72px;width: 341px;">Kaydol</button>
<!----<a href="loginForm.php" style="color:white;text-decoration: none"></a>---->
    </form>
</div>
    <br>
    <!--İKİNCİ KART-->
    <div class="card" style="width: 39rem;background-color: ghostwhite;height: 56px;margin-left: auto;margin-right: auto;margin-bottom: 10px">
        <p style="margin-left:210px;margin-top: 17px;"class="card-text">Hesabın var mı? <a href="loginForm.php">Giriş Yap</a></p>
    </div>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>