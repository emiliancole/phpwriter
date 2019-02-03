<?php
//http://stackoverflow.com/questions/3173501/whats-the-difference-between-double-colon-and-arrow-in-php

    public function func_instance() {
        echo "in ", __METHOD__, "\n";
    }
    public function callDynamic() {
        echo "in ", __METHOD__, "\n";
        B::dyn();
    }

}

class B extends A {
