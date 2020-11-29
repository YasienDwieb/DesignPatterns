<?php
declare(strict_types=1);

namespace DesignPatterns\Builder;

use DesignPatterns\Builder\Builders\MysqlQueryBuilder;
use DesignPatterns\Builder\Builders\PostgresqlQueryBuilder;
use DesignPatterns\Builder\Builders\SQLQueryBuilder;

require_once '../vendor/autoload.php';

class App {
    public function run(SQLQueryBuilder $queryBuilder)
    {
        try {
            $query = $queryBuilder->select('users', ['name', 'age'])
                ->where('age', '>', '20')
                ->limit(100)
                ->getSQL();

            echo $query;
        }catch (\Exception $e) {
            var_dump($e->getMessage());
        }
    }

    public function getBuilder($ENV_DB = "Mysql")
    {
        $builder = new MysqlQueryBuilder();

        if($ENV_DB == 'Postgresql'){
            $builder = new PostgresqlQueryBuilder();
        }

        return $builder;
    }
}

$app = new App();
$builder = $app->getBuilder();
$app->run($builder);

$builder = $app->getBuilder('Postgresql');
$app->run($builder);