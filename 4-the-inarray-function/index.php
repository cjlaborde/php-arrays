<?php

$names = ['alex', 'billy', 'dale'];

// var_dump(in_array('alex', $names)); // true
// var_dump(in_array('ashley', $names)); // true


$allowedFileExtensions = ['jpg', 'jpeg', 'png'];

$fileName = 'cat.jpg';
$fileName = 'cat.zip';

// explode function takes a string and create array using delimiter in this case is "."
$fileParts = explode('.', $fileName);

// get last item from array in this case .jpg
$fileExtension = end($fileParts);


// if (in_array($fileExtension, $allowedFileExtensions)) {
//     die('Upload');
// }

// var_dump($fileParts);
// var_dump($fileExtension);

$files = opendir('files');

$ignoreFiles = ['.', '..', '.DS_Store'];

while (($file = readdir($files)) !== false) {


    // if ($file === '.' || $file === '..' || $file)
    if (in_array($file, $ignoreFiles)) {
        continue;
    }
    var_dump($file);
}
