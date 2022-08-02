<?php

namespace App\Controllers;

/**
 * 尝试使用phpboot
 *
 * @path /
 */
class Index
{
    /**
     * @route GET /
     */
    public function info()
    {
        var_dump($_GET);
    }
}