<section class="bg-slate-100" id="project">
<!-- Container for demo purpose -->
<div class="container p-24 my-24 mx-auto md:px-6">
    <!-- Section: Design Block -->
    <section class="text-center lg:text-left">
      <h2 class="mb-12 text-center text-3xl font-bold">
        Projects
      </h2>

      
      <div class="grid gap-x-6 gap-y-10 lg:grid-cols-4">
        @foreach($projects as $project)
        <div class="mb-12 lg:mb-0 flex flex-col">
          <div class="bg-blue-100 flex flex-col items-center justify-center relative rounded-lg">
            <img src="{{ asset('storage/' . $project->logo) }}" class="w-full h-60 rounded-lg shadow-xl" />
          </div>
          <h5 class="mb-2 text-center uppercase mt-4 text-lg font-bold">{{ $project->name}}</h5>
          <div class="flex items-center justify-center gap-2 pt-2">
            <button type="button"
                class="inline-block px-6 py-2.5 border-2 border-cyan-500 font-medium text-xs leading-tight uppercase rounded-xl hover:text-white hover:bg-cyan-500 focus:outline-none focus:ring-0">
                <a href="{{ Str::startsWith($project->liveLink, ['http://', 'https://']) ? $project->liveLink : 'http://' . $project->liveLink }}" target="_blank" rel="noopener noreferrer">
                    <i class="fa-solid fa-arrow-up-right-from-square fa-lg mr-1"></i>Live Demo
                </a>
            </button>
            <button type="button"
                class="inline-block px-6 py-2.5 border-2 border-cyan-500 font-medium text-xs leading-tight uppercase rounded-xl hover:text-white hover:bg-cyan-500 focus:outline-none focus:ring-0">
                <a href="{{ Str::startsWith($project->sourceCode, ['http://', 'https://']) ? $project->sourceCode : 'http://' . $project->sourceCode }}" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-github fa-lg mr-1"></i>Source Code
                </a>
            </button>
          </div>
        </div>
        @endforeach
      </div>
    </section>
    <!-- Section: Design Block -->
  </div>
  <!-- Container for demo purpose -->
</section>
