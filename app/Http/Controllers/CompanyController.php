<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function restore($id){
        $data=Company::onlyTrashed()->findOrFail($id)->restore();

     }

    public function index()
    {
        $companies= Company::orderBy('id', 'desc')->get();
        return response()->view('cms.Company.index' , compact('companies'));
    }


    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.Company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validator = Validator($request->all(),[
        //     'Name' => 'required|string|min:3|max:20',

        //   ]);

        //   if ( ! $validator->fails()) {
        //       $companies = new Company();
        //       $companies->Name = $request->get('Name');
        //       $companies->Email = $request->get('Email');
        //       $companies->Password = $request->get('Password');
        //       $companies->Status = $request->get('Status');
        //       $companies->Description = $request->get('Description');

        //       $isSaved = $companies->save();
        //       if ($isSaved) {
        //       return response()->json(['icon'=>'success' , 'title'=>'Storage completed successfully'],200);
        //       }else{
        //       return response()->json(['icon'=>'error' , 'title'=>'Storage failed'],400);

        //       }

        //   }else{
        //       return response()->json(['icon'=>'error' , 'title'=>$validator->getMessageBag()->first()],400);
        //   }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $companies=Company::findOrFail($id);
        return response()->view('cms.Company.show' , compact('companies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companies=Company::findOrFail($id);
        return response()->view('cms.Company.edit', compact('companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

