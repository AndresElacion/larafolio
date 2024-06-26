<div class="min-h-screen flex flex-row bg-gray-100 shadow-lg">
    <div class="flex flex-col sm:w-56 w-full bg-white overflow-hidden">
      <div class="px-12 py-10 flex flex-col">
        <div class="h-auto">
            <a href="/project" class="inline-flex relative items-center p-2 my-2 w-full text-sm sm:text-md font-medium rounded-md hover:translate-x-1 sm:hover:translate-x-6 hover:text-gray-600 text-gray-500 transition-transform">Project</a>
            <a href="/skills" class="inline-flex relative items-center p-2 my-2 w-full text-sm sm:text-md font-medium rounded-md hover:translate-x-1 sm:hover:translate-x-6 hover:text-gray-600 text-gray-500 transition-transform">Skills</a>
            <a href="/contact" class="inline-flex relative items-center p-2 my-2 w-full text-sm sm:text-md font-medium rounded-md hover:translate-x-1 sm:hover:translate-x-6 hover:text-gray-600 text-gray-500 transition-transform">Contact Us</a>
            <form method="POST" action="/logout">
                @csrf
                <button type="submit" class="inline-flex relative items-center p-2 my-2 w-full sm:w-24 text-sm sm:text-md font-medium rounded-md hover:translate-x-1 sm:hover:translate-x-6 hover:text-red-600 text-red-500 transition-transform">
                    Sign out
                </button>
            </form>
        </div>
      </div>
    </div>
</div>