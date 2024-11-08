<?php

class CsvFileFormat implements FileFormat {
    public function read($content): array {
        $rows = [];
        $lines = explode("\n", $content);
        foreach ($lines as $line) {
            $rows[] = str_getcsv($line);
        }
        return $rows;
    }

    public function write($data): string {
        $rows = [];
        foreach ($data as $row) {
            $rows[] = implode(",", $row);
        }
        return implode("\n", $rows);
    }
}
