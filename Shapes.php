<html>
<head>
    <title>Shapes</title>
    <style>
        body{
            line-height: 5px;
        }
    </style>
 </head>
<body>
   <?php

       $obj	= new Shapes();
       $obj->drawTriangle1(10, 0);
       $obj->drawTriangle2(10, 0);
       $obj->drawTriangle3(10, 0);
       $obj->drawTriangle4(10, 0);
       $obj->drawEquilateralTriangle(10, 0);
       $obj->drawRectangle(0, 0, 10, 20);
       $obj->drawRhombus(20, 0);
       $obj->drawHexagon(6, 0);
       $obj->drawStar(14, 10, 3);
       $obj->drawHut(60);
       $obj->drawCircle(50);
       $obj->drawIncentricTriangle(50);
       $obj->drawExponentialGraph(2);
       $obj->drawNegativeExponentialGraph(2);
       /*$obj->drawSineWave();*/

       class Shapes
       {
           public function drawTriangle1($length, $start = 0)
           {
               echo "<pre>";
               for($x = $start; $x < $length; $x++){
                   for($y = $start; $y < $length; $y++){
                       if($y == $start || $x == $length-1 || $x == $y){
                           echo "*";
                       } else{
                           echo " ";
                       }
                   }
                   echo "<br/>";
               }
               echo "</pre>";
           }

           public function drawTriangle2($length, $start = 0)
           {
               echo "<pre>";
               for($x = $start; $x < $length; $x++){
                   for($y = $length - 1; $y >= $start; $y--){
                       if($x == $length - 1 || $y == $start || $x == $y){
                           echo "*";
                       } else{
                           echo " ";
                       }
                   }
                   echo "<br/>";
               }
               echo "</pre>";
           }

           public function drawTriangle3($length, $start = 0)
           {
               echo "<pre>";
               for($x = $length - 1; $x >= $start; $x--){
                   for($y = $start; $y < $length; $y++){
                       if($x == $length - 1 || $y == $start || $x == $y){
                           echo "*";
                       } else{
                           echo " ";
                       }
                   }
                   echo "<br/>";
               }
               echo "</pre>";
           }

           public function drawTriangle4($length, $start = 0)
           {
               echo "<pre>";
               for($x = $start; $x < $length; $x++){
                   for($y = $start; $y < $length; $y++){
                       if($x == $start || $y == $length-1 || $x == $y){
                           echo "*";
                       } else{
                           echo " ";
                       }
                   }
                   echo "<br/>";
               }
               echo "</pre>";
           }

           public function drawEquilateralTriangle($length, $start = 0)
           {
                echo "<pre>";
                if($length % 2 != 0){
                    $length++;
                }

                $limit  = $length / 2;

                for($i = $start; $i <= $limit; $i++){
                    for($j = $start; $j <= $length; $j++){
                        if($i == $limit || ($i + $j == $limit) || ($j - $i == $limit)){
                            echo "*";
                        } else{
                            echo " ";
                        }
                    }
                    echo "<br/>";
                }
                echo "</pre>";
           }

           public function drawRectangle($x_start, $y_start, $dim1, $dim2)
           {
               echo "<pre>";
               for($i = $x_start; $i < $dim1; $i++){
                   for($j = $y_start; $j < $dim2; $j++){
                       if($i == $x_start || $i == $dim1 - 1 || $j == $y_start || $j == $dim2 - 1){
                           echo "*";
                       } else{
                           echo " ";
                       }
                   }
                   echo "<br/>";
               }
               echo "</pre>";
           }

           public static function drawRhombus($length, $start = 0)
           {
               echo "<pre>";
               if($length % 2 != 0){
                   $length++;
               }

               $limit   = $length / 2;

               for($i = $start; $i <= $length; $i++){
                   for($j = $start; $j <= $length; $j++){
                        if(($i + $j == $limit)
                        || (abs($i - $j) == $limit)){
                            echo "*";
                        } else if($i > $limit && $j > $limit && ($i - $limit + $j == $length)){
                            echo "*";
                        } else{
                            echo " ";
                        }
                   }
                   echo "<br/>";
               }
               echo "</pre>";
           }

           public function drawHexagon($length, $start = 0)
           {
               echo "<pre>";
               $x_limit = ($length * 2) + ($length - 2);
               $y_limit = ($length * 2) - 1;

               $diff    = abs($x_limit - $y_limit);
               for($i = $start; $i < $y_limit; $i++){
                   for($j = $start; $j < $x_limit; $j++){

                        if(($i + $j == $diff || $i - $j == $diff))
                        {
                            echo "*";
                        }
                        elseif(($i == $start && $j > $diff && $j < $y_limit)
                              || ($i == $y_limit - 1 && $j > $diff && $j < $y_limit)){
                            echo "*";
                        }
                        elseif(($j - $i == ($y_limit - 1))
                              || ($i - $j == $x_limit - 1)){
                            echo "*";
                        }
                        elseif($i + $j - $diff == $x_limit - 1){
                            echo "*";
                        }
                        else{
                            echo " ";
                        }
                   }
                   echo "<br/>";
               }
               echo "</pre>";
           }

           public function drawStar($j_max, $i_max, $intersection_length)
           {
               echo "<pre>";
               $k = -1;
               for($i = 0; $i <= $i_max; $i++){
                   if($i >= $intersection_length){
                       $k++;
                   }

                   for($j = 0; $j <= $j_max; $j++){

                        if($i == $intersection_length || $i == ($i_max - $intersection_length))
                        {
                            echo "*";
                        }
                        elseif($j < $j_max / 2 && ($i + $j == $i_max - $intersection_length))
                        {
                            echo "*";
                        }
                        elseif($j >= $j_max / 2 && ($j - $i == $j_max / 2))
                        {
                            echo "*";
                        }
                        elseif($i + $j - $j_max/2 == $i_max)
                        {
                            echo "*";
                        }
                        elseif($k >= 0 && $k == $j)
                        {
                            echo "*";
                        }
                        else{
                            echo " ";
                        }
                   }
                   echo "<br/>";
               }
               echo "</pre>";
           }

           public function drawHut($length)
           {
                echo "<pre>";
                if($length < 40){
                    $length = 50;
                }
                $mod    = $length % 20;
                $length = $mod > 10 ? $length - $mod + 20 : $length - $mod;

                $j_100 = $length;
                $j_75  = 0.75 * $length;
                $j_50  = 0.50 * $length;
                $j_25  = 0.25 * $length;

                // for inner rectangle -> gate
                $factor     = 0.1 * $length;

                // for mid point of inner 4 squares
                if($j_75 % 2 == 0){
                    $diff = 0;
                } else{
                    $diff = 5;
                }
                $mid   = $j_50 + (($j_75 - $j_50 - $diff) / 2);

                for($i = 0; $i <= $j_100 - $factor; $i++){
                    $k  = -1;
                    for($j = 0; $j <= $j_100; $j++){

                        // for right side of parallelogram
                        if($j > $j_75){
                            $k++;
                        }

                        // triangle
                        if(($i < $j_50 && $j < $j_50) && ($i == $j_25 || $i + $j == $j_25 || $j - $i == $j_25))
                        {
                                echo "*";
                        }
                        // base vertical lines
                        elseif(($i >= $j_25 && $i < $j_100 - $factor) && ($j == 0  || $j == $j_50 || $j == $j_100)){
                                echo "*";
                        }
                        // inner base vertical lines
                        elseif(($i >= $j_50 + $factor && $i < $j_100 - $factor) && ($j == 0 || $j == $j_25 - $factor || $j == $j_25 + $factor ||
                                (($j > $j_25 - $factor && $j < $j_25 + $factor) && ($i == $j_50 + $factor)))){
                            echo "*";
                        }
                        // four squares
                        elseif(($i >= $j_50 && $i <= $j_75 - $diff) && ($j == $j_50 + $factor || $j == $j_75 || $j == $j_100 - $factor ||
                                (($j > $j_50 + $factor && $j < $j_100 - $factor) && ($i == $mid || $i == $j_50 || $i == $j_75 - $diff)))){
                            echo "*";
                        }
                        // base horizontal lines
                        elseif($i == $j_100 - $factor || $i == $j_25 || ($i >= $j_25 && $j == $j_100)){
                            echo "*";
                        }
                        // top side of parallelogram
                        elseif(($i == 0 && $j > $j_25 && $j <= $j_75))
                        {
                            echo "*";
                        }
                        // right side of parallelogram
                        elseif($i == $k)
                        {
                            echo "*";
                        }
                        else{
                            echo " ";
                        }
                    }
                    echo "<br/>";
                }
                echo "</pre>";
           }

           public function drawCircle($r)
           {
               echo "<pre>";
               $negative_point = $r - 2*$r;
               $x              = $negative_point;
               $y              = $r;

               $r_square   = $r * $r;

               for($i = $x; $i <= $r; $i++){
                   for($j = $r; $j >= $negative_point; $j--){
                       $x_square   = $i * $i;
                       $y_square   = $j * $j;

                       if($x_square + $y_square == $r_square){
                           echo "*";
                       } else{
                           echo " ";
                       }
                   }
                   echo "<br/>";
               }
               echo "</pre>";
           }

           public function drawIncentricTriangle($r)
           {
               echo "<pre>";
               $negative_point = $r - 2*$r;
               $x              = $negative_point;

               $r_square   = $r * $r;

               for($i = $x; $i <= $r; $i++){
                   for($j = $r; $j >= $negative_point; $j--){
                       $x_square   = $i * $i;
                       $y_square   = $j * $j;

                       // circle
                       if($x_square + $y_square == $r_square)
                       {
                           echo "*";
                       }
                       // triangle left side
                       elseif($j >= 0 && $i <= 0 && abs($i) + abs($j) == $r)
                       {
                           echo "*";
                       }
                       // triangle right side
                       elseif($j <= 0 && $i <= 0 && abs($i) + abs($j) == $r)
                       {
                           echo "*";
                       }
                       // triangle base side
                       elseif($i == 0)
                       {
                           echo "*";
                       }
                       else
                       {
                           echo " ";
                       }
                   }
                   echo "<br/>";
               }
               echo "</pre>";
           }

           public function drawExponentialGraph($a)
           {
               echo "<pre>";
               // y = a to power x
               for($y = 50; $y >= -50 ; $y = $y - 0.5){
                   for($x = -50; $x <= 50 ; $x = $x + 0.5){
                       $value = pow($a, $x);
                       if($value == $y){
                           echo "*";
                       } else{
                           echo " ";
                       }
                   }
                   echo "<br/>";
               }
               echo "</pre>";
           }

           public function drawNegativeExponentialGraph($a)
           {
               echo "<pre>";
               // y = a to power x
               for($y = 50; $y >= -50 ; $y = $y - 0.5){
                   for($x = -50; $x <= 50 ; $x = $x + 0.5){
                       $value = pow($a, -$x);
                       if($value == $y){
                           echo "*";
                       } else{
                           echo " ";
                       }
                   }
                   echo "<br/>";
               }
               echo "</pre>";
           }

           public function drawSineWave()
           {
               for($y = 1.0; $y <= -1.0; $y= $y - 0.5){
                   for ($x = 0; $x <= 360; $x++){
                   echo(sin($x));
                       $sine_val = round(sin(deg2rad($x)), 1);

                       echo $sine_val;
                       if($y == $sine_val){
                           echo ".";
                       } else{
                           echo " ";
                       }
                   }
                   echo "<br/>";
               }
           }
       }
   ?>
</body>
</html>