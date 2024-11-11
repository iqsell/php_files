<?php

class FileManagerFactory {
    public static function create(string $extension): FileManager {
        switch ($extension) {
            case 'txt':
                return new TextFileManager(new TextFileFormat());
            case 'json':
                return new JsonFileManager(new JsonFileFormat());
            case 'csv':
                return new CsvFileManager(new CsvFileFormat());
            default:
                throw new InvalidArgumentException("Unsupported file format: $extension");
        }
    }
}
