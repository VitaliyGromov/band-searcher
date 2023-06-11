<?php

if(!function_exists('yesOrNo')){
    
    function yesOrNo(bool $var): string
    {
        return $var ? "Да" : "Нет";
    }
}

?>
