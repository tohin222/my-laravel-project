<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\models\Division;
use App\models\District;
use App\Http\Controllers\Controller;

class divisionController extends Controller
{
  public function index()
  {
      $divisions = Division::orderby('id','desc')->get();
    return view('ecommerce.backend.pages.divisions.index',compact('divisions'));
  }

  public function division()
  {
    return view('ecommerce.backend.pages.divisions.create');
  }


    public function store(Request $request)
    {
      $request->validate([
    'name' => 'required',
    'priority' => 'required',
  ],
  [
    'name.required'=>'please provise a division name',
    'priority.required'=>'please provise a division priority'
  ]);

      $division = new Division;
      $division->name = $request->name;
      $division->priority = $request->priority;
      $division->save();

  session()->flash('success', 'division added successfully successful!');
      return redirect()->route('backend.division');
    }

    public function edit($division_id)
    {
        $division = Division::find($division_id);
        if(!is_null($division)){
          return view('ecommerce.backend.pages.divisions.edit',compact('division'));
        }
      else{
          return back();
      }
    }

    public function update(Request $request,$division_id)
    {
        $request->validate([
      'name' => 'required',
      'priority' => 'required',
    ],
    [
      'name.required'=>'please provise a division name',
      'priority.required'=>'please provise a division priority'
    ]);


      $division = Division::find($division_id);
      $division->name = $request->name;
      $division->priority = $request->priority;

      $division->save();

      session()->flash('success', 'division added successfully successful!');
      return redirect()->route('backend.division');
    }


    public function delete($division_id)
    {
        $division = Division::find($division_id);
        if(!is_null($division)){
          $districts= District::where('division_id',$division->id)->get();
          foreach ($districts as $district) {
            $district->delete();
          }


          $division->delete();
        }
        session()->flash('success','division has deleted successfully');
        return back();
    }
}
