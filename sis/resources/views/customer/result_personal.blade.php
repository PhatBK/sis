@extends('customer.layouts.master')
@section('content')
<div class="container">
<!-- DataTables Example -->
    <div class="card mb-4" style="font-size: 14px;">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Bảng Điểm Cá Nhân Của Sinh Viên:&nbsp;&nbsp;<b style="color: red;">{{ $code_student }}</b></div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Học Kỳ</th>
                      <th>Mã HP</th>
                      <th>Tên HP</th>
                      <th>TC</th>
                      <th>Lớp Học</th>
                      <th>Điểm QT</th>
                      <th>Điểm KT</th>
                      <th>Điểm Số</th>
                      <th>Điểm Chữ</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($results as $res)
                    <tr>
                      <td>{{ $res->semester }}</td>
                      <td>{{ $res->code_subject }}</td>
                      <td>{{ $res->name }}</td>
                      <td>{{ $res->train_credit }}</td>
                      <td>{{ $res->code_class }}</td>
                      <td>{{ $res->process_score }}</td>
                      <td>{{ $res->finish_score }}</td>
                      <td>
                        @php
                            $number_score = $res->process_score * $res->weight_P + $res->finish_score * $res->weight_F;
                            echo $number_score;
                        @endphp
                      </td>
                      <td>
                        @php
                          $number_score = $res->process_score * $res->weight_P + $res->finish_score * $res->weight_F;
                          if($number_score < 4.0) {
                            echo "F";
                          } else if(4.0 <= $number_score && 5.45 > $number_score) {
                            echo "D";
                          } else if(5.5 <= $number_score && 5.95 > $number_score) {
                            echo "D+";
                          } else if(6.0 <= $number_score && 6.45 > $number_score) {
                            echo "C";
                          } else if(6.5 <= $number_score && 6.95 > $number_score) {
                            echo "C+";
                          } else if(7.0 <= $number_score && 7.05 > $number_score) {
                            echo "B";
                          } else if(8.0 <= $number_score && 8.45 > $number_score) {
                            echo "B+";
                          } else if(8.5 <= $number_score && 9.45 > $number_score) {
                            echo "A";
                          } else {
                            echo "A+";
                          }
                        @endphp
                      </td>
                    </tr>
                  </tbody>
                  @endforeach
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
</div>
@endsection