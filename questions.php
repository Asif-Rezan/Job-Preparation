<?php
include "./dbh.php";
include "./navbar.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  


  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>


  <title>Questions</title>
</head>

<body>





  <div class="container mt-5">
    <hr>
    <hr>

    <h1>All Questions are available here</h1>


    <?php

    

    
  $question_type=$_GET['value'];


   // echo $question_type;
   


    $sql = "SELECT * FROM questions WHERE question_type='$question_type'";

    $returnObj = $conn->query($sql);

    $data = $returnObj->fetchAll();


    foreach ($data as $row) {


      echo "

        <div class='m-5'>

        <div class='row'>

        <div class='col-lg-5'>
        <h5>$row[question_text]</h5>



        <form class='question-form'>


        <div class='form-check'>
          <input class='form-check-input' type='radio' name='question-options' id='$row[question_id]' value='$row[option1]'>
          <label class='form-check-label' for='$row[question_id]'>$row[option1]</label>
        </div>

          <div class='form-check form-check'>
            <input class='form-check-input' type='radio' name='question-options' id='$row[question_id]' value='$row[option2]'>
            <label class='form-check-label' for='$row[question_id]'>$row[option2]</label>
          </div>
        
          <div class='form-check form-check'>
            <input class='form-check-input' type='radio' name='question-options' id='$row[question_id]' value='$row[option3]'>
            <label class='form-check-label' for='$row[question_id]'>$row[option3]</label>
          </div>
        
          <div class='form-check form-check'>
            <input class='form-check-input' type='radio' name='question-options' id='$row[question_id]' value='$row[option4]'>
            <label class='form-check-label' for='$row[question_id]'>$row[option4]</label>
          </div>

          <input class='id_input' type='hidden' />

          <input type='submit' class='btn btn-success' id ='$row[question_id]' />
        
        

        </form>

        </div>



        <div class='col-lg-5'>

          <div class='context-div-false' id= 'context-id-false$row[question_id]' >

            <div class='alert alert-danger d-flex align-items-center' role='alert' id ='alert1'>
              <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>
              <div id='alert-text-id'>
                Opps! Incorrect Answer.
              </div>
            </div>

          </div>

          <div class='context-div-correct' id= 'context-id-correct$row[question_id]' >

          <div class='alert alert-success d-flex align-items-center' role='alert'>
              <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>
              <div>
                Correct Answer!!!
              </div>
          </div>

          </div>





        </div>




        <div class='col-lg-2'>
        this is context
        </div>




        </div>

        </div>
        
        ";
    }


    ?>


<audio class="loose_audio" controls preload="none" hidden>
    <source src="./audio/forceField_000.ogg" type="audio/mpeg">
   
</audio>

<audio class="win_audio" controls preload="none" hidden>
   
    <source src="./audio/phaserUp7.ogg" type="audio/ogg">
</audio>


    <script>

      $(".loose_audio").trigger('load');
      $(".win_audio").trigger('load');

      $('.context-div-false').hide();
      $('.context-div-correct').hide();

      $(".btn").click(function() {
        var selected = null;




        // var selected= jQuery(this).attr("val");
        var id = jQuery(this).attr("id");
        selected = $(`input[id=${id}]:checked`).val();
       // alert(selected + id);







        // Ajax Call------------------->>>
        $.ajax({

            method: "POST",
            url: "./check_answer.php",
            type: 'application/json',
           

            data: {
              selected_answer: selected,
              selected_id: id
            }
          })

          .done(function(data) {



            // alert( "Result: " + data.result );

             if(data.result == false)
             {
              $(`#context-id-false${id}`).show(500);
              $(`#context-id-correct${id}`).hide(500);

              $(".loose_audio").trigger('play');
              $(".win_audio").trigger('pause');

             }
             else if(data.result== true)
             {
              $(`#context-id-correct${id}`).show(500);
              $(`#context-id-false${id}`).hide(500);

              $(".win_audio").trigger('play');
              $(".loose_audio").trigger('pause');

             }

             

            
             




          }).fail((e)=>{

            //console.log(e.statusText);
            alert('Error! Please check your internet connection');

           // console.log(e);

          });




      });



      
    </script>



  
  













  </div>







  <?php
  include './footer.php';

  ?>


  <script src="./js/correct_answer.js"></script>
</body>


</html>