<?php

function lang($word_key){

    static  $lang = array(
        'MESSAGE' => 'welecome',
        'ADMIN'=> 'Administrator'


    );
        if (!isset($lang[$word_key])){
            return $word_key;
        } else{
            return $lang[$word_key];
        }


}