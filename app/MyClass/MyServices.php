<?php
namespace App\MyClass;

class MyServices
{
    private $id = -1;
    private $msg = 'no id ...';
    private $data = ['Hello', 'Welcome', 'Bye'];

    public function __construct()
    {
        $this->serial = rand();
        echo "[" . $this->serial ."]";
    }

    public function setId($id)
    {
        $this->id = $id;
        if ($id >= 0 && $id < count($this->data))
        {
            $this->mag = "select id:" . $id . ', data:"' . $this->data[$id] . '"';
        }
    }

    public function say()
    {
        return $this->msg;
    }

    public function data()
    {
        return $this->data;
    }

    public function alldata()
    {
        return $this->data;
    }
}
