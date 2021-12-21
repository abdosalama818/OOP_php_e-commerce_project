<?php




class Request {
    

    public function get(string $key){
        
        return $_GET[$key];
     }

     public function post(string $key){
         
        return $_POST[$key];
     }
// to files like image
     public function files(string $key){
         
      return $_FILES[$key];
   }

     public function postclean(string $key){

        return trim(htmlspecialchars($_POST[$key]));
         
      }



      
      public function hasGet($key):bool{
         
         
         return isset($_GET[$key]);
      }


      public function hasPost($key):bool{
         
         
         return isset($_POST[$key]);
      }

      
}