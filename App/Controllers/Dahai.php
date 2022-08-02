<?php

namespace App\Controllers;

use PhpBoot\DB\DB;
use PhpBoot\DI\Traits\EnableDIAnnotations;

/**
 * 尝试使用phpboot
 *
 * @path /dahai
 */
class Dahai
{
    use EnableDIAnnotations; //启用通过@inject标记注入依赖

    /**
     * @inject
     * @var DB
     */
    private $db;

    /**
     * @route GET /
     */
    public function info($page, $pageSize)
    {
        $products = $this->db->select("*")
            ->from("product")
            ->getFirst();
        var_dump($products);
        return ["page" => $page, "pageSize" => $pageSize];
    }
}