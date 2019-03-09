<?php

namespace App\Http\Controllers;

use App\Todo;
use Session;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        // return 'this is the index';
        $todos = Todo::all();
        // dd($todos->all);
        return view('todo')->with('todos', $todos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // return 'this is add method';
        // dd($request->all());
        $todo = new Todo;
        $todo->todo = $request->todo;
        $todo->category_id = $request->category;
        $todo->save();
        Session::flash('success', 'Record has been added');
        return redirect()->route('todo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo,$id)
    {
        //
        // return 'this is edit';
        $todo  = Todo::find($id);
        

        return view('edit')->with('todo',$todo);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo,$id)
    {
        //
        // return 'this is update';
        // dd($request->all());
        // dd($id);
        $todo = Todo::find($id);
        $todo->todo = $request->todo;
        $todo->category_id = $request->category;
        $todo->save();
        Session::flash('success', 'Record has been updated');
        return redirect()->route('todo');
    }

    public function done(Request $request, Todo $todo,$id)
    {
        $todo = Todo::find($id);
        $todo->completed = 1;
        $todo->save();
        Session::flash('success', 'Task is done! Congratulations');
        return redirect()->route('todo');
    }

    public function notdone(Request $request, Todo $todo,$id)
    {
        $todo = Todo::find($id);
        $todo->completed = 0;
        $todo->save();
        return redirect()->route('todo');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo,$id)
    {
        //
        // dd($id);

        $todo = Todo::find($id);
        $todo->delete();
        Session::flash('success', 'Record has been deleted');
        return redirect()->route('todo');
        
    }
}
