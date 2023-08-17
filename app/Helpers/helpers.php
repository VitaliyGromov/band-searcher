<?php

declare(strict_types=1);

if (! function_exists('yesOrNo')) {

    function yesOrNo(bool $var): string
    {
        return $var ? 'Да' : 'Нет';
    }
}

if (! function_exists('salaryFormat')) {

    function salaryFormat(int $salary): string
    {
        return number_format($salary, 2, '.', ' ').' руб.';
    }
}
