<?php

class Transaction extends Model {

    public function create($data) {
        $stmt = $this->db->prepare("
            INSERT INTO transactions (gstin, total, tax)
            VALUES (?, ?, ?)
        ");

        $stmt->execute([
            $data['gstin'],
            $data['total'],
            $data['tax']
        ]);

        return $this->db->lastInsertId();
    }
}