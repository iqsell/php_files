<?php

abstract class AbstractFileManager implements FileManager {
    public FileFormat $format;

    public function __construct(FileFormat $format) {
        $this->format = $format;
    }

    public function readFile(string $filename): string {
        if (!file_exists($filename)) {
            throw new InvalidArgumentException("File '$filename' does not exist");
        }

        $content = file_get_contents($filename);
        if ($content === false) {
            throw new RuntimeException("Error reading file '$filename'");
        }

        return $content;
    }

    public function writeFile(string $filename, string | array | object $data): bool {
        $content = $this->format->write($data);
        return file_put_contents($filename, $content) !== false;
    }
}
