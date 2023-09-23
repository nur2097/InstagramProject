<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Instagram</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <style>
        .container{
            display:flex;
        }
        .left-column,right-column{
            with:50%;
        }
        .box{
            height: 50px;
            width: 400px;
            margin-left: 55px;
            

        }
  </style>
</head>
<body>
  <div class="container" style="margin-top: 84px; ">
        <div class="left-column ">
          <img src="image/instag.jpg" alt="" style="width:800px;height:600px;border-radius:30px;">
        </div>
    <div class="right-column" style="margin-left: auto;margin-right: auto; margin-top: 45px;">
      <div class="card" style="width: 500px;height: 400px;margin-left: 71px;border-radius:35px;">
        <h5 style="text-align: center;font-family: cursive;font-size: x-large;margin-top:47px;">INSTAGRAM</h5>
        <form style="margin-top:16px" action="login.php" method="post">
          <div class="mb-3 box">
            <label for="exampleInputEmail1" class="form-label"></label>
            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kullanıcı adı veya Telefon Numarası">
          </div>

          <div class="mb-3 box">
            <label for="exampleInputPassword1" class="form-label"></label>
            <input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder="Şifre">
          </div>
          <br>
          <button type="submit" class="btn btn-primary box">Giriş Yap</button>

        </form>
      </div>
      <br>
      <br>

      <div class="card" style="width:500px; height:62px; margin-left:71px; border-radius:22px;">
        <p style="margin-left:159px;margin-top: 17px;"class="card-text">Hesabın yok mu ? <a href="registerForm.php">Kaydol</a></p>
      </div>

    </div>
 </div>



  
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>