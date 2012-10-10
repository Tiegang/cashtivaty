<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


    

 foreach ($results as $result){
     if($result->accesslevels=='onlyme')
     {
         echo 'sorry, you do not have authority to access this page.';
         return;
     }
     else{
                 echo 'Title:';
                 echo $result->page_title;
                 echo "<hr/>";
                 echo 'Body';
                 echo $result->page_desc;
     
     }
        }

?>
