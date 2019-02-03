<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Course Document</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-info">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <label for="" class="success-info">Class 1</label>
                                    </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <h3 class="text-center">Print VS Echo</h3>
                                        <p class="text-center success-info">Description</p><hr>
                                        <p><b>Print : </b>Print Only Uses One Perametter and Do returen Value</p>
                                        <p class="text-center">Example <br>
                                            <?php
                                            //                                        print (1,2,3);
                                            ?>
                                            print 1,3,4; press error;
                                            print (5,2);<br>
                                            <b>So Print is Only I perametter</b>
                                        </p>
                                        <hr>
                                        <p><b>Echo : </b>Print Uses Multipal Perametter And Have Not Returen Value</p>
                                        <p class="text-center">Example <br>
                                            <?php
                                            echo 1,2,3;
                                            //                                        echo(5,2);
                                            ?>
                                            <br>
                                            echo 1,3,4;
                                            <br>
                                            <b>So Echo Multipal Perametter</b>
                                        </p><hr>
                                        <p><b>Note:</b> .(dot) is called Concation.Its Uses String Devided <br>
                                        </p>
                                        <p class="text-center">Example <br>
                                            <?php
                                            $str1="Hellow";
                                            $str2="Iqbal";
                                            echo $str1 . $str2;
                                            echo "<br>";
                                            print $str1 . $str2;
                                            
                                            ?>
                                            
                                            <br>
                                            echo $str1 . $str2;<br>
                                            print $str1 . $str2;<br>
                                            <b>So print and echo Concation with .(dot)</b>
                                        </p>
                                        <hr>
                                        <p><b>PHP echo in print:</b> <br>
                                        </p>
                                        <p class="text-center">Example <br>
                                            <?php
                                            echo print (5);
                                            echo "<br>";
                                            echo '1'.(print '2')+3;
                                            echo "<br>";
                                            // 2, 1+1+3 = 25
                                            echo 1+(print '2')+3;
                                            
                                            ?>
                                            <br>
                                            echo print (5);(print for 1)<br>
                                            echo '1'.(print '2')+3 (1st count print than print of 1 than '1' than 3 =<b>this line output 25</b>);
                                            <br>
                                            // 2, 1+1+3 = 25 <br>
                                            echo 1+(print '2')+3;
                                            <br>
                                            <b>So We uses PHP echo in print.</b>
                                        </p><hr>
                                        <hr>
                                        <h3 class="text-center">Comment System</h3>
                                        <p class="text-center success-info">Description</p><hr>
                                        <p><b>Commnet : </b>
                                        type of comment.</p>
                                        
                                        <br>
                                        <p class="text-center">1.singe line comment(exp : // or #) <br>
                                        2.mutlti line comments(/* .........*/)</p>
                                        <hr hight="3px;">
                                        <h3 class="text-center">Numbering System</h3>
                                        <p class="text-center success-info">Description</p><hr>
                                        <p> <b>Numbering : </b>
                                            php in 4 kind of number system
                                        </p>
                                        <p class="text-center">
                                            decimal 1-9=1,2,3,4,5,6,7,8,9 <br>
                                            octal 0-7=0,1,2,3,4,5,6,7 <br>
                                            bainary 0-1=0,1; <br>
                                            hexa 0x11=0X11; <br>
                                            <b>How to Count Numbering System :</b>
                                            <p><b>Example Octal : </b>012 <br> 0X8*2=0 <br>1X8*1=8 <br>2X8*0=2 <br><b>Result <?php echo 012;?></b></p>
                                        </p><hr>
                                        <h3 class="text-center">Varible And Consonant</h3>
                                        <p class="text-center success-info">Description</p><hr>
                                        <b> how to start varible :</b>
                                        <p class="text-center">
                                            <br>
                                            <b>Note : Varible Only Start Letter and -(has)</b><br>
                                            $a="america";
                                            <br>
                                            $_1="austrail";
                                        </p>
                                        <b> User Define Varible :</b>
                                        <p>
                                            1.based on varible scope
                                            <br>
                                            2.varible varibles <br>
                                            3. Reference Varible <br>
                                            4.static Varible
                                        </p>
                                        <p class="text-center"><b>Based on varible scope</b></p>
                                        
                                        <p>2 type of varible scope </p>
                                        <p class="text-center">
                                            a)Local Varible <br>
                                            b)Global Varible
                                            <br>
                                            $b="tuhin";//Global Varible <br>
                                            $a="hossain";<br>
                                            function texyt(){ <br>
                                            $a="Iqbal";//Local Varible <br>
                                            echo $a; <br>
                                            global $b; <br>
                                            echo $b;
                                            <br>
                                            echo $GLOBALS['a'];
                                            <br>
                                            // echo $a;
                                            }
                                            <br>
                                            texyt();
                                        </p>
                                        <p class="text-center"><b> varible varibles </b></p>
                                        $x="bangladesh";<br>
                                        $$x="India";<br>
                                        $$$x="Pakistan";<br>
                                        $$$$x="Maldip";<br>
                                        echo $$x;<br>
                                        // echo $x;<br>
                                        echo $bangladesh; <br>
                                        echo $$$x; <br>
                                        echo $$$$x; <br>
                                        echo $India; <br>
                                        echo $Pakistan; <br>
                                        <b>
                                        $Bar = "a"; <br>
                                        $Foo = "Bar"; <br>
                                        $World = "Foo"; <br>
                                        $Hello = "World"; <br>
                                        $a = "Hello"; <br>
                                        $a; //Returns Hello <br>
                                        $$a; //Returns World <br>
                                        $$$a; //Returns Foo <br>
                                        $$$$a; //Returns Bar <br>
                                        $$$$$a; //Returns a <br>
                                        $$$$$$a; //Returns Hello <br>
                                        $$$$$$$a; //Returns World <br>
                                        </b>
                                        <b>
                                        <?php
                                        $x="Bangladesh";
                                        $$x="Indea";
                                        $$$x="Pakistan";
                                        $$$$x="Srilonka";
                                        //                                    echo "<br>";
                                        //                                    echo $$x;
                                        //                                    echo "<br>",$Pakistan;
                                        //
                                        ?>
                                        </b><br><br>
                                        <p class="text-center"><b>Reference Varible</b></p>
                                        <p>
                                            // $s="Amir hossain"; <br>
                                            $p=&$t; <br>
                                            $p="iqbal hossain"; <br>
                                            $t="tuhin"; <br>
                                            echo $p; <br>
                                            <?php
                                            //                                        $i="Iqbal ahmed tuhin";
                                            //                                        $c="fci";
                                            //                                        $c=&$i;
                                            //                                        echo $c;
                                            //                                            $p=&$t;
                                            //                                            $p="Pawal";
                                            //                                            $t="Tere Nam";
                                            //                                            echo $t;
                                            
                                            ?>
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel panel-primary">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Class 2
                                    </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <h4 class="text-center">Topic 1. Constant Varible</h4>
                                        <p class="text-center">Description</p><hr>
                                        <p>
                                            <b>Constant : Two Types of constant Defclire One is <q> const</q>.Another Is <q>define(three perametter)</q></b>
                                            <br>
                                            Uses Two Keywords <br>
                                            const <br>
                                            define <br>
                                            <b>const : </b>
                                            const $aaaa="iqbal ahmed tuhin";<br>
                                            <?php
                                            const iqbal="iqbal ahmed tuhin";
                                            echo "<br>";
                                            //                                        echo iqbal;
                                            echo "<br>";
                                            
                                            ?>
                                            <b>define : </b> <br>
                                            // define("t","hellow test"); <br>
                                            // echo t; <br>
                                            define("test","hellow iqbal",true); <br>
                                            // define("Test","hellow world",true); <br>
                                            echo test; <br>
                                            
                                            // echo Test; <br>
                                            // function hocce global schop; <br>
                                            const hi='hi man'; <br>
                                            function testtt(){ <br>
                                            echo hi; <br>
                                            } <br>
                                            testtt(); <br>
                                            
                                            <?php
                                            //                                        define("hellow","hellow world");
                                            //                                        echo hellow;
                                            //                                        echo "<br>";
                                            //                                        define("Hellow","hellow world");
                                            //                                        echo Hellow;
                                            //                                            define("hellow","Hi Iqbal",true);
                                            //                                            define("Hellow","Hi Iqbal");
                                            //                                            echo hellow;
                                            //                                            echo Hellow;
                                            ?>
                                        </p>
                                        <p class="text-center"><b>Operator</b></p><hr>
                                        <p class="text-center"><b>Arithmetic Operator</b></p> <hr>
                                        <p>
                                            <b class="">Arithmetic Operator <br>: +,-,*,/,%,**;<br>
                                            How to Count Operator : <br>first * work <br> second / <br> thared % <br> four + <br> than - <br></b>
                                            example : echo 5+5-5*5/5%5;<br>
                                            <?php echo 5+5-5*5/5%5;?>
                                            <br>
                                            5+5-25/5%5 <br>
                                            =   5+5-5%5 <br>
                                            =   5+5-0 <br>
                                            =  10 <br>
                                            (**) This is Power <br>
                                            5**3=125;<br>
                                            <?php echo 5**3;?>
                                        </p> <hr>
                                        <p class="text-center"><b>Asingment operato</b></p>
                                        <p>
                                            <b> = =,+=,-=,*=,%=,**=;</b>
                                        </p> <hr>
                                        <p class="text-center"> <b>Comperison Operator</b></p>
                                        <p>
                                            == <br> <= <br> <> (not equal) <br>    >= <br> ===(identikal) <br> !=== <br> <=>(spaceship operator) <br>
                                            <?php
                                            $ab=344;
                                            echo $ab===3;
                                            ?>
                                            <br>
                                            <b>Identikal Operator ( === )</b> <br>
                                            echo $ab==43;
                                            <br>
                                            // ===(identikal) operator <br>
                                            echo $ab===5;
                                            <br>
                                            echo 5=="5"; //this is not true; <br>
                                            <br>
                                            echo "5"==="5";//this is true; <br>
                                            <?php
                                            //                                        echo 5===5; //result : 1
                                            //                                        echo "<br>";
                                            //                                        echo "3" === "2"; //result : none;display none;
                                            ?>
                                            <br>
                                            <b><=>(spaceship operator)</b> <br>
                                            This Operator Uses =, < , and >. <br>
                                            <?php
                                            echo 5<=>2;
                                            echo "<br>";
                                            if((4<=>4)==0){
                                            echo "not equal";
                                            }
                                            ?>
                                        </p><hr>
                                        <p class="text-center"><b>string operator</b></p>
                                        <p> .(dot) , .=(dot equal) ;</p>
                                        <p>
                                            example :
                                            <br>
                                            echo $c="a";  //result : a<br>
                                            echo $c.="b"; //result : ab<br>
                                            echo $c.="c"; //result : abc<br>
                                            $c.="d"; //result : abcd<br>
                                            echo $c; //result : abcd<br>
                                            <?php
                                            echo $c="a";
                                            echo "<br>";
                                            echo $c.="b";
                                            echo "<br>";
                                            echo $c.="c";
                                            echo "<br>";
                                            echo $c.="d";
                                            echo "<br>";
                                            ?>
                                        </p><hr>
                                        <p class="text-center"><b>increment and derement (++,--)</b></p>
                                        <p>
                                            $a=3;
                                            echo $a++; //result : 3 not increment <br>
                                            or <br>
                                            echo ++a; //result : 4; <br>
                                            or <br>
                                            echo $a++ //result : 3 <br>and <br>
                                            echo ++$a //result : 5; <br>
                                            echo echo $id--+$id++; //result : 5;(id=3 than 1 decrement id=2 than id=3 =5) <br>
                                            echo $a+++$a++;//result = 7 <br>
                                            <?php
                                            $id=3;
                                            //                                        echo $id++;
                                            echo "<br>";
                                            //                                        echo ++$id;
                                            echo "<br>";
                                            //                                        echo +++$id++;
                                            echo $id--;//result : 3;
                                            echo "<br>";
                                            echo $id++;//result : 2;
                                            echo "<br>";
                                            echo $id--+$id++;//result : 5;
                                            echo "<br>";
                                            //                                        echo  +++$id++;
                                            ?>
                                        </p>
                                        <p class="text-center"><b>Logical Operator</b></p>
                                        <p>
                                            <b>Logical Operator : AND(&&) <br> OR(||) <br>XOR <br>not(!);</b><br>
                                            <?php
                                            $lo=4;
                                            $lo1=5;
                                            $lo2=6;
                                            if($lo==4 && $lo1==5 && $lo2==6){
                                            echo "True";
                                            }else{
                                            echo "false";
                                            }
                                            ?>
                                            <br>
                                            <b>And ( && ) :</b>
                                            <br>
                                            example <br>
                                            $lo=4; <br>
                                            $lo1=5; <br>
                                            $lo2=6; <br>
                                            if($lo==4 && $lo1==5 && $lo2==6){ <br>
                                            echo "True"; <br>
                                            }else{ <br>
                                            echo "false"; <br>
                                            } <br>
                                            <b>That Means 1 are false both are false</b> <br>
                                            <br>
                                            <b>OR ( || )</b> <br>
                                            example <br>
                                            $lo=4; <br>
                                            $lo1=5; <br>
                                            $lo2=6; <br>
                                            if($lo==4 || $lo1==5 || $lo2==6){ <br>
                                            echo "True"; <br>
                                            }else{ <br>
                                            echo "false"; <br>
                                            } <br>
                                            <b>That Means 1 are true both are true</b> <br>
                                            <b>XOR</b> <br>
                                            example <br>
                                            $lo=4; <br>
                                            $lo1=5; <br>
                                            $lo2=6; <br>
                                            if($lo==4 xor $lo1==5 xor $lo2==6){ <br>
                                            echo "True"; <br>
                                            }else{ <br>
                                            echo "false"; <br>
                                            } <br>
                                            <b>//that means sob gula true hole xor true false hoy <br>
                                            // bejod sonkhok value true hole xor ture hoy <br>
                                            // jod sonkhok value true hole xor false hoy</b> <br>
                                            <b>ternary operato (echo ($age>0)&&($age<=17)?"u r chaild":"u r not child";)</b> <br>
                                            syntex : <br>
                                            $age=8;
                                            <br>
                                            ($value>0)&&($value<0)?"":""; <br>
                                            its called ternary operator; <br>
                                        </p>
                                        <p class="text-center"><b>Error Control Operator</b></p>
                                        <p>
                                            // error control operator;
                                            //$s=;
                                            //echo &$s;
                                            echo isset($x)?$x:"";
                                            <?php
                                            //                                        $xa=3;
                                            //                                        echo &$xa;
                                            echo isset($xa)?$xa:"";
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Class 3
                                    </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <p class="text-center"><b>Topic : Bitwise Operator</b><br>Discription</p><hr>
                                        <p>
                                            <b>Left Shift : </b>
                                            <br>
                                            example : <br>
                                            <b> 13 << 2 </b> <br>
                                            That Means 13 Bainary ( 1 1 0 1 )  2 gor left 2 ta ( 0 0 ) add hobe.
                                        </p><hr>
                                        <p>
                                            <b>Right Shift : </b>
                                            <br>
                                            example : <br>
                                            <b> 13 >> 2 </b> <br>
                                            That Means 13 Bainary ( 1 1 0 1 )  2 gor left 2 ta bad hoa jabe that means( 1 1 ) add hobe.
                                        </p>
                                        <p class="text-cetner">
                                            topic .2 <br>
                                            php control stracture <br>
                                            branching statement <br>
                                            conditional statement(if,if..else,if..elseif.....) <br>
                                            $a=3; <br>
                                            if($a==3){ <br>
                                            echo "3"; <br>
                                            }elseif($a==4){ <br>
                                            echo "i don't know"; <br>
                                            }else{ <br>
                                            echo "404"; <br>
                                            } <br>
                                            echo "<br>"; <br>
                                            $day=date("w"); <br>
                                            switch ($day) { <br>
                                            case '0': <br>
                                            echo "Saterday"; <br>
                                            break; <br>
                                            case '1': <br>
                                            echo "Sunday"; <br>
                                            break; <br>
                                            case '2': <br>
                                            echo "monday"; <br>
                                            break; <br>
                                            case '3': <br>
                                            echo "Thusday"; <br>
                                            break; <br>
                                            default: <br>
                                            echo "Holy Day"; <br>
                                            break; <br>
                                            } <br>
                                            echo $day; <br>
                                            echo "<br>"; <br>
                                            // non-conditional(goto,continue,break,return) <br>
                                            // loops <br>
                                            // for <br>
                                            // while <br>
                                            // do while <br>
                                            // foreach <br>
                                            // $i=1; <br>
                                            for ($i=1; $i < 10 ; $i++) {  <br>
                                            if($i>10){ <br>
                                            break; <br>
                                            } <br>
                                            echo $i; <br>
                                            echo "<br>"; <br>
                                            } <br>
                                            echo "<br>"; <br>
                                            for(;;){ <br>
                                            if($j>10){ <br>
                                            break; <br>
                                            } <br>
                                            echo $j; <br>
                                            $j++; <br>
                                            echo "<br>"; <br>
                                            } <br>
                                            echo "<br>"; <br>
                                            while ($xy <= 10) { <br>
                                            echo $xy,"<br>"; <br>
                                            $xy++; <br>
                                            } <br>
                                            echo "<br>"; <br>
                                            $aaa=5; <br>
                                            do{ <br>
                                            echo $aaa; <br>
                                            $aaa++; <br>
                                            echo "<br>"; <br>
                                            } <br>
                                            while ( $aaa<= 10); <br>
                                            echo "<br>"; <br>
                                            echo "<br>"; <br>
                                            echo "<br>"; <br>
                                            echo "<br>"; <br>
                                            $xyz=5; <br>
                                            // while ($xyz <= 10) { <br>
                                            //  $xyz++; <br>
                                            //  if($xyz==5){ <br>
                                            //      continue; <br>
                                            //  } <br>
                                            //  echo $xyz,"<br>"; <br>
                                            
                                            // } <br>
                                            echo "<br>"; <br>
                                            xyza: <br>
                                            die("Hellow"); <br>
                                            while ($xyza <= 10) { <br>
                                            $xyza++; <br>
                                            if($xyza==5){ <br>
                                            goto xyza; <br>
                                            } <br>
                                            echo $xyza,"<br>"; <br>
                                            echo "<br>"; <br>
                                            
                                            } <br>
                                            // file inclussion <br>
                                            // include <br>
                                            // include_once <br>
                                            // requeire <br>
                                            // requre_once <br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="panel panel-primary">
                                <div class="panel-heading" role="tab" id="headingfour">
                                    <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                        Class 4
                                    </a>
                                    </h4>
                                </div>
                                <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                                    <div class="panel-body">
                                        <p class="text-center">
                                            <b>Problem Solving</b>
                                            <br>
                                            Fibonacci Number Print
                                            <br>
                                        </p> <hr>
                                        <p class="text-center">
                                            <ul>
                                                <li style="list-style:none;line-height:30px;border-left:2px solid #ddd;padding-left:10px;color:blue;font-weight:700;">
                                                    
                                                    $fact1=0;  <br>
                                                    $fact2=1; <br>
                                                    for($i=0;$i<=5;$i++){ <br>
                                                    $result=$fact1+$fact2; <br>
                                                    echo $result; <br>
                                                    $fact1=$fact2; <br>
                                                    $fact2=$result; <br>
                                                    } <br>
                                                    
                                                </li>
                                            </ul>
                                        </p>
                                        <br> <hr>
                                        <p class="text-center">
                                            <b>Problem Solving</b>
                                            <br>
                                            Factorial Number Print
                                            <br>
                                        </p> <hr>
                                        <p class="text-center">
                                            <ul>
                                                <li class="info" style="list-style:none;line-height:30px;border-left:2px solid #ddd;padding-left:10px;color:blue;font-weight:700;">
                                                    
                                                    $fact1=1;  <br>
                                                    for($i=5;$i>0;$i--){ <br>
                                                    $fact1=$fact1*$i;  <br>
                                                    }  <br>
                                                    echo $fact1; <br>
                                                    
                                                </li>
                                            </ul>
                                        </p> <hr>
                                        <p class="text-center">
                                            <b>File Inclussion</b> <hr>
                                        </p>
                                        <p class="text-center">
                                            4 type of file inclussion.
                                            1.include <br>
                                            2.include_once <br>
                                            3.require <br>
                                            4.require_once <br>
                                            
                                        </p>
                                        <p>
                                            <b>Include : </b>
                                            <br>
                                            <q> Include Location Incorract Holeow Poroborti Code Excuton Kore </q>
                                        </p>
                                        <br>
                                        <p>
                                            <b>include_once : </b>
                                            <br>
                                            <q> Only Call Once When We are Call another But Cood Not Excute  </q>
                                        </p>
                                        <br>
                                        <p>
                                            <b>require : </b>
                                            <br>
                                            <q> Require Location Incorrect Cood Not excute Look Fatal Error  </q>
                                        </p>
                                        <p>
                                            <b>require_once : </b>
                                            <br>
                                            <q> Only Call Once When We are Call another But Cood Not Excute  </q>
                                        </p>
                                        <br>
                                        <p class="text-center">
                                            <b>Array</b>
                                            array type based on index <br>
                                            1.Numerical Arrray <br>
                                            2.Assoccative Array <br>
                                            3.Hybride Array
                                        </p>
                                        <p>
                                            <b>Numerical Arrray  :  </b> Example <br>
                                            Only Ineger Number Cont Or Only Count Numerical Number <br>
                                            exaple <br>
                                            $numerica=[7,8=>9,10,9=>11,7,4]; <br>
                                            
                                            print_r($numerica); <br>
                                            <?php
                                            $numerica=[7,8=>9,10,9=>11,7,4];
                                            var_dump($numerica);
                                            ?>
                                        </p>
                                        <br>
                                        <p>
                                            <b>Assoccative Arrray  :  </b> Example <br>
                                            Only Count String <br>
                                            example <br>
                                            $assoccative=["a"=>"amierica","2"=>"Canada","c"=>"china"]; <br>
                                            print_r($assoccative); <br>
                                            echo $assoccative["2"]; <br>
                                            <?php
                                            $assoccative=["a"=>"amierica","2"=>"Canada","c"=>"china"];
                                            //                                            $numerica=[7,8=>9,10,9=>11,7,4];
                                            var_dump($assoccative);
                                            ?>
                                        </p>
                                        <br>
                                        <p>
                                            <b> Hybride Array </b>
                                            $hybride=["b"=>"Hi banglladesh","Pakistan","c"=>"hi chakma",6,"hi i am good"]; <br>
                                            print_r($hybride); <br>
                                            Nestaded array <br>
                                            $arrayr=[5,7,[8,9=>[10,11=>[12,13]]]]; <br>
                                            
                                            
                                            print_r($arrayr); <br>
                                            
                                            print_r([[5]]); <br>
                                            $z=[7=>8,[9=>10,[11,12]]] <br>
                                            amara jodi 12 ar index pete cai tahole <br>
                                            $z=[8][10][1]; <br> <br><br>
                                            $arrayr=[5,7,[8,9=>[10,11=>[12,13]]]]; <br>
                                            <?php
                                            $arrayr=[5,7,[8,9=>[10,11=>[12,13]]]];
                                            echo $arrayr[2][9][11][1];
                                            echo "<br>";
                                            print_r($arrayr);
                                            echo "<br>";
                                            echo "<br>";
                                            echo $arrayr[2][9][11][1];
                                            echo "<br>";
                                            echo "<br>";
                                            var_dump($arrayr);
                                            echo "<br>";
                                            echo "<br>";
                                            $z=[7=>8,[9=>10,[11,12]]];
                                            print_r($z);
                                            echo "<br>";
                                            echo $z[8][10][1];
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading" role="tab" id="headingFive">
                                    <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Class 5
                                    </a>
                                    </h4>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        <h1 class="text-center">Only For Problem Solving Class</h1>
                                        <p class="text-center">Below the problem</p>
                                        <hr>
                                        <p class="">
                                            <b>Problem 1.</b> <br>
                                            <!-- php code start  -->
                                            <?php
                                            for($i=1;$i<=5;$i++){
                                            for($j=1;$j<=$i;$j++){
                                            echo $j;
                                            }
                                            echo "<br>";
                                            }
                                            ?>
                                            <!-- php code end  -->
                                            <br>
                                            for($i=1;$i<5;$i++){ <br>
                                            for($j=1;$j<$i;$j++){  <br>
                                            echo $j;  <br>
                                            
                                            } <br>
                                            
                                            echo "\n"; <br>
                                            
                                            }
                                            <br>
                                            <br><br><br><br>
                                            <b>Problem 2.</b> <br>
                                            <?php
                                            $n=4;
                                            $count=1;
                                            for($i=$n;$i>0;$i--)
                                            {
                                            for($j=$i;$j<$n+1;$j++){
                                            echo $count++;
                                            }
                                            echo "<br>";
                                            }
                                            ?> <br>
                                            $n=4; <br>
                                            $count=1;  <br>
                                            for($i=$n;$i>0;$i--) <br>
                                            { <br>
                                            for($j=$i;$j<$n+1;$j++){ <br>
                                            echo $count++; <br>
                                            } <br>
                                            echo "<\n>"; <br>
                                            }  <br><br><br><br>
                                            <b>Problem 3.</b> <br>
                                            <?php
                                            $str="abcd";
                                            $a=[];
                                            for($i=0;$i<4;$i++){
                                            $a[]=$str[$i];
                                            
                                            }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   echo "<pre>";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   print_r($a);
                                            echo "</pre>";
                                            ?> <br> <br>
                                            $str="abcd"; <br>
                                            $a=[]; <br>
                                            for($i=0;$i<4;$i++){ <br>
                                            $a[]=$str[$i]; <br>
                                            
                                            } <br>
                                            
                                            print_r($a); <br>
                                            <br><br><br>
                                            <b>Problem 4.</b> <br>
                                            <?php
                                            $str="abcd";
                                            $a=[];
                                            for($i=3;$i>=0;$i--){
                                            $a[]=$str[$i];
                                            
                                            }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   echo "<pre>";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   print_r($a);
                                            echo "</pre>";
                                            ?> <br><br>
                                            $str="abcd"; <br>
                                            $a=[]; <br>
                                            for($i=3;$i>=0;$i--){ <br>
                                            $a[]=$str[$i]; <br>
                                            
                                            } <br>
                                            print_r($a);
                                            <br>
                                            //My own Problem <br>
                                            // 1 1 1 <br>
                                            // 2 2 2 <br>
                                            // 3 3 3 <br>
                                            for($i=1;$i<4;$i++){ <br>
                                            for($j=1;$j<=$i;$j++){ <br>
                                            // echo $j; <br>
                                            if($i==1){ <br>
                                            echo $i.$i.$i; <br>
                                            }elseif($j==2){ <br>
                                            echo $j.$j.$j; <br>
                                            }else{ <br>
                                            echo $i.$i.$i; <br>
                                            break; <br>
                                            } <br>
                                            } <br>
                                            
                                            echo "<br>"; <br>
                                            } <br>
                                            //$count=1; <br>
                                            //for($i=1;$i<4;$i++){ <br>
                                            //    for($j=1;$j<=4;$j++){ <br>
                                            //            echo $count; <br>
                                            //        } <br>
                                            //        echo "\n"; <br>
                                            //        $count++; <br>
                                            //    } <br>
                                            //output <br>
                                            //i=1,2,3    <br>      j=1,1,2,1,2,3 <br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel panel-primary">
                                <div class="panel-heading" role="tab" id="headingSix">
                                    <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Class 6
                                    </a>
                                    </h4>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                    <div class="panel-body">
                                        <h2 class="text-center">6th class</h2>
                                        <p class="text-center">
                                            Below Discription
                                        </p> <hr>
                                        <p class="">
                                            <b>Topic : foreach Loop</b> <br>
                                            $x=["a"=>"America","b"=>"bangladesh","c"=>"Canada"]; <br>
                                            foreach ($x as $y) { <br>
                                            echo $y; <br>
                                            } <br>
                                            foreach ($x as $k => $y) { <br>
                                            echo "$k = $y"; <br>
                                            } <br>
                                            echo $x; <br>
                                            <b>output: </b>        <br>
                                            <?php
                                            // $x=["a"=>"America","b"=>"bangladesh","c"=>"Canada"];
                                            // foreach($x as $y) {
                                            // echo $y;
                                            // echo "<br>";
                                            // }
                                            ?> <hr>
                                            <b>Another One</b> <br>
                                            $s=["a"=>"America","b"=>"bangladesh","c"=>"Canada"]; <br>
                                            foreach ($x as $k => $y) { <br>
                                            echo "$k = $y"; <br>
                                            <br>
                                            } <br>
                                            <b>Output: </b><br>
                                            <?php
                                            // $s=["a"=>"America","b"=>"bangladesh","c"=>"Canada"];
                                            // foreach ($s as $k => $y) {
                                            // echo "$k = $y";
                                            // echo "<br>";
                                            // }
                                            
                                            ?>
                                            <hr>
                                            <br>
                                            <b>Extract Function</b> <br>
                                            $t=["a"=>"America","b"=>"bangladesh","c"=>"Canada"]; <br>
                                            echo extract($t); <br>
                                            <b>output</b> <br>
                                            <?php
                                            // $a="Apple";
                                            // $t=["a"=>"America","b"=>"bangladesh","c"=>"Canada"];
                                            // // echo extract($t);
                                            // extract($t);
                                            // // echo $t;
                                            // echo "<br>";
                                            // extract($t,EXTR_PREFIX_SAME,"p");
                                            // echo $p_a;
                                            // echo "<br>",$b;
                                            // echo "<br>",$c;
                                            // echo "<br>";
                                            // echo $a;
                                            // $array=["a","b","c","d"];
                                            // extract($array,EXTR_PREFIX_ALL,"i");
                                            // echo $i_0;
                                            // echo "<br>$i_1";
                                            // echo "<br>$i_2";
                                            // echo "<br>";
                                            ?> <br>
                                            <b>Note : Extract </b>
                                            <hr>
                                            <br>
                                            <b>Compact Function</b> <br>
                                            $a="America"; <br>
                                            $b="Bangladesh"; <br>
                                            $c="Canada"; <br>
                                            $array=compact(["a","b","c"]); <br>
                                            print_r($array); <br>
                                            <b>Output</b> <br>
                                            <?php
                                            // $a="America";
                                            // $b="Bangladesh";
                                            // $c="Canada";
                                            // $array=compact(["a","b","c"]);
                                            // print_r($array);
                                            ?>
                                            <hr>
                                            <br>
                                            <b>List Function</b> <br>
                                            $a=["america","bangladesh","india"]; // array asign in function; <br>
                                            list($x,$y,$z)=$a; <br>
                                            echo $x; <br>
                                            echo $y;<br>
                                            echo $z; <br>
                                            <b>Output : </b> <br>
                                            <?php
                                            //    $a=["america","bangladesh","india"]; // array asign in function;
                                            // list($x,$y,$z)=$a;
                                            // echo $x,"<br>";
                                            // echo $y,"<br>";
                                            // echo $z;
                                            ?>
                                            <hr>
                                            <br>
                                            <b>Explode Funciton</b> <br>
                                            // explode functionr kaj holo array alada saparetor. <br>
                                            $a=["bangladesh","india","pakistan","nepal","butan"]; <br>
                                            $d="dhaka comilla newkhali feni"; <br>
                                            $u="dhanmondi;Mohammadpur;motijheel"; <br>
                                            $arr1=explode(",",$a); <br>
                                            $arr2=explode(" ",$d); <br>
                                            $arr3=explode(";",$u); <br>
                                            print_r($arr1); <br>
                                            echo "<br>"; <br>
                                            print_r($arr2); <br>
                                            
                                            print_r($arr3); <br>
                                            <?php
                                            // explode functionr kaj holo array alada saparetor.
                                            // $aq=["bangladesh","india","pakistan","nepal","butan"];
                                            // $da="dhaka comilla newkhali feni";
                                            // $uu="dhanmondi;Mohammadpur;motijheel";
                                            // $iqbal1=explode(",",$aq);
                                            // $iqbal2=explode(" ",$da);
                                            // $iqbal3=explode(";",$uu);
                                            // print_r($iqbal1);
                                            // echo "<br>";
                                            // print_r($iqbal2);
                                            // echo "<br>";
                                            // print_r($iqbal3);
                                            $pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
                                            $pieces = explode(" ", $pizza);
                                            print_r($pieces);
                                            ?>
                                        </p> <br>
                                        <p class="text-center">Topic 2. Function In Php</p>
                                        <p>
                                            <b>Function : </b> <br>
                                            // topic 2  => function <br>
                                            // function myfun($a,$b){ <br>
                                            //  echo $a+$b; <br>
                                            // } <br>
                                            // myfun(5,7); <br>
                                            // function myfun($a,$b){ <br>
                                            //  return $a+$b; <br>
                                            // } <br>
                                            // echo myfun(5,7); <br>
                                            
                                            //  function myfun(...$b){ <br>
                                            //   return($b); <br>
                                            // } <br>
                                            //  print_r(myfun(5,7,4,5)); <br>
                                            // echo "<br>"; <br>
                                            //  function mytext(){ <br>
                                            //      $a=func_get_args(); <br>
                                            //      print_r($a); <br>
                                            //  } <br>
                                            //  mytext(4,5,6,76,7); <br>
                                            // function mytext(){ <br>
                                            // echo func_get_arg(0)+func_get_arg(1); <br>
                                            
                                            // } <br>
                                            // mytext(4,5); <br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading" role="tab" id="headingSeven">
                                    <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSix">
                                        Class 7
                                    </a>
                                    </h4>
                                </div>
                
                                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                    <div class="panel-body">
                                        <h2 class="text-center">7th class</h2>
                                        <p class="text-center">
                                            Below Discription
                                        </p> <hr>
                                        <h4 class="text-center">Topic : Function</h4>
                                        <p class=""> function more than perametter but one argument uses</p>
                                        <b>example : </b>
                                        <p class="">
                                            
                                            function woo($x,$y,$z){ <br>
                                            return $sum=$x+$y+$z; <br>
                                            }  <br>
                                            $number=[2,4,5]; <br>
                                            echo woo(...$number); <br>
                                            <b>Result : 11 </b> <br>
                                        </p>
                                        <hr>
                                        <p class="">
                                            <b>Static Function</b> <br>
                                            
                                            
                                            function woo(){ <br>
                                            $i=1; <br>
                                            
                                            echo $i++; <br>
                                            } <br>
                                            woo(); <br>
                                            
                                            woo(); <br>
                                            result : 0 0 <br>
                                            <br><br><br>
                                            $i=1;
                                            function woo(){ <br>
                                            global $i=1 <br>
                                            
                                            echo $i++; <br>
                                            } <br>
                                            woo(); <br>
                                            woo(); <br>
                                            result : 1 2
                                            <br> <br> <hr> <br>
                                            <b>defanded function</b>
                                            <br><br>
                                            function gari(){ <br>
                                            echo "iqbbal hossain"; <br>
                                            function bus(){ <br>
                                            echo "Iqbal Ahmed Tuhin"; <br>
                                            } <br>
                                            } <br>
                                            gari(); <br>
                                            
                                            bus();
                                            <br><br>
                                            <hr>
                                            <b>Refarence Function</b>
                                            <br>
                                            Small Letter To Capital Letter
                                            
                                            $ary=["a","b","c","d"]; <br>
                                            foreach ($ary as &$u) { <br>
                                            $u=strtoupper($u); <br>
                                            } <br>
                                            print_r($ary); <br>
                                            result // A B C         <br>
                                            <br>
                                            <hr>
                                            <br>
                                            <b>Factorial With out Use loop,Usering Function</b>
                                            <b>This Called Recarsive Function</b>
                                            <br>
                                            function fact($x){ <br>
                                            if($x==0){ <br>
                                            return 1; <br>
                                            }
                                            return $x*fact($x-1); <br>
                                            } <br>
                                            echo fact(5); <br>
                                            <br> <hr>
                                            <br>
                                            <b>Using Recarsive Function and print 1 to 10</b>
                                            <br>
                                            
                                            function rekar($x,$y){ <br>
                                            if($x<=$y){ <br>
                                            echo $x; <br>
                                            
                                            return rekar($x+1,$y); <br>
                                            } <br>
                                            } <br>
                                            rekar(1,10); <br>
                                            result : 1,2,3,4,5,6,7,8,9,10
                                            
                                        </p>
                                    </div>
                                </div>
            </div>
                                <div class="panel panel-primary">
                                    <div class="panel-heading" role="tab" id="headingEight">
                                        <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            Class 8
                                        </a>
                                        </h4>
                                    </div>
                                    <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                        <div class="panel-body">
                                            <h2 class="text-center">8th class</h2>
                                            <p class="text-center">
                                                Below Discription
                                            </p> <hr>
                                            <p class="">
                                                <b>Value To Key</b> <br>
                                                <b>$array=["a"=>"America","b"=>"Bangladesh","c"=>"Canada"];</b> <br>
                                                foreach($array as $key => $value){ <br>
                                                $array=&$res; <br>
                                                $res[$value]=$key; <br>
                                                } <br>
                                                print_r($array); <br>
                                                <b>Result</b> <br>
                                                <?php
                                                $array=["a"=>"America","b"=>"Bangladesh","c"=>"Canada"];
                                                foreach($array as $key => $value){
                                                $array=&$res;
                                                $res[$value]=$key;
                                                }
                                                print_r($array);
                                                ?>
                                                <br>
                                                <b>Another System</b> <br>
                                                $res=&$array; <br>
                                                foreach ($array as $key => $value) { <br>
                                                $res[$value]=$key; <br>
                                                unset($array[$value]); <br>
                                                } <br>
                                                print_r($array); <br>
                                                <b>Result : </b> <br>
                                                <?php
                                                $res=&$array;
                                                foreach ($array as $key => $value) {
                                                $res[$value]=$key;
                                                unset($array[$value]);
                                                }
                                                print_r($array);
                                                ?>
                                            </p>
                                            <hr>
                                            <p class="text-center">Conditional Funcntion</p>
                                            <br>
                                            <b>Conditional Function</b> <br>
                                            if($conFunct){ <br>
                                            function foo(){ <br>
                                            echo "Hi I am foo Function"; <br>
                                            } <br>
                                            } <br>
                                            foo(); // result : Hi I am foo Function <br>
                                            $conFunct=false; <br>
                                            if($conFunct)foo(); // result : nathing <br>
                                            <?php
                                            $conFunct=true;
                                            if($conFunct){
                                            function foo(){
                                            echo "Hi I am foo Function";
                                            }
                                            }
                                            foo(); // result : Hi I am foo Function
                                            $conFunct=false;
                                            if($conFunct)foo(); // result : nathing
                                            ?>
                                            <hr>
                                            <p class="text-center"> <b>Type Hinting </b> Function</p> <br>
                                            type hinting support
                                            before php 7.0 array and object from php 7.0 => class,interface
                                            declare(strict_types=1);//strict_type enable kora hoa ce tai fatal error dhekabe. <br>
                                            <b>Type Hinting Support.Before PHP 7.0 => class,integer,Bool,Integer,self,callable,array,string,integer,floting,bool,interface</b> <br>
                                            declare(strict_types=1);//strict_type enable kora hoa ce tai fatal error dhekabe. <br>
                                            function test(int $a){ <br>
                                            var_dump($a); <br>
                                            } <br>
                                            test(5); <br>
                                            <hr>
                                            <p class="text-center"><b>Varible Function</b></p>
                                            function fooooo($a,$b){ <br>
                                            echo $a+$b; <br>
                                            } <br>
                                            $test123="fooooo"; <br>
                                            $test123(4,6); <br>
                                            <?php
                                            function fooooo($a,$b){
                                            echo $a+$b;
                                            }
                                            $test123="fooooo";
                                            $test123(4,6);
                                            ?>
                                        </div>
                                    </div>
                </div>
            
                                    <div class="panel panel-info">
                                        <div class="panel-heading" role="tab" id="headingNine9">
                                            <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine9" aria-expanded="false" aria-controls="collapseNine9">
                                                Class 9
                                            </a>
                                            </h4>
                                        </div>
                                        <div id="collapseNine9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine9">
                                            <div class="panel-body">
                                                <h2 class="text-center">9th class</h2>
                                                <p class="text-center">Discription Below</p>
                                                <hr>
                                                <h2>Anonimas Function</h2>
                                                <p>Nam Bihin function ke anonimas function ble.otat kono akta function ke verible hisebe use kora ke anonimas function ble.</p>
                                                <p>Example</p>
                                                <p>
                                                    $x=function ($x,$y){ <br>
                                                    return $x+$y; <br>
                                                    }; <br>
                                                    echo $x(3,5); <br>
                                                    $y=$x; <br>
                                                    echo $y(3,6);
                                                </p>
                                                <br>
                                                <p>
                                                    <b>Anonimas Function Users odd even</b> <br>
                                                    $x=function ($y){ <br>
                                                    if($y%2==0){ <br>
                                                    return true; <br>
                                                    } <br>
                                                    return false; <br>
                                                    }; <br>
                                                    echo $x(5)?"even num " : "odd num"; <br>
                                                </p>
                                                <br>
                                                <p>
                                                    <b>Another Uses Anonimas array function</b> <br>
                                                    $melborn=[ <br>
                                                    function (){ <br>
                                                    return "You Got a ba of toffees"; <br>
                                                    }, <br>
                                                    function (){ <br>
                                                    return "You got a toy car"; <br>
                                                    }, <br>
                                                    function (){ <br>
                                                    return "you got some baloons"; <br>
                                                    } <br>
                                                    ]; <br>
                                                    $choice=rand(0,2); <br>
                                                    echo $melborn[$choice](); <br>
                                                </p>
                                                <br>
                                                <p>
                                                    <b>Lumda Function : onno akti functionr argument hisebe use kora hoy</b> <br>
                                                    function cillaw($message){ <br>
                                                    return $message(); <br>
                                                    } <br>
                                                    echo cillaw(function(){ <br>
                                                    return "hi Bang"; <br>
                                                    }); <br>
                                                    $x=function(){ <br>
                                                    return 4+4; <br>
                                                    }; <br>
                                                    echo cillaw($x); <br>
                                                </p>
                                                <br>
                                                <p> <b>clouser
                                                    closer function hocce anonymas function ke represent kore.</b> <br>
                                                    $x="hi"; <br>
                                                    $y = function () { <br>
                                                    global $x; <br>
                                                    echo $x."man"; <br>
                                                    }; <br>
                                                    $y(); <br>
                                                    $name="ami r tumi"; <br>
                                                    $yea=function()use($name){ <br>
                                                    return "Our Family $name"; <br>
                                                    }; <br>
                                                    echo $yea(); <br>
                                                    function myCloser($num){ <br>
                                                    return function($x) use ($num){ <br>
                                                    return $x*$num; <br>
                                                    }; <br>
                                                    } <br>
                                                    $y=myCloser(10); <br>
                                                    for ($i=1; $i <= 10; $i++) {  <br>
                                                    echo $y($i); <br>
                                                    } <br>
                                                </p> <br>
                                                <p>Here doc <<<x <br>
                                                <b>Value show korbe</b> </p> <br>
                                                <p>new doc <<<"x" <br>
                                                <b>Code show korbe</b></p>
                                            </div>
                                        </div>
            </div>
                                        <div class="panel panel-info">
                                            <div class="panel-heading" role="tab" id="headingNine10">
                                                <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine10" aria-expanded="false" aria-controls="collapseNine10">
                                                    Class 10
                                                </a>
                                                </h4>
                                            </div>
                                            <div id="collapseNine10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine10">
                                                <div class="panel-body">
                                                    <h2 class="text-center">10th class</h2>
                                                    <p class="text-center">Discription Below</p>
                                                    <hr>
                                                    <h1 class="text-center">OOP</h1>
                                                    class myClass{ <br>
                                                    public $a; //property <br>
                                                    protected $b="BANGLADESH"; <br>
                                                    private $c; <br>
                                                    public function setVal($a){ //method <br>
                                                    $this->c=$a; <br>
                                                    }
                                                    public function getVal(){ <br>
                                                    return $this->c; <br>
                                                    }
                                                    private function getVal(){ <br>
                                                    return $this->c; <br>
                                                    }
                                                    public function __destruct(){ <br>
                                                    echo "bye bye"; <br>
                                                    } <br>
                                                    public function __construct(){ <br>
                                                    return "welcome To oop <br>"; <br>
                                                    } <br>
                                                    }
                                                    class childClass extends myClass{ <br>
                                                    public function test(){ <br>
                                                    return $this->b; <br>
                                                    } <br>
                                                    } <br>
                                                    $obj=new myClass();//object handler <br>
                                                    $obj->setVal("<br> Hellow"); <br>
                                                    echo $obj->getVal(); <br>
                                                    $obj1=new childClass(); <br>
                                                    echo $obj1->test(); <br>
                                                    echo $obj1->text(); <br>
                                                </div>
                                            </div>
            </div>
                                            <div class="panel panel-danger">
                                                <div class="panel-heading" role="tab" id="headingNine">
                                                    <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                        Function
                                                    </a>
                                                    </h4>
                                                </div>
                                                
                                                <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                                                    <div class="panel-body">
                                                        <h2 class="text-center">Function</h2>
                                                        <p class="text-center">
                                                            1. User-​defined functions <br>
                                                            2. Function arguments <br>
                                                            3. Returning values <br>
                                                            4. Variable functions <br>
                                                            5. Internal (built-​in) functions <br>
                                                            6. Anonymous functions <br>
                                                        </p> <hr>
                                                        <p>
                                                            <b>User-Define Functions</b>
                                                        </p>
                                                        <b>Conditional Function</b>
                                                        Conditional Function means first of all we need a varible than these variable call true or false.like( <q>$exp=true</q> ).than If condition than call the function.below the example :
                                                        $iqbal=true; <br>
                                                        if($iqbal){
                                                        function foo(){
                                                        echo "hi Foo";
                                                        }
                                                        }
                                                        foo()//result : hi Foo.
                                                        or
                                                        $iqbal=false;
                                                        if($iqbal)foo();
                                                        result : nathing;
                                                        <hr>
                                                        <b>Function Within Function</b>
                                                        Function within Function worked call 1st function.than work 2nd function. <br>
                                                        function foo() <br>
                                                        { <br>
                                                        function bar() <br>
                                                        { <br>
                                                        echo "I don't exist until foo() is called.\n"; <br>
                                                        } <br>
                                                        } <br>
                                                        /* We can't call bar() yet
                                                        since it doesn't exist. */ <br>
                                                        foo(); <br>
                                                        /* Now we can call bar(),
                                                        foo()'s processing has
                                                        made it accessible. */ <br>
                                                        bar();<br>
                                                        <hr>
                                                        <p class="text-center"><b>Function arguments</b></p>
                                                        <b>Passing arrays to functions</b>
                                                        <br>
                                                        function takes_array($input) <br>
                                                        { <br>
                                                        echo "$input[0] + $input[1] = ", $input[0]+$input[1]; <br>
                                                        } <br>
                                                        <b>Passing function parameters by reference</b> <br>
                                                        function add_some_extra(&$string) <br>
                                                        { <br>
                                                        $string .= 'and something extra.'; <br>
                                                        } <br>
                                                        $str = 'This is a string, '; <br>
                                                        add_some_extra($str); <br>
                                                        echo $str;    // outputs 'This is a string, and something extra.' <br> <br>
                                                        <b>Using non-scalar types as default values</b> <br>
                                                        function makecoffee($types = array("cappuccino"), $coffeeMaker = NULL) <br>
                                                        { <br>
                                                        $device = is_null($coffeeMaker) ? "hands" : $coffeeMaker; <br>
                                                        return "Making a cup of ".join(", ", $types)." with $device.\n"; <br>
                                                        } <br>
                                                        echo makecoffee(); <br>
                                                        echo makecoffee(array("cappuccino", "lavazza"), "teapot"); <br><br>
                                                        <br>
                                                        <p class="text-center">Anonimas Array Function</p>
                                                        <b>Example : </b> <br>
                                                        $anaryFunction=[ <br>
                                                        function(){ <br>
                                                        for($i=1;$i<=10;$i++){ <br>
                                                        if($i%2==0){<br>
                                                        echo "even num : ",$i; <br>
                                                        } <br>
                                                        else{
                                                        echo "odd num : ",$i; <br>
                                                        } <br>
                                                        echo "\n"; <br>
                                                        } <br>
                                                        
                                                        }, <br>
                                                        function(){ <br>
                                                        return "Hi I am anonimas function"; <br>
                                                        }, <br>
                                                        function(){ <br>
                                                        return 4+7; <br>
                                                        } <br>
                                                        ]; <br>
                                                        $choice=rand(0,2); <br>
                                                        echo $anaryFunction[$choice](); <br>
                                                        <br>
                                                        <p class="text-center"><b>lamda function</b></p>
                                                        <p>
                                                            
                                                            function cillaw($message){ <br>
                                                            return $message(); <br>
                                                            }  <br>
                                                            echo cillaw(function(){ <br>
                                                            return "hi Bang";  <br>
                                                            });
                                                            $x=function(){  <br>
                                                            return 4+4;  <br>
                                                            }; <br>
                                                            echo cillaw($x);  <br>
                                                            function hi($y){ <br>
                                                            for($i=1;$i<=$y;$i++){ <br>
                                                            if($i%2==0){ <br>
                                                            echo "Even Num : ",$i; <br>
                                                            }else{ <br>
                                                            echo "Odd Num : ",$i; <br>
                                                            } <br>
                                                            echo "\n"; <br>
                                                            } <br>
                                                            return $y(); <br>
                                                            }
                                                            echo hi(function(){ <br>
                                                            return hi(10); <br>
                                                            }); <br>
                                                            echo preg_replace_callback('~-([a-z])~', function ($match) { <br>
                                                            return strtoupper($match[1]); <br>
                                                            }, 'hello-world-hi  lds  ds'); <br>
                                                            outputs helloWorld <br>
                                                        </p>
                                                    </div>
                                                </div>
            </div>
                                                <div class="panel panel-primary">
                                                    <div class="panel-heading" role="tab" id="heading11">
                                                        <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                                            Class 11
                                                        </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11">
                                                        <div class="panel-body">
                                                            <h2 class="text-center">OOP LOGIN SYSTEM</h2><hr>
                                                            <p class="text-center">Below The Code</p>
                                                            
                                                            
                                                            class Member{ <br>
                                                            protected $logined=false; <br>
                                                            protected $role; <br>
                                                            protected $users=[ <br>
                                                            ["username"=>"iqbal  hossain","password"=>"pass","role"=>"super admin"],<br>
                                                            ["username"=>"iqbal ahmed","password"=>"pas","role"=>"admin"]
                                                            ]; <br>
                                                            protected function Login($user,$pass){ <br>
                                                            foreach($this->users as $user_info){ <br>
                                                            extract($user_info); <br>
                                                            if($username==$user && $password==$pass){ <br>
                                                            $this->logined=true; <br>
                                                            $this->role=$role; <br>
                                                            } <br>
                                                            
                                                            } <br>
                                                            } <br>
                                                            } <br>
                                                            class Role extends Member{ <br>
                                                            public function __construct($user,$pass){ <br>
                                                            $this->Login($user,$pass); <br>
                                                            if($this->logined){ <br>
                                                            if($this->role=="admin"){ <br>
                                                            echo "you are a admin"; <br>
                                                            } <br>
                                                            if($this->role=="super admin"){ <br>
                                                            echo "you are  a super admin"; <br>
                                                            } <br>
                                                            }else{ <br>
                                                            echo "please login first"; <br>
                                                            } <br>
                                                            } <br>
                                                            } <br>
                                                            $obj=new Role("iqbal hossain","pass"); <br>
                                                            
                                                            
                                                        </div>
                                                    </div>
            </div>
                                                    <div class="panel panel-info">
                                                        <div class="panel-heading" role="tab" id="heading12">
                                                            <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                                                Class 12
                                                            </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading12">
                                                            <div class="panel-body">
                                                                <h2 class="text-center">Database Connect System</h2><hr>
                                                                <p class="text-center">Below The Code</p>
                                                                
                                                                class Database{ <br>
                                                                protected $conn;<br>
                                                                public function __construct($host,$user,$pass,$dbName){<br>
                                                                $this->conn=new mySqli($host,$user,$pass,$dbName);<br>
                                                                if($this->conn->connect_errno){<br>
                                                                die("connection Fail".$this->conn->connect_error);<br>
                                                                }<br>
                                                                }<br>
                                                                public function fetchData($table,$cols){<br>
                                                                $sql="SELECT $cols FROM $table";<br>
                                                                $result=$this->conn->query($sql);<br>
                                                                if($result->num_rows>0){<br>
                                                                return $result->fetch_all(MYSQLI_ASSOC);<br>
                                                                }else{<br>
                                                                return false;<br>
                                                                }<br>
                                                                
                                                                }<br>
                                                                public function getByCondition($table,$cols,$condition){ <br>
                                                                $sql="SELECT $cols FROM $table WHERE $condition"; <br>
                                                                $result=$this->conn->query($sql); <br>
                                                                if($result->num_rows>0){<br>
                                                                return $result->fetch_all(MYSQLI_ASSOC); <br>
                                                                }<br>
                                                                return false; <br>
                                                                }<br>
                                                                }<br>
                                                                $obj=new Database("localhost","root","","first_database"); <br>
                                                                echo "";<br>
                                                                print_r($obj->fetchData("students","name,mobile")); <br>
                                                                echo "<br>"; <br>
                                                                echo ""; <br>
                                                                print_r($obj->getByCondition("students","*","name='iqbal ahmed'")); <br>
                                                                
                                                            </div>
                                                        </div>
            </div>
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading" role="tab" id="heading13">
                                                                <h4 class="panel-title">
                                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                                                    Class 13
                                                                </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading13">
                                                                <div class="panel-body">
                                                                    <h2 class="text-center">Daynamic Table Create</h2><hr>
                                                                    <p class="text-center">Below The Code</p>
                                                                    
                                                                </div>
                                                            </div>
            </div>
                                                            <div class="panel panel-info">
                                                                <div class="panel-heading" role="tab" id="heading15">
                                                                    <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                                                        Class 15
                                                                    </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading15">
                                                                    <div class="panel-body">
                                                                        <h2 class="text-center">PHP in three kind of class(Normal class,Abastract Class,Final Class)</h2>
                                                                        <p class="text-center">Below The Code and Discription</p>
                                                                        <hr>
                                                                        <h3 class="text-center">Abstruct Class</h3>
                                                                        <p>
                                                                            Note 1.Abstract class start hoy abstract keyword dia. <br>
                                                                            Note 2.Abstract classr kono object hoy na. <br>
                                                                            Note 3.Abstract Class Use kora hoy System design korar jonno. <br>
                                                                            Note 4:Child Class dia object make kora hoy. <br>
                                                                        </p>
                                                                        <b>Example : </b> <br>
                                                                        <p>
                                                                            abstract class abas{ <br>
                                                                            public function test(){ <br>
                                                                            echo "hellow non-abstract method"; <br>
                                                                            }
                                                                        </p>
                                                                        <hr>
                                                                        <h2 class="text-center">Abstract Method</h2>
                                                                        <p class="text-center">Below Description</p>
                                                                        <p>
                                                                            Note 1.Two kind of Abstract class one of abastract class and ather of non abstract class <br>
                                                                            Note 2.Abstract method ke child method a override korte hoy.
                                                                        </p>
                                                                        <p>
                                                                            $obj=new abas;//Fatal error: Abstract function abas::getName() cannot contain body in C:\xampp\htdocs\Sir_course\15th_class\home.php on line 7 <br>
                                                                            class child extends abas{ <br>
                                                                            public function getName($name){ <br>
                                                                            return $name; <br>
                                                                            } <br>
                                                                        </p>
                                                                        <hr>
                                                                        <h2 class="text-center">Final Class</h2>
                                                                        <p class="text-center">Below Discription</p> <br>
                                                                        <p>
                                                                            Note 1.child class kora jay na .
                                                                            <br>
                                                                            Note 2.Object Kora Jay.
                                                                        </p>
                                                                        <p class="text-center">Below The Code And Example</p>
                                                                        class test{ <br>
                                                                        public final function sayHello(){ <br>
                                                                        echo "good good";<br>
                                                                        } <br>
                                                                        } <br>
                                                                        class myTest extends test{<br>
                                                                        public function sayHello(){ <br>
                                                                        echo "Hello Banglades";<br>
                                                                        } <br>
                                                                        } <br>
                                                                        class myTest extends test{ <br>
                                                                        public function Hello(){ <br>
                                                                        return $this->sayHello("Hello Banglades"); <br>
                                                                        } <br>
                                                                        } <br>
                                                                        result : <br>
                                                                        Fatal error: Class myTest may not inherit from final class (test) in C:\xampp\htdocs\Sir_course\15th_class\home.php on line 27
                                                                        $obj=new myTest(); <br>
                                                                        echo $obj->Hello(); <br>
                                                                        <hr>
                                                                        <h2 class="text-center">Static KeyWord</h2>
                                                                        <p class="text-center">Below Discription</p>
                                                                        <p>Object ছাড়া সরাসরি class এর Method এবং Property গুলোকে access করার জন্য সেই method এবং property গুলোকে কে static ঘোষণা করতে হয়। আর static ঘোষণা করার জন্য Method এবং Property নামের পূর্বে static কীওয়ার্ড ব্যবহার করতে হবে। static keyword টি কে access modifier ও বলা যায়। </p>
                                                                        <h3 class="text-center">Late Static Binding</h3>
                                                                          <p>PHP তে Static Method এবং Property গুলোকে class এর ভিতরে কল করার জন্য $this pseudo-variable এর পরিবর্তে class এর নাম অথবা “self” keyword এর সাথে (::) scope resolution operator দিয়ে ব্যবহার করা হয় , তখন যেই class এ “self” keyword ব্যবহার করা হয়েছে, “self” keyword শুধু ঐ ক্লাসকেই নির্দিষ্ট করে নেয়। আর তাতে Parent Class এর static Method এবং Property গুলোকে child class এ inherit হয়না। আর সেই জন্য PHP 5.3 থেকে Parent Class এর Static Method এবং Property গুলোকে কে child class এ inherit করার জন্য static Method এবং Property কল করার সময় “self” keyword এর পরিবর্তে “static” keyword ব্যবহার প্রয়োগ করা হয়েছে, আর এটাকেই PHP 5.3 থেকে Late Static Binding বলা হয়</p>
                                                                           <p>
                                                                            class testStatic{ <br>
                                                                            public static $count=0; <br>
                                                                            static public function counter(){ <br>
                                                                            echo "Its static counter"; <br>
                                                                            return self :: $count++; <br>
                                                                            } <br>
                                                                            public function singleCount($name){ <br>
                                                                            return $this->counter(); <br>
                                                                            } <br>
                                                                            
                                                                            } <br>
                                                                            $obj=new testStatic(); <br>
                                                                            $obj->counter(); <br>
                                                                            echo $obj->singleCount(); <br>
                                                                            echo testStatic :: $count=5; <br>
                                                                            echo "<br>"; <br>
                                                                            echo testStatic :: $count++; <br>
                                                                            echo testStatic :: $count; <br>
                                                                            echo testStatic :: counter(); <br>
                                                                            echo testStatic :: counter(); <br>
                                                                            proffational work of static <br>
                                                                            class Course{ <br>
                                                                            protected static $courseName="PHP profettional"; <br>
                                                                            public static function getCourse(){ <br>
                                                                            return static::$courseName; <br>
                                                                            } <br>
                                                                            } <br>
                                                                            class child extends Course{ <br>
                                                                            protected static $courseName="Laravel"; <br>
                                                                            } <br>
                                                                            echo child :: getCourse(); <br>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
<div class="panel panel-info">
                                                                <div class="panel-heading" role="tab" id="headingc">
                                                                    <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsec" aria-expanded="false" aria-controls="collapsec">
                                                                        Carrer text
                                                                    </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapsec" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingc">
                                                                    <div class="panel-body">
                                                                        <h2 class="text-center">My Carer</h2>
                                                                        
                                                                        <hr>
                                                                        <p>
A quick learner who can absorb new ideas and can communicate clearly and effectively.Currently looking for a opportunity to join a dynamic, ambitious, growing company and forge a career as a first class website designer & web Developer .I want to study in Germany form my childhood.I want to know about Germany culture and people activities.I need to Scholarship very much for my learn Germany and Germany culture.Germany is  a developing country in science and technology.I want to work for develop for Germany.It will be great opportunity for me if i got this scholarship and will helps  me to develop myself in my career with bright future . Already i know about Germany and German people and their activities.They are too much helpful to international students.
I am an energetic and enthusiastic person who enjoys a challenge and achieving personal goals. My present career aim is to work within coding because I enjoy working with computer software, I enjoy the environment and I find the work interesting and satisfying. The opportunity to learn new skills and work with new technologies is particularly attractive to me.So this scholarship is needed for me very much to my career.I love Code and programming very much.
 

</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                <div class="panel panel-info">
                                                                <div class="panel-heading" role="tab" id="heading16">
                                                                    <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                                                        Class 16
                                                                    </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading16">
                                                                    <div class="panel-body">
                                                                        <h2 class="text-center">interface)</h2>
                                                                        <p class="text-center">Below The Code and Discription</p>
                                                                        <p class="">
                                                                        <q><b>We Are Doing Object Orianted Three way .1.Abstract Class 2.Interface Class. 3.Trait Class</b></q> <br>
                                                                            <b>Note 1. : </b>PHP ke Single Interface Language bola hoy. <br>
                                                                            <b>Note 2. : </b>Interface a Proparty hoy na. <br>
                                                                        <b>Note 3. : </b>Interface a Sob Method Hoy. <br>
                                                                        <b>Note 4. : </b> Method Gula Abstract Method hoy. <br>
                                                                        <b>Note 5. : </b> Interface kora hoy System Designer Jonno. <br>
                                                                        <b>Note 6 :Interface Onno Class upor Implement hoy.</b> <br>
                                                                        <b>Note 7 :Interfacce theke Interface Extends kora hoy.</b> <br>
                                                                        <b>Note 8 :Interfacer Sob Gula Method Call korte hoy.Na hole Fatal Error Dhakay.</b>
                                                                        <b>Codeing Example : </b>
                                                                        <br>
                                                                        interface myInterface1{ <br>
    public function interf1($x); <br>
    public function interf2($a,$b); <br>
} <br>
interface myInterface2{ <br>
    public function test($p); <br>
} <br>
interface myInterface3 extends myInterface2{ <br>
     
} <br>
class myClass implements myInterface1,myInterface2{ <br>
    public function interf1($x){ <br>
        $x=4*$x; <br>
        return $x; <br>
    } <br>
    public function interf2($a,$b){ <br>
        return $a+$b; <br>
    } <br>
    public function test($p){ <br>
        $p=5+66*$p; <br>
        return $p; <br>
    } <br>
} <br>
$obj=new myClass(); <br>
echo $obj->interf1(8); <br>

echo $obj->interf2(3,5); <br>

echo $obj->test(2); <br>
                                                                        </p>
                                                                        <hr>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="panel panel-info">
                                                                <div class="panel-heading" role="tab" id="headingin">
                                                                    <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsein" aria-expanded="false" aria-controls="collapse16">
                                                                        Inventory Managment system
                                                                    </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapsein" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingin">
                                                                    <div class="panel-body">
                                                                        <h2 class="text-center">Features</h2>
                                                                        <p>
                                                                            Login/Logout <br>
Forgot Password <br>
Registration <br>
Change Password <br>
Dashboard <br>
Stock Items <br>
Suppliers <br>
Purchases <br>
Customers <br>
Sales <br>
Outstandings <br>
Payments <br>
Master/Detail (Preview Row, Overlay) <br>
Dynamic Details Input <br>
Export Data (Printer Frien dly, Excel, Word, CSV, XML, PDF, HTML, Email) <br>
Quick Search <br>
Advanced Search <br>
Role Based Access Level (RBAC) <br>
Users Management <br>
Auto-Numeric Format <br>
Mobile Responsive Design <br>
Twitter Bootstrap 3 <br>
Multiple Themes <br>
Multiple Font Type and Size <br>
Table Width Style (Scroll, Auto,  100%) <br>
Multiple Languages (English, Indonesian) <br>
Supports RTL (Right-To-Left Language Orientation) <br>
Password Strength Meter <br>
Password Strong Policy <br>
Smart Help System <br>
Alertify Javascript Notification/Dialog System <br>
PHPMaker Project-based System <br>
Menu Positions (Left or Top) <br>
Easy to Learn and Maintained <br>
Sticky Top Menu <br>
Sticky Footer <br>
                                                                        </p>
                                                                    </div>
     </div>
                                                       
                                                        </div> 
                                                        <div class="panel panel-primary">
                                                                <div class="panel-heading" role="tab" id="heading17">
                                                                    <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                                                        Class 17
                                                                    </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading17">
                                                                    <div class="panel-body">
                                                                        <h2 class="text-center">Overloading(Proparty Overloading,Method Overloading)</h2>
                                                                        <p class="text-center">Magic Method(__set,__unset,__call,__isset,__get)</p>
                                                                        <p>
                                                                           
                                                                            obarloading  <br>
overloading ai akta classr akta part <br>
method overloading <br>
property overloading <br>
example <br>
class over{ <br>
    public $a="ami"; <br>
} <br>
$obj=new over;  <br>
echo $obj-b;//property overloading. <br>
class test{ <br>
    public $a="Aaaaam"; <br>
    public $number=[]; <br>
    public function sayHello(){ <br>
        echo "i am say hello method"; <br>
        echo $this->b; <br>
    } <br>
    public function __set($name,$value){ <br>
        echo "you create property $name and its value is $value"; <br>
        $this->number[$name]=$value; <br>
    } <br>
    public function __get($name){ <br>
        print_r($this->number); <br>
        return $this->number[$name]; <br>
        return "$name=".$this->number[$name]; <br>
    }
    public function __isset($name){ <br>
        if(isset($this->number[$name])){ <br>
            return true; <br>
        }
        return false; <br>
    }
    public function getAll(){ <br>
        print_r($this->number); <br>
    }
public function __unset($name){ <br>
    unset($this->number[$name]); <br>
} <br>
    
} <br>
$obj=new test; <br>
 $obj->b="(hi i am value)"; <br>
$obj->sayHello(); <br>
$obj->num1=100; <br>
$obj->num2=500; <br>
echo $obj->num1; <br>
 $obj->getAll(); <br>
echo "<br>"; <br>
unset($obj->num1); <br>

echo isset($obj->num1)?"yes" : "no"; <br>
unknown property call korle take property overloading bole <br>

now start method overloding <br>
class test{ <br>
    public $sum; <br>
    public function __call($method,$parameters){ <br>
        echo "method : ".$method; <br>
        echo "<br>"; <br>
        echo "<pre>"; <br>
        print_r($parameters); <br>
        echo $method[1]; <br>
        
        foreach($parameters as $val){ <br>
            $this->sum+=$val; <br>
        } <br>
        echo $this->sum; <br>
    } <br>
} <br>
$obj=new test; <br>
$obj->iqbal("a","b","c","d"); <br>
echo "<br>"; <br>
$obj->sum(5,7,9); <br>
class test{ <br>
    public static $sum; <br>
    public static function __callStatic($method,$parameters){ <br>
        echo "method : ".$method; <br>
        echo "<br>"; <br>
        echo "<pre>"; <br>
        print_r($parameters); <br>
        echo $method[1]; <br>
        
        foreach($parameters as $val){ <br>
            self::$sum+=$val; <br>
        } <br>
        echo self :: $sum; <br>
    } <br>
} <br>
test::sum(5,7,9); <br>
$obj->iqbal("a","b","c","d"); <br>
echo "<br>"; <br>
$obj->sum(5,7,9); <br>
      
                                                                        </p>
                                                                    </div>
                                                            </div>
            </div>
                                                    </header>
                                                    <footer>
                                                        
                                                    </footer>
                                                    <script src="assets/js/jquery-3.3.1.min.js"></script>
                                                    <script src="assets/js/main.js"></script>
                                                    <script src="assets/js/bootstrap.min.js"></script>
                                                </body>
                                            </html>