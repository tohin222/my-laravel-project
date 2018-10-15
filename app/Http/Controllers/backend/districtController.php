<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\models\District;
use App\models\Division;
use App\Http\Controllers\Controller;

class districtController extends Controller
{
  public function index()
  {
      $districts = District::orderby('id','desc')->get();
    return view('ecommerce.backend.pages.districts.index',compact('districts'));
  }

  public function district()
  {
      $divisions = Division::orderby('id','desc')->get();
    return view('ecommerce.backend.pages.districts.create',compact('divisions'));
  }


    public function store(Request $request)
    {
      $request->validate([
    'name' => 'required',
    'division_id' => 'required',
  ],
  [
    'name.required'=>'please provise a district name',
    'division_id.required'=>'please provise a district priority'
  ]);

      $district = new District;
      $district->name = $request->name;
      $district->division_id = $request->division_id;
      $district->save();

  session()->flash('success', 'district added successfully successful!');
      return redirect()->route('backend.district');
    }

    public function edit($district_id)
    {
      $district = District::find($district_id);
      $division = Division::orderby('id','desc')->get();
      if(!is_null($district)){
        return view('ecommerce.backend.pages.districts.edit',compact('district','division'));
      }
    else{
        return back();
      }
    }

    public function update(Request $request,$district_id)
    {
        $request->validate([
      'name' => 'required',
      'division_id' => 'required',
    ],
    [
      'name.required'=>'please provise a district name',
      'division_id.required'=>'please provise a district priority'
    ]);


      $district = District::find($district_id);
      $district->name = $request->name;
      $district->division_id = $request->division_id;

      $district->save();

      session()->flash('success', 'district added successfully successful!');
      return redirect()->route('backend.district');
    }


    public function delete($district_id)
    {
        $district = District::find($district_id);
        if(!is_null($district)){
          $district->delete();
        }
        session()->flash('success','district has deleted successfully');
        return redirect()->route('backend.district');
    }
}
