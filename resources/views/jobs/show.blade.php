<x-layout>
<x-slot:heading>
  job title
</x-slot:heading>
<x-slot:src>
  src="https://i.pinimg.com/736x/7c/a8/c0/7ca8c0194f4be96a9442ec56b4c7c8a5.jpg"
</x-slot:src>
 {{ $job->title }} : pay {{ $job->pay }}

@can('edit',$job)
   <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>

@endcan

</x-layout>