<?php
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'models/constants.php');
$heading = MyConstant::HEADING;
$mainsite = MyConstant::TESTURL;
$mainplag = MyConstant::PLAGURL;
define('JSINCLUDES', 'js' . '/');
define('CSSINCLUDES', 'css' . '/');
?>




<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
		<meta name="title" content="Plagiarism software">
<meta name="description" content="A software that is designed to help students, educators, and researchers to identify and prevent plagiarism in their work.">
<meta name="keywords" content="iPlag, plagiarism, remove plagiarism, detect plagiarism">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="revisit-after" content="7 days">
<meta name="author" content="Rockling Anayo Einstein">
<link rel="apple-touch-icon" sizes="72x72" href="<?='data:image/' . 'png' . ';base64,' . base64_encode(file_get_contents('images/apple-icon-72X72.png')); ?>">
<link rel="apple-touch-icon" sizes="120X120" href="<?='data:image/' . 'png' . ';base64,' . base64_encode(file_get_contents('images/apple-icon-120X120.png')); ?>">
<link rel="icon" type="image/png" sizes="192x192" href="<?='data:image/' . 'png' . ';base64,' . base64_encode(file_get_contents('images/android-icon-192x192.png')); ?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?='data:image/' . 'png' . ';base64,' . base64_encode(file_get_contents('images/favicon-32x32.png')); ?>">
<link rel="icon" type="image/png" sizes="96x96" href="<?='data:image/' . 'png' . ';base64,' . base64_encode(file_get_contents('images/favicon-96x96.png')); ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?='data:image/' . 'png' . ';base64,' . base64_encode(file_get_contents('images/favicon-16x16.png')); ?>">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?='data:image/' . 'png' . ';base64,' . base64_encode(file_get_contents('images/ms-icon-144x144.png')); ?>">
<meta name="theme-color" content="#ffffff">
	    <link rel="icon" type="image/png" href="admin/assets/img/favicon.png">
		<link rel="stylesheet" type="text/css" href="js/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/header.css">
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="js/animate/animate.css">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		
		
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	</head>

	<body>

	<!-- Header -->
		<header class="header1">
			<!-- Header desktop -->
			<div class="container-menu-header">
				<div class="wrap_header">
					<!-- Logo -->
					<!--<a href="index.html" class="logo"> -->
						<!--<img src="images/icons/logo.png" alt="IMG-LOGO"> -->
					</a>
                    <span class="heading"><?=$heading; ?> Plagiarism software</span>
					<!-- Header Icon -->

				</div>
			</div>
			<!-- Header Mobile -->
			<div class="wrap_header_mobile">
				<!-- Logo moblie -->
				<a href="index.php" class="logo-mobile">
					<!--<img src="images/icons/logo.png" alt="IMG-LOGO"> -->
					
				</a>
				 

				<!-- Button show menu -->
				<span class="heading"><?=$heading; ?> Plagiarism software</span>
			</div>
			</div>
		</header>

		<section>
			<div class="limiter">
				<div class="container-login100">
					
					<div class="wrap-login100">
						
						<div class="login100-form validate-form">
						<div class="textUs">
						<p>Welcome to<span style="color:green;font-size:20px;font-weight:bold"> <?=MyConstant::IPLAG; ?>,</span> the plagiarism detection<br />software that is revolutionizing the way <br />we approach academic integrity <br />
						<p>Our software is designed to help students, educators, and researchers <br />identify and prevent plagiarism in their work.<br />
With iPlag, you can be confident that your writing is original and free from any form of plagiarism. <br />Our software uses advanced algorithms to scan your work <br /> and compare it to a vast database of academic papers, journals and other sources</p>
						 <br />
						
<p>Use the upload button(arrow button) to upload and extract text from any of these documents: [pdf,doc,docx,txt,csv] </p> <br />
<p>Your donation will help us improve our software, expand our database,<br /> and reach more students around the wolrld. </p>

<style type="text/css">
#mceu_8 {
  max-height: 500px !important;
  overflow-y: auto;
}
@media only screen and (min-width: 600px) {
#mceu_8 {
  width: 600px !important;
}
}
</style>
    <div style="display:block;text-align:center;">
      <a class="donate-with-crypto"
        href="https://commerce.coinbase.com/checkout/fedeb3da-1d30-4a78-8609-cd066b49978f">
        Donate with Crypto
      </a>
      <script src="https://commerce.coinbase.com/v1/checkout.js?version=201807">
      </script>
    </div>


		                  
						<!--
						<form method="post">
							
						<a href='<?=$enquire; ?>'> Click to send &nbsp;</a> </form>
						<p>if you want to use our software and we will get back to you </p> --->
</div>
  <br />
  <br />
					<!--	<span class="login100-form-title">
							Log in
							
						</span> 
						 <form id="login_form" method="POST">
						<div class="wrap-input100 validate-input">
						 
<input type="hidden" name="deviceid" id="deviceid">
							<input class="input100" id="email" type="text" name="email"
								placeholder="E-mail" required>
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-user-o" aria-hidden="true"></i>
							</span>
							<span class="error text-danger" id="empty_roll_number_field"></span>
						</div>

						<div class="wrap-input100 validate-input">
							<input class="input100" id="studentPassword" type="password" name="password"
								placeholder="Password" required>
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
							<span class="error text-danger" id="empty_roll_password_field"></span>
						</div>

						<div class="container-login100-form-btn">
							<button type="submit" id="submit" name="submit" class="login100-form-btn">
								Sign in
							</button>
						</div>
						
</form> --->

</style> 
<textarea id="textus" name="textus" ></textarea>
<form id="uploadform" enctype="multipart/form-data" method="post" action="" style="position: absolute;top: -9999px;" >
	<input type="file" name="myfile" id="myfile"  />
	<input type="submit" value="upload" id="submits" />
</form>
<div class="modal fade" id="quizTemplate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width:110%">
             <div class="modal-header">
              <h5 class="modal-title" id="plagShow"></h5>
			  <button type="button"  class="btn btn-default close_it" data-dismiss="modal">X</button>
            </div>
             <div class="modal-body">
                 
                   
					
                </div>
				
			
				</div>
				</div>
				</div>

		
             <div id="hideIt" style="display:none;text-align:center; z-index:999">
                <img src="<?=$mainplag; ?>/loading.gif" style="text-align:center;" alt="loading...." > 
                   
					
                </div>
				
			
	
				<!--new data ends here -->
<div id="plagPlagiarised"></div>
<br />
<br />
<div id="wordsLength"></div>
<div id="charsLength"></div>
<div id="matched"></div>
<!---
<div id="counter_matched"></div>
<div id="counter_total"></div>
-->
<div id="percentage"></div>

<div id="contents"></div>


<div id="urlSource" style="display:none">
 <br />	
<p><strong> Source links are: </strong></p>
	<br />
	
<ul id="urlcontents"></ul>


</div>
<div class="g-recaptcha" data-sitekey="6LezYc0hAAAAALYOfcv3q0P6WTWeglfmzKhR1PsJ"></div>
						<div class="text-center p-t-136">
						</div>
</div>
					</div>
				</div>
			</div>
			
			<footer class="footer">
    <div class="container-fluid">
      <div class="copyright">
        &copy;2020 -
        <script>
          document.write(new Date().getFullYear())
        </script><br />
		<em> All rights reserved</em> <br />
		Powered by
        <a href="<?=$mainsite; ?>" target="_blank"><?=$heading; ?></a>.
      </div>
    </div>
  </footer>

		</section>
	     <script src="assets/js/core/jquery.min.js"></script>
              <!--  <script type="text/javascript" src="js/jquery.js"></script> -->
		<script src="assets/js/core/bootstrap.min.js"></script>
	<script type="text/javascript">
		function showModel(title, data){
        $(".modal-header #plagShow").html(title);
        $(".modal-body").html(data);
        //var widths = $(window).width();
         $(".modal-header").css({'background-color': '#00c4ff','color':'red'});
        $(".modal-footer").css({'background-color': 'green','color':'white'});
		 $('#quizTemplate').modal('show');
		
    }
	</script>
		<script src="js/uuid.js"></script>
		<script type="text/javascript">
 
 var newDeviceid = new DeviceUUID().get();
   var inputHiden = document.createElement("input");
   inputHiden.type = "hidden";
   inputHiden.name = "deviceId";
   inputHiden.value = newDeviceid;
   inputHiden.id = "deviceId";
   console.log(inputHiden);
   var hiddenElement = document.getElementById("uploadform");
 hiddenElement.appendChild(inputHiden);
    function userResponse() {
        var deviceId = document.getElementById("deviceId").value;
        console.log("deviceId is =", deviceId);
        if(deviceId.length == 0) {
            showModel("Bot detected","It seems that you are a bot" )
            return false;
        }
		if(typeof(grecaptcha) == "undefined" || grecaptcha.getResponse() == ""){
            showModel("Bot detected","Prove that you are not a bot before you continue");
            return false;
        }
		var result, grecaptcharesponse = grecaptcha.getResponse();
		
		$.ajax({
			type:"post",
            data: {grecaptcharesponse :grecaptcharesponse, deviceId: deviceId},
            url:  "checkcaptcha.php",async: false,  
		  success:function(data) { result = data; }
	   });
	   return result;
	}
</script>
<?php
$outs = '';
$js_files = array('transpiled.js','default.js');

        foreach($js_files as $js){
		$path = JSINCLUDES .$js;
		$outs .= file_get_contents($path) . "\n";
		}

echo "\n<script type='text/javascript'>\n";
			echo "/* <![CDATA[ */\n"; // not needed in HTML 5
			echo $outs;
			echo "/* ]]> */\n";
			echo "</script>\n";
			
	?>

<script src="js/tinymce/tinymce.min.js"></script>
   <script type="text/javascript">
    
     $(document).ready(function() {

tinymce.init ({
  selector: '#textus',
  auto_focus: 'textus',
  theme: 'modern',
  menubar: false,
  height: 300,
  width: 330,
  plugins: ['advlist placeholder charmap preview anchor pagebreak, searchreplace charscount wordcount visualblocks textpattern nonbreaking, template autosave paste fileupload checkplag'],
  toolbar: 'undo,redo, bold ,italic,strikethrough,paste,media,custom,fileupload checkplag',
  browser_spellcheck:true,
contextmenu:false
});


	 });

</script>

		
	</body>
</html>
