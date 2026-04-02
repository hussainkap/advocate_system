<?php

class DocumentController extends Controller {

    public function upload() {
        $this->view('documents/upload');
    }

    public function process() {

        $file = $_FILES['file'];
        $path = BASE_PATH . '/storage/uploads/' . time() . '_' . $file['name'];

        move_uploaded_file($file['tmp_name'], $path);

        // OCR
        $ocr = new OCRService();
        $text = $ocr->extract($path);

        // GST
        $gst = new GSTService();
        $gstData = $gst->extract($text);

        // Save document
        $docModel = new Document();
        $docId = $docModel->store($path, $text, $gstData);

        // Save transaction
        $txnModel = new Transaction();
        $txnId = $txnModel->create($gstData);

        // Ledger
        $ledger = new LedgerService();
        $ledger->process($txnId, $gstData);

        echo "Processed successfully";
    }
}