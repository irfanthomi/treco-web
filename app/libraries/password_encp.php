<?php

class Data_encpt
{

 

    public static function encrypt($pass) {
         return crypt($pass,'ass');
    }

    
}