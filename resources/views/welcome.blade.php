@foreach ($data as $da)
<h1>Id=> {{ $da->id }}</h1> <a href="{{ route('show', $da->id) }}">View Profile</a> 
@endforeach
