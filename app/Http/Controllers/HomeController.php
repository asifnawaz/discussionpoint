<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DataTables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $users = User::latest();
            return Datatables::of($users)
            ->addColumn('name', function($row){
                return '<span class="px-4 py-1 flex">' . $row->name . '</span>';
            })->addColumn('view', function($row){
                    $btn = '<a href="' . route('show', $row) . '" class="px-4 py-1 flex justify-center items-center text-sm text-white bg-yellow-400 rounded">Show Public Profile</a>';
                    return $btn;
                })
                ->rawColumns(['name', 'view'])
                ->make(true);
        }
      
        return view('home');
    }
}