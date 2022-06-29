<?php 
    //   if(isset($_POST['upper_case'])){
    //      $upper_case = strtoupper($txt_val);
    //     // echo $upper_case;
    //   };
    //   if(isset($_POST['lower_case'])){
    //     $lower_case = strtolower($txt_val);
    //     // echo $lower_case;
    // };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter</title>
</head>
<body>
      <form action="" method="POST">
        TextArea <br>
        <textarea name="text" id="txt" cols="90" rows="6" ><?php echo "$upper_case"?></textarea> <br>
        <button type="button" id="upper" name="upper_case" onclick="toupper()" style="background-color: blue; color:white; border-radius:1">UpperCase</button>
        <button type="button" id="lower" name="lower_case" onclick="result()" style="background-color: blue; color:white; border-radius:1">LowerCase</button>
     </form> <br>
     <h2>Summary</h2>
     
 <script>
   function toupper(){
     $txt_val = document.getElementById('txt').value;
      //  console.log($txt_val);
      upper= toUpperCase($txt_val);
      document.getElementById("txt").innerHTML= upper;
    }
 </script>
</body>
</html>