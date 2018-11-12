@extends('customer.layouts.master')
@section('content')
<div class="container">
<!-- DataTables Example -->
    <div class="card mb-4" style="font-size: 14px;">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Bảng Điểm Học Phần Của Sinh Viên</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Học Kỳ</th>
                      <th>Mã HP</th>
                      <th>Tên HP</th>
                      <th>TC</th>
                      <th>Điểm HP</th>
                      <th>HP Thay Thếs</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($results as $res)
                    <tr>
                      <td>{{ $res->semester }}</td>
                      <td>{{ $res->code_subject }}</td>
                      <td>{{ $res->name }}</td>
                      <td>{{ $res->train_credit }}</td>
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
                      <td>Không Có</td>
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