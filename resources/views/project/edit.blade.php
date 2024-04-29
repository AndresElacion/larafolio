@extends('dashboard')
@section('content')
<button>
    <a href="/project" class="bg-gray-400 hover:bg-gray-500 p-2 rounded-lg">back</a>
</button>
<div class="bg-white shadow-md rounded px-8 mt-12 pt-6 pb-8 mb-4 flex flex-col my-2">
    <div class="mb-6">
        <h1 class="text-2xl">Edit project.</h1>
    </div>
    <form method="POST" action="{{ route('project.update', $projects->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
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
      <button class="bg-blue-500 p-2 text-white rounded-lg hover:bg-blue-600">Update</button>
    </form>  
  </div>
@endsection