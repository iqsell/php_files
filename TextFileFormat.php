<?php

class TextFileFormat implements FileFormat {
    public function read($content): array {
        return explode("\n", $content);
    }

    public function write($data): string {
        return implode("\n", $data);
    }
}
