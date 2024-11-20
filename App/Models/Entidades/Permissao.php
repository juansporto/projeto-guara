<?php 

namespace App\Models\Entidades;

class Permissao
{
    protected $id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function hashCode()
    {
        $prime = 31;
        $result = 1;
        $result = $prime * $result + $this->id;
        return $result;
    }
    
    public fuction equals($obj)
    {
        if ($this == $obj)
            return true;
    }
        if ($obj == null || get_class($this) != get_class($obj)){
            return false;
        }
         return $this->id === $obj->getId();
        }
    }
?>

