<?php

class AdminController extends Controller {

    public function dashboard() {
        echo "<h1>Dashboard Working</h1>";
        echo "<a href='?controller=document&action=upload'>Upload Document</a>";
        echo "<br><a href='?controller=ledger&action=report'>View Ledger</a>";
    }
}