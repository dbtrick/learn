<?php


namespace App\Classes;
class Debug
{
    /**
     * Pretty print any variable
     *
     * @param mixed $data The variable to debug
     * @param bool $exit Whether to stop script execution after dumping
     */
    public static function show(mixed $data, bool $exit = false): void
    {
        echo '<pre style="background:#111; color:#0f0; padding:10px; border-radius:6px; font-size:14px;">';
        var_dump($data);
        echo '</pre>';

        if ($exit) {
            exit; // stops the script if you want to debug and halt
        }
    }
}