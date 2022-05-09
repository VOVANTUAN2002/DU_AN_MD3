<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $customers = Customer::all();
        $search = $request->search;
        $customers = Customer::select('*');

        if ($search) {
            $customers = $customers->where('name', 'like', '%' . $search . '%')->orwhere('id',$search);
        }
        $customers = $customers->paginate(5);

        return view('index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request)
    {
        $customer = new Customer();
        $customer->employeecode = $request->employeecode;
        $customer->group = $request->group;
        $customer->name = $request->name;
        $customer->birthday = $request->birthday;
        $customer->sex = $request->sex;
        $customer->phone = $request->phone;
        $customer->CMND = $request->CMND;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->save();
        
        session()->flash('success', 'Thêm' . ' ' . $request->name . ' ' .  'thành công');

        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // $customer = Customer::find($id);
        // $params = [
        //     'customer' => $customer
        // ];
        // return view('customers.show', $params);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //gọi view có phần sửa
        $customer = Customer::find($id);
        $params = [
            'customer' => $customer
        ];
        return view('edit',$params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerRequest $request, $id)
    {
     
        $customer = Customer::find($id);
        $customer->employeecode = $request->employeecode;
        $customer->group = $request->group;
        $customer->name = $request->name;
        $customer->birthday = $request->birthday;
        $customer->sex = $request->sex;
        $customer->phone = $request->phone;
        $customer->CMND = $request->CMND;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->save();
        session()->flash('success', 'Cập nhật' . ' ' . $request->name . ' ' .  'thành công');


        //chuyển hướng 
        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $Customer = Customer::find($id);
        $Customer->delete();
        session()->flash('success', 'Xóa' . ' ' . $request->name . ' ' .  'thành công');
        return redirect()->route('customers.index');
    }
}
