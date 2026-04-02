<?php
class GSTService {

    public function extract($text) {

        preg_match('/GSTIN:\s([A-Z0-9]+)/', $text, $gst);
        preg_match('/Total:\s(\d+)/', $text, $total);
        preg_match('/Tax:\s(\d+)/', $text, $tax);
        preg_match('/HSN:\s(\d+)/', $text, $hsn); // ✅ NEW

        return [
            'gstin' => $gst[1] ?? '',
            'total' => $total[1] ?? 0,
            'tax' => $tax[1] ?? 0,
            'hsn' => $hsn[1] ?? ''
        ];
    }
}