<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\Controller;
use App\Services\Category\CategoryAdapter;
use App\Services\Transaction\TransactionAdapter;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

    public $transaction;
    public $category;

    public function __construct(TransactionAdapter $transaction, CategoryAdapter $category)
    {
        $this->transaction = $transaction;
        $this->category = $category;
    }

    public function index(Request $req)
    {
        $data = $this->transaction->GetAllTransaction();

        return view('transaction', ['datas' => $data]);
    }

    public function newTransaction(Request $req)
    {
        $data = $this->category->GetAllCategory();
        return view('newTransaction', ['category' => $data]);
    }

    public function insertTransaction(Request $req)
    {
        $this->transaction->AddTransaction(['nominal' => $req->nominal, 'description' => $req->description, 'categoryId' => $req->type_id]);
        return redirect('/transaction');
    }

    public function updateTransaction(Request $req)
    {
        $data = $this->category->GetAllCategory();
        return view('updateTransaction', ['request' => $req, 'category' => $data]);
    }

    public function confirmTransaction(Request $req)
    {
        $this->transaction->UpdateTransaction($req->id, ['nominal' => $req->nominal, 'description' => $req->description, 'categoryId' => $req->type_id]);
        return redirect('/transaction');
    }

    public function deleteTransaction(Request $req)
    {
        $this->transaction->DeleteTransaction($req->id);
        return redirect('/transaction');
    }
}
