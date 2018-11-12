@extends('customer.layouts.master')
@section('content')
<div class="container">
	 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="text-align: center;" class="page-header">Cập Nhật Hồ Sơ Sinh Viên</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    @foreach($profile as $pr)
                                    <form role="form" action="student/profile/update/{{$pr->code_student }}" method="post">
                                    	@csrf
                                        <div class="form-group">
                                            <label>Mã Số Sinh Viên</label>
                                            <input value="{{ $pr->code_student }}" class="form-control" name="code_student" disabled="">
                                        </div>
                                        <div class="form-group">
                                            <label>Họ Tên</label>
                                            <input value="{{ $pr->name }}" class="form-control" name="name" disabled="">
                                        </div>
                                        <div class="form-group">
                                            <label>Dân Tộc</label>
                                            <input value="{{ $pr->nation }}" class="form-control" name="nation">
                                        </div>
                                        <div class="form-group">
                                            <label>Quốc Tịch</label>
                                            <input value="{{ $pr->nationality }}" class="form-control" name="nationality">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Nơi Sinh</label>
                                            <input value="{{ $pr->birthplace }}" class="form-control" name="birthplace">
                                        </div>
                                        <div class="form-group">
                                            <label>Năm Tốt Nghiệp Cấp 3</label>
                                            <input value="{{ $pr->graduating_year }}" class="form-control" name="graduating_year">
                                        </div>
                                        <div class="form-group">
                                            <label>Trường Phổ Thông Trung Học</label>
                                            <input value="{{ $pr->school_3 }}" class="form-control" name="school_3">
                                        </div>
                                        <div class="form-group">
                                            <label>Đối Tượng Chính Sách</label>
                                            <input value="{{ $pr->object }}" class="form-control" name="object">
                                        </div>
                                        <div class="form-group">
                                            <label>Số CMND/Card</label>
                                            <input value="{{ $pr->id_card }}" class="form-control" name="id_card">
                                        </div>
                                        <div class="form-group">
                                            <label>Ngày Cấp</label>
                                            <input value="{{ $pr->date_range }}" class="form-control" name="date_range" type="date">
                                        </div>
                                        <div class="form-group">
                                            <label>Nơi Cấp</label>
                                            <input value="{{$pr->place_range }}" class="form-control" name="place_range">
                                        </div>
                                        <div class="form-group">
                                            <label>Địa Chỉ Tạm Chú</label>
                                            <input value="{{ $pr->current_address }}" class="form-control" name="current_address">
                                        </div>
                                        <div class="form-group">
                                            <label>Số Điện Thoại</label>
                                            <input value="{{ $pr->phone }}" class="form-control" name="phone">
                                        </div>
                                        <div class="form-group">
                                            <label>Ngày Sinh</label>
                                            <input value="{{ $pr->birthday }}" class="form-control" name="birthday">
                                        </div>
                                        <div class="form-group">
                                            <label>Giới Tính</label>
                                            <input value="{{ $pr->sex }}" class="form-control" name="sex">
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input name="veryfi" type="checkbox" value="">&nbsp;Tôi xin cam kết các thông tin trên là hoàn toàn chính xác
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success">Cập Nhật</button>
                                        <button type="reset" class="btn btn-danger" style="float: right;">Đặt Lại</button>
                                    </form>
                                    @endforeach
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
</div>
@endsection