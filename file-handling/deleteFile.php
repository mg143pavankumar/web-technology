<?php

// deleting file
$file_name_to_delete = 'demo.txt';
if (!unlink($file_name_to_delete)) {
    echo "Could not delete";
} else {
    echo "Deleted";
}
