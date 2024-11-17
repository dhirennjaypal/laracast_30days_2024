<x-layout>
    <x-slot:header>
        Job Listing
    </x-slot:header>
    <ul>
    @foreach ($jobs as $job)
        <li>{{ $job->title }} {{ $job->salary }}</li>
    @endforeach
    </ul>
</x-layout>
