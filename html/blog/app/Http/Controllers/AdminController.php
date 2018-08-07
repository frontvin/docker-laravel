<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;

class AdminController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @return Response
     */
    public function show()
    {
        return 'we will have all orders here';
    }

    public function save(Request $request)
    {
        $order = new Order();

        $order->name = $request->name;
        $order->email = $request->email;

        $order->save();

        // save order to db
        return json_encode([
            'success'=>true, 
            'name'=>$request->name, 
            'email' => $request->email
        ]);
    }
}