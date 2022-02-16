<?php

// file name
$filename = "demo.txt";

// creating file if not exists
$myfile = fopen($filename, "w") or die("Could not open file");

// writing into the file
$data = "Qui Lorem id consectetur anim ullamco veniam. Non nulla do consequat fugiat sunt officia.\nVelit id duis ad excepteur enim velit.\nAmet adipisicing magna ipsum anim consequat est fugiat enim sint aute ullamco.\nTempor ea tempor voluptate et esse.\nLaborum esse deserunt consectetur labore labore est non labore fugiat culpa ut.";
fwrite($myfile, $data);


// opening file in reading mode
$myFileReading = fopen($filename, "r") or die("Could not open file");

// counting number of char, word and paragraph in a file
$char_count = 0;
$word_count = 1;
$para_count = 1;

if ($myFileReading) {

    while (!feof($myFileReading)) {
        $char = fgetc($myFileReading);
        echo $char;

        $char_count++;

        if ($char == " ") {
            $word_count++;
        }

        if ($char == "\n") {
            $para_count++;
        }
    }
}

echo "<br><br>Char count: " . $char_count;
echo "<br>word count: " . $word_count;
echo "<br>Para count: " . $para_count;
