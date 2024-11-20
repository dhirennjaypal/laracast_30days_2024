<x-layout>
    <x-slot:header>
        Job Listing
    </x-slot:header>
   <h1 class="font-bold text-lg">{{ $job->title }}</h1>
   <p>
        Salary: {{ $job->salary }}
   </p>
</x-layout>
