<?php

// multi-dimensional arrays

$blogs = [
    ['title' => 'koserf party', 'author' => 'koserf', 'content' => 'lorem', 'likes' => 30],
    ['title' => 'stonks cheats', 'author' => 'stonks', 'content' => 'lorem', 'likes' => 25],
    ['title' => 'azure noob', 'author' => 'azure', 'content' => 'lorem', 'likes' => 50]
];                                              // create multi-dimensional array


// print_r($blogs);                             // display entire array
// print_r($blogs[1]);                          // display second blog
// print_r($blogs[1][1]);                       // access item inside second blog
// echo $blogs[2]['author'];                    // display author of third blog
// echo count($blogs);                           // count number of blogs


$blogs[] = [
    'title' => 'cat cafe',
    'author' => 'pisoros',
    'content' => 'lorem',
    'likes' => 100
];                                              // add new blog to array

// print_r($blogs);                             // display updated blogs

$popped = array_pop($blogs);                    // remove last item and store it in $popped
print_r($popped);                               // display removed item

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Tutorials</title>
</head>

<body>

</body>

</html>