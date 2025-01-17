<?php namespace Pixie\ConnectionAdapters;

class Mysql extends BaseAdapter
{
    /**
     * @param $config
     *
     * @return mixed
     */
    protected function doConnect($config)
    {
        $connectionString = "mysql:dbname={$config['database']}";
        
        if (isset($config['host'])) {
            $connectionString .= ";host={$config['host']}";
        }

        $connection = $this->container->build(
            '\PDO',
            array($connectionString, $config['username'], $config['password'], $config['options'])
        );

        if (isset($config['charset'])) {
            $connection->prepare("SET NAMES '{$config['charset']}'")->execute();
        }

        return $connection;
    }
}
