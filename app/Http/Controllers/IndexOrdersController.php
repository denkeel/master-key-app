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
        $orders = '';
        for ($i = 0; $i < 6; $i++) {
            $orders .= "<li> заказ $i</li>";
        }
        return 'Заказы:<br>' . '<ul>' . $orders . '</ul>';
    }

    public function one($id)
    {
        //TO-DO One
    }
}
