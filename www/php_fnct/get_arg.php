<?php
function my_print(){
    $args = func_get_args();
    if(count($args) > 0){
        foreach($args as $arg){
            echo $arg."<br>";
        }
    } else {
        echo "no arguments"."<br>";
    }
}
my_print();
my_print(1,2,3);
my_print("A", "B", "C");
my_print("Apple", "Banana", "Cherry");
?>
