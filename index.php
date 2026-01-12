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
                echo "*PHP String: ";
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
            <?php
                echo "Constant: ";
            ?>
            Discussing about constant.
            <hr>
            <?php
                //constant dont have $ sign 
                // using define
                //define(name,value);
                define("val", "Iam Larning PHP<br>");
                echo val;
                define( "pi", 3.14156);
                echo pi;
                var_dump(pi);
                $var="Hello World<br>";
                echo $var;


                function learnPHP(){
                    echo pi, "<br>", val;
                }
                learnPHP();
            ?>
            <hr>
            PHP Operators
            1. Arithmetic Operator
            2. Assingment Operators
            3. Comparison Operators
            4. Increment/Decriment Operator
            5. Logical operator
            6. String Operator
            7. Array Operator
            <hr>
            <?php
                $var="*Arithmetic operator<br>";
                echo $var;
                $x=5;
                $y=7;
                echo $x-$y,"<br>";
                echo $x+$y,"<br>";
                echo $x*$y,"<br>";
                echo $x/$y,"<br>";
                echo $x**$y,"<br>";
            ?>
            <hr>
            <?php
                $var="*Assignment Operator<br>";
                echo $var;
                $x=7;
                $y=$x;
                $sum=$x+$y;
                $sum+=6;
                echo $sum, "<br>";
            ?>
            <hr>
            <?php 
                $var="*Comparison Operator<br>";
                echo $var;
                $x=100;
                $y="100";
                var_dump($x===$y);//identical
                var_dump($x==$y);//assignment

                var_dump($x != $y);
                var_dump($x<>$y);

            ?>
            <hr>
            <?php
                $var="*Increment Decriment Operator<br>";
                echo $var;
                $x=5;
                echo ++$x;
                echo "<br>";
                echo $x++, "<br>";
                echo $x, "<br>";
                echo "Decremetn = Same as Increment";
            ?>
            <hr>
            <?php
                echo "*Php Logical Operator<br>";
                //logical operator use for conditional statement combine
                echo "& AND Operator";
                $x = 100;
                $y=200;
                if($x==100 && $y==200){
                    echo "This is and operator<br>";
                }

            ?>
            <hr>
            <?php
                echo "*String Operator<br>";
                //concatanation .
                $x="Hello ";
                $y="Tareq.";
                echo $x.$y;
                //concatanation assignment operator
                echo "<br>";
                $x.=$y;
                echo $x;
            ?>
            <hr>
            <?php
                echo "*Array Operator<br>";
                $x=array(
                    "a" => "Dhaka",
                    "b" => "Sylhet"
                );

                $y=array(
                    "c" => "Cumilla",
                    "d" => "Chottogram"
                );
                var_dump($x+$y);
            ?>
            <hr>
            PHP Conditional Stement
            <hr>
            .if <br>
            .if else <br>
            .if else if <br>
            <?php
                $x=5;
                $y=6;
                if($x<$y){
                    echo "<br>I'm from if block";
                }
                if($x>$y){
                    echo "<br> Wrong";
                }
                else{
                    echo "<br> Iam from Else Block";
                }
            ?>
            <hr>
            PHP Switch Statement
            <hr>
            <?php
                $x = "PHP";
                switch($x){
                    case "JAVA":
                        echo "This is java.";
                        break;
                    case "PHP":
                        echo "This is php block.";
                        break;
                    default:
                        echo "I Love PHP";
                }
            ?>
            <hr>
            PHP While loop 
            <hr>
            <?php
                $x=5;
                while($x<10){
                    echo $x, " Iam From While loop<br>";
                    $x++;
                }
                $x=1;
                do{
                    echo "The number is: $x <br>";
                    $x++;
                }while($x>5);

                for($x=1; $x<5; $x++){
                    echo "Iam From foor lOOp: $x <br>";
                }
                $colors=["Tareq", "Asif", "Fuad"];
                foreach($colors as $color){
                    echo $color;
                    echo "<br>";
                }
            ?>
            <hr>
            PHP Function
            <hr>
            <?php
                function school($name){
                    echo "Iam a Student.<br>";
                    echo "My school name is $name";
                }
                $var="SIU";
                school($var);
                echo "<br>";
                function sum($x,$y){
                    $z=$x+$y;
                    return $z;
                }
                 echo "5+10 = ".sum(5,10);
            ?>
            <hr>
            PHP Array
            <hr>
            <?php
                $x=array(5,10,6,3,7,8);
                //indexed array
                $x[0]=4;
                $x[1]=5;
                echo "Total number of count is: ".count($x)."<br>";
                foreach( $x as $y){
                    echo $y."<br>";
                }
                
                //assosiative array
                $age = array(
                    "Tareq"=>"25",
                    "Asif"=>"26",
                    "Fuad"=>"27"
                );
                foreach($age as $nam=>$ag){
                    echo "Name: $nam's age is $ag <br>";
                }
                //multidimentional array
                $cars=array(
                    array("BMW", 15, "Nice"),
                    array("Volvo", 20, 1965),
                    array("Tareq" ,43017,2002),
                    array("audi",34,45)
                );

                //echo $cars[0][1];
                for($i=0; $i<4; $i++){
                    echo "<p> Row Number $i</p>";
                    echo "<ul>";
                        for($j=0; $j<3; $j++){
                            echo "<li>".$cars[$i][$j]."</li>";
                        }
                    echo "</ul>";
                }
            ?>
            <hr>
            PHP sorting Array
            <hr>
            <?php
                $names = array("Rakib", "Mamun", "Akbor", "Badol");
                $sz=count($names);
                echo "sorting array assending order.<br>";
                sort($names);
                for($i=0; $i<$sz; $i++){
                    echo $names[$i];
                    echo "<br>";
                }
                echo "Sorting array descending order array.<br>";
                rsort($names);
                for($i=0; $i<$sz;$i++){
                    echo $names[$i],"<br>";
                }
                echo "Assosiative array sort with key or with value.<br>";
                // ksort($names) using key 
                // asort($name) using value

            ?>
            <hr>
            PHP super global variable
            <hr>
            $GLOBALS
            $_SERVER
            $_REQUEST
            $_POST
            $_GET
            <?php
                $x=5;
                $y=10;
                function test(){
                    $GLOBALS ['z']=$GLOBALS['x']+$GLOBALS['y'];
                }
                test();
                echo $z;
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