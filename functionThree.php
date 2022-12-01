<?php

function test (){
    echo func_num_args()."<br>";
    print_r(func_get_args());
    echo "<br>".func_get_arg(2);
}
test("ayberk","çatal",19);
?>