<?php

include '../dbh.php';


$id= $_POST['selected_id'];
$selected_answer=$_POST['selected_answer'];
$result = null;

$query = "SELECT * FROM correct_answer WHERE correct_answer_id = '$id'";

$returnObj=$conn->query($query);
      
$data= $returnObj->fetch();


$correct_answer=$data['correct_answer_option'];


if($correct_answer == $selected_answer)
{
  $result = true;
}
else
{
  $result = false;
}

$context= " this is context ";


$data = ["result" => $result, "context" => $context, 'correct_answer' => $correct_answer, 'selected_answer'=> $selected_answer];
header('Content-type: application/json');
echo json_encode($data);


