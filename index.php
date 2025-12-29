<?php
    $fonts="verdana";
    $bgcolor = "#FB8637";
    $fontcolor = "rgba(7, 7, 7, 1)";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP syntax</title>
    <style>
        body{font-family: <?php echo $fonts; ?>;}
        .phpcoding{ width:900px; margin: 0 auto; background: <?php echo "#dfd" ?> ; padding: 20px; min-height: 600px;}
        .headeroption, .footeroption {background: <?php echo $bgcolor ?>; color: <?php echo $fontcolor ?>; text-align: center; padding: 20px;}
        .headeroption h2, .footeroption h2{margin: 0;}
        .maincontent {min-height: 500px; padding: 20px;}
    </style>

</head>
<body>
    <div class="phpcoding">

        <section class="headeroption">
            <!-- <h2>PHP Fundamental Training</h2> -->
             <h2><?php echo "This is a headeroption"; ?> </h2>
        </section>

        <section class="maincontent">
            <?php
                $a=5;
                $b=7;
                echo "This is from php using html <br>";
                //here use line break tag inner php
                echo $fonts. "<br> Total value = ". $a+$b," Here i use . for string concate <br>";
                echo "PHP ", "is Nice ". "from echo";
                echo "<br>";
                print "php is nice from print<br>";
                $x= print "Tareq";
                var_dump($x);



            ?>

        </section>
    
        <section class="footeroption">
            <!-- <h2>This is a trining portion</h2> -->
            <h2><?php echo"This is a php trining option"; ?></h2>
        </section>
    </div>
</body>
</html>

<!-- 
This is repo directory
git remote add origin git@github.com:mdtareqmiah/PHP_Fundamental.git
 -->