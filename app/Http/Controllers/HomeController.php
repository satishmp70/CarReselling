<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Image;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $allCar = Car::all();
        return view('home', compact('allCar'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'carname' => 'required',
            'price' => 'required',
            'top_speed' => 'required'
        ]);

        $images = $request->file('files');
        if ($request->hasFile('files')) :
            foreach ($images as $item) :
                $var = date_create();
                $time = date_format($var, 'YmdHis');
                $imageName = rand() . '.' . $item->getClientOriginalExtension();
                $item->move(public_path('car_gallry'), $imageName);
                $arr[] = $imageName;
            endforeach;
            $image = implode(",", $arr);
        else :
            $image = '';
        endif;

        $type = '';
        $image_name = '';

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = rand() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('thumbImages'), $image_name);
        }

        if ($request->top_speed <= 100) {
            $type = 'Normal Car';
        } else if ($request->top_speed >= 200 && $request->top_speed < 300) {
            $type = 'Luxury Car';
        } else if ($request->top_speed >= 300) {
            $type = 'Sports Car';
        }

        $car = new Car();
        $car->type = $type;
        $car->images = $image;
        $car->image = $image_name;
        $car->name = $request->carname;
        $car->top_speed = $request->top_speed;
        $car->price = $request->price;

        $car->save();

        return redirect(route('home'));
    }

    public function detailCar($id)
    {
        $car = Car::where('id', $id)->first();
        return view('car-detail',compact('car'));
    }
}
