<html>
    <head> 
        <meta charset="UTF-8">
        <title> </title>
        <?php include './pages/import.html'; ?>
    </head> 

    <body id="login_body">
   
        <div class="divl">
            <img src="img/Staffordshire-University.jpg" class="page"/>   
        </div>
        <div class="div2">
            <img src="img/Stafford-Uni.png" class="page1"/>  
            <form  method="post" action="service/login.php">
                <h3 class="loginformm"> Login Form </h3>
                <p class="u">Username:</p>
                <input type="username" name="username" placeholder="Username" class="usersin"/><br/>
                <p class="p"> Password:</p>
                <input type="password" name="password" placeholder="Password" class="passwordin"/><br/> <br/>
                <input type="submit" value="Login" class="buttonloign"/>   
                
            </form>
        </div>  
        <?php
    $msg ="";
    if(isset($_GET['msg'])){
         if ($_GET['msg']=="Invalid"){
             echo $msg="<p class='newpp' >Invalid Login. Please try again!</P>";
      }
    }
   ?> 

    </body>
</html>



