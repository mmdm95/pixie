<?php namespace Pixie\QueryBuilder\Adapters;

class Sqlite extends BaseAdapter
{
    /**
     * @var string
     */
    protected $leftSanitizer = '"';

    /**
     * @var string
     */
    protected $rightSanitizer = '"';
}
