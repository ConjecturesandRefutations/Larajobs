<h1>{{$heading}}</h1>

{{-- @if(count($jobs) == 0)
     <p>No listings found</p>
@endif --}}

@unless(count($jobs) == 0)

@foreach($jobs as $job)
     <h2>{{$job['title']}}</h2>
     <p>{{$job['description']}}</p>
@endforeach

@else
<p>No listings found</p>
@endunless