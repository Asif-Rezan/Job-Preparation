<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>গণিত</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="math.css">

</head>

<body class="sub-body">

  <div class="container ">



    <!--Menu bar shart-->

    <?php
    include "../../navbar.php"
    ?>

    <!--menu bar end-->


    <p class="position text-black rounded-pill sub-title ">গণিত</p><hr class="hrr  ">

    <div class='row text-center justify-content-center'>
    <?php

 $array =array(
  
"বাস্তব সংখ্যা",
"ল.সা.গু",
"গ.সা.গু",
"শতকরা",
"সরল ও যৌগিক মুনাফা",
"অনুপাত ও সমানুপাত",
"লাভ ও ক্ষতি",
"বীজগাণিতিক সূত্রাবলি",
"বহুপদী উৎপাদক",
"সরল ও দ্বিপদী সমীকরন",
"সরল ও দ্বিপদী অসমতা",
"সরল সহসমীকরণ",
"সূচক ও লগারিদম",
"সমান্তর ও গুণোত্তর অনুক্রম ও ধারা",
"রেখা এবং কোণ",
"ত্রিভুজ",
"চতুর্ভুজ",
"পিথাগোরাসের উপপাদ্য",
"বৃত্ত সংক্রান্ত উপপাদ্য",
"পরিমিতি-সরলক্ষেত্র ঘনবস্তু",
"সেট",
"বিন্যাস ও সমাবেশ",
"পরিসংখ্যান ও সম্ভাবনা",
  
    );

    foreach ($array as $i => $value) {
      echo "
     
      <div class='card shadow-lg text-center  justify-content-center m-2' style='max-width: 500px;'>
      
      <a class='a-loop' href='../../../questions.php?value=$value'>
         <div class='row py-3 text-center'>
          <div class='col-lg-2 col-md-2 justify-content-center'>

            <img src='math.jpg' class='img-fluid  rounded-start' alt='$value '>
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

</body>