<?php
namespace App\Services\Transaction;

use App\Repository\Transaction\TransactionAdapter as TransactionRepo;

class TransactionService implements TransactionAdapter {

    public $repo;

    public function __construct(TransactionRepo $repo)
    {
        $this->repo = $repo;
    }

    public function AddTransaction($data): bool
    {
        if (!is_array($data)){
            return false;
        }

        if(!isset($data['nominal']) || !isset($data['description']) || !isset($data['categoryId'])){
            return false;
        }

        return $this->repo->Insert($data);
    }

    public function UpdateTransaction($id, $data): bool
    {
        if (!is_array($data)){
            return false;
        }

        if(!isset($data['nominal']) || !isset($data['description']) || !isset($data['categoryId'])){
            return false;
        }

        return $this->repo->Update($id, $data);
    }

    public function DeleteTransaction($id): bool
    {
        return $this->repo->Delete($id);
    }

    public function GetAllTransaction()
    {
        return $this->repo->GetAll();
    }
}
