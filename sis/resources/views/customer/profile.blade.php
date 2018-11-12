@extends('customer.layouts.master')
@section('content')
<div class="container" style="background-color: #f1f6f5; margin-top: 50px;  ">
	<div class="col-md-6">
		{{-- @foreach($profile as $pr) --}}
			<h5>Mã Số Sinh Viên: &nbsp;{{ $pr->code_student }}</h5>
			<h5>Họ Tên:&nbsp;{{ $pr->name }}</h5>
			<h5>Giới Tính:&nbsp;{{ $pr->sex }}</h5>
			<h5>Ngày Sinh: &nbsp;{{ $pr->birthday }}</h5>
			<h5>CMND/ID:&nbsp;{{ $pr->id_card }}</h5>		
			<h5>Số Điện Thoại:&nbsp;{{$pr->phone}}</h5>
			<h5>Lớp Học:&nbsp;{{ $pr->class }}</h5>		
			<h5>Trạng Thái Học:&nbsp;{{ $pr->status }}</h5>
			
		{{-- @endforeach --}}
	</div>
	
</div>
@endsection