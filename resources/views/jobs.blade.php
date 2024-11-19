<x-layout>
    <x-slot:header>
        Job Listing
    </x-slot:header>
    <ul>
    @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{ $job->id }}">
                <strong>{{ $job->title }}</strong> {{ $job->salary }}
            </a>
        </li>
    @endforeach
    </ul>
</x-layout>
