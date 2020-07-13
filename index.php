<?php 
 $list=array();
 $month = 5;
 $year = 2020;

 for($d=1; $d<=31; $d++) {
     $time=mktime(12,0,0,$month,$d,$year);
    //  if (date('m',$time)==$month)

        $list[]=date('d.m.Y',$time);
 }
//  echo "<pre>";
//     print_r($list);
//  "</pre>";
//  echo $list[1]
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="all">
    <div class="container">
        <div class="week">Mon</div>
        <div class="week">Tue</div>
        <div class="week">Wed</div>
        <div class="week">Thu</div>
        <div class="week">Fri</div>
        <div class="week">Sat</div>
        <div class="week">Sun</div>
    </div>
    <div class="container">
        <div class="days"></div> 
        <div class="days"></div> 
        <div class="days"></div> 
        <div class="days"></div> 
        <?php foreach($list as $day) { ?>
            <div class="days <?php 
                if(date('w',strtotime($day))==0 || date('w',strtotime($day))==6) {
                    echo 'colored';
                }
             ?>">
                <p><?php echo substr($day,0,6)?></p>
            </div>
        <?php } ?>

    </div>
    </div>
   

</body>
</html>