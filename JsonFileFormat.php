<?php

class JsonFileFormat implements FileFormat {
    public function read(string $content): array {
        return json_decode($content, true);
    }

    public function write(string | array | object $data): string {
        return json_encode($data);
    }
}
