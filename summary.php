 <!DOCTYPE html>
<html>
	<head>
		<!-- DESIGN: PATRYK KALINOWSKI, AIESEC KRAKÓW | PATRYK.KALINOWSKI@GMAIL.COM -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Wyjedź na wolontariat Global Citizen</title>
		<meta name="description" content="Chcesz przeżyć wyjątkową przygodę? Wyjedź na wolontariat zagraniczny Global Citizen!
Pracuj z wolontariuszami z całego świata, poznawaj nowe kultury i zdobądź cenne doświadczenie doskonale się przy tym bawiąc!">
		<meta name="keywords" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- for Apple devices -->
		<link rel="stylesheet" href="style.css" type="text/css" />

		<link rel="stylesheet" media="screen and (min-height: 900px) and (max-width: 1280px)" href="style1280.css" />
		

	</head>
	<body>
	<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5TPDVJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5TPDVJ');</script>
<!-- End Google Tag Manager -->

		<!-- FIRST PAGE -->
	<div id="summary">

	<div id="title-summary"><h1>Gratulacje!</h1></div>
	<div id="text-summary">Zrobiłeś pierwszy krok do przeżycia wspaniałej przygody!<br/>
							Twoje konto zostało założone. Zaloguj się na swoją skrzynkę e-mail i zobacz, co dla Ciebie przygotowaliśmy.
	</div>
	</div>









	</body>
</html>

    
<?
   require "config.php";
connection();

$date = date("Y-m-d H:i");

if (!empty($_POST["name"])) {


  $email = $_POST["email"];


$name = $_POST["name"];
$surname = $_POST["surname"];
$email2 = $_POST["email"];
$email = str_replace("@", "%40", $email);
$password = $_POST["password"];
$lc = $_POST["lc"];   



   $wpcpost2 = mysql_query("SELECT * FROM `mp_landing` WHERE mail='$email'")
or die('Strona nie istnieje');
if(mysql_num_rows($wpcpost2) > 0) { } else {
mysql_query("INSERT INTO mp_landing (name, surname, mail, date, lc) VALUES ('$name', '$surname', '$email2' , '$date', '$lc')");

}




$cookie_file = 'cookie.txt';
$c = curl_init(); 
curl_setopt($c, CURLOPT_COOKIEJAR, $cookie_file);
curl_setopt($c, CURLOPT_COOKIEFILE, $cookie_file);
curl_setopt($c, CURLOPT_URL, 'http://globalcitizen.pl/c/apply/create/');
curl_setopt($c, CURLOPT_POST, 1);
curl_setopt($c, CURLOPT_POSTFIELDS,
'&name='.$name.'&surname='.$surname.'&email='.$email.'&pass='.$password.'&pass2='.$password.'');
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
curl_getinfo($c);
curl_exec($c);
curl_close($c);

} else {}

?>


