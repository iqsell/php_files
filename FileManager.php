<?php

interface FileManager {
    public function readFile(string $filename): string;
    public function writeFile(string $filename, string | array | object $data): bool;
}
