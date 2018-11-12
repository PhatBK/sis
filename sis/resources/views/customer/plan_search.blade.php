@extends('customer.layouts.master')
@section('content')
<div class="container">
<!-- DataTables Example -->
    <div class="card mb-4" style="font-size: 14px;margin-top: 50px; ">
            <div class="card-header">
              {{-- <i class="fas fa-table"></i>
              Thời khóa biểu của sinh viên: --}}
              <form role="form" action="student/plans/search" method="post">
              @csrf
                  <div class="form-group">
                    <label style="text-align:center;">Mã Số Sinh Viên Cần Tìm Kiếm</label>
                    <input value="" class="form-control" name="code_student" required="">
                  </div>
              </form>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Mã Lớp</th>
                      <th>Mã Môn</th>
                      <th>Time Start</th>
                      <th>Time Finish</th>
                      <th>Phòng Học</th>
                      <th>Giảng Viên</th>
                      <th>Học Kỳ</th>
                      <th>Day Start</th>
                      <th>Day Finish</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
</div>
@endsection