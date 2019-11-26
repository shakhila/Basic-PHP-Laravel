<?php

namespace App\Http\Controllers;

use App\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        // return view('levels.index');
        $title = "Student Level Management";
        $current = "5";
        $limit_per_page = 10;
        // $levels = Level::where('id', '2')->get();
        $levels = Level::latest()->paginate($limit_per_page);
                                //  ->join('classes', 'levels.id', '=', 'classes.level_id')
                                //  ->select('levels.*', 'classes.class_name')
                                //  ->get();
        
        return view('levels.index', compact(
            'title',
            'levels'
            ))->with('i', (request()->input('page', 1) - 1) * $limit_per_page);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = "Create New Level";
        $return_route = 'level.index';

        return view('levels.create', compact(
            'title', 
            'return_route'
        ));
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
        Level::create($request->all());

        return redirect()->route('level.index')->with('success', 'Level has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Level $level)
    {
        //
        $title = "Show Level";
        $return_route = 'level.index';

        return view('levels.show', compact(
            'title', 
            'return_route',
            'level'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Level $level)
    {
        //
        $title = "Update Level";
        $return_route = 'level.index';

        return view('levels.edit', compact(
            'title', 
            'return_route',
            'level'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Level $level)
    {
        //
        $level->update($request->all());

        return redirect()->route('level.index')->with('success', 'Level <b>'.$level->level_name.'</b> has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Level $level)
    {
        //
        $level_name = $level->level_name;

        $level->delete();

        return redirect()->route('level.index')->with('success', 'Level <b>'.$level_name.'</b> has been deleted successfully');
    }
}
