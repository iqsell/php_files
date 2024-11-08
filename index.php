<?php

require_once 'FileManager.php';
require_once 'FileFormat.php';
require_once 'TextFileFormat.php';
require_once 'JsonFileFormat.php';
require_once 'CsvFileFormat.php';
require_once 'FileManagerFactory.php';
require_once 'AbstractFileManager.php';
require_once 'TextFileManager.php';
require_once 'JsonFileManager.php';
require_once 'CsvFileManager.php';

$filename = 'data.json';
$data = ['name' => 'John Doe', 'age' => 30];

try {
    $manager = FileManagerFactory::create('json');
    $manager->writeFile($filename, $data);

    $content = $manager->readFile($filename);
    $readData = $manager->format->read($content);
    print_r($readData);
} catch (InvalidArgumentException | RuntimeException $e) {
    echo "Error: " . $e->getMessage();
}
