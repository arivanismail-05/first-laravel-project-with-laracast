<x-layout>
<x-slot:heading>
  create job
</x-slot:heading>
<x-slot:src>
  src="https://i.pinimg.com/736x/7c/a8/c0/7ca8c0194f4be96a9442ec56b4c7c8a5.jpg"
</x-slot:src>
 
<form method="POST" action="/jobs">


    @csrf
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base/7 font-semibold text-gray-900">Profile</h2>
      <p class="mt-1 text-sm/6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <x-form-flied>
                <x-form-label for="title" >title</x-form-label>

          <div class="mt-2">
            <x-form-input type="text" name="title" id="title" placeholder="CEO" />

          </div>
            <x-form-error name="title" />

        </x-form-flied>


          <x-form-flied>
                <x-form-label for="pay" >pay</x-form-label>

          <div class="mt-2">
            <x-form-input type="text" name="pay" id="pay" placeholder="199187987$" />

          </div>
            <x-form-error name="pay" />

        </x-form-flied>

        
      
      </div>
      {{-- <div class="mt-2">
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-500"> {{ $error }} </li>
                    @endforeach
                </ul>
            @endif
        </div> --}}
    </div>

    </div>
  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
    <x-form-button>Save</x-form-button>
  </div>
</form>

</x-layout>