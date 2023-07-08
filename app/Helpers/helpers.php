<?php
declare(strict_types=1);

if(!function_exists('yesOrNo')){
    
    function yesOrNo(bool $var): string
    {
        return $var ? "Да" : "Нет";
    }
}