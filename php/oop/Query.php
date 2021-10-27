<?php

/**
 * @method self whereId(int $id)
 */
class Query implements Arrayable, Jsonable
{
    public static $instance;
    private $query;
    private $table;
    private $select = '*';
    private $where;
    private $data;
    private $primaryKey = 'id';
    private $limit;
    private $offset;

    public function __construct(DBDriver $driver)
    {
        $driver->runConnect();
        $this->query = $driver->getConnect();
    }

    public static function setDriver(DBDriver $driver)
    {
        if (static::$instance === null) {
            static::$instance = new self($driver);
        }
    }

    public function table($tableName): self
    {
        $this->table = $tableName;
        return $this;
    }

    public function select(...$select): self
    {
        if (gettype($select) === 'array') {
            $select = implode(', ', $select);
        }
        $this->select = $select;
        return $this;
    }

    public function limit($limit): self
    {
        $this->limit = $limit;
        return $this;
    }

    public function offset($offset): self
    {
        $this->offset = $offset;
        return $this;
    }

    public function first(): self
    {
        $result = $this->_get();
        $this->data = $result->num_rows > 0 ? $result->fetch_assoc() : (object)[];
        return $this;
    }

    private function _get()
    {
        $query = "SELECT {$this->select} FROM {$this->table}{$this->_where()}{$this->_limit()}{$this->_offset()}";
        return $this->query->query($query);
    }

    private function _where(): string
    {
        if (empty($this->where)) {
            return '';
        }
        $arr = [];
        foreach ($this->where as $key => $value) {
            $arr[] = "{$key} = '" . $this->query->real_escape_string($value) . "'";
        }

        return ' WHERE ' . implode(' AND ', $arr);
    }

    private function _limit()
    {
        if (empty($this->limit)) {
            return '';
        }
        return ' LIMIT ' . $this->limit;
    }

    private function _offset()
    {
        if (empty($this->offset)) {
            return '';
        }
        return ' OFFSET ' . $this->offset;
    }

    public function get(): self
    {
        $result = $this->_get();
        $this->data = $result->num_rows > 0 ? $result->fetch_all(MYSQLI_ASSOC) : [];
        return $this;
    }

    /**
     * @param $name
     * @param $arguments
     * @return $this
     * @throws QueryException
     */
    public function __call($name, $arguments): self
    {
        if (!method_exists(__CLASS__, $name)) {
            throw new QueryException();
        }
        switch ($name) {
            case 'whereId':
                $this->where([$this->primaryKey => $arguments[0]]);
                break;
        }
        return $this;
    }

    public function where(array $where): self
    {
        $this->where = $where;
        return $this;
    }

    public function toArray(): array
    {
        return (array)$this->data;
    }

    public function toJson(): string
    {
        return json_encode($this->data);
    }
}