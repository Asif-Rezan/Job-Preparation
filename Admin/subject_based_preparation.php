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

        <div>

        <input type="radio" class="btn-check" name="question_type" id="bangla_language" value="bangla-language" autocomplete="off" checked>
        <label class="btn btn-outline-success" for="bangla_language">বাংলা ভাষা</label>

        <input type="radio" class="btn-check" name="question_type" id="english_language" value="english-language" autocomplete="off">
        <label class="btn btn-outline-danger" for="english_language">English Language</label>

        <input type="radio" class="btn-check" name="question_type" id="math" value="math" autocomplete="off">
        <label class="btn btn-outline-danger" for="math">গাণিতিক যুক্তি</label>

        <input type="radio" class="btn-check" name="question_type" id="bangladesh-affairs" value="bangladesh-affairs" autocomplete="off">
        <label class="btn btn-outline-danger" for="bangladesh-affairs">বাংলাদেশ বিষয়াবলী</label>

        <input type="radio" class="btn-check" name="question_type" id="international-affairs" value="international-affairs" autocomplete="off">
        <label class="btn btn-outline-danger" for="international-affairs">আন্তর্জাতিক বিষয়াবলি</label>

        <input type="radio" class="btn-check" name="question_type" id="general-science" value="general-science" autocomplete="off">
        <label class="btn btn-outline-danger" for="general-science">সাধারণ বিজ্ঞান</label>


        <input type="radio" class="btn-check" name="question_type" id="computer-and-information-technology" value="computer-and-information-technology" autocomplete="off">
        <label class="btn btn-outline-danger" for="computer-and-information-technology">কম্পিউটার ও তথ্য প্রযুক্তি</label>

        <input type="radio" class="btn-check" name="question_type" id="geography-environment-and-disaster-management" value="geography-environment-and-disaster-management" autocomplete="off">
        <label class="btn btn-outline-danger" for="geography-environment-and-disaster-management">ভূগোল পরিবেশ ও দুর্যোগ ব্যবস্থাপনা</label>

        <input type="radio" class="btn-check" name="question_type" id="mental-skills" value="mental-skills" autocomplete="off">
        <label class="btn btn-outline-danger" for="mental-skills">মানসিক দক্ষতা</label>

        <input type="radio" class="btn-check" name="question_type" id="ethics-values-and-good-governance" value="ethics-values-and-good-governance" autocomplete="off">
        <label class="btn btn-outline-danger" for="ethics-values-and-good-governance">নৈতিকতা, মূল্যবোধ ও সু-শাসন</label>


        </div>



        <!-- Radio button end -->





        <div class="btn-container text-center">
          <button class="btn btn-primary px-5" type="submit" class="btn btn-primary">Submit</button>
        </div>

      </form>



    </div>




  </div>







</body>

</html>