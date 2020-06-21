<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function index(){

        $pizza = Pizza::all(); 

        return view('pizzas.index',[
            'test' => $pizza, 
            'age'=>request('age'),
            'name'=>request('name')
        ]);
    }

    public function show($id){
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show',['pizza'=>$pizza]);
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){
        error_log(request('name'));
        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->price = request('price');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        $pizza->save();
        error_log($pizza);
        return redirect('/pizzas')->with('mess' , 'thanks for your order');
    }

    public function destroy($id){
        $pizza = Pizza::findOrFail($id)->delete();

        return redirect('/pizzas')->with('mess','delete completed');
    }
}
