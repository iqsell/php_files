<?php

class TextFileFormat implements FileFormat {
    public function read(string $content): array {
        return explode("\n", $content);
    }

    public function write(string | array | object $data): string {
        return implode("\n", $data);
    }
}
