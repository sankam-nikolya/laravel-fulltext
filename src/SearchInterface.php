<?php
/**
 * Created by PhpStorm.
 * User: bjorn
 * Date: 3-1-2017
 * Time: 14:01
 */

namespace Swis\LaravelFulltext;

interface SearchInterface
{
    public function run();
    public function runForClass();
    public function searchQuery();
}
