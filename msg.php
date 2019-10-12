<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">

	--->
</head>

<?php

if(isset($_POST['un'], $_POST['pw'])){

    $un = $_POST['un'];
    $pw = $_POST['pw'];

    if($un == 'admin' && $pw == 'admin'){
        echo '<script>alert("Login Success!");</script>';
    }
    else{
        echo '<script>alert("Login Failed!");</script>';
        echo '<script>location.href="index.php";</script>';
    }
}



?>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
$(document).ready(function() {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("token_to_add").setAttribute('value', this.responseText);
        }
    };

    xhttp.open("GET", "token_generator.php", true);
    xhttp.send();
});
</script>

    <body>
        <div class="outer_div">
            <h1 class=welcome align=center>Wellcome!</h1>
            <h2 class=welcome align=center>CSRF prevention - Double Submit Cookie Pattern</h3>
            <form action="verify.php" method="post">
                <div class=inner_div>
                    <label class=welcome >Write message :</label><br><br><input type="text" class=input_text id="uname" name="theMsg"><br><br><br>
                    
                    <div id=div_hidden>
                        <input type="hidden" name="token" id="token_to_add">
                    </div>

                    <div class=btn_holder><input type="submit" class=btn name="msg" value="Send Message"></div>
                </div>
            </form>
        </div>
    </body>

</html>