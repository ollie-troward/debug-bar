<?php

namespace Troward\Debug;

/**
 * Class Bar
 * @package Troward\Debug
 */
class Bar
{
    /**
     * Reference to view file.
     *
     * @var string
     */
    private $view = __DIR__ . '/../Resources/views/bar.html';

    /**
     * Display the debug bar.
     *
     * @return mixed
     */
    public function display()
    {
        readfile($this->view);
    }
}
