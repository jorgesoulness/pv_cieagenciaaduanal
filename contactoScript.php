<?php
// ini_set('display_errors', '1');
require_once 'phpmailer/PHPMailerAutoload.php';
require_once 'email_configuraciones.php';
require_once 'variables-globales.php';

if(isset($_POST) && !empty($_POST['motivo'])){

  //  $_POST["inpBtl"]               = (isset($_POST["inpBtl"]) && !empty($_POST["inpBtl"])) ? $_POST["inpBtl"] : 0;
  //  $_POST["inpEvent_marketing"]   = (isset($_POST["inpEvent_marketing"]) && !empty($_POST["inpEvent_marketing"])) ? $_POST["inpEvent_marketing"] : 0;
  //  $_POST["inpShooper_marketing"] = (isset($_POST["inpShooper_marketing"]) && !empty($_POST["inpShooper_marketing"])) ? $_POST["inpShooper_marketing"] : 0;
  //  $_POST["inpPunto_ventas"]      = (isset($_POST["inpPunto_ventas"]) && !empty($_POST["inpPunto_ventas"])) ? $_POST["inpPunto_ventas"] : 0;
  //  $_POST["inpMarketing_digital"] = (isset($_POST["inpMarketing_digital"]) && !empty($_POST["inpMarketing_digital"])) ? $_POST["inpMarketing_digital"] : 0;

    $sql = "INSERT INTO frm_contacto (motivo, fecha) VALUES ('".utf8_decode($_POST['motivo'])."', '".date("Y-m-d H:i:s")."')";
    
    $servername = "localhost";
    $database = "u745984706_formsweb";
    $username = "u745984706_webmaster";
    $password = "5cfoV6dH";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
          // return "No se pudo conectar a la DB".$sql."Conexion a DB";
    }

    #echo "Connected successfully";
    

    
    if (mysqli_query($conn, $sql)) {
     
        #echo "New record created successfully";
        
    } else {
         # echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        // return "No se pudo registrar los datos".$sql."Insercion a DB";
    }
    mysqli_close($conn);
    

$mail = new PHPMailer;



$mail->isSMTP();

$mail->SMTPDebug = 0;
$mail->Debugoutput = 'html';

$mail->Host = $protocolo;

$mail->Port = $puerto;
     
$mail->SMTPAuth = true;

$mail->Username = $de;

$mail->Password = $psw_de;

$mail->setFrom($de, $de_mascara);

$mail->addAddress('comercial@cielogistica.com',"");
// $mail->addAddress('soulness.works@gmail.com',"");
$mail->addBCC('soulness.works@gmail.com'); 


$mail->Subject = utf8_decode($asunto1);


$plantilla="<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html lang='en' xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xml:lang='en'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <meta name='viewport' content='width=device-width'>
    <meta name='viewport' content='width=device-width'> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv='X-UA-Compatible' content='IE=edge'> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name='x-apple-disable-message-reformatting'>  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->
    <style>

    html,
    body {
        margin: 0 auto !important;
        padding: 0 !important;
        height: 100% !important;
        width: 100% !important;
    }

    /* What it does: Stops email clients resizing small text. */
    * {
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
    }

    /* What it does: Centers email on Android 4.4 */
    div[style*='margin: 16px 0'] {
        margin: 0 !important;
    }

    /* What it does: Stops Outlook from adding extra spacing to tables. */
    table,
    td {
        mso-table-lspace: 0pt !important;
        mso-table-rspace: 0pt !important;
    }

    /* What it does: Fixes webkit padding issue. */
    table {
        border-spacing: 0 !important;
        border-collapse: collapse !important;
        table-layout: fixed !important;
        margin: 0 auto !important;
    }

    /* What it does: Uses a better rendering method when resizing images in IE. */
    img {
        -ms-interpolation-mode:bicubic;
    }

    /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
    a {
        text-decoration: none;
    }

    ul {
      list-style-type: none; padding: 0; margin: 0;
    }
    ul li {
      margin: 0 0 6px 0; padding: 0 0 0 10px; color: #303030;
    }

    /* What it does: A work-around for email clients meddling in triggered links. */
    *[x-apple-data-detectors],  /* iOS */
    .unstyle-auto-detected-links *,
    .aBn {
        border-bottom: 0 !important;
        cursor: default !important;
        color: inherit !important;
        text-decoration: none !important;
        font-size: inherit !important;
        font-family: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
    }

    /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
    .a6S {
        display: none !important;
        opacity: 0.01 !important;
    }

    /* What it does: Prevents Gmail from changing the text color in conversation threads. */
    .im {
        color: inherit !important;
    }

    /* If the above doesn't work, add a .g-img class to any image in question. */
    img.g-img + div {
        display: none !important;
    }

    /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
    /* Create one of these media queries for each additional viewport size you'd like to fix */

    /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
    @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
        u ~ div .email-container {
            min-width: 320px !important;
        }
    }
    /* iPhone 6, 6S, 7, 8, and X */
    @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
        u ~ div .email-container {
            min-width: 375px !important;
        }
    }
    /* iPhone 6+, 7+, and 8+ */
    @media only screen and (min-device-width: 414px) {
        u ~ div .email-container {
            min-width: 414px !important;
        }
    }
    </style>
</head>
<body width='100%' style='margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #ffffff;'>
  <div style='max-width: 600px; margin: 0 auto;' class='email-container'>
  <table align='center' width='100%' role='presentation' cellspacing='0' cellpadding='0' border='0' style='margin: auto;max-width: 600px;'>
    </tr>
      <td height='20'></td>
    </tr>
    <tr>
     <td align='middle' align='center' bgcolor='#ffffff' style='height: auto; padding: 10px 15px;width: 100%;'>
        <table width='100%' border='0' cellpadding='5' cellspacing='0'>
          <tr>
            <td align='center'><img src='http://cielogistica.com/dev/assets/img/logos/LOGO_LOGISTICA_CIE-01.png' width='200' alt='CIE Logistica'/></td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
     <td align='middle' bgcolor='#ffffff'style='height: auto; padding: 20px 15px;width: 100%;'>
        <table align='center' width='80%' border='0' cellpadding='5' cellspacing='0'>
          <tr>
              <td align='center' width='40%' style='color:#C52121;font-weight: bold;font-size: 18px;'>Mensaje:</td>
          </tr>
          <tr>
              <td align='center' style='color:#333333;font-weight: normal;font-size: 14px;'>".$_POST['motivo']."</td>
          </tr>
          </table>
      </td>
    </tr>
    <tr>
     <td align='bottom' bgcolor='#282468' style='height: 130px; padding: 0 15px;width: 100%;'>
        <table width='100%' border='0' cellpadding='5' cellspacing='0'>
          <tr>
            <td align='center' style='color:#ffffff;font-weight: bold;font-size: 13px;'>
              ® 2020 Copyright CIE LOGISTICA<br>
              <a href='mailto:comercial@cielogistica.com' target='_blank' style='color:#ffffff;font-weight: bold;font-size: 13px;'>comercial@cielogistica.com</a> | <a href='http://cielogistica.com' target='_blank' style='color:#ffffff;font-weight: bold;font-size: 13px;'>www.cielogistica.com</a>
            </td>
          </tr>
        </table>
      </td>
    </tr>
      <td height='20'></td>
    </tr>
  </table>
  </div>
</body>
</html>";  
$mail->MsgHTML(utf8_decode($plantilla));
//send the message, check for errors
if (!$mail->send()) {
	echo "error al enviar ";
    return false;
} else {

	echo "se envio";
     return true;
}
}

