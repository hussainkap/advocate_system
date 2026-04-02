<?php

class Ledger extends Model {

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM ledgers ORDER BY id ASC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}