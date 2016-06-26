<?php

namespace Dave;

class App
{

    public static function run()
    {
        $img = new \Securimage();
        $img->charset = '0123456789';
        $img->num_lines = 0;
        $img->perturbation = 0.1;
	$img->text_color = new \Securimage_Color('#000000');
        $img->show();
    }

}
