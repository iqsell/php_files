<?php

interface FileFormat {
    public function read(string $content): array;
    public function write(string | array | object $data): string;
}
