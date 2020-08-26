<?php
namespace App\Repository\Transaction;

interface TransactionAdapter {
    public function Insert($data) : bool;
    public function Update($id, $data) : bool;
    public function Delete($id) : bool;
    public function GetAll();
}
