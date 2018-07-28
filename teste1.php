
  <!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> Exercício 1</title>
    <link rel="stylesheet"  type="text/css" />
</head>
<body>
     <p>
          Escreva um programa que imprima números de 1 a 100. Mas, para múltiplos de 3 imprima 'Fizz' em vez do número e para múltiplos de 5 imprima 'Buzz'.Para número 
          múltiplos de ambos (3 e 5), imprima 'FizzBuzz'. 
     </p>
<br>
<br>

<?php
 
   
    for ($x = 1; $x <= 100 ; $x++) 
    {
      
           if((($x % 3)!= 0)  && (($x % 5) != 0)){
                
             echo "<b> ( ". $x ." )</b><br>";
               
     }else{
              if((($x % 3) == 0) && (($x % 5) == 0))
              
                 { 
                     echo ("<b   style='color:blue;' > FizzBuzz   </b> <br>"); 
                     
                  }elseif((($x % 3) == 0) && (($x % 5) != 0)){
                      
                     echo("<b style='color:green;'> Fizz </b> <br>" );
                     
                 }else{
                       if((($x % 3) != 0) && (($x % 5) == 0))
                         {
                             
                              echo ("<b style='color:blue;'> Buzz </b>  <br>" );
                         
                         }
                       }
           }
       }         
    


?>

</body>
</html>    
