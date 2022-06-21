<?php

include '../dbh.php';

if($_SERVER['REQUEST_METHOD']=='POST')
{

  $question= $_POST['question-text'];
  $option1= $_POST['option-1'];
  $option2= $_POST['option-2'];
  $option3= $_POST['option-3'];
  $option4= $_POST['option-4'];

  $correct_answer_option= $_POST['correct-answer'];

  if($correct_answer_option==1)
  {
    $correct_answer=$option1;
  }
  elseif($correct_answer_option==2)
  {
    $correct_answer=$option2;
  }
  elseif($correct_answer_option==3)
  {
    $correct_answer=$option3;
  }
  elseif($correct_answer_option==4)
  {
    $correct_answer=$option4;
  }



  $question_type= $_POST['question_type'];




  try{

    $sql="INSERT INTO questions(Question_text,option1,option2,option3,option4,question_type )
    VALUES('$question','$option1','$option2','$option3','$option4','$question_type')";
    $conn->exec($sql);

    $last_id = $conn->lastInsertId();
    

    $sql2= "INSERT INTO correct_answer(correct_answer_option,questionsquestion_id) VALUES('$correct_answer','$last_id')";
    $conn->exec($sql2);



  }
  catch(EXCEPTION $e)
  {
    echo $e;
    
  }
  $message ="save successfull";
  header("Location:".$_SERVER['HTTP_REFERER']."?message=".$message);

  //header("location: input_questions.php?save=successfull");

 







 

  








  
}



