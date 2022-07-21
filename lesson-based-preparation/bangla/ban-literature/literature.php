


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>বাংলা সাহিত্য</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="literature.css">

</head>

<body class="sub-body">

  <div class="container ">





    <p class="position text-black rounded-pill sub-title ">বাংলা সাহিত্য</p><hr class="hrr  ">

    <!--আদিযুগ বা প্রাচীন যুগ-->
    <p class="position text-black rounded-pill sub-title ">আদিযুগ বা প্রাচীন যুগ</p>




    <div class='row text-center justify-content-center'>
    <?php

 $array =array(
    
  "চর্যাপদ",
  "ডাক ও খনার বচন",
  "বাংলা লিপি"
);

    foreach ($array as $i => $value) {
      echo "
     
      <div class='card shadow-lg text-center  justify-content-center m-2' style='max-width: 500px;'>
      
      <a class='a-loop' href='bangla_litterature_questions.php?value=$value'>
         <div class='row py-3 text-center'>
          <div class='col-lg-2 col-md-2 justify-content-center'>

            <img src='literature.jpg' class='img-fluid  rounded-start' alt='$value th BCS questions '>
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




<!--মধ্যযুগ-->
    <p class="position text-black rounded-pill sub-title ">মধ্যযুগ</p>


    <div class='row text-center justify-content-center'>
    <?php

 $array =array(
  "বড়ু চণ্ডীদাস",
  "শাহ মুহম্মদ সগীর",
  "আলাওল",
  "ভারতচন্দ্র রায়গুণাকর",
  "শ্রীচৈতন্যদেব",
  "হেয়াত মামুদ",
  "মুকুন্দরাম চক্রবর্তী",
  "দৌলত কাজী",
  "কৃত্তিবাস ওঝা",
  "সাবিরিদ খান",
  "চন্দ্রাবতী",
  "দৌলত উজির বাহরাম খান",
  "দুর্লভ মল্লিক",
  "শেখ ফয়জুল্লাহ",
  "ময়ূর ভট্ট",
  "মালাধর বসু",
  "বিদ্যাপতি",
  "দ্বিজ বংশীবদন",
  "চম্পাগাজী",
  "মাগন ঠাকুর",
  "মাধব কন্দলী",
  "রামানন্দ যতি",
  "দ্বিজ তুলসী",
  "মাণিকরাম দাস"
);

    foreach ($array as $i => $value) {
      echo "
     
      <div class='card shadow-lg text-center  justify-content-center m-2' style='max-width: 500px;'>
      
      <a class='a-loop' href='bangla_litterature_questions.php?value=$value'>
         <div class='row py-3 text-center'>
          <div class='col-lg-2 col-md-2 justify-content-center'>

            <img src='literature.jpg' class='img-fluid  rounded-start' alt='$value th BCS questions '>
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
    



  
  
<!--আধুনিক যুগ-->
<p class="position text-black rounded-pill sub-title ">আধুনিক যুগ</p>


<div class='row text-center justify-content-center'>
    <?php

 $array =array(
    "ঈশ্বরচন্দ্র গুপ্ত",
    "প্যারীচাঁদ মিত্র",
    "অক্ষয়কুমার দত্ত",
    "মাইকেল মধুসূদন দত্ত",
    "দীনবন্ধু মিত্র",
    "সঞ্জীবচন্দ্র চট্টোপাধ্যায়",
    "বিহারীলাল চক্রবর্তী",
    "বঙ্কিমচন্দ্র চট্টোপাধ্যায়",
    "কালীপ্রসন্ন সিংহ",
    "মীর মশাররফ হোসেন",
    "রমেশচন্দ্র দত্ত",
    "হরপ্রসাদ শাস্ত্রী",
    "স্বর্ণকুমারী দেবী",
    "কায়কোবাদ",
    "শ্রীশচন্দ্র মজুমদার",
    "অক্ষয়কুমার বড়াল",
    "মোহাম্মদ নজিবর রহমান",
    "মুহাম্মদ মোজাম্মেল হক",
    "অক্ষয়কুমার মৈত্র",
    "রবীন্দ্রনাথ ঠাকুর",
    "উপেন্দ্রকিশোর রায়চৌধুরী",
    "কামিনী রায়",
    "প্রমথ চৌধুরী",
    "কুসুমকুমারী দাশ",
    "শরত্চন্দ্র চট্টোপাধ্যায়",
    "যতীন্দ্রমোহন বাগচী",
    "সৈয়দ ইসমাইল হোসেন সিরাজী",
    "বেগম রোকেয়া",
    "রাজশেখর বসু",
    "শরৎচন্দ্র পণ্ডিত",
    "কাজী ইমদাদুল হক",
    "সুকুমার রায়",
    "মোহিতলাল মজুমদার",
    "হেমেন্দ্রকুমার রায়",
    "কালিদাস রায়",
    "তারাশংকর বন্দ্যোপাধ্যায়",
    "বিভূতিভূষণ বন্দ্যোপাধ্যায়",
    "ইবরাহীম খাঁ",
    "বিভূতিভূষণ মুখোপাধ্যায়",
    "গোলাম মোস্তফা",
    "আবুল মনসুর আহমদ",
    "শরদিন্দু বন্দ্যোপাধ্যায়",
    "কাজী নজরুল ইসলাম",
    "বলাইচাঁদ মুখোপাধ্যায়",
    "জীবনানন্দ দাশ",
    "অমিয় চক্রবর্তী",
    "জসীম উদ্ দীন",
    "শিবরাম চক্রবর্তী",
    "অচিন্ত্যকুমার সেনগুপ্ত",
    "প্রেমেন্দ্র মিত্র",
    "অন্নদাশঙ্কর রায়",
    "বন্দে আলী মিয়া",
    "মানিক বন্দ্যোপাধ্যায়",
    "সুবোধ ঘোষ",
    "আশাপূর্ণা দেবী",
    "অদ্বৈত মল্লবর্মন",
    "কমলকুমার মজুমদার",
    "সোমেন চন্দ",
    "সুকান্ত ভট্টাচার্য",
    "অতীন বন্দ্যোপাধ্যায়",
    "অনিতা অগ্নিহোত্রী",
    "অনিল ঘড়াই",
    "অবধূত",
    "অমর মিত্র",
    "আখতারুজ্জামান ইলিয়াস",
    "আনিসুল হক",
    "আবু ইসহাক",
    "আবু জাফর শামসুদ্দীন",
    "আবুল বাশার",
    "আবুল মনসুর আহমেদ",
    "আবদুল মান্নান সৈয়দ",
    "আল মাহমুদ",
    "আলাউদ্দিন আল আজাদ",
    "আশুতোষ মুখোপাধ্যায়",
    "আসাদ চৌধুরী",
    "আহমদ ছফা",
    "আহমাদ মোস্তফা কামাল",
    "আহসান হাবীব",
    "ইমদাদুল হক মিলন",
    "কামাল চৌধুরী",
    "গজেন্দ্রকুমার মিত্র",
    "জয় গোস্বামী",
    "জহির রায়হান",
    "জাকির তালুকদার",
    "তসলিমা নাসরিন",
    "তিলোত্তমা মজুমদার",
    "দাউদ হায়দার",
    "দিব্যেন্দু পালিত",
    "দেবী রায়",
    "দেবেশ রায়",
    "নবারুণ ভট্টাচার্য",
    "নারায়ণ গঙ্গোপাধ্যায়",
    "নির্মলেন্দু গুণ",
    "পূরবী বসু",
    "পূর্ণেন্দু পত্রী",
    "ফররুখ আহমদ",
    "বিষ্ণু দে",
    "বুদ্ধদেব গুহ",
    "বুদ্ধদেব বসু",
    "মহাশ্বেতা দেবী",
    "মাহমুদুল হক",
    "মুহম্মদ জাফর ইকবাল",
    "রবিশংকর বল",
    "রাবেয়া খাতুন",
    "শওকত ওসমান",
    "সঞ্জীব চট্টোপাধ্যায়",
    "সুফিয়া কামাল",
    "সুনীল গঙ্গোপাধ্যায়",
    "সেলিনা হোসেন",
    "সৈয়দ ওয়ালীউল্লাহ",
    "সৈয়দ মুজতবা আলী",
    "সৈয়দ মুস্তাফা সিরাজ",
    "সৈয়দ শামসুল হক",
    "হুমায়ুন আজাদ",
    "হুমায়ূন আহমেদ"
    );

    foreach ($array as $i => $value) {
      echo "
     
      <div class='card shadow-lg text-center  justify-content-center m-2' style='max-width: 500px;'>
      
      <a class='a-loop' href='bangla_litterature_questions.php?value=$value'>
         <div class='row py-3 text-center'>
          <div class='col-lg-2 col-md-2 justify-content-center'>

            <img src='literature.jpg' class='img-fluid  rounded-start' alt='$value th BCS questions '>
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>




  </div>

  <div>

  </div>
</body>

</html>