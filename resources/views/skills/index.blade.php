@extends('dashboard')
@section('content')
<div class="bg-white shadow-lg rounded px-8 mt-12 pt-6 pb-8 mb-4 flex flex-col my-2">
    <div class="mb-6">
      <h1 class="text-2xl">Fill up the form to add new skill.</h1>
    </div>
    <form method="POST" action="{{ route('skills.store') }}" enctype="multipart/form-data">
        @csrf
      <div class="-mx-3 md:flex mb-6">

        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="logo">
              Logo
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="logo" id="logo" type="file" placeholder="Please enter skill">
        </div>

        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="name">
            Name
          </label>
          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="name" id="name" type="text" placeholder="Please enter name">
        </div>

      </div>
      <button class="bg-blue-500 p-2 text-white rounded-lg hover:bg-blue-600">Submit</button>
    </form>  
  </div>
  <hr />
  <div class="pt-2">    
      <div class="table w-full p-2">
          <h1 class="pb-3 text-2xl">All skills</h1>
          <table class="w-full border">
              <thead>
                  <tr class="bg-gray-50 border-b">
                    <th class="p-2 border-r w-1/12 text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            Image
                        </div>
                    </th>

                    <th class="p-2 border-r w-8/12 text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            Name
                        </div>
                    </th>
                      
                    <th class="p-2 border-r text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            Action
                        </div>
                    </th>
                  </tr>
              </thead>
              <tbody>
                    @foreach( $skills as $key => $skill)
                        <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                            <td class="border-r">
                                <img src="{{ asset('storage/' . $skill->logo) }}" alt="" class="w-24 h-12">    
                            </td>
                            <td class="border-r">{{ $skill->name}}</td>
                            <td class="flex justify-center space-x-2 p-2">
                                <a href="{{ route('skills.edit', $skill->id)}}">
                                    <button class="bg-blue-500 hover:bg-blue-600 p-2 text-white hover:shadow-lg rounded-lg text-xs font-thin">Edit</button>
                                </a>
                            
                                <form action="{{ route('skills.destroy', $skill->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-500 hover:bg-red-600 p-2 text-white hover:shadow-lg rounded-lg text-xs font-thin">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
              </tbody>
          </table>
      </div>
  </div>
@endsection