<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $cars = Cars::all();
       foreach ($cars as $car ){
           if ($car->engine_type == 0){
               $car->enginetype = 'Fuel';
           }elseif ($car->engine_type == 1){
               $car->enginetype = 'Electricity';
           }else{
               $car->enginetype = 'Hybrid';
           }

           if ($car->gear_shift == 0){
               $car->gear_shift = 'Norm';
           }elseif ($car->gear_shift == 1){
               $car->gear_shift = 'Auto';
           }else{
               $car->gear_shift = 'Hybrid';
           }

           if ($car->air_condition == 1){
               $car->aircondition = 'Air Condition';
           }else{
               $car->aircondition = 'Not Available';
           }
       }
//       dd($cars[0]);
        return view('cars.index',['cars'=> $cars ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'brand' => ['required','string','max:255'],
            'name' => 'required|string|max:255',
            'picture' => 'required|nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'manufacturer_year' => 'required|date_format:Y-m-d',
            'rent_price' => 'string|max:255',
            'rider' => 'string|max:255',
            'four_wheel_drive' => 'boolean|in:0,1',

            'engine_type' => 'string|max:100',
            'gear_shift' => 'string|max:255',

            'air_condition' => 'boolean|in:0,1',
            'car_doors' => 'string|max:255',
            'car_luggage_capacity' => 'string|max:255',





        ]);

        $car = new Cars();
        $car->brand = $request->brand;
        $car->name = $request->name;
        $car->manufacturer_year = $request->manufacturer_year;
        $car->rent_price = $request->rent_price;
        $car->rider  = $request->rider ;
        $car->four_wheel_drive  = $request->four_wheel_drive ;
        $car->engine_type  = $request->engine_type ;
        $car->gear_shift = $request->gear_shift;
        $car->air_condition  = $request->air_condition ;
        $car->car_doors  = $request->car_doors ;
        $car->car_luggage_capacity  = $request->car_luggage_capacity ;

        $car->added_by = auth()->user()->id;

        if (request()->hasFile('picture')) {
            $image = request()->file('picture');

            $extention = $image->getClientOriginalExtension();

            $filename = time().'.'.$extention;

            $image->move('images',$filename);

            $car->picture = $filename;
        }


        $car->save();

//        session()->flash('flash_icon', 'success');
//        session()->flash('flash_message', 'Ad added successfully');
//        return view('index');
        return redirect(route('cars.index'));
//        return redirect()->back();
//        return redirect()->to(url()->back());


    }

    /**
     * Display the specified resource.
     */
    public function show(Cars $cars)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $car = Cars::findOrFail($id);
        return view('cars.edit', ['car'=> $car]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
//        $cars = Cars::all();
//        foreach ($cars as $car ){
//            if ($car->engine_type == 0){
//                $enginetype = 'Fuel';
//            }elseif ($car->engine_type == 1){
//                $enginetype = 'Electricity';
//            }else{
//                $enginetype = 'Hybrid';
//            }
//
//            if ($car->air_condition == 1){
//                $aircondition = 'Air Condition';
//            }else{
//                $aircondition = 'Not Available';
//            }
//        }

        $attributes = $request->validate([
            'brand' => ['required','string','max:255'],
            'name' => 'required|string|max:255',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'manufacturer_year' => 'required|date_format:Y-m-d',
            'rent_price' => 'string|max:255',
            'rider' => 'string|max:255',
            'four_wheel_drive' => 'boolean|in:0,1',

            'engine_type' => 'string|max:100',
            'gear_shift' => 'string|max:255',

            'air_condition' => 'boolean|in:0,1',
            'car_doors' => 'string|max:255',
            'car_luggage_capacity' => 'string|max:255',



        ]);

        $car = Cars::findOrFail($id);
        $car->brand = $request->brand;
        $car->name = $request->name;
        $car->manufacturer_year = $request->manufacturer_year;
        $car->rent_price = $request->rent_price;
        $car->rider  = $request->rider ;
        $car->four_wheel_drive  = $request->four_wheel_drive ;
        $car->engine_type  = $request->engine_type ;
        $car->gear_shift = $request->gear_shift;
        $car->air_condition  = $request->air_condition ;
        $car->car_doors  = $request->car_doors ;
        $car->car_luggage_capacity  = $request->car_luggage_capacity ;

        $car->last_updated_by = auth()->user()->id;

        if (request()->hasFile('picture')) {
            $image = request()->file('picture');

            $extention = $image->getClientOriginalExtension();

            $filename = time().'.'.$extention;

            $image->move('images',$filename);

            $car->picture = $filename;
        }


        $car->save();
        return redirect(route('cars.index'));

//        return view('cars.index', ['cars'=> Cars::all(), 'enginetype'=> $enginetype, 'aircondition'=> $aircondition]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Cars::destroy($id);
        session()->flash('flash_icon', 'success');
        session()->flash('flash_message', 'car deleted successfully');
        return response()->json(['status' => 'success']);
    }
}
