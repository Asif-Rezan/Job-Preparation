<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>English Language & Literature</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="eng.css">

</head>

<body class="sub-body">

  <div class="container ">



    <!--Menu bar shart-->

    <?php
    include "../../navbar.php"
    ?>

    <!--menu bar end-->


    <p class="position text-black rounded-pill sub-title ">English Language & Literature</p><hr class="hrr  "><hr class="hrr  ">

    
    


    <!--Parts of Speech start-->

    <div>
    <p class="position text-black rounded-pill sub-title ">Parts of Speech:</p><hr class="hrr">
    <div class='row text-center justify-content-center'>
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
"The Conjunction"
  
    );

    foreach ($array as $i => $value) {
      echo "
     
      <div class='card shadow-lg text-center  justify-content-center m-2' style='max-width: 500px;'>
      
      <a class='a-loop' href='../../questions.php?value=$value'>
         <div class='row py-3 text-center'>
          <div class='col-lg-2 col-md-2 justify-content-center'>

            <img src='eng.jpg' class='img-fluid  rounded-start' alt='$value th BCS questions '>
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

<!--Parts of Speech end-->
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br>

<!--Idioms & Phrases start-->
<div>
    <div></div>
    <p class="position text-black rounded-pill sub-title ">Idioms & Phrases:</p><hr class="hrr">
    <div class='row text-center justify-content-center'>
    <?php

 $array =array(
  "Meanings of Phrases",
  "Kinds of Phrases",
  "Identifying Phrases",
  
    );

    foreach ($array as $i => $value) {
      echo "
     
      <div class='card shadow-lg text-center  justify-content-center m-2' style='max-width: 500px;'>
      
      <a class='a-loop' href='../../questions.php?value=$value'>
         <div class='row py-3 text-center'>
          <div class='col-lg-2 col-md-2 justify-content-center'>

            <img src='eng.jpg' class='img-fluid  rounded-start' alt='$value th BCS questions '>
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

<!--Idioms & Phrases end-->

<br><br><br><br><br><br><br>


<!--Causes start-->

<div>
    <div></div>
    <p class="position text-black rounded-pill sub-title ">Clauses:</p><hr class="hrr">
    <div class='row text-center justify-content-center'>
    <?php

 $array =array(
  "The Principal Clause",
"The Subordinate Clause",
"The Noun Clause",
"The Adjective Clause",
"The Adverbial Clause & its types",
    );

    foreach ($array as $i => $value) {
      echo "
     
      <div class='card shadow-lg text-center  justify-content-center m-2' style='max-width: 500px;'>
      
      <a class='a-loop' href='../../questions.php?value=$value'>
         <div class='row py-3 text-center'>
          <div class='col-lg-2 col-md-2 justify-content-center'>

            <img src='eng.jpg' class='img-fluid  rounded-start' alt='$value th BCS questions '>
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

<!--Causes end-->
<br><br><br><br><br><br><br><br><br><br>
<!--Corrections start-->

<div>
    <div></div>
    <p class="position text-black rounded-pill sub-title ">Corrections:</p><hr class="hrr">
    <div class='row text-center justify-content-center'>
    <?php

 $array =array(
  "The Tense",
  "The Verb",
  "The Preposition",
  "TThe Determiner",
  "The Genders",
  "The Number",
  "Subject-Verb Agreement",
    );

    foreach ($array as $i => $value) {
      echo "
     
      <div class='card shadow-lg text-center  justify-content-center m-2' style='max-width: 500px;'>
      
      <a class='a-loop' href='../../questions.php?value=$value'>
         <div class='row py-3 text-center'>
          <div class='col-lg-2 col-md-2 justify-content-center'>

            <img src='eng.jpg' class='img-fluid  rounded-start' alt='$value th BCS questions '>
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
<!--Corrections end-->
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br>
<!--Sentences & Transformations start-->

<div>
    <div></div>
    <p class="position text-black rounded-pill sub-title ">Sentences & Transformations:</p><hr class="hrr">
    <div class='row text-center justify-content-center'>
    <?php

 $array =array(
  "The Simple Sentence",
"The Compound Sentence",
"The Active Voice",
"The Complex Sentence",
"The Passive Voice",
"The Positive Degree",
"The Comparative Degree",
"The Superlative Degree",
    );

    foreach ($array as $i => $value) {
      echo "
     
      <div class='card shadow-lg text-center  justify-content-center m-2' style='max-width: 500px;'>
      
      <a class='a-loop' href='../../questions.php?value=$value'>
         <div class='row py-3 text-center'>
          <div class='col-lg-2 col-md-2 justify-content-center'>

            <img src='eng.jpg' class='img-fluid  rounded-start' alt='$value th BCS questions '>
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
<!--Sentences & Transformations end-->

<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br>
<!--Words start-->

<div>
    <div></div>
    <p class="position text-black rounded-pill sub-title ">Words:</p><hr class="hrr">
    <div class='row text-center justify-content-center'>
    <?php

 $array =array(
"Meanings",
"Synonyms",
"Antonyms",
"Spellings",
"Usage of words as various parts of speech",
"Formation of new words by adding prefixes and suffixes",
    );

    foreach ($array as $i => $value) {
      echo "
     
      <div class='card shadow-lg text-center  justify-content-center m-2' style='max-width: 500px;'>
      
      <a class='a-loop' href='../../questions.php?value=$value'>
         <div class='row py-3 text-center'>
          <div class='col-lg-2 col-md-2 justify-content-center'>

            <img src='eng.jpg' class='img-fluid  rounded-start' alt='$value th BCS questions '>
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
<!--Words: end-->
<br><br><br><br><br><br><br><br><br><br>
<br><br>
<!--Composition start-->
<div>
    <div></div>
    <p class="position text-black rounded-pill sub-title ">Composition:</p><hr class="hrr">
    <div class='row text-center justify-content-center'>
    <?php

 $array =array(
  "Names of parts of paragraphs/letters/applications"
    );

    foreach ($array as $i => $value) {
      echo "
     
      <div class='card shadow-lg text-center  justify-content-center m-2' style='max-width: 500px;'>
      
      <a class='a-loop' href='../../questions.php?value=$value'>
         <div class='row py-3 text-center'>
          <div class='col-lg-2 col-md-2 justify-content-center'>

            <img src='eng.jpg' class='img-fluid  rounded-start' alt='$value th BCS questions '>
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


    

<!--Composition end-->
<br><br><br><br><br><br><br><br><br><br>
<br><br>
<!--English Literature: start-->
<div>
    <div></div>
    <p class="position text-black rounded-pill sub-title ">English Literature:</p><hr class="hrr">
    <div class='row text-center justify-content-center'>
    <?php

 $array =array(
  "Names of writers of literary pieces from the Elizabethan period to the 21st Century.",
"Quotations from drama/poetry of different ages.",
    );

    foreach ($array as $i => $value) {
      echo "
     
      <div class='card shadow-lg text-center  justify-content-center m-2' style='max-width: 500px;'>
      
      <a class='a-loop' href='../../questions.php?value=$value'>
         <div class='row py-3 text-center'>
          <div class='col-lg-2 col-md-2 justify-content-center'>

            <img src='eng.jpg' class='img-fluid  rounded-start' alt='$value th BCS questions '>
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
<!--English Literature: end-->