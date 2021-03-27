<?php namespace Pixie\QueryBuilder\Adapters;

class Mysql extends BaseAdapter
{
    /**
     * @var string
     */
    protected $leftSanitizer = '`';

    /**
     * @var string
     */
    protected $rightSanitizer = '`';
}
