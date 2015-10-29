@extends('master')
 
@section('content')
 
 
 
<div class="container">
<div id="page-wrapper">
<div class="container-fluid">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title"><i class="fa fa-money fa-fw"></i> All Registered Members</h3>
&nbsp;
 
</div>
&nbsp;
<div class="panel-body">
<div class="table-responsive">
<table class="table table-striped table-bordered">
<thead>

</thead>
<tbody>
<tr>
<td>Member Name</td><td>Member email</td><td>Member Phone</td><td>Member More Info</td>
</tr>
@foreach($members as $key => $member)
<tr>
<td>{{ $member->name }}</td>
<td>{{ $member->email }}</td>
<td>{{ $member->phone }}</td>
<td><a class="btn btn-large btn-info" href="{{ URL::to('more/' . $member->id) }}">View more info</a></td>

</tr>
@endforeach
</tbody>
</table>
&nbsp;
 
</div>
&nbsp;
 
</div>
</div>
&nbsp;
 
</div>
&nbsp;
 
</div>
&nbsp;
 
</div>
@endsection