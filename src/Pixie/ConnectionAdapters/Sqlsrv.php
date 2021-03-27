<?php

namespace Pixie\ConnectionAdapters;

class Sqlsrv extends BaseAdapter
{
    /**
     * @param $config
     *
     * @return mixed
     */
    protected function doConnect($config)
    {
        $connectionString = "sqlsrv:Database={$config['database']}";

        if (isset($config['host'])) {
            $connectionString .= ";Server={$config['host']}";
        }

        if (isset($config['port'])) {
            $connectionString .= ";port={$config['port']}";
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