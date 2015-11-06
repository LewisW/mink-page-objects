<?php

namespace Google;

use Goez\PageObjects\Page;

class Home extends Page
{
    protected $parts = [
        'SearchForm' => ['css' => 'form'],
    ];

    public function search($keyword)
    {
        return $this->getPartialElement('SearchForm')
            ->search($keyword);
    }
}