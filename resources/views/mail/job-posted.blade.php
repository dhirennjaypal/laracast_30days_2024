<h2>
	{{ $job->title }}
</h2>

<p>
    Your Job has been posted
</p>

<p>
	<a href="{{ url("jobs/{$job->id}") }}">View Your Job Listing</a>
</p>