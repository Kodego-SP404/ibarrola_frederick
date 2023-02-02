{{-- @include('partials.header') --}}
@include('partials.header')
<?php $array = array('title' => 'Student System') ;?>
<x-nav :data="$array"/>

<header class="mt-5 max-w-lg mx-auto">
   <a href="#">
      <h1 class="mt-20 text-4xl font-bold text-white text-center"> Edit {{$student->first_name }} {{$student->last_name }}</h1>
   </a>
</header>
<main class="bg-black bg-opacity-50 max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">


   <section class="mt-10">

      <form action="/student/{{$student->id}}" method="POST" class="flex flex-col">
         
         @method('PUT')
         @csrf
        
         <div class="mb-6 pt-3 rounded bg-gray-200">
            <label for="first_name" class="block text-gray-700 text-sm font-bold mb-2 ml-3">First name</label>
            <input type="text" name="first_name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-amber-400 px-3" autocomplete="off" value={{$student->first_name }}>
            @error('first_name')
            <p class="text-red-500 text-xs mt-2">
                {{$message}}
            </p>
            @enderror
         </div>
         <div class="mb-6 pt-3 rounded bg-gray-200">
            <label for="last_name" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Last name</label>
            <input type="text" name="last_name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-amber-400 px-3" autocomplete="off" value={{$student->last_name }}>
            @error('last_name')
            <p class="text-red-500 text-xs mt-2">
                {{$message}}
            </p>
            @enderror
         </div>
         <div class="mb-6 pt-3 rounded bg-gray-200">
            <label for="gender" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Gender</label>
            <select name="gender" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-amber-400 px-3">
               <option value="" {{$student->gender == "" ? 'selected' : ''}}></option>
               <option value="Male"  {{$student->gender == "Male" ? 'selected' : ''}}>Male</option>
               <option value="Female"  {{$student->gender == "Female" ? 'selected' : ''}}>Female</option>
            </select>
            @error('gender')
            <p class="text-red-500 text-xs mt-2">
                {{$message}}
         </p>
            @enderror
         </div>
         <div class="mb-6 pt-3 rounded bg-gray-200">
            <label for="age" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Age</label>
            <input type="number" name="age" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-amber-400 px-3" autocomplete="off" value={{$student->age }}>
            @error('age')
            <p class="text-red-500 text-xs mt-2">
                {{$message}}
            </p>
            @enderror
         </div>
         <div class="mb-6 pt-3 rounded bg-gray-200">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
            <input type="email" name="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-amber-400 px-3" autocomplete="off" value={{$student->email }}>
            @error('first_name')
            <p class="text-red-500 text-xs mt-2">
                {{$message}}
            </p>
            @enderror
         </div>

         <button type="submit" class="bg-amber-400 hover:bg-amber-300 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transitionduration-200" type="submit">Update</button>
         
         </form>
         <form action="" method="POST">
            @method('delete')
            @csrf
            <button type="submit" class="w-full mt-2 bg-red-600 hover:bg-amber-800 text-gray-700 font-bold py-2 rounded shadow-lg hover:shadow-xl transitionduration-200" type="submit">Delete</button>
         </form>
   </section>
</main>
@include('partials.footer') 