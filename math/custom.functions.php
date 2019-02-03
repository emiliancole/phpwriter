<?php
// Custom math functions to include

function odd($var)
{
    // returns whether the input integer is odd
    return($var & 1);
}

function even($var)
{
    // returns whether the input integer is even
    return(!($var & 1));
}

function square_array($array)
{
function square($num) 
{
   return($num*$num);
}
    // square each element of input $array
    return array_map("square",$array);
}

// Array Manipulation
// http://www.informit.com/articles/article.aspx?p=341245&seqNum=10



?>
