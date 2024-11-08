<?php

class JsonFileFormat implements FileFormat {
    public function read($content): array {
        return json_decode($content, true);
    }

    public function write($data): string {
        return json_encode($data);
    }
}
