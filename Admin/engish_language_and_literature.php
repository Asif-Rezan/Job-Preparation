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
          "The Noun:",
          "The Determiner",
          "The Gender",
          "The Number",
          "The Pronoun",
          "The Verb",
          "The Finite: transitive, intransitive",
          "The Non-finite",
          "The Linking Verb",
          "The Phrasal Verb",
          "Modals",
          "The Adjective",
          "The Adverb",
          "The Preposition",
          "The Conjunction",
          "The Principal Clause",
          "The Subordinate Clause",
          "The Noun Clause",
          "The Adjective Clause",
          "The Adverbial Clause & its types",
          "The Tense",
          "The Verb",
          "The Preposition",
          "TThe Determiner",
          "The Genders",
          "The Number",
          "Subject-Verb Agreement",
          "The Simple Sentence",
          "The Compound Sentence",
          "The Active Voice",
          "The Complex Sentence",
          "The Passive Voice",
          "The Positive Degree",
          "The Comparative Degree",
          "The Superlative Degree",
          "Meanings",
          "Synonyms",
          "Antonyms",
          "Spellings",
          "Usage of words as various parts of speech",
          "Formation of new words by adding prefixes and suffixes",
          "Names of parts of paragraphs/letters/applications",
          "Names of writers of literary pieces from the Elizabethan period to the 21st Century.",
          "Quotations from drama/poetry of different ages.",

 
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