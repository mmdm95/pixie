<?php namespace Pixie\QueryBuilder\Adapters;

class Sqlsrv extends BaseAdapter
{
    /**
     * @var string
     */
    protected $leftSanitizer = '[';

    /**
     * @var string
     */
    protected $rightSanitizer = ']';
}
