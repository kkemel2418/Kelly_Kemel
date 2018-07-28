  <?php
     
     /*
      * Refatore o código abaixo , fazendo alterações que julgar necessário
      */
    
     
  
     class MyUserClass
     {
        public function getUserList()
         
         {
              $dbconn = new DatabaseConnection('localhost','TESTE_DBR','keme1q2w3e');
              $results = $dbconn->query('SELECT name FROM user');
             
             if(!$results)
             {
                  die(" Sem valores para retornar. ". mysql_error());
                 
             }else{
                 
                 echo mysql_result($results, 'name');
                
             }
         }
      }
     
     
     
   