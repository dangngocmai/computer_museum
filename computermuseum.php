<!DOCTYPE HTML>
<html lang = "en">
<head>
     
    <image  align = "top" src = "https://computermuseum.uwaterloo.ca/themes/uwcm/assets/pawtucket/graphics/ca_logo_main.png" width = "50%" height = "40%"> </image>
    <image align = "top" src = "https://www.timeshighereducation.com/sites/default/files/styles/medium/public/3._logo.png?itok=NojwkvMA"  width = "10%" height = "10%"></image>
    
 
    <br>
    


  <?php echo "<a href = 'about.php' target='_blank'>About</a>"; ?>
    <br>
    
      <!--create column to put text in with same height and width-->
<meta name="viewport" content="width=device-width, initial-scale=1">
  
    </head>
    
    <head>







<body>



<!--surround the select box with a "custom-select" DIV element. Remember to set the width:-->


<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$convertedItems   = 0;
$thickness = 0;

/* The condition is entered when the request is of POST type. */
if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $items            = $_POST['items'];
   $fromConvertionUnit     = $_POST['fromConvertionUnit'];
   $toConvertionUnit       = $_POST['toConvertionUnit'];
   

/* if the temperature conversion are of same unit then no need for conversion */

   if($fromConvertionUnit == $toConvertionUnit){
       $convertedItems = $items;
   }
    
    
   if($fromConvertionUnit == 'punched cards' && $toConvertionUnit == '3.5 floppy disk') {

       $convertedItems = $items * 0.00007017543;
     $thickness = $convertedItems * (0.177852);}
 else if($fromConvertionUnit == 'punched cards' && $toConvertionUnit == '5.25 floppy disk single-sided, single-density') {

       $convertedItems = $items/ (360 *1000 /80);
     $thickness =   $convertedItems *  0.177852;
 }
       else if($fromConvertionUnit == 'punched cards' && $toConvertionUnit == '5.25  floppy disk single-sided, double-density') {
 
       $convertedItems = $items / ( 600 *1000 /80) ;
       $thickness =   $convertedItems *  0.177852;}
       else if($fromConvertionUnit == 'punched cards' && $toConvertionUnit == '5.25 floppy disk double-sided, double-density') {

       $convertedItems = $items / (1.2 *10^6 /80) ;
       $thickness =   $convertedItems *  0.177852;}
        else if($fromConvertionUnit == 'punched cards' && $toConvertionUnit == '5 MB hard Winchester Hard Drive') {

       $convertedItems = $items / (5 *10^6 /80) ;
        $thickness =   $convertedItems *  0.177852;}
         else if($fromConvertionUnit == 'punched cards' && $toConvertionUnit == '1650 bpi 9-track tape (1,650 bits per inch)') {

       $convertedItems = $items / (46 *10^6 /80) ;
    $thickness =   $convertedItems *  0.177852;}
     else if($fromConvertionUnit == 'punched cards' && $toConvertionUnit == '6250 bpi 9-track tape (6250 bits per inch)') {

       $convertedItems = $items /(180 *10^6 /80) ;
     $thickness =   $convertedItems *  0.177852;}
         else if($fromConvertionUnit == 'punched cards' && $toConvertionUnit == 'Paper tape') {

       $convertedItems = $items /(180 *10^6 /80) ;
         $thickness =   $convertedItems *  0.177852;}
        else if($fromConvertionUnit == 'punched cards' && $toConvertionUnit == 'IBM Data Cell') {

       $convertedItems = $items/ ( 3 *10^9 /80) ; 
            $thickness =   $convertedItems *  0.177852;}
    
           
   if($fromConvertionUnit == '3.5 floppy disk' && $toConvertionUnit == 'punched cards') {

 $convertedItems = $items / (80/ (1.14*10^6)) ;
   $thickness =   $convertedItems *  3.3;}
    
    
       else if($fromConvertionUnit == '3.5 floppy disk' && $toConvertionUnit == '5.25 floppy disk single-sided, single-density') {

       $convertedItems = $items /(360 *1000/ (1.14*10^6));
         $thickness =   $convertedItems *  3.3;}
       else if($fromConvertionUnit == '3.5 floppy disk' && $toConvertionUnit == '5.25  floppy disk single-sided, double-density') {
 
       $convertedItems = $items/ ( 600 *1000 /80) ;
         $thickness =   $convertedItems *  3.3;}
       else if($fromConvertionUnit == '3.5 floppy disk' && $toConvertionUnit == '5.25 floppy disk double-sided, double-density') {

       $convertedItems = $items /(1.2 *10^6 /(1.14*10^6)) ;
         $thickness =   $convertedItems *  3.3;}
        else if($fromConvertionUnit == '3.5 floppy disk' && $toConvertionUnit == '5 MB hard Winchester Hard Drive') {

       $convertedItems = $items / (5 *10^6 /(1.14*10^6)) ;
          $thickness =   $convertedItems *  3.3;}
         else if($fromConvertionUnit == '3.5 floppy disk' && $toConvertionUnit == '1650 bpi 9-track tape (1,650 bits per inch)') {

       $convertedItems = $items /(46 *10^6 /(1.14*10^6)) ;
           $thickness =   $convertedItems *  3.3;}
     else if($fromConvertionUnit == '3.5 floppy disk' && $toConvertionUnit == '6250 bpi 9-track tape (6250 bits per inch)') {

       $convertedItems = $items/ (180 *10^6 /(1.14*10^6)) ;
       $thickness =   $convertedItems *  3.3;}
         else if($fromConvertionUnit == '3.5 floppy disk' && $toConvertionUnit == 'Paper tape') {

       $convertedItems = $items/ (180 *10^6 /(1.14*10^6)) ;
           $thickness =   $convertedItems *  3.3;}
        else if($fromConvertionUnit == '3.5 floppy disk' && $toConvertionUnit == 'IBM Data Cell') {

       $convertedItems = $items/ (3 *10^9 /(1.14*10^6)) ;
              $thickness =   $convertedItems *  3.3;
       }
  
       
   if($fromConvertionUnit == '5.25  floppy disk single-sided, double-density' && $toConvertionUnit == 'punched cards') {

 $convertedItems = $items/ (80/ (600 *1000)) ;
     $thickness =   $convertedItems *  1.6;}
    
       else if($fromConvertionUnit == '5.25  floppy disk single-sided, double-density' && $toConvertionUnit == '3.5 floppy disk') {

       $convertedItems = $items/ (1.14*10^6 / (600 *1000));
            $thickness =   $convertedItems *  1.6;}
       else if($fromConvertionUnit == '5.25  floppy disk single-sided, double-density' && $toConvertionUnit == '5.25 floppy disk single-sided, single-density') {
 
       $convertedItems = $items /( 360 *1000/ (600 *1000)) ;
            $thickness =   $convertedItems *  1.6;}
       else if($fromConvertionUnit == '5.25  floppy disk single-sided, double-density' && $toConvertionUnit == '5.25 floppy disk double-sided, double-density') {

       $convertedItems = $items / (1.2 *10^6  /(600 *1000)) ;
            $thickness =   $convertedItems *  1.6;}
        else if($fromConvertionUnit == '5.25  floppy disk single-sided, double-density' && $toConvertionUnit == '5 MB hard Winchester Hard Drive') {

       $convertedItems = $items/ (5 *10^6 /(600 *1000)) ;
             $thickness =   $convertedItems *  1.6;}
         else if($fromConvertionUnit == '5.25  floppy disk single-sided, double-density' && $toConvertionUnit == '1650 bpi 9-track tape (1,650 bits per inch)') {

       $convertedItems = $items / (46 *10^6 /(600 *1000)) ;
              $thickness =   $convertedItems *  1.6;}
     else if($fromConvertionUnit == '5.25  floppy disk single-sided, double-density' && $toConvertionUnit == '6250 bpi 9-track tape (6250 bits per inch)') {

       $convertedItems = $items/ (46 *10^6 /(600 *1000));    
         $thickness =   $convertedItems *  1.6;}
         else if($fromConvertionUnit == '5.25  floppy disk single-sided, double-density' && $toConvertionUnit == 'Paper tape') {

       $convertedItems = $items/ (180 *10^6 /(600 *1000));
              $thickness =   $convertedItems *  1.6;}
        else if($fromConvertionUnit == '5.25  floppy disk single-sided, double-density' && $toConvertionUnit == 'IBM Data Cell') {

       $convertedItems = $items/ (3 *10^9 /(600 *1000)) ;
             $thickness =   $convertedItems *  1.6;}
   

          if($fromConvertionUnit == '5.25 floppy disk single-sided, single-density' && $toConvertionUnit == 'punched cards') {

 $convertedItems = $items/ (80/ (360 *1000)) ;
               $thickness =   $convertedItems *  1.6;}
    
       else if($fromConvertionUnit == '5.25 floppy disk single-sided, single-density' && $toConvertionUnit == '3.5 floppy disk') {

       $convertedItems = $items/ (1.14*10^6 / (360 *1000))
 ;     $thickness =   $convertedItems *  1.6;}
       else if($fromConvertionUnit == '5.25 floppy disk single-sided, single-density' && $toConvertionUnit == '5.25  floppy disk single-sided, double-density') {
 
       $convertedItems = $items/ (600 *1000/ (360 *1000)) ;
            $thickness =   $convertedItems *  1.6;}
       else if($fromConvertionUnit == '5.25 floppy disk single-sided, single-density' && $toConvertionUnit == '5.25 floppy disk double-sided, double-density') {

       $convertedItems = $items/ ( 1.2 *10^6  /(360 *1000) );
            $thickness =   $convertedItems *  1.6;}
        else if($fromConvertionUnit == '5.25 floppy disk single-sided, single-density' && $toConvertionUnit == '5 MB hard Winchester Hard Drive') {

       $convertedItems = $items/ (5 *10^6 /(360 *1000)) ;
         $thickness =   $convertedItems *  1.6;}
         else if($fromConvertionUnit == '5.25 floppy disk single-sided, single-density' && $toConvertionUnit == '1650 bpi 9-track tape (1,650 bits per inch)') {

       $convertedItems = $items/ (46 *10^6 /(360 *1000)) ;
              $thickness =   $convertedItems *  1.6;}
     else if($fromConvertionUnit == '5.25 floppy disk single-sided, single-density' && $toConvertionUnit == '6250 bpi 9-track tape (6250 bits per inch)') {

       $convertedItems = $items/ (46 *10^6 /(360 *1000))
           ;
          $thickness =   $convertedItems *  1.6;}
         else if($fromConvertionUnit == '5.25 floppy disk single-sided, single-density' && $toConvertionUnit == 'Paper tape') {

       $convertedItems = $items / (180 *10^6 /(360 *1000));     
             $thickness =   $convertedItems *  1.6;}
        else if($fromConvertionUnit == '5.25 floppy disk single-sided, single-density' && $toConvertionUnit == 'IBM Data Cell') {

       $convertedItems = $items/ (3 *10^9 /(360 *1000)) ;
            $thickness =   $convertedItems *  1.6;}


      if($fromConvertionUnit == '5.25 floppy disk double-sided, double-density' && $toConvertionUnit == 'punched cards') {

 $convertedItems = $items /(80/ (1.2 *10^6)) ;
           $thickness =   $convertedItems *  1.6;}
    
       else if($fromConvertionUnit == '5.25 floppy disk double-sided, double-density' && $toConvertionUnit == '3.5 floppy disk') {

       $convertedItems = $items /(1.14*10^6 / (1.2 *10^6))
 ;     $thickness =   $convertedItems *  1.6;}
       else if($fromConvertionUnit == '5.25 floppy disk double-sided, double-density' && $toConvertionUnit == '5.25 floppy disk single-sided, single-density') {
 
       $convertedItems = $items /( 360 *1000/ (1.2 *10^6));}
       else if($fromConvertionUnit == '5.25 floppy disk double-sided, double-density' && $toConvertionUnit == '5.25  floppy disk single-sided, double-density') {

       $convertedItems = $items /( 600 *1000 /(1.2 *10^6)) ;
            $thickness =   $convertedItems *  1.6;}
        else if($fromConvertionUnit == '5.25 floppy disk double-sided, double-density' && $toConvertionUnit == '5 MB hard Winchester Hard Drive') {

       $convertedItems = $items / (5 *10^6 /(1.2 *10^6)) ;
             $thickness =   $convertedItems *  1.6;}
         else if($fromConvertionUnit == '5.25 floppy disk double-sided, double-density' && $toConvertionUnit == '1650 bpi 9-track tape (1,650 bits per inch)') {

       $convertedItems = $items /(46 *10^6 /(1.2 *10^6)) ;
              $thickness =   $convertedItems *  1.6;}
     else if($fromConvertionUnit == '5.25 floppy disk double-sided, double-density' && $toConvertionUnit == '6250 bpi 9-track tape (6250 bits per inch)') {

       $convertedItems = $items/ (180 *10^6 /(1.2 *10^6))
 ;     $thickness =   $convertedItems *  1.6;}
         else if($fromConvertionUnit == '5.25 floppy disk double-sided, double-density' && $toConvertionUnit == 'Paper tape') {

       $convertedItems = $items/ ( 180 *10^6 /(1.2 *10^6));
              $thickness =   $convertedItems *  1.6;}
        else if($fromConvertionUnit == '5.25 floppy disk double-sided, double-density' && $toConvertionUnit == 'IBM Data Cell') {

       $convertedItems = $items/ (3 *10^9 /(1.2 *10^6)) ;
            $thickness =   $convertedItems *  1.6;}



      if($fromConvertionUnit == '5 MB hard Winchester Hard Drive' && $toConvertionUnit == 'punched cards') {

 $convertedItems = $items / (80/ (5 *10^6)) ;}
    
       else if($fromConvertionUnit == '5 MB hard Winchester Hard Drive' && $toConvertionUnit == '3.5 floppy disk') {

       $convertedItems = $items/ (1.14*10^6 / (5 *10^6));
            $thickness =   $convertedItems *  1.6;}
       else if($fromConvertionUnit == '5 MB hard Winchester Hard Drive' && $toConvertionUnit == '5.25 floppy disk single-sided, single-density') {
 
       $convertedItems = $items/ (360 *1000/ (5 *10^6));
            $thickness =   $convertedItems *  1.6;}
       else if($fromConvertionUnit == '5 MB hard Winchester Hard Drive' && $toConvertionUnit == '5.25  floppy disk single-sided, double-density') {

       $convertedItems = $items/(600 *1000 /(5 *10^6));
            $thickness =   $convertedItems *  1.6;}
        else if($fromConvertionUnit == '5 MB hard Winchester Hard Drive' && $toConvertionUnit == '5.25 floppy disk double-sided, double-density') {

       $convertedItems = $items / (1.2 *10^6 /(5 *10^6));
             $thickness =   $convertedItems *  1.6;}
         else if($fromConvertionUnit == '5 MB hard Winchester Hard Drive' && $toConvertionUnit == '1650 bpi 9-track tape (1,650 bits per inch)') {

       $convertedItems = $items/ (46 *10^6 /(5 *10^6)) ;
              $thickness =   $convertedItems *  1.6;}
     else if($fromConvertionUnit == '5 MB hard Winchester Hard Drive' && $toConvertionUnit == '6250 bpi 9-track tape (6250 bits per inch)') {

       $convertedItems = $items/ (180 *10^6 /(5 *10^6));
          $thickness =   $convertedItems *  1.6;}
         else if($fromConvertionUnit == '5 MB hard Winchester Hard Drive' && $toConvertionUnit == 'Paper tape') {

       $convertedItems = $items/ (180 *10^6 /(5 *10^6));
              $thickness =   $convertedItems *  1.6;}
        else if($fromConvertionUnit == '5 MB hard Winchester Hard Drive' && $toConvertionUnit == 'IBM Data Cell') {

       $convertedItems = $items/ (3 *10^9 /(5 *10^6)) ;
            $thickness =   $convertedItems *  1.6;}
   

      if($fromConvertionUnit == '1650 bpi 9-track tape (1,650 bits per inch)' && $toConvertionUnit == 'punched cards') {

 $convertedItems = $items/ (80/ (46 *10^6)) ;
           $thickness =   $convertedItems *  12.7;}
    
       else if($fromConvertionUnit == '1650 bpi 9-track tape (1,650 bits per inch)' && $toConvertionUnit == '3.5 floppy disk') {

       $convertedItems = $items/( 1.14*10^6 / (46 *10^6));
        $thickness =   $convertedItems *  12.7;}
       else if($fromConvertionUnit == '1650 bpi 9-track tape (1,650 bits per inch)' && $toConvertionUnit == '5.25 floppy disk single-sided, single-density') {
 
       $convertedItems = $items/( 360 *1000/ (46 *10^6));
        $thickness =   $convertedItems *  12.7;}
       else if($fromConvertionUnit == '1650 bpi 9-track tape (1,650 bits per inch)' && $toConvertionUnit == '5.25  floppy disk single-sided, double-density') {

       $convertedItems = $items /(600 *1000 /(46 *10^6));
        $thickness =   $convertedItems *  12.7;}
        else if($fromConvertionUnit == '1650 bpi 9-track tape (1,650 bits per inch)' && $toConvertionUnit == '5.25 floppy disk double-sided, double-density') {

       $convertedItems = $items /(1.2 *10^6 /(46 *10^6));
          $thickness =   $convertedItems *  12.7;}
         else if($fromConvertionUnit == '1650 bpi 9-track tape (1,650 bits per inch)' && $toConvertionUnit == '5 MB hard Winchester Hard Drive') {

       $convertedItems = $items /(5 *10^6 /(46 *10^6)) ;
           $thickness =   $convertedItems *  12.7;}
     else if($fromConvertionUnit == '1650 bpi 9-track tape (1,650 bits per inch)' && $toConvertionUnit == '6250 bpi 9-track tape (6250 bits per inch)') {

       $convertedItems = $items /(180 *10^6 /(46 *10^6));
       $thickness =   $convertedItems *  12.7;}
         else if($fromConvertionUnit == '1650 bpi 9-track tape (1,650 bits per inch)' && $toConvertionUnit == 'Paper tape') {

       $convertedItems = $items/ (180 *10^6 /(46 *10^6));
           $thickness =   $convertedItems *  12.7;}
        else if($fromConvertionUnit == '1650 bpi 9-track tape (1,650 bits per inch)' && $toConvertionUnit == 'IBM Data Cell') {

       $convertedItems = $items/ (3 *10^9 /(46 *10^6)) ;
         $thickness =   $convertedItems *  12.7;}


      if($fromConvertionUnit == '6250 bpi 9-track tape (6250 bits per inch)' && $toConvertionUnit == 'punched cards') {

 $convertedItems = $items/( 80/ (180 *10^6)) ;
        $thickness =   $convertedItems *  12.7;}
    
       else if($fromConvertionUnit == '6250 bpi 9-track tape (6250 bits per inch)' && $toConvertionUnit == '3.5 floppy disk') {

       $convertedItems = $items/ (1.14*10^6 / (180 *10^6));
         $thickness =   $convertedItems *  12.7;}
       else if($fromConvertionUnit == '6250 bpi 9-track tape (6250 bits per inch)' && $toConvertionUnit == '5.25 floppy disk single-sided, single-density') {
 
       $convertedItems = $items/ (360 *1000/ (180 *10^6));
         $thickness =   $convertedItems *  12.7;}
       else if($fromConvertionUnit == '6250 bpi 9-track tape (6250 bits per inch)' && $toConvertionUnit == '5.25  floppy disk single-sided, double-density') {

       $convertedItems = $items /( 600 *1000 /(180 *10^6));
         $thickness =   $convertedItems *  12.7;}
        else if($fromConvertionUnit == '6250 bpi 9-track tape (6250 bits per inch)' && $toConvertionUnit == '5.25 floppy disk double-sided, double-density') {

       $convertedItems = $items /(1.2 *10^6 /(180 *10^6));
          $thickness =   $convertedItems *  12.7;}
         else if($fromConvertionUnit == '6250 bpi 9-track tape (6250 bits per inch)' && $toConvertionUnit == '1650 bpi 9-track tape (1,650 bits per inch)') {

       $convertedItems = $items /(46 *10^6 /(180 *10^6)) ;
           $thickness =   $convertedItems *  12.7;}
     else if($fromConvertionUnit == '6250 bpi 9-track tape (6250 bits per inch)' && $toConvertionUnit == '5 MB hard Winchester Hard Drive') {

       $convertedItems = $items /(5 *10^6/(180 *10^6));
       $thickness =   $convertedItems *  12.7;}
         else if($fromConvertionUnit == '6250 bpi 9-track tape (6250 bits per inch)' && $toConvertionUnit == 'Paper tape') {

       $convertedItems = $items /(180 *10^6 /(180 *10^6));
           $thickness =   $convertedItems *  12.7;}
        else if($fromConvertionUnit == '6250 bpi 9-track tape (6250 bits per inch)' && $toConvertionUnit == 'IBM Data Cell') {

       $convertedItems = $items/( 3 *10^9 /(180 *10^6)) ;
          $thickness =   $convertedItems *  12.7;}


      if($fromConvertionUnit == 'Paper tape' && $toConvertionUnit == 'punched cards') {

  $convertedItems = $items /(80/ (180 *10^6)) ;
      $thickness =   $convertedItems *  0.1;
      }
    
       else if($fromConvertionUnit == 'Paper tape' && $toConvertionUnit == '3.5 floppy disk') {

       $convertedItems = $items/( 1.14*10^6 / (180 *10^6));
        $thickness =   $convertedItems *  0.1;}
       else if($fromConvertionUnit == 'Paper tape' && $toConvertionUnit == '5.25 floppy disk single-sided, single-density') {
 
       $convertedItems = $items /( 360 *1000/ (180 *10^6));
                $thickness =   $convertedItems *  0.1;}
       else if($fromConvertionUnit == 'Paper tape' && $toConvertionUnit == '5.25  floppy disk single-sided, double-density') {

       $convertedItems = $items /( 600 *1000 /(180 *10^6));
             $thickness =   $convertedItems *  0.1;}

        else if($fromConvertionUnit == 'Paper tape' && $toConvertionUnit == '5.25 floppy disk double-sided, double-density') {

       $convertedItems = $items /(1.2 *10^6 /(180 *10^6)) ;
                 $thickness =   $convertedItems *  0.1;
}
         else if($fromConvertionUnit == 'Paper tape' && $toConvertionUnit == '1650 bpi 9-track tape (1,650 bits per inch)') {

       $convertedItems = $items /(46 *10^6 /(180 *10^6)) ;
            $thickness =   $convertedItems *  0.1;}
     else if($fromConvertionUnit == 'Paper tape' && $toConvertionUnit == '5 MB hard Winchester Hard Drive') {

       $convertedItems = $items /(5 *10^6/(180 *10^6));
       $thickness =   $convertedItems *  0.1;}
         else if($fromConvertionUnit == 'Paper tape' && $toConvertionUnit == '6250 bpi 9-track tape (6250 bits per inch)') {

       $convertedItems = $items/ (180 *10^6 /(180 *10^6));
           $thickness =   $convertedItems *  0.1;}
        else if($fromConvertionUnit == 'Paper tape' && $toConvertionUnit == 'IBM Data Cell') {

       $convertedItems = $items /( 3 *10^9 /(180 *10^6));
          $thickness =   $convertedItems *  0.1;}




      if($fromConvertionUnit == 'IBM Data Cell' && $toConvertionUnit == 'punched cards') {

 $convertedItems = $items / (80/ (3 *10^9)) ;
       $thickness =   $convertedItems *  0.127;}
    
       else if($fromConvertionUnit == '5 MB hard Winchester Hard Drive' && $toConvertionUnit == '3.5 floppy disk') {

       $convertedItems = $items / (1.14*10^6 / (3 *10^9));
              $thickness =   $convertedItems *  0.127;}
       else if($fromConvertionUnit == '5 MB hard Winchester Hard Drive' && $toConvertionUnit == '5.25 floppy disk single-sided, single-density') {
 
       $convertedItems = $items / (360 *1000/ (3 *10^9));
        $thickness =   $convertedItems *  0.127;}
       else if($fromConvertionUnit == '5 MB hard Winchester Hard Drive' && $toConvertionUnit == '5.25  floppy disk single-sided, double-density') {

       $convertedItems = $items /( 600 *1000 /(3 *10^9));
        $thickness =   $convertedItems *  0.127;}
        else if($fromConvertionUnit == '5 MB hard Winchester Hard Drive' && $toConvertionUnit == '5.25 floppy disk double-sided, double-density') {

       $convertedItems = $items / (1.2 *10^6 /(3 *10^9));
         $thickness =   $convertedItems *  0.127;}
         else if($fromConvertionUnit == '5 MB hard Winchester Hard Drive' && $toConvertionUnit == '1650 bpi 9-track tape (1,650 bits per inch)') {

       $convertedItems = $items / (46 *10^6 /(3 *10^9)) ;
          $thickness =   $convertedItems *  0.127;}
     else if($fromConvertionUnit == '5 MB hard Winchester Hard Drive' && $toConvertionUnit == '6250 bpi 9-track tape (6250 bits per inch)') {

       $convertedItems = $items /(180 *10^6 /(3 *10^9));
      $thickness =   $convertedItems *  0.127;}
         else if($fromConvertionUnit == '5 MB hard Winchester Hard Drive' && $toConvertionUnit == 'Paper tape') {

       $convertedItems = $items /( 180 *10^6 /(3 *10^9));
          $thickness =   $convertedItems *  0.127;}
        else if($fromConvertionUnit == '5 MB hard Winchester Hard Drive' && $toConvertionUnit == '5 MB hard Winchester Hard Drive') {

       $convertedItems = $items/( 5 *10^6 /(3 *10^9)) ;
       $thickness =   $convertedItems *  0.127; }

       
}


?>

<html lang="en">
   <head>
       <meta charset="UTF-8">
       <title>Items Converter</title>
   </head>
   <body >
       <style>
body{background-color: #eb9024}
    
.main{border: 1px solid;
    width: 60%;
    margin: 60% auto ;
    box-shadow: 2px 2px 20px brown;
    background-color: cornflowerblue;
    border-radius: 50px; }
.column {
    float: left;
    width: 50%;
    padding: 10px;
    height: 300px; 
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        width: 100%;
    }
}
    
p{margin:10% auto;
    padding: 10;
    width: 80%;}
input{padding: 10px;
    border:2px solid gray;
    border-radius:10px;}
select{padding: 10px;
    border:2px solid gray;
    border-radius:10px;}
h1{text-align: center;
    color: green;}
</style>
       <div id="converter" class="column">
       <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
         
<!-- If the temperature value has be submitted and has data then it will prefilled -->
               <label for="items">Amount of items</label> <br/>
               
               <input type="number" name="items" id="items" value="<?php echo (!empty($items)) ? $items : '' ?>" class="input">
               <br>
  
               <label for="fromConvertionUnit">From Conversion Unit</label><br/>
   
              <select name="fromConvertionUnit" id="fromConvertionUnit" onchange="showfield(this.options[this.selectedIndex].value" class = "select">
                 
                   <option value=""> Select an item</option>
                   <option  value="punched cards">Punched card</option>
    <option value="3.5 floppy disk">3.5 floppy disk</option>
    <option  value="5.25 floppy disk single-sided, single-density">5.25" floppy disk single-sided, single-density</option>
    <option value="5.25  floppy disk single-sided, double-density">5.25" floppy disk single-sided, double-density</option>
    <option value="5.25 floppy disk double-sided, double-density">5.25" floppy disk double-sided, double-density</option>
    <option value="5 MB hard Winchester Hard Drive">5 MB hard Winchester Hard Drive</option>
    <option value="1650 bpi 9-track tape (1,650 bits per inch)">1650 bpi 9-track tape</option>
    <option value="6250 bpi 9-track tape (6250 bits per inch)">6250 bpi 9-track tape</option>
    <option value="Paper tape">Paper tape</option>
     <option value="IBM Data Cell">IBM Data Cell data cell</option>
             
               </select>
 
       
          <br>
               <label for="toConvertionUnit">To Conversion Unit</label><br/>
               <select name="toConvertionUnit" id="toConvertionUnit" onchange="showfield(this.options[this.selectedIndex].value" >
                   <option> Select an item</option>
                   <option  value="punched cards">Punched card</option>
    <option value="3.5 floppy disk">3.5 floppy disk</option>
    <option  value="5.25 floppy disk single-sided, single-density">5.25" floppy disk single-sided, single-density</option>
    <option value="5.25  floppy disk single-sided, double-density">5.25" floppy disk single-sided, double-density</option>
    <option value="5.25 floppy disk double-sided, double-density">5.25" floppy disk double-sided, double-density</option>
    <option value="5 MB hard Winchester Hard Drive">5 MB hard Winchester Hard Drive</option>
    <option value="1650 bpi 9-track tape (1,650 bits per inch)">1650 bpi 9-track tape</option>
    <option value="6250 bpi 9-track tape (6250 bits per inch)">6250 bpi 9-track tape</option>
    <option value="Paper tape">Paper tape</option>
     <option value="IBM Data Cell">IBM Data Cell data cell</option>
 
               </select>
     
<!-- Once the page is submitted and conversion is done the respective values will be added in the following section -->
        <br>
<input type="submit" value="Convert">
               <br>
        
               <label for="converted_value">Converted Value</label><br/>
<input type="number" value="<?php echo (!empty($convertedItems)) ? $convertedItems : '0' ?>"> <br>
                  We need  <?php echo  (!empty($convertedItems)) ? $convertedItems: '--' ?> <?php echo  (!empty($toConvertionUnit)) ? $toConvertionUnit : '--' ?>  to hold the information of   <?php  echo (!empty($items)) ? $items : '--' ?> <?php echo  (!empty($fromConvertionUnit)) ? $fromConvertionUnit : '--' ?> 
               <br>
            
              <label for = "thickness"> The thickness of  <?php echo  (!empty($convertedItems)) ? $convertedItems: '--' ?> <?php echo  (!empty($toConvertionUnit)) ? $toConvertionUnit : '--' ?>  in mm is: </label> <br/>
               <input type="number" value="<?php echo (!empty($thickness)) ? $thickness : '0' ?>">
          <br>
  
        
           </form>
          </div>
  </body>
        
   <script type="text/javascript">
function showfield(name){
  if(name=='pcard')document.getElementById('div1').innerHTML ='Size: 187.325mm x 82.55mm <br> Size in bytes:80  <br>  Thickness:  0.17785.2mm <br> Link to ComputerMuseum: <a href="https://computermuseum.uwaterloo.ca/index.php/Detail/objects/1">punched card<a> <br> <input type="image" src="http://www.jkmscott.net/data/Punched%20card%20002.jpg"  width = "25%", height = "30%" />';
  
else if (name=='fdisk3.5')document.getElementById('div1').innerHTML ='size: 93.7mm x 90.0mm <br> Size in bytes: 1.4x10^6 <br>  thickness: 3.3mm <br> Link to ComputerMuseum: <a href=" https://computermuseum.uwaterloo.ca/index.php/Detail/objects/2518">3.5 floppy disk<a> <br> <input type="image" src="https://thumbs.dreamstime.com/b/3-5-inch-floppy-disk-4831420.jpg"  width = "25%", height = "30%" />';
   
     else if(name=='fdisk5.25ss')document.getElementById('div1').innerHTML ='size: 133.3mm x 133.3mm <br> Size in bytes: 36 x 10^4 <br>  thickness:1.6mm <br> Link to ComputerMuseum: <a href=" https://computermuseum.uwaterloo.ca/index.php/Detail/objects/2518">5.25 single sided, single density floppy disk<a> <br>  <input type="image" src="http://i.ebayimg.com/00/s/NTAwWDUwMA==/z/omAAAOSwg3FUmDeR/$_3.JPG?set_id=2"  width = "25%", height = "30%" />';
    
      else if(name=='fdisk5.25sd')document.getElementById('div1').innerHTML ='size: 133.3mm x 133.3mm <br> Size in bytes: 6 x 10^5 <br>  thickness:1.6mm <br> Link to ComputerMuseum: <a href=" https://computermuseum.uwaterloo.ca/index.php/Detail/objects/2287">5.25 single sided, double density floppy disk<a> <br> <input type="image" src="http://i.ebayimg.com/00/s/NTAwWDUwMA==/z/omAAAOSwg3FUmDeR/$_3.JPG?set_id=2"  width = "25%", height = "30%" />';
    
      else if(name=='fdisk5.25dd')document.getElementById('div1').innerHTML ='size: 133.3mm x 133.3mm <br> Size in bytes: 1.2 x 10^6 <br>  thickness:1.6mm <br> Link to ComputerMuseum: <a href="  https://computermuseum.uwaterloo.ca/index.php/Detail/objects/2286">5.25 double sided, double density floppy disk<a> <br> <input type="image" src="https://offog.org/notes/archiving/minifloppies/disk-bbc-master_size1600.jpg"  width = "25%", height = "30%" />';
    
      else if(name=='hdrive')document.getElementById('div1').innerHTML ='size: 63.5mm x 88.9mm <br> Size in bytes: 5 x 10^6 <br>  thickness:5mm <br> Link to ComputerMuseum: <a href="  https://computermuseum.uwaterloo.ca/index.php/Detail/objects/1689">5MB Hard drive<a><br> <input type="image" src="https://i.kinja-img.com/gawker-media/image/upload/s--D_395r8U--/c_scale,f_auto,fl_progressive,q_80,w_800/18mpcgga8mqmdjpg.jpg"  width = "25%", height = "30%" />';
    
      else if(name=='1650ttape')document.getElementById('div1').innerHTML ='diameter: 266.7mm <br> Size in bytes: 46 x 10^6 <br>  thickness: 12.7 mm <br> <input type="image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHScRnQlX-89eUXQZG00UmeO8O-1BdPGxlXqKo-HxSUd9Cq74zrQ"  width = "25%", height = "30%" />';
    
      else if(name=='6250ttape')document.getElementById('div1').innerHTML ='diameter: 266.7mm <br> Size in bytes: 18 x 10^7 <br>  thickness: 12.7 mm <br> Link to ComputerMuseum: <a href="  https://computermuseum.uwaterloo.ca/index.php/Detail/objects/2867#"> 6250 BPI tape<a><br> <input type="image" src="http://computer-convert.com/index_htm_files/21313.jpg"  width = "25%", height = "30%" />';
    
      else if(name=='ptape')document.getElementById('div1').innerHTML ='size: 17.46mm x 25.4mm <br> Size in bytes: 18 x 10^7 <br>  thickness: 0.1mm <br> <input type="image" src="https://www.papermart.com/Images/Item/jpg_tape/3130330.JPG?rnd=1"  width = "25%", height = "30%" />';
    
      else if(name=='ibm')document.getElementById('div1').innerHTML ='size: 57.15mm x 330.2mm <br> Size in bytes: 3 x 10^9 <br>  thickness: 0.127mm <br> Link to ComputerMuseum: <a href="https://computermuseum.uwaterloo.ca/index.php/Detail/objects/1037">IBM Data Cell<a><br> <input type="image" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fd/IBM_3850_MSS_Cartridge_Closed.01.jpg/300px-IBM_3850_MSS_Cartridge_Closed.01.jpg"  width = "25%", height = "30%" />';
    
  else document.getElementById('div1').innerHTML='';
  
}
</script>



        <label class="what">Description and image of the items</label>
    <br>
<select id="ItemList"  onchange="showfield(this.options[this.selectedIndex].value)" class = "what" class = "column">
    <option >Select an item</option>
    <option  value="pcard">Punch card</option>
    <option value="fdisk3.5">3.5 floppy disk</option>
    <option  value="fdisk5.25ss">5 1/4" floppy disk single-sided, single-density</option>
    <option value="fdisk5.25sd">5 1/4" floppy disk single-sided, double-density</option>
    <option value="fdisk5.25dd">5 1/4" floppy disk double-sided, double-density</option>
    <option value="hdrive">5 MB hard Winchester Hard Drive</option>
    <option value="1650ttape">1650 bpi 9-track tape</option>
    <option value="6250ttape">6250 bpi 9-track tape</option>
    <option value="ptape">Paper tape</option>
     <option value="ibm">IBM data cell</option>
 
</select>

   <div class="image" id = "div1"> </div>
    </html>
    
    </body>
    
    
   