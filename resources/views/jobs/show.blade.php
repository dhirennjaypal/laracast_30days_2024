<x-layout>
    <x-slot:header>
        Job Listing
    </x-slot:header>
   <h1 class="font-bold text-lg">{{ $job->title }}</h1>
   <p>
        Salary: {{ $job->salary }}
   </p>

	@can("update", $job)
		<p class="mt-6">
			<x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
		</p>
	@endcan
</x-layout>
