@extends('customer.layouts.master')
@section('content')
<div class="container">
<!-- DataTables Example -->
    <h3>Đăng Ký Học Phần</h3>
    <h4>Sinh Viên: &nbsp;&nbsp;
      <input type="number" name="code_student" id="code_student" value="{{ $code_student }}" disabled="">
    </h4>
    <div class="card mb-4" style="font-size: 14px;margin-top: 50px; ">
            <div class="card-header">
              {{-- <form role="form" action="student/regist/subject/{{ 20143397 }}" method="post"> --}}
              <form role="form">
              @csrf
                  <div class="form-group">
                    <label>Học Kỳ:</label>
                    <select>
                      <option>20182</option>
                      <option>20181</option>
                      <option>20173</option>
                      <option>20172</option>
                      <option>20171</option>
                      <option>20163</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label style="text-align:center;">Mã Học Phần:</label>
                    <input id="code_subject" type="text" value="" name="code_subject" required="">
                    &nbsp;&nbsp;&nbsp;
                    <button id="registing" class="btn btn-success" type="submit">Đăng Ký</button>
                  </div>
                  
              </form>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Mã HP</th>
                      <th>Tên HP</th>
                      <th>Loại Học Phần</th>
                      <th>Ngày Đăng Ký</th>
                      <th>Trạng Thái Đăng Ký</th>
                      <th>Số Tín Chỉ</th>
                      <th>Học Kỳ Chuẩn</th>
                      <th>Học Kỳ Đăng Ký</th>
                      <th>Hệ Số Điểm</th>
                    </tr>
                  </thead>
                  <tbody id="result">
                  </tbody>
                </table>
                <div style="text-align: center;">
                    <button class="btn btn-danger" id="send_regist">Gửi Đăng Ký</button>
                </div>
              </div>
            </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
  const results = new Set();
  const code_subject_all = new Set();
  const code_student = 0;
  const status = "Chưa Thành Công";
</script>
<script>

    $('#registing').click(function(e) {
      e.preventDefault();
      $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
      });
      var code_subject = $('#code_subject').val();
      var code_student = `{{ $code_student }}`;
      var url = `{{ route('RegistAjax') }}`;
      let code_sub_date = [code_subject];
      code_student = code_student;

      $.ajax({
        url : url,
        data : {
          'code_subject' : code_subject,
          'code_student' : code_student,
        },
        type : 'post',
        success : function(response) {
          console.log(response);
          if (response[0][0] != null) {

            results.add(response[0][0]);
            code_sub_date.push(response[1]);
            code_sub_date.push(response[2]);
            code_subject_all.add(code_sub_date);

            var result_show = ' ';
            for(let data of results) {
              result_show += `
              <tr>
                        <td>${data.code_subject}</td>
                        <td>${data.name}</td>
                        <td>${data.type_subject}</td>
                        <td>${response[1]}</td>
                        <td>${status}</td>
                        <td>${data.train_credit}</td>
                        <td>${data.semester_normal}</td>
                        <td>20181</td>
                        <td>${data.weight_F} / ${data.weight_P}</td>
              </tr>
            `;
            }
            document.getElementById('result').innerHTML = result_show;
          } else {
            console.log("Môn học chưa có hoặc sai mã học phần..");
            alert("Môn Học Không Tồn Tại..");
          }
        },
        error : function(error) {
          console.log(error);
        }

      });
    });

    $('#send_regist').click(function(e) {
      e.preventDefault();
      $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
      });

      var url = `{{ route('SaveRegistSubject') }}`;
      let data_send = [...code_subject_all];

      $.ajax({
        url : url,
        data : {
          'code_subject_all' : data_send,
        },
        type : 'post',
        success : function(response) {
          console.log("Server response:");
          console.log(response);
        },
        error : function(error) {
          console.log(error);
        }

      });
      console.log(code_subject_all);
    });

</script>
@endsection
