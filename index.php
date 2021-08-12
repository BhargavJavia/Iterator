<?php
    class a implements Iterator
    {
        private $item = [];
        private $pointer = 0;
        
        public function __construct($item)
        {
            $this->item = array_values($item);
        }

        public function current()
        {
            return $this->item[$this->pointer];
        }

        public function key()
        {
            return $this->pointer;
        }

        public function next()
        {
            $this->pointer++;
        }

        public function rewind()
        {
            $this->pointer=0;
        }

        public function valid()
        {
            return $this->pointer < count($this->item);
        }
    }

    function printinterable(iterable $myIterable)
    {
        foreach($myIterable as $item)
        {
            echo $item;
        }
    }

    $it=new a(['B','h','a','r','g','a','v']);
    printinterable($it);
?>