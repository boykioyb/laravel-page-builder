<?php

use JetBrains\PhpStorm\NoReturn;

if (!function_exists('lpb_builder_style')) {
    /**
     * Render manually registered style.
     *
     * @return void
     */
    function lpb_builder_style(): string
    {
        return '<link rel="stylesheet" href="' . asset('assets/pagebuilder/app.css') . '"/>';
    }

}
if (!function_exists('lpb_builder_script')) {

    /**
     * Render manually registered script.
     *
     * @return void
     */
    function lpb_builder_script(): string
    {
        return '<script defer type="text/javascript" src="' . asset('assets/pagebuilder/app.js') . '"></script>';
    }
}
