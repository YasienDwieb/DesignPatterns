<?php
namespace DesignPatterns\Builder\Builders;

class PostgresqlQueryBuilder extends MysqlQueryBuilder implements SQLQueryBuilder
{
    public function limit(int $start, int $offset = 0): SQLQueryBuilder
    {
        parent::limit($start, $offset);

        $this->query->limit = " LIMIT $start OFFSET $offset";

        return $this;
    }
}