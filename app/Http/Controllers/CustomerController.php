<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $custData = Customer::orderBy('id','desc')->get();
        $tbl = '';
        foreach($custData as $data){
            $tbl .= '
                <tr>
                    <td>'. $data->first_name .'</td>
                    <td>'. $data->last_name .'</td>
                    <td>'. $data->email .'</td>
                    <td>'. $data->phone .'</td>
                    <td>
                        <a route="'. route('customers.show') .'" class="btn btn-primary" href="javascript:void(0);" id="'.$data->id.'">Edit</a>
                        <a class="btn btn-danger delete_user" href="javascript:void(0);" id="'.$data->id.'">Delete</a>

                    </td>
                </tr>
            ';
        }
        return view('listing',['tbl' => $tbl]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'nullable|email',
            'phone' => 'nullable'
        ]);
    
        $customer = new Customer;
        $customer->fill($data);
        $customer->save();

        return redirect()->route('customers.index')->with('success', 'Customer added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
