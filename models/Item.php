<?php
	class Item {
        public function __construct($foo=null, $bar=null) {
            $this->foo = $foo;
            $this->bar = $bar;
        }

        public function FooBar(){
            return "$this->foo $this->bar";
        }
	}
