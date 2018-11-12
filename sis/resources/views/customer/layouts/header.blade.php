  <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Logo -->
                            <div class="logo" style="">
                                <a href="home">
                                    <h1 style="color: yellow;">Student Information System</h1>
                                    {{-- <img src="vendor_customer/img/core-img/logo.png" alt=""> --}}
                                </a>
                            </div>

                            <!-- Login Search Area -->
                            <div class="login-search-area d-flex align-items-center">
                                <!-- Search Form -->
                                <div class="search-form">
                                    <form action="search" method="post">
                                        @csrf
                                        <input id="key_search" type="search" name="key_search" class="form-control" placeholder="Tìm Kiếm">
                                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                                <!-- Login -->
                                <div class="login d-flex" style="margin-left: 50px;">
                                    <a href="student/login" style="font-size: 20px;"><i>Đăng Nhập</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="newspaper-main-menu" id="stickyMenu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="newspaperNav">

                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="vendor_customer/img/core-img/logo.png" alt=""></a>
                        </div>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="home">Trang Chủ</a>
                                        <ul class="dropdown">
                                            <li><a href="support/regist-subject">HD Đăng Ký Học Tập</a></li>
                                            <li><a href="support/department">Liên Hệ Phong Ban</a></li>
                                            <li><a href="support/procedure">Thủ Tục Hành Chính</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Thông Tin Người Dùng</a>
                                        <ul class="dropdown">
                                            <li><a href="student/profile/{{ 20143397 }}">Thông Tin Sinh Viên</a></li>
                                            <li><a href="student/profile/update/{{ 20143397 }}">Cập Nhật Hồ Sơ </a></li>
                                            <li><a href="">Đổi Mật Khẩu</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Thời Khóa Biểu</a>
                                        <ul class="dropdown">
                                            <li><a href="student/plan/{{ 20143397 }}">Sinh Viên Hiện Tại</a></li>
                                            <li><a href="student/plans/search">Tra Cứu SV Khác</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Kết Quả Học Tập</a>
                                        <ul class="dropdown">
                                            <li><a href="student/result/personal/{{ 20143397 }}">Bảng Điểm Cá Nhân</a></li>
                                            <li><a href="student/result/subjects/{{ 20143397 }}">Bảng Điểm Học Phần</a></li>
                                            <li><a href="student/result/toeic">Tra Cứu Toeic</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Đăng Ký Học Tập</a>
                                        <ul class="dropdown">
                                            <li><a href="student/regist/subjects">Đăng Ký Học Phần</a></li>
                                            <li><a href="student/regist/subject/free">Đăng Ký HP TCTD</a></li>
                                            <li><a href="">Đăng Ký Tốt Nghiệp</a></li>
                                            <li><a href="">Đăng Ký Phân Ngành</a></li>
                                            <li><a href="">Kết Quả Xét ĐA</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Tra Cứu</a>
                                        <ul class="dropdown">
                                            <li><a href="">Danh Sách Lớp SV</a></li>
                                            <li><a href="">Kết Quả Phân Ngành</a></li>
                                            <li><a href="">SV Đăng Ký Học Tập</a></li>
                                            <li><a href="">Học Phí SV</a></li>
                                            <li><a href="">Kết Quả Xét ĐA</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Phản Hồi Hệ Thống</a>
                                        <ul class="dropdown">
                                            <li><a href="student/question">SV Hỏi</a></li>
                                            <li><a href="student/feedback">Góp Ý Trang Web</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

{{-- Sử lý search Ajax --}}
<script type="text/javascript">
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#key_search').keyup(function() {
                var url = 'search';
                var key = document.getElementById("key_search").value;
                console.log(key);
                $.ajax({
                    type:'POST',
                    url: url,
                    data:{'key_search': key},
                    success:function(response){
                        console.log(response);
                    },
                    error:function() {
                        console.log('Error Ajax');
                    }
                });
                }else{
                    console.log("Lỗi gì đó rồi");
                }
            });
        });
</script>