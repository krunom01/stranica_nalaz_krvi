<?php

if($_POST){
$errors = array();

// provjera jesi li podaci upisani

// provjera sadrzi li ime broj ili "specijalni znak"
if (empty($_POST["ime"]) or preg_match('/[^a-zA-Z]+/',   $_POST["ime"]))
{
   
        $errors["brojUImenu"] = "Krivo upisano ime";
    
    
}
// provjera sadrzi li prezime broj ili "specijalni znak"
if (empty($_POST["prezime"]) or preg_match('/[^a-zA-Z]+/',   $_POST["prezime"]) )
{
    $errors["unesiPrezime"] = "Krivo upisano prezime";
    
}

// provjera godine, mora biti između dva broja
if (empty($_POST["godinaRodenja"]) or $_POST["godinaRodenja"] < "1900" or $_POST["godinaRodenja"] > "2010" )
{
    
        
    $errors["godinaRodenja"] = "godina rođenja";
    }  

if (empty($_POST["spol"]))
{
    
    $errors["spol"] = "spol";
    
}

if (empty($_POST["Eritrociti"]))
{
    $errors["Eritrociti"] = "Eritrociti";
    
    
}
if (empty($_POST["Hemoglobin"]) )
{
    $errors["Hemoglobin"] = "Hemoglobin";
    
}
if (empty($_POST["Hematokrit"]))
{
    $errors["Hematokrit"] = "Hematokrit";
    
}
if (empty($_POST["MCV"]))
{
    $errors["MCV"] = "MCV";
    
}
if (empty($_POST["MCH"]))
{
    $errors["MCH"] = "MCH";
    
}
if (empty($_POST["MCHC"]))
{
    $errors["MCHC"] = "MCHC";
    
}
if (empty($_POST["RDW"]))
{
    $errors["RDW"] = "RDW";
    
}
if (empty($_POST["MPV"]))
{
    $errors["MPV"] = "MPV";
    
}
if (empty($_POST["Leukociti"]))
{
    $errors["Leukociti"] = "Leukociti";
    
}

// provjera točnosti podataka




// provjera errora
if (count($errors) == 0){
    session_start();
    $_SESSION["ime"] =  $_POST["ime"];
    $_SESSION["prezime"] =  $_POST["prezime"];
    $_SESSION["godinaRodenja"] =  $_POST["godinaRodenja"];
    $_SESSION["spol"] =  $_POST["spol"];
    $_SESSION["Eritrociti"] =  $_POST["Eritrociti"];
    $_SESSION["Hemoglobin"] =  $_POST["Hemoglobin"];
    $_SESSION["Hematokrit"] =  $_POST["Hematokrit"];
    $_SESSION["MCV"] =  $_POST["MCV"];
    $_SESSION["MCH"] =  $_POST["MCH"];
    $_SESSION["MCHC"] =  $_POST["MCHC"];
    $_SESSION["RDW"] =  $_POST["RDW"];
    $_SESSION["MPV"] =  $_POST["MPV"];
    $_SESSION["Leukociti"] =  $_POST["Leukociti"];


    header ("location: rezultati.php");

}
}

   







?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Analiza nalaza krvi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="maintest.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</head>
<body>
    <!-- header -->
<header>

</header>
 <!-- navbar -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
    </div>
    <ul class="nav navbar-nav">
     
      
    </ul>
  </div>
</nav>
 <!-- input div -->
 <div class = "container">
     <div class = "podaci">
         <P class ="zadatak">Ispunite sve tražene podatke i kliknite  pošalji.Samo za osobe starije od 8 god.</P>
         
             
             
             


        
        

     </div>
     <div class= "rezultati">
         <p style="color:white">Osobni podaci:</p>
     <form action ="<?php echo $_SERVER["PHP_SELF"] ?>" method ="post" class ="formPodaci">
     <fieldset>
             <input type ="text" name="ime"  maxlength="20" placeholder = "Ime" value="<?php if(isset($_POST["ime"])){echo $_POST["ime"];}; ?>"  class="inputPodaci">
             <input type ="text" name="prezime"  maxlength="20" placeholder = "Prezime" value="<?php if(isset($_POST["prezime"])){echo $_POST["prezime"];}; ?>" class="inputPodaci">
             <input type ="text" name="godinaRodenja"  maxlength="4"  placeholder = "Godina rođenja"  value="<?php if(isset($_POST["godinaRodenja"])){echo $_POST["godinaRodenja"];}; ?>" class="inputPodaci" >
             <input type ="radio" name="spol" value ="Zensko"  class="inputPodaci"><span>Žensko</span>
             <input type ="radio" name="spol" value ="Musko"   class="inputPodaci"><span>Muško</span><br/>
        
             <input type ="number" name="Eritrociti" placeholder = "Eritrociti"  step="0.01" value="<?php if(isset($_POST["Eritrociti"])){echo $_POST["Eritrociti"];}; ?>" class="inputPodaci">
             <input type ="number" name="Hemoglobin" placeholder = "Hemoglobin"   value="<?php if(isset($_POST["Hemoglobin"])){echo $_POST["Hemoglobin"];}; ?>" class="inputPodaci">
             <input type ="number" name="Hematokrit" placeholder = "Hematokrit " step="0.001"  value="<?php if(isset($_POST["Hematokrit"])){echo $_POST["Hematokrit"];}; ?>" class="inputPodaci">
             <input type ="number" name="MCV" placeholder = "MCV" step="0.1"  value="<?php if(isset($_POST["MCV"])){echo $_POST["MCV"];}; ?>" class="inputPodaci">
             <input type ="number" name="MCH" placeholder = "MCH " step="0.1" value="<?php if(isset($_POST["MCH"])){echo $_POST["MCH"];}; ?>"  class="inputPodaci">
            <input type ="number" name="MCHC" placeholder = "MCHC "   value="<?php if(isset($_POST["MCHC"])){echo $_POST["MCHC"];}; ?>" class="inputPodaci">
             <input type ="number" name="RDW" placeholder = "RDW" step="0.1"  value="<?php if(isset($_POST["RDW"])){echo $_POST["RDW"];}; ?>" class="inputPodaci">
             <input type ="number" name="MPV" placeholder = "MPV " step="0.1"  value="<?php if(isset($_POST["MPV"])){echo $_POST["MPV"];}; ?>" class="inputPodaci">
             <input type ="number" name="Leukociti" placeholder = "Leukociti" step="0.1"  value="<?php if(isset($_POST["Leukociti"])){echo $_POST["Leukociti"];}; ?>" class="inputPodaci"><br/>
             <input type ="submit" name="posalji" value="posalji">
             
             <p class="error"><?php  
             if(isset($errors)){ 
                 echo "krivo upisani podaci:";
                 $brojac= 0;
                 foreach($errors as $vrijednost){
                        echo $vrijednost;
                        $brojac = $brojac + 1;
                        if ($brojac < count($errors)) {
                          echo ", ";
                        }  
                      }
                    }
            
              ?></p>
              </fieldset>
     </form>         
     </div>
 </div>
 
  



</body>
</html>