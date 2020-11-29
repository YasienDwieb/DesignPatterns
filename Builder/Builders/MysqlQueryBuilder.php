<?php
namespace DesignPatterns\Builder\Builders;

class MysqlQueryBuilder implements SQLQueryBuilder
{
    protected $query;

    /**
     * MysqlQueryBuilder constructor.
     */
    public function __construct()
    {
        $this->reset();
    }


    public function reset()
    {
        $this->query = new \stdClass();
    }

    public function select(string $table, array $fields): SQLQueryBuilder
    {
        $this->query->base = "SELECT " . implode(',', $fields) . " FROM $table " ;
        $this->query->type = 'select';

        return $this;
    }

    public function where(string $field, string $value, string $operator = '='): SQLQueryBuilder
    {
        if(!in_array($this->query->type, ['select', 'update', 'delete'])) {
            throw new \Exception('Where can only be applied on SELECT, UPDATE, DELETE');
        }

        $this->query->where[]= " $field $operator $value ";

        return $this;
    }

    public function limit(int $start, int $offset = 0): SQLQueryBuilder
    {
        if(!in_array($this->query->type, ['select'])) {
            throw new \Exception('LIMIT can only be applied to SELECT');
        }

        $this->query->limit = " LIMIT $start ,  $offset";
        return $this;
    }

    public function getSQL(): string
    {
        $sql = $this->query->base;

        if($this->query->where) {
            $sql .= " WHERE ". implode('AND', $this->query->where);
        }

        if($this->query->limit) {
            $sql .= $this->query->limit;
        }

        $sql .= ";";
        return $sql;
    }


}