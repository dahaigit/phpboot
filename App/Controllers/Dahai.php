<?php

namespace App\Controllers;

/**
 * 尝试使用phpboot
 *
 * @path /dahai
 */
class Dahai
{
    /**
     * @route GET /
     */
    public function info()
    {
        var_dump($_GET);
    }
}