<x-layout>
<x-slot:heading>
  edit job {{ $job->title }}
</x-slot:heading>
<x-slot:src>
  src="https://i.pinimg.com/736x/7c/a8/c0/7ca8c0194f4be96a9442ec56b4c7c8a5.jpg"
</x-slot:src>
 
<form method="POST" action="/jobs/{{ $job->id }}">


    @csrf

    @method('PATCH')
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
<div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="title" class="block text-sm/6 font-medium text-gray-900">title</label>
          <div class="mt-2">
            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
              <input type="text" 
              value="{{ $job->title }}"
              
              
              name="title" 
              
              
              id="title" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="title of the job" />
            </div>
          </div>
        </div>

        @error('title')

        <p class="text-red-500 font-semibold mt-2 block"> {{ $message }} </p>
            
        @enderror


         <div class="sm:col-span-4">
          <label for="pay" class="block text-sm/6 font-medium text-gray-900">pay</label>
          <div class="mt-2">
            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
              <input type="text" 
            value="{{ $job->pay }}"
              
              name="pay" id="pay" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="50,500 $" />
            </div>
          </div>
        </div>
        @error('pay')

        <p class="text-red-500 font-semibold mt-2 block"> {{ $message }} </p>
            
        @enderror

        
      
      </div>
    </div>

    </div>
  <div class="mt-6 flex items-center justify-end gap-x-6">
    <div>
     <button form="delete-form" type="submit" class="text-red-500 font-bold">delete</button>
    </div>
    <div>

    <a  href="/jobs/{{ $job->id }}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">update</button>
    </div>
    
  </div>
</form>

<form action="/jobs/{{ $job->id }}" method="POST" class="hidden" id="delete-form">

    @csrf
    @method("DELETE")
</form>

</x-layout>