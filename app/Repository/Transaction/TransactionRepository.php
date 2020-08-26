<?php
namespace App\Repository\Transaction;

use App\Transaction;
use Illuminate\Support\Facades\DB;

class TransactionRepository implements TransactionAdapter {
    public function Insert($data): bool
    {
        $transaction = new Transaction();

        if (!DB::table('category')->where('id', $data['categoryId'])->exists()) {
            return false;
        }

        $transaction->nominal = $data['nominal'];
        $transaction->description = $data['description'];
        $transaction->category_id = $data['categoryId'];

        $transaction->save();

        return true;
    }

    public function Update($id, $data): bool
    {
        $transaction = Transaction::find($id);

        if (!DB::table('category')->where('id', $data['categoryId'])->exists()) {
            return false;
        }

        $transaction->nominal = $data['nominal'];
        $transaction->description = $data['description'];
        $transaction->category_id = $data['categoryId'];

        $transaction->save();

        return true;
    }

    public function Delete($id): bool
    {
        $category = Transaction::find($id);
        $category->delete();

        return true;
    }

    public function GetAll()
    {
        return Transaction::get();
    }
}
