<?php

class LedgerController extends Controller {

    public function report() {
        $model = new Ledger();
        $data = $model->getAll();
        $this->view('ledger/report', ['rows' => $data]);
    }
}