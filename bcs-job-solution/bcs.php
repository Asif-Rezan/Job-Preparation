<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BCS job solution</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="bcs.css">

</head>

<body class="sub-body">

  <div class="container text-center">



    <!--Menu bar shart-->

    <?php
    include "../navbar.php"
    ?>

    <!--menu bar end-->

    <hr>
    <hr>
    <hr>
    
    <!-- <p class="position text-black rounded-pill sub-title ">বিসিএস জব সল্যুশান</p> -->

    <p class=" position mx-5 text-black rounded-pill justify-content-center mt-5">বিসিএস জব সল্যুশান</p>


    <!--Card start-->
   


   
    


    <div class='row text-center justify-content-center'>
    <?php  
    
    for($i=44;$i>=10;$i--)
    {
      echo "
     
    <div class='card shadow-lg text-center  justify-content-center m-2' style='max-width: 500px;'>
    
    <a class='a-loop' href='bcs_questions.php?n=$i'>
       <div class='row py-3 text-center'>
        <div class='col-lg-2 col-md-2 justify-content-center'>
          <img src='bcs.jpg' class='img-fluid  rounded-start' alt='$i th BCS questions '>
        </div>

      
         <div class='col-lg-10'>
            <h5 class='card-title card-text text-center mt-2 '> $i th BCS</h5>
          </div>
      </div>
      </a>

        
      </div>
    
      
    
    ";

      
    }
    
    
   
   
    



    
    // echo "<div class='card shadow-lg text-center  mb-3 row-col' style='max-width: 500px;'>

    //   <div class='row g-0'>
    //     <div class='col-md-2'>
    //       <img src='bcs.jpg' class='img-fluid rounded-start' alt='...'>
    //     </div>
    //     <div class='col-md-8'>
    //       <div class='card-body'>
    //         <h5 class='card-title card-text'> $i th BCS</h5>


    //       </div>
    //     </div>
    //   </div>
    // </div>
    // </div>";
    
    


    ?>
    
    



    

    <!--Card end-->





    
   



    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>




  </div>

  
 
</body>

</html>