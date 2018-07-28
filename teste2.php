 
<?php
      
    /*
     *  Refatore o codigo abaixo, fazendo as alterações que julgar necessario
     */  
    
    
    /*
     *  Nenhum aviso é gerado se a variável não existir. Isso significa que empty () é essencialmente o equivalente conciso a !Isset ($ var) || $ var == false.
         Então,  !empty ($ var) seria o equivalente a isset () && $ var == true.
     *  
     */
    
     
       if(!empty($_SESSION['loggedin'])){
           
          header('Location : http://www.google.com');
          exit();
          
     }elseif(!empty($_COOKIE['Loggedin'])){
         
           header("Location : http://www.google.com");
           exit();
     }
 
  