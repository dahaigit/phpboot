<?php

namespace App\Controllers;

/**
 * @path /books
 */
class Books
{
    /**
     * @route GET /{id}
     */
    public function getBook($id)
    {
        var_dump(55555);
        var_dump($id);exit;
    }
}