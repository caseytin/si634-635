<?php

function library() {
    //initialize array
    $shakespeare1_library = array();

    //add some key/val pairs
    $shakespeare1_library[0] = "Romeo and Juliet";
    $shakespeare1_library[1] = "Macbeth";
    $shakespeare1_library[2] = "A Midsummer Night's Dream";
    $shakespeare1_library[3] = "Hamlet";

    //initialize second array
    $shakespeare2_library[0] = "The Tempest";
    $shakespeare2_library[1] = "Twelfth Night";
    $shakespeare2_library[2] = "Othello";

    #combine arrays
    $shakespeare_library = array_merge($shakespeare1_library, $shakespeare2_library);

    return $shakespeare_library;
}

function print_lib($lib) {
    print("<h1>Unsorted Shakespeare Library: <br>");
    for($i = 0; $i < sizeof($lib); ++$i) {
        print($lib[$i] . "<br>");
    }
}

function sorted_print($lib) {
    sort($lib);
    print("<h1>Sorted Shakespeare Library: <br>");
    for ($i = 0; $i < sizeof($lib); ++$i) {
        print($lib[$i] . "<br>");
    }

}


$lib = library();
print_lib($lib);
print("<br><hr><br>");
sorted_print($lib);