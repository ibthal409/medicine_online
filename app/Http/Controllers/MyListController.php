<?php

namespace App\Http\Controllers;

use App\Models\MyList;
use Illuminate\Http\Request;
use App\Models\User;

class MyListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {
        $a=$request->session()->get('LoggedUser');
        $user=User::find($a);
        $b=$user->lists;
        return view('mylist.index', compact('b','user'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('mylist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $request->validate([
            'medecine_name' => 'required',
            'details' => 'required',

        ]);
        $x = new MyList;
        $x->medecine_name = $request->medecine_name;
        $x->details = $request->details;
        $x->user_id = $request->session()->get('LoggedUser');

        $save = $x->save();

        if ($save) {

            return redirect()->route('mylist.index');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MyList  $myList
     * @return \Illuminate\Http\Response
     */
    public function show(MyList $mylist)
    {
        return view('mylist.show', compact('mylist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MyList  $myList
     * @return \Illuminate\Http\Response
     */
    public function edit(MyList $mylist)
    {
        return view('mylist.edit', compact('mylist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MyList  $myList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MyList $mylist)
    {
        $request->validate([
            'medecine_name' => 'required',
            'details' => 'required',
        ]);
        $mylist->update($request->all());
        return redirect()->route('mylist.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MyList  $myList
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyList $mylist)
    {
        $mylist->delete();
        return redirect()->route('mylist.index');
    }
}
