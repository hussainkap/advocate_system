<?php

class LedgerService {

    public function process($txnId, $data) {
        $db = Database::getInstance();

        // Debit: Expense
        $db->prepare("INSERT INTO ledgers (transaction_id, type, amount)
                      VALUES (?, 'debit', ?)")
           ->execute([$txnId, $data['total']]);

        // Credit: Cash
        $db->prepare("INSERT INTO ledgers (transaction_id, type, amount)
                      VALUES (?, 'credit', ?)")
           ->execute([$txnId, $data['total']]);
    }
}