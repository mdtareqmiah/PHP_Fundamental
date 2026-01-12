<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Globals</title>
    <style>
        .phpcoding{width: 100%; margin: 0 auto; background: #ffb; padding: 20px; min-height: 600px;}
        .headeroption, .footeroption{background: rgba(29, 162, 29, 1); color: rgba(216, 216, 22, 1); text-align: center; padding: 20px;}
        .headeroption h2, .footeroption h2 {margin: 0;}
        .maincontent{min-height: 500px; padding: 20px;}
    </style>
</head>
<body>
    <div class="phpcoding">
        <section class="headeroption">
            <h2><?php echo "This is header option for Super global page" ?></h2>
        </section>
        <section class="maincontent">
            Super Global Variable Request and Post
            
            <!-- <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                Username: <input type="text" name="username">
                <input type="submit" value="submit">
            </form> -->
            <?php
                // if($_SERVER["REQUEST_METHOD"]=="POST"){
                //     $name=$_REQUEST['username'];
                //     if(empty($name)){
                //         echo "<span style='color:red'> user name field must not empty </span>";
                //     }
                //     else{
                //         echo "<span style='color:green'>Your input data is: ",$name,"</span>";
                //     }
                // }
            ?>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                Name: <input type="text" name="username">
                <input type="submit" value="submit">
            </form>
            <?php
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $name=$_REQUEST['username'];
                    if(empty($name)){
                        echo "<span style='color:red'> Username must not empty!!</span>";

                    }
                    else{
                        echo "<span style ='color:green'> Your inputed data is: $name </span>";
                    }
                }
            ?>
            <hr><br>
            Super varialbe [$_GET]
            <hr>
            <a href="welcome.php?msg=Good&txt=Bye">sent Data</a>


        </section>
        <section class="footeroption">
            <h2><?php echo "This is footer" ?></h2>
        </section>
    </div>
</body>
</html>