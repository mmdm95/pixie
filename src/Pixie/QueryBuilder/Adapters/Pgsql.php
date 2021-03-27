<?php namespace Pixie\QueryBuilder\Adapters;

class Pgsql extends BaseAdapter
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
