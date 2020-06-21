@extends('layouts.layout') 
    @section('content')
    <div class="flex-center">  
       <h1>Add A New Pizza</h1>
       <form action="/pizzas" method="post">
            @csrf
           <label for="name">Name : </label>
           <input type="text" name="name" id="name">

           <label for="price">Price : </label>
           <input type="text" name="price" id="price">

           <label for="type">Choose Type : </label>
           <select name="type" id="type">
               <option selected="selected" value="margarita">margarita</option>
               <option value="option2">option2</option>
               <option value="volcano">vocano</option>
           </select>
           
           <label for="base">Choose Base : </label>
           <select name="base" id="base">
               <option selected="selected" value="cheese">cheese</option>
               <option value="bacon">bacon </option>
               <option value="spicy">spicy</option>
           </select>

           <fieldset>
               <label for="extra-topping">Extra Toppings :</label>
               <input type="checkbox" name="toppings[]" value="mushroom" id="">mushroom
               <input type="checkbox" name="toppings[]" value="tomato" id="">tomato
               <input type="checkbox" name="toppings[]" value="pinaple" id="">pinaple
               <input type="checkbox" name="toppings[]" value="cheese" id="">cheese
               <input type="checkbox" name="toppings[]" value="bacon" id="">bacon    
           </fieldset>

           <input type="submit" value="Submit">
           
       </form>

    </div> 
@endsection 