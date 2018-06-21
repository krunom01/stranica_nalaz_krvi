<?php
session_start();
if(!isset($_SESSION["ime"])){
    header("location: test.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rezultati</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="rezultati1.css" />
    
    
</head>
<body>

 <!-- input div -->
 <div class = "rezultatitesta">
     
         <P class ="zadatak">Rezultati:</P>
         <p>Ime:
         <?php 
         
         echo  $_SESSION["ime"]; ?></p>
         <p>Prezime:
         <?php  echo  $_SESSION["prezime"]; ?></p>
         <p>Godine:
         <?php  $godine = 2018 - $_SESSION["godinaRodenja"];
         echo $godine ?></p>
         <p>Spol:
         <?php  echo  $_SESSION["spol"]; ?></p>
         <p>Eritrociti:
         <?php  echo $_SESSION["Eritrociti"] ; ?></p>
         <p>Hemoglobin:
         <?php  echo $_SESSION["Hemoglobin"] ; ?></p>
         <p>Hematokrit:
         <?php  echo $_SESSION["Hematokrit"] ; ?></p>
         <p>MCV:
         <?php  echo $_SESSION["MCV"] ; ?></p>
         <p>MCH:
         <?php  echo $_SESSION["MCH"] ; ?></p>
         <p>MCHC:
         <?php  echo $_SESSION["MCHC"] ; ?></p>
         <p>RDW:
         <?php  echo $_SESSION["RDW"] ; ?></p>
         <p>MPV:
         <?php  echo $_SESSION["MPV"] ; ?></p>
         <p>Leukociti:
         <?php  echo $_SESSION["Leukociti"] ; ?></p>
 
 </div>
 <div class = "misljenje">
 <p class="naslov">Nase mišljenje</p>
 <?php 
 //ako je musko
 if ($_SESSION["spol"] === "Musko"){
     //prvi dio rezultata
     // ako je musko od 8 - 12 godina
    if($godine >= 8 && $godine <= 12 ){
            echo "Vi se musko. raspon godina od 8 do 12!"."<br />";
             if($_SESSION["Eritrociti"] < 4.34){
                 echo "Imate smanjene eritrocite!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                 Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
             }
             else if($_SESSION["Eritrociti"] > 5.47 ){
                echo "Imate povišene eritrocite!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
             }
             else {
                 echo "Imate eritrocite u granicama normale!"."<br />";
             }
             
             if($_SESSION["Hemoglobin"] < 121){
                echo "Imate smanjen Hemoglobin!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
             }
             else if($_SESSION["Hemoglobin"] > 145){
                echo "Imate povišen Hemoglobin!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
             }
             else {
                 echo "imate Hemoglobin u granicama normale!"."<br />";
             }
             if($_SESSION["Hematokrit"] < 0.366  ){
                echo "Imate smanjen Hematokrit!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
             }
             else if($_SESSION["Hematokrit"] > 0.452){
                echo "Imate povišen Hematokrit!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
             }
             else {
                 echo "imate Hematokrit u granicama normale!"."<br />";

            }
        } //kraj ako je musko od 8-12 godina
            
        // ako je musko od 13-19 godina
   else if($godine >= 13 && $godine <= 19 ){
                echo "Vi se musko. raspon godina od 13 do 19!"."<br />";
                 if($_SESSION["Eritrociti"] < 4.43){
                     echo "Imate smanjene eritrocite!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                     Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
                 }
                 else if($_SESSION["Eritrociti"] > 5.58 ){
                    echo "Imate povišene eritrocite!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                    Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
                 }
                 else {
                     echo "Imate eritrocite u granicama normale!"."<br />";
                 }
                 
                 if($_SESSION["Hemoglobin"] < 129){
                    echo "Imate smanjen Hemoglobin!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                    Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
                 }
                 else if($_SESSION["Hemoglobin"] > 166){
                    echo "Imate povišen Hemoglobin!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                    Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
                 }
                 else {
                     echo "imate Hemoglobin u granicama normale!"."<br />";
                 }
                 if($_SESSION["Hematokrit"] < 0.390  ){
                    echo "Imate smanjen Hematokrit!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                    Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
                 }
                 else if($_SESSION["Hematokrit"] > 0.487){
                    echo "Imate povišen Hematokrit!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                    Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
                 }
                 else {
                     echo "imate Hematokrit u granicama normale!"."<br />";
    
                }
            
            }
            //kraj musko ako je od 13-19 godina
            //ako je musko od 20 na više godina
    else {
        echo "Vi se musko od 20 ili vise godina"."<br />";
        if($_SESSION["Eritrociti"] < 4.43){
            echo "Imate smanjene eritrocite!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
            Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
        }
        else if($_SESSION["Eritrociti"] > 5.72 ){
           echo "Imate povišene eritrocite!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
           Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
        }
        else {
            echo "Imate eritrocite u granicama normale!"."<br />";
        }
        
        if($_SESSION["Hemoglobin"] < 138){
           echo "Imate smanjen Hemoglobin!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
           Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
        }
        else if($_SESSION["Hemoglobin"] > 175){
           echo "Imate povišen Hemoglobin!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
           Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
        }
        else {
            echo "imate Hemoglobin u granicama normale!"."<br />";
        }
        if($_SESSION["Hematokrit"] < 0.415  ){
           echo "Imate smanjen Hematokrit!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
           Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
        }
        else if($_SESSION["Hematokrit"] > 0.530){
           echo "Imate povišen Hematokrit!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
           Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
        }
        else {
            echo "imate Hematokrit u granicama normale!"."<br />";

       }
    }//kraj musko ako 20 ili vise godina
    //kraj prvi dio rezultata ako je musko
     //pocetak drugi dio rezultata
     // ako je musko od 8-19 godina
             if($godine >= 8 && $godine <= 19 ){
                if($_SESSION["MCV"] < 76.5   ){
                    echo "Imate smanjen MCV!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                    Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
                 }
                 else if($_SESSION["MCV"] > 92.1 ){
                    echo "Imate povišen MCV!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                    Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
                 }
                 else {
                     echo "imate MCV u granicama normale!"."<br />";
    
                }
                if($_SESSION["MCH"] < 24.5   ){
                    echo "Imate smanjen MCH!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                    Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
                 }
                 else if($_SESSION["MCH"] > 31.5 ){
                    echo "Imate povišen MCH!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                    Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
                 }
                 else {
                     echo "imate MCH u granicama normale!"."<br />";
    
                }
                if($_SESSION["MCHC"] < 304  ){
                    echo "Imate smanjen MCHC!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                    Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
                 }
                 else if($_SESSION["MCHC"] > 346 ){
                    echo "Imate povišen MCHC!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                    Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
                 }
                 else {
                     echo "imate MCHC u granicama normale!"."<br />";
    
                }
                if($_SESSION["RDW"] < 11.6  ){
                    echo "Imate smanjen RDW!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                    Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
                 }
                 else if($_SESSION["RDW"] > 14.3 ){
                    echo "Imate povišen RDW!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                    Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
                 }
                 else {
                     echo "imate RDW u granicama normale!"."<br />";
    
                }
                if($_SESSION["MPV"] < 7   ){
                    echo "Imate smanjen MPV!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                    Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
                 }
                 else if($_SESSION["MPV"] > 10.4){
                    echo "Imate povišen MPV!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                    Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
                 }
                 else {
                     echo "imate MPV u granicama normale!"."<br />";
    
                }
                if($_SESSION["Leukociti"] < 4.4   ){
                    echo "Imate smanjene Leukocite!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                    Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
                 }
                 else if($_SESSION["Leukociti"] > 11.6 ){
                    echo "Imate povišene Leukocite!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                    Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
                 }
                 else {
                     echo "imate Leukocite u granicama normale!"."<br />";
    
                }
            }
            // kraj ako je musko od 8-19 godina
            // ako je musko od 20 i više godina
       else {
        if($_SESSION["MCV"] < 83   ){
            echo "Imate smanjen MCV!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
            Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
         }
         else if($_SESSION["MCV"] > 97.2 ){
            echo "Imate povišen MCV!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
            Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
         }
         else {
             echo "imate MCV u granicama normale!"."<br />";

        }
        if($_SESSION["MCH"] < 27.4   ){
            echo "Imate smanjen MCH!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
            Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
         }
         else if($_SESSION["MCH"] > 33.9 ){
            echo "Imate povišen MCH!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
            Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
         }
         else {
             echo "imate MCH u granicama normale!"."<br />";

        }
        if($_SESSION["MCHC"] < 320  ){
            echo "Imate smanjen MCHC!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
            Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
         }
         else if($_SESSION["MCHC"] > 345 ){
            echo "Imate povišen MCHC!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
            Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
         }
         else {
             echo "imate MCHC u granicama normale!"."<br />";

        }
        if($_SESSION["RDW"] < 9  ){
            echo "Imate smanjen RDW!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
            Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
         }
         else if($_SESSION["RDW"] > 15 ){
            echo "Imate povišen RDW!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
            Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
         }
         else {
             echo "imate RDW u granicama normale!"."<br />";

        }
        if($_SESSION["MPV"] < 6.8   ){
            echo "Imate smanjen MPV!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
            Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
         }
         else if($_SESSION["MPV"] > 10.4){
            echo "Imate povišen MPV!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
            Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
         }
         else {
             echo "imate MPV u granicama normale!"."<br />";

        }
        if($_SESSION["Leukociti"] < 3.4   ){
            echo "Imate smanjene Leukocite!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
            Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
         }
         else if($_SESSION["Leukociti"] > 9.7 ){
            echo "Imate povišene Leukocite!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
            Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
         }
         else {
             echo "imate Leukocite u granicama normale!"."<br />";

        }
    }
            
       }
       //kraj ako je musko 20 ili vise godina
       //kraj drugi dio rezultata
       // kraj ako je musko


       //ako je zensko
       //pocetak prvi dio rezultata
     if ($_SESSION["spol"] === "Zensko"){
        echo "zensko si!"; //provjera ispravnosti koda
        //prvi dio rezultata
     // ako je zensko od 8 - 19 godina
        if($godine >= 8 && $godine <= 19 ){
        echo "Vi se musko. raspon godina od 8 do 12!"."<br />";
         if($_SESSION["Eritrociti"] < 4.07){
             echo "Imate smanjene eritrocite!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
             Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
         }
         else if($_SESSION["Eritrociti"] > 5.42 ){
            echo "Imate povišene eritrocite!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
            Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
         }
         else {
             echo "Imate eritrocite u granicama normale!"."<br />";
         }
         
         if($_SESSION["Hemoglobin"] < 118){
            echo "Imate smanjen Hemoglobin!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
            Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
         }
         else if($_SESSION["Hemoglobin"] > 149){
            echo "Imate povišen Hemoglobin!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
            Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
         }
         else {
             echo "imate Hemoglobin u granicama normale!"."<br />";
         }
         if($_SESSION["Hematokrit"] < 0.354  ){
            echo "Imate smanjen Hematokrit!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
            Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
         }
         else if($_SESSION["Hematokrit"] > 0.450){
            echo "Imate povišen Hematokrit!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
            Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
         }
         else {
             echo "imate Hematokrit u granicama normale!"."<br />";

        }
    } //kraj ako je zensko od 8-19 godina
        
    // ako je zensko s 20 ili više godina godina
else if($godine >= 20 ){
            echo "Vi se zensko s 20 ili vise godina"."<br />";
             if($_SESSION["Eritrociti"] < 3.86){
                 echo "Imate smanjene eritrocite!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                 Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
             }
             else if($_SESSION["Eritrociti"] > 5.08 ){
                echo "Imate povišene eritrocite!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
             }
             else {
                 echo "Imate eritrocite u granicama normale!"."<br />";
             }
             
             if($_SESSION["Hemoglobin"] < 119){
                echo "Imate smanjen Hemoglobin!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
             }
             else if($_SESSION["Hemoglobin"] > 157){
                echo "Imate povišen Hemoglobin!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
             }
             else {
                 echo "imate Hemoglobin u granicama normale!"."<br />";
             }
             if($_SESSION["Hematokrit"] < 0.356  ){
                echo "Imate smanjen Hematokrit!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
             }
             else if($_SESSION["Hematokrit"] > 0.470){
                echo "Imate povišen Hematokrit!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
             }
             else {
                 echo "imate Hematokrit u granicama normale!"."<br />";

            }
        
        }
        //kraj zensko s 20 ili više godina
        //ako je musko od 20 na više godina

        //kraj prvi dio rezultata ako je zensko
        //pocetak drugi dio rezultata
        // ako je musko od 8-19 godina
         if($godine >= 8 && $godine <= 19 ){
            if($_SESSION["MCV"] < 76.5   ){
                echo "Imate smanjen MCV!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
             }
             else if($_SESSION["MCV"] > 92.1 ){
                echo "Imate povišen MCV!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
             }
             else {
                 echo "imate MCV u granicama normale!"."<br />";

            }
            if($_SESSION["MCH"] < 24.5   ){
                echo "Imate smanjen MCH!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
             }
             else if($_SESSION["MCH"] > 31.5 ){
                echo "Imate povišen MCH!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
             }
             else {
                 echo "imate MCH u granicama normale!"."<br />";

            }
            if($_SESSION["MCHC"] < 304  ){
                echo "Imate smanjen MCHC!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
             }
             else if($_SESSION["MCHC"] > 346 ){
                echo "Imate povišen MCHC!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
             }
             else {
                 echo "imate MCHC u granicama normale!"."<br />";

            }
            if($_SESSION["RDW"] < 11.6  ){
                echo "Imate smanjen RDW!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
             }
             else if($_SESSION["RDW"] > 14.3 ){
                echo "Imate povišen RDW!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
             }
             else {
                 echo "imate RDW u granicama normale!"."<br />";

            }
            if($_SESSION["MPV"] < 7   ){
                echo "Imate smanjen MPV!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
             }
             else if($_SESSION["MPV"] > 10.4){
                echo "Imate povišen MPV!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
             }
             else {
                 echo "imate MPV u granicama normale!"."<br />";

            }
            if($_SESSION["Leukociti"] < 4.4   ){
                echo "Imate smanjene Leukocite!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
             }
             else if($_SESSION["Leukociti"] > 11.6 ){
                echo "Imate povišene Leukocite!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
                Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
             }
             else {
                 echo "imate Leukocite u granicama normale!"."<br />";

            }
        }
        // kraj ako je zensko od 8-19 godina
        // ako je zensko od 20 i više godina
   else {
    if($_SESSION["MCV"] < 83   ){
        echo "Imate smanjen MCV!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
        Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
     }
     else if($_SESSION["MCV"] > 97.2 ){
        echo "Imate povišen MCV!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
        Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
     }
     else {
         echo "imate MCV u granicama normale!"."<br />";

    }
    if($_SESSION["MCH"] < 27.4   ){
        echo "Imate smanjen MCH!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
        Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
     }
     else if($_SESSION["MCH"] > 33.9 ){
        echo "Imate povišen MCH!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
        Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
     }
     else {
         echo "imate MCH u granicama normale!"."<br />";

    }
    if($_SESSION["MCHC"] < 320  ){
        echo "Imate smanjen MCHC!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
        Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
     }
     else if($_SESSION["MCHC"] > 345 ){
        echo "Imate povišen MCHC!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
        Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
     }
     else {
         echo "imate MCHC u granicama normale!"."<br />";

    }
    if($_SESSION["RDW"] < 9  ){
        echo "Imate smanjen RDW!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
        Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
     }
     else if($_SESSION["RDW"] > 15 ){
        echo "Imate povišen RDW!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
        Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
     }
     else {
         echo "imate RDW u granicama normale!"."<br />";

    }
    if($_SESSION["MPV"] < 6.8   ){
        echo "Imate smanjen MPV!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
        Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
     }
     else if($_SESSION["MPV"] > 10.4){
        echo "Imate povišen MPV!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
        Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
     }
     else {
         echo "imate MPV u granicama normale!"."<br />";

    }
    if($_SESSION["Leukociti"] < 3.4   ){
        echo "Imate smanjene Leukocite!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
        Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
     }
     else if($_SESSION["Leukociti"] > 9.7 ){
        echo "Imate povišene Leukocite!  nisi nec est ultrices, ut gravida ante gravida. Vestibulum ut mi commodo, suscipit mi ut, accumsan libero. Quisque vulputate cursus tortor, sed auctor augue ornare eu. Nunc dictum ac lorem in facilisis.
        Vestibulum bibendum erat sit amet mauris tempor egestas s"."<br />";
     }
     else {
         echo "imate Leukocite u granicama normale!"."<br />";

    }
} //kraj drugi dio rezultata i kraj ako je zensko

     }
    
 
 
 ?>
 
 </div>
 <form>
 <a href ="test.php"><input value="Kreni ispočetka"></a>
 
 </form>


</body>
</html>
