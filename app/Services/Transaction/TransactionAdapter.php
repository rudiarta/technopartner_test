<?php
namespace App\Services\Transaction;

interface TransactionAdapter {
    public function AddTransaction($data) : bool;
    public function UpdateTransaction($id, $data) : bool;
    public function DeleteTransaction($id) : bool;
    public function GetAllTransaction();
}
