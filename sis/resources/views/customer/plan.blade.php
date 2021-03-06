@extends('customer.layouts.master')
@section('content')
<div class="container">
<!-- DataTables Example -->
    <div class="card mb-4" style="font-size: 14px;">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Thời khóa biểu của sinh viên:&nbsp;<b>{{ $code_student }}</b></div>
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
                    @foreach($plansInfo as $pl)
                    <tr>
                      <td>{{ $pl->code_class }}</td>
                      <td>{{ $pl->code_subject }}</td>
                      <td>{{ $pl->time_start }}</td>
                      <td>{{ $pl->time_finish }}</td>
                      <td>{{ $pl->address }}</td>
                      <td>{{ $pl->teacher }}</td>
                      <td>{{ $pl->semester }}</td>
                      <td>{{ $pl->day_start }}</td>
                      <td>{{ $pl->day_finish }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
</div>
@endsection