<?php

interface FileFormat {
    public function read($content): array;
    public function write($data): string;
}
