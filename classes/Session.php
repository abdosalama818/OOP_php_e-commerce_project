<?php




class Session{

    public function __construct()
    {
        if(session_status()==PHP_SESSION_NONE){
            session_start();
        }
    }
    public function set( $key , $value){
        $_SESSION[$key]=$value;
    }


    public function get( $key){
       return $_SESSION[$key];
    }

    public function hasSet( $key){
        return isset($_SESSION[$key]);
     }

     public function remove( $key){
       unset($_SESSION[$key]) ;
     }

     public function destroy(){
       $_SESSION=[];
       session_destroy();
      }
 
}