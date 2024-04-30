<section id="skills">
<!-- Container for demo purpose -->
<div class="container my-24 mx-auto md:px-6">
    <!-- Section: Design Block -->
    <section class="mb-32 text-center">
      <h2 class="mb-12 text-3xl font-bold">
        Skills I Own
      </h2>


      <div class="grid lg:grid-cols-6 md:grid-cols-4 sm:grid-cols-2">
        @foreach($skills as $skill)
        <div class="mb-12 md:mb-0">
          <div class="mb-2 inline-block rounded-xl bg-primary-100 p-4 text-primary">
            <img src="{{ asset('storage/' . $skill->logo)}}" alt="" class="w-12 h-12">
          </div>
          <h3 class="uppercase mb-4 text-2xl font-bold text-primary">
            {{ $skill->name }}
          </h3>
        </div>
        @endforeach
      </div>
    </section>
    <!-- Section: Design Block -->
  </div>
  <!-- Container for demo purpose -->
</section>