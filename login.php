<html lang="en">
   <head>
   	   <meta charset="UTF-8">
   	   <meta name="viewspot" content="width=device-width, initial-scale=1">
   	   <title>login page</title>
   	</head>
   	<body>
   		<form action="ceklogin.php" method="post" class="form-login">
   			<?php
   			    if(isset($_GET['pesan'])){
   			    	if($_GET['pesan']=="gagal"){
   			    		echo "<h1><center>username dan passwprd tidak sesuai !</center></h1>";
   			    	}
   			    }
                ?>
        <div class="bgf">
        	 <div class="f-out">
        	 	  <h4>Login</h4>
                      <div classs="line">
                           <input type="text" placeholder="Username" name="uname" class="form-control" required=>
            </div>
            <div classs="line">
                 <input type="password" placeholder="Password" name="psw" class="form-control" required=>
                 </div>
                 <div class="line">
                 	  <button type="submit" class="btn btn-danger">Login</button>
                 	  <a href="index.php"><button type="button" class="btn btn-light">cancel</button></a>
                 	 
                 </div>
                 <dive class="line">
                      <label>Don't have an account? Click <a href="register.php">here</a></label>
                     
                 </div>
             </div>
         </div>
     </form>  
   </body>
 </html>              
