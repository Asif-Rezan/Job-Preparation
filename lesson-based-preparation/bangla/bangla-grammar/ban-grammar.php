<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>বাংলা ভাষা</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="ban-grammar.css">

</head>

<body class="sub-body">

  <div class="container ">



    <!--Menu bar shart-->

    <?php
    include "../../../navbar.php"
    ?>

    <!--menu bar end-->


    <p class="position text-black rounded-pill sub-title ">বাংলা ভাষা</p><hr class="hrr  ">

    <div class='row text-center justify-content-center'>
    <?php

 $array =array(
  "প্রয়োগ-অপপ্রয়োগ",
  "বানান ও বাক্যশুদ্ধি",
  "পরিভাষা",
  "সমার্থকশব্দ",
  "বিপরীতশব্দ",
  "ধ্বনি ও বর্ণ",
  "শব্দ",
  "পদ",
  "বাক্য",
  "প্রত্যয়",
  "সন্ধি",
  "সমাস"
    );

    foreach ($array as $i => $value) {
      echo "
     
      <div class='card shadow-lg text-center  justify-content-center m-2' style='max-width: 500px;'>
      
      <a class='a-loop' href='../../../questions.php?value=$value'>
         <div class='row py-3 text-center'>
          <div class='col-lg-2 col-md-2 justify-content-center'>

            <img src='grammar.jpg' class='img-fluid  rounded-start' alt='$value th BCS questions '>
          </div>
  
        
           <div class='col-lg-10'>
              <h5 class='card-title card-text text-center mt-2 '> $value</h5>
            </div>
        </div>
        </a>
  
          
        </div>
      
        
      
      ";
     // unset($array[$i]);
    }
  // print_r($array);

 


     ?>




</div>
    
</div>