@extends('dashboard')
@section('content')
<div class="bg-white shadow-lg rounded px-8 mt-12 pt-6 pb-8 mb-4 flex flex-col my-2">
    <div class="mb-6">
      <h1 class="text-2xl">Fill up the form to add new project.</h1>
    </div>
    <form method="POST" action="{{ route('project.store') }}" enctype="multipart/form-data">
        @csrf
      <div class="-mx-3 md:flex mb-6">

        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="logo">
              Logo
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="logo" id="logo" type="file" placeholder="Please enter logo">
        </div>

        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="name">
            Name
          </label>
          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="name" id="name" type="text" placeholder="Please enter name">
        </div>

        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="liveLink">
              Live Link
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="liveLink" id="liveLink" type="text" placeholder="Please enter live link">
        </div>

        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="sourceCode">
              Source Code
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="sourceCode" id="sourceCode" type="text" placeholder="Please enter source code">
        </div>

      </div>
      <button class="bg-blue-500 p-2 text-white rounded-lg hover:bg-blue-600">Submit</button>
    </form>  
  </div>
  <hr />
  <div class="pt-2">    
      <div class="table w-full p-2">
          <h1 class="pb-3 text-2xl">All Category</h1>
          <table class="w-full border">
              <thead>
                  <tr class="bg-gray-50 border-b">
                    <th class="p-2 border-r w-1/12 text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            Image
                        </div>
                    </th>

                    <th class="p-2 border-r w-3/12 text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            Name
                        </div>
                    </th>

                    <th class="p-2 border-r w-3/12 text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            Live Link
                        </div>
                    </th>

                    <th class="p-2 border-r w-3/12 text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            Source Code
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
                    @foreach( $projects as $key => $project)
                        <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                            <td class="border-r">
                                <img src="{{ asset('storage/' . $project->logo) }}" alt="" class="w-24 h-12">    
                            </td>
                            <td class="border-r">{{ $project->name}}</td>
                            <td class="border-r">{{ $project->liveLink}}</td>
                            <td class="border-r">{{ $project->sourceCode}}</td>
                            <td class="flex justify-center space-x-2 p-2">
                                <a href="{{ route('project.edit', $project->id)}}">
                                    <button class="bg-blue-500 hover:bg-blue-600 p-2 text-white hover:shadow-lg rounded-lg text-xs font-thin">Edit</button>
                                </a>
                            
                                <form action="{{ route('project.destroy', $project->id)}}" method="POST">
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