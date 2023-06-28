<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
//        $picture_icon = '';
        foreach ($services as $service) {
            if ($service->picture == null) {
                $service->picture = $service->service_icon;

//                $picture_icon = $service->picture;
//            }else{
            }
        }
        return view('services.index' , ['services' => $services /*, 'picture_icon' => $picture_icon*/]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['required','string','max:255'],
            'description' => 'required|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'service_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        $service = new Service();
        $service->name = $request->name;
        $service->description = $request->description;
        $service->added_by = auth()->user()->id;

        if (request()->hasFile('service_icon')) {
            $image = request()->file('service_icon');

            $extention = $image->getClientOriginalExtension();

            $filename = time().'.'.$extention;

            $image->move('images',$filename);

            $service->service_icon = $filename;
        }

        if (request()->hasFile('picture')) {
            $image = request()->file('picture');

            $extention = $image->getClientOriginalExtension();

            $filename = time().'.'.$extention;

            $image->move('images',$filename);

            $service->picture = $filename;
        }

        $service->save();

//        session()->flash('flash_icon', 'success');
//        session()->flash('flash_message', 'Ad added successfully');
//        return view('index');
//        return redirect(route('index'));
        return redirect()->back();
//        return redirect()->to(url()->back());



    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $services = Service::findOrFail($id);
        return view('services.edit' , ['services' => $services]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $attributes = $request->validate([
            'name' => ['required','string','max:255'],
            'description' => 'required|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'service_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        $service = Service::findOrFail($id);
        $service->name = $request->name;
        $service->description = $request->description;
        $service->added_by = auth()->user()->id;

        if (request()->hasFile('service_icon')) {
            $image = request()->file('service_icon');

            $extention = $image->getClientOriginalExtension();

            $filename = time().'.'.$extention;

            $image->move('images',$filename);

            $service->service_icon = $filename;
        }

        if (request()->hasFile('picture')) {
            $image = request()->file('picture');

            $extention = $image->getClientOriginalExtension();

            $filename = time().'.'.$extention;

            $image->move('images',$filename);

            $service->picture = $filename;
        }

        $service->save();

        return view('services.index', ['services' => Service::all()]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Service::destroy($id);
        session()->flash('flash_icon', 'success');
        session()->flash('flash_message', 'services deleted successfully');
        return response()->json(['status' => 'success']);
    }
}
