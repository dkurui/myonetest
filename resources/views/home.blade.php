 
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
<<<<<<< HEAD
<div class="table-responsive">
=======
<div class="table-responsive">Email Address Phone Number More Info
>>>>>>> 544eb5610c13b200f76b2070e6c4695df7bf9ea1
<table class="table table-striped table-bordered">

</thead>
<tbody>
<<<<<<< HEAD
<tr><td>Name</td><td>Email Address</td><td>Phone Number</td><td>More Info</td>
</tr>

 @foreach($members as $key => $member) 
<tr>
<td>{{ $member->name }}</td>
<td>{{ $member->email }}</td>
<td>{{ $member->phone }} </td>
<td><a class="btn btn-large btn-info" href="{!! URL::to('more/' . $member->id) !!}">View more info</a></td>
</tr>
@endforeach

=======
 @foreach($members as $key => $member) 
<td>{{ $member->name }}</td>
<td>{{ $member->email }}</td>
<td>{{ $member->phone }} </td>
<td><a class="btn btn-large btn-info" href="{!! URL::to('more/' . $member->id) !!}">View more info</a></td>
</td>
@endforeach
<tr>
>>>>>>> 544eb5610c13b200f76b2070e6c4695df7bf9ea1

</tr>
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
