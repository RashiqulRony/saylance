<?php

namespace App\Trait;

trait Helper
{
    public function linkCheck($link)
    {
        if (substr($link, 0, 7) == "http://") {
            $url = $link;
        }elseif (substr($link, 0, 8) == "https://") {
            $url = $link;
        }elseif (substr($link, 0, 4) == "www.") {
            $url = "http://$link";
        } else {
            $url = "http://$link";
        }
        return $url;
    }
}
