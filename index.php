<!DOCTYPE html>
<html>
    <title>هەڵبژێردن</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;
margin-right: 20%;
margin-left: 20%;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
  background:green;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}
h1{
    text-align: center;
  }
  h2{
    text-align: center;
  }
  h3{
    text-align: center;
  }
  .dll{
    margin: autos;
  }

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
 
}
</style>
</head>
<body>

<h2>فۆڕمی هەڵبژێردن</h2>

<form action="index.html" method="post">
  

  
    <label class="z"><h1>ناوی سیانی</h1></label>
    <input type="text" name="namee"  required><br>
    <div class="z">
        <label><h3>  ! تکایە (١) دانە هەڵبژێرا</h3></label>
        <div class="dll">
<b><b>ئەندێشەی ئیسلامی</b></b>
    <input type="radio" name="wana" id="A" value="Andesha" ></div>
    <div class="dll">
    <b><b> بهداشت محیط</b></b>
    <input type="radio" name="wana" id="A" value="Bahdasht">
    <br></div>
    
    </div>
    <button type="submit" name="save"><h2>ناردن</h2></button>
   



</form>

</body>

</html>
<?php

$conect = mysqli_connect("localhost","root", "","ABC1");

if(isset($_POST['save'])){

   $name = ($_POST['namee']);
   $email = ($_POST['wana']);
   

    $sql = "INSERT INTO  ABC12(names ,anjamaka)VALUES('$name','$email')";
    $Result = mysqli_query($conect, $sql);
if($Result==true)
{
        echo "secssfull ";
 } else{
        echo "failed";
        }
    }



?>