<?php
declare(strict_types=1);

function get(string $name,$default='');?string{
    return $_GET[$name]??$default;
}

function title(string $content, $subTitle='',int $level=1, bool $toUpper=false):string{
if($toUpper){
    $content = strtoupper($content);
}
    $result="<h$level>$content</$level>";
    if($subTitle){
        $result+="<p>$subTitle</p>";
    }
    return $result;
}