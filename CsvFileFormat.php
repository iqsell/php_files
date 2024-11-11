<?php

class CsvFileFormat implements FileFormat {
    public function read(string $content): array {
        $rows = [];
        $lines = explode("\n", $content);
        foreach ($lines as $line) {
            $rows[] = str_getcsv($line);
        }
        return $rows;
    }

    public function write(string | array | object $data): string {
        $rows = [];
        foreach ($data as $row) {
            $rows[] = implode(",", $row);
        }
        return implode("\n", $rows);
    }
}
