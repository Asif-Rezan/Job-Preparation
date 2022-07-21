<?php
include '../navbar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Questions</title>
</head>

<body>


  <div class="container" style="margin-top: 100px;">

    <div class="form-container m-5 p-5 shadow-lg" style="background-color: white;">

    <h2 class="text-center">Enter your questions here</h2>

      <form action="save_questions.php" method="POST">


        <div class="mb-3">
          <label for="question_text" class="form-label">Question</label>
          <input type="text" name="question-text" class="form-control" id="question_text" placeholder="Enter Question" required>
        </div>

        <div class="mb-3">
          <label for="option_1" class="form-label">Option-1</label>
          <input type="text" name="option-1" class="form-control" id="option_1" placeholder="Option 1" required>
        </div>

        <div class="mb-3">
          <label for="option_2" class="form-label">Option-2</label>
          <input type="text" name="option-2" class="form-control" id="option_2" placeholder="Option 2" required>
        </div>

        <div class="mb-3">
          <label for="option_3" class="form-label">Option-3</label>
          <input type="text" name="option-3" class="form-control" id="option_3" placeholder="Option 3" required>
        </div>

        <div class="mb-3">
          <label for="option_4" class="form-label">Option-4</label>
          <input type="text" name="option-4" class="form-control" id="option_4" placeholder="Option 4" required>
        </div>



        <!-- Correct ans  -->
        <span>Correct answer: &nbsp;&nbsp;</span>
        <div class="form-check form-check-inline text-center">
        

          <input class="form-check-input" type="radio" name="correct-answer" id="inlineRadio1" value="1" required>
          <label class="form-check-label" for="inlineRadio1">1</label>
          <!-- </div> -->
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="correct-answer" id="inlineRadio2" value="2" required>
            <label class="form-check-label" for="inlineRadio2">2</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="correct-answer" id="inlineRadio3" value="3" required>
            <label class="form-check-label" for="inlineRadio3">3</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="correct-answer" id="inlineRadio4" value="4" required>
            <label class="form-check-label" for="inlineRadio4">4</label>
          </div>

        </div>

        <!-- Correct ans -->





        <!-- Radio button start  -->




        <h6 class="mt-5">Question type: </h6>




        <?php
        $array =array(
  "চর্যাপদ",
  "ডাক ও খনার বচন",
  "বাংলা লিপি",
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
  "মাণিকরাম দাস",
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

        foreach ($array as $i => $value)
        //for($i=44;$i>=10;$i--)
        {

         echo " 
          <input type='radio' class='btn-check' name='question_type' id='$value' value='$value' autocomplete='off'>
          <label class='btn btn-outline-danger my-1' for='$value'>$value</label>
         ";

        }
        ?>



        <!-- Radio button end -->





        <div class="btn-container text-center">
          <button class="btn btn-primary px-5" type="submit" class="btn btn-primary">Submit</button>
        </div>

      </form>



    </div>




  </div>







</body>

</html>