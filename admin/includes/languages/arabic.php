<?php
function lang($word_key){

    static  $lang = array(
        'MESSAGE' => 'مرحبا',
        'ADMIN'=> 'المدير'


    );
    if (!isset($lang[$word_key])){
        return $word_key;
    } else{
        return $lang[$word_key];
    }


}