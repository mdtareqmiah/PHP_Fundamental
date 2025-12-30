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
        .phpcoding{ width:1000px; margin: 0 auto; background: <?php echo "#dfd" ?> ; padding: 20px; min-height: 600px;}
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
            
            <?php
                echo "*PHP Data types:"
            ?>
            1.string 
            2.Integer
            3.Float
            4.Boolean
            5.Array
            6.Object
            7.NULL
            8.Resources
            <br>
            <hr>
            1.string
            <hr>
            <?php
                $x='this is string data types';
                echo $x;
            ?>
            <hr>
            2,3.Integer
            <hr>
            <?php
                $a="This is integer data type.";
                echo $a, PHP_EOL;
                $b=57;
                echo $b,PHP_EOL;
                $c=56.5;
                var_dump($a,$b,$c);
            ?>
            <hr>
            4.Boolean
            <hr>
            <?php
                $x=true;
                var_dump($x);
                $x=false;
                var_dump($x);
            ?>
            <hr>
            5.Array
            <hr>
            <?php
            //array 0 indexing 
                $x=["Tareq", "Asif", "Fuad"];
                foreach($x as $y){
                    echo $y;
                    echo "<br>";
                }
                var_dump($x);
            ?>
            <hr>
            6.Object
            <hr>
            <?php
                //data store information store 
                class student{
                    public $roll=36;
                    //inner class write function those called method
                    function department(){
                        return "This is from department function Physics";
                        //return $roll;
                    }
                    function details(){
                        echo $this->department();
                        
                    }
                }
                $stu = new student();
                $stu->details();
            ?>
            <hr>
            7.Null 
            <hr>
            <?php
                //null is a special datatype
                /// this is not zero not empty
                $x=NULL;
                var_dump($x);
            ?>
            <hr>
            8. Resources
            <hr>
            <?php
                //this is store function references
                //called database

            ?>
            <?php
                echo "*PHP String: "
            ?>
            Discuss build in methods.
            <hr>
            <?php
                $x="This is string.";
                echo $x ,"<br>length is: ", strlen($x);
                echo "<br>Word count is: ", str_word_count($x);
                echo "<br>Reverse: ", strrev($x);
                echo "<br> find Position: ", strpos($x, "in");
                echo "<br> Replace: ", str_replace("This", "Which", $x);
                
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