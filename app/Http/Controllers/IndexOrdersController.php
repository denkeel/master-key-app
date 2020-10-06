<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexOrdersController extends Controller
{
    public function index()
    {
        return $this->all();
    }

    public function all()
    {
        $orders = [];
        for ($i = 0; $i < 6; $i++) {
            $orders[] = $i;
        }
        return view('orders', ['orders' => $orders]);
    }

    public function one($id)
    {
        return view('order', ['id' => $id]);
    }
}
