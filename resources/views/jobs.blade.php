<x-layout>
  <x-slot:heading>
  contact page
</x-slot:heading>


  <x-slot:src>
  src="https://i.pinimg.com/736x/7c/a8/c0/7ca8c0194f4be96a9442ec56b4c7c8a5.jpg"
</x-slot:src>
<div class="space-y-4">
  @foreach($jobs as $job)
  <a href="jobs/{{ $job['id'] }}" class="block px-4 py-5 border border-gray-300 rounded-lg">
    <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>
    <div><strong> {{$job['title'] }} : </strong> pay : {{$job['pay']}}</div>
  </a>
  @endforeach

  <div>
    {{ $jobs->links() }}
  </div>

  </div>
</x-layout>