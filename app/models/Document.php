<?php

class Document extends Model {

    public function store($path, $text, $data) {
        $stmt = $this->db->prepare("
            INSERT INTO documents (file_path, extracted_text, extracted_data)
            VALUES (?, ?, ?)
        ");

        $stmt->execute([
            $path,
            $text,
            json_encode($data)
        ]);

        return $this->db->lastInsertId();
    }
}