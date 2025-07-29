@extends('layouts.app') {{-- Kế thừa từ layout/app.blade.php --}}

@section('title', 'Trang chủ')

@section('content')
<div>
    <video autoplay loop playsinline muted>
        <source src="{{ asset('asset/image/video.webm') }}" type="video/webm">
        Trình duyệt của bạn không hỗ trợ video.
    </video>

    <div class="video-overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-8 position-relative h-100vh">
                    <div class="card card-order bg-white bg-opacity-50">
                        <div class="card-body">
                            <h3 class="mb-4 text-uppercase fw-bold text-white h3 text-center">Đặt Thuê Xe</h3>
                            <p class="mb-4 text-white text-center">Quý khách vui lòng điền đầy đủ thông tin bên dưới để chúng tôi có thể tư vấn được chính xác nhất.</p>
                            <form method="POST" action="https://www.e-moto.vn/thong-tin-dat-xe" accept-charset="UTF-8" class="needs-validation" novalidate><input name="_token" type="hidden" value="QOnjRASDMiNYUD41P5zIBNALbey8nvz2EImcxmMW">
                                <input type="hidden" name="_token" value="QOnjRASDMiNYUD41P5zIBNALbey8nvz2EImcxmMW">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroupName"><i class="fas fa-biking"></i></span>
                                    <select class="form-select" aria-label="Vui lòng chọn địa điểm" name="place" required>
                                        <option value="">----Vui lòng chọn địa điểm----</option>
                                        <option value="1">111 Lê Thanh Nghị, Hải Châu, Đà Nẵng</option>
                                        <option value="3">307/2A Phan Châu Trinh, Hải Châu, Đà Nẵng</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Vui lòng chọn địa điểm
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="inputGroupName"><i class="far fa-calendar-alt"></i></span>
                                            <input type="text" class="form-control" id="validationCustomFrom" placeholder="dd-mm-yyyy" name="from" required>
                                            <div class="invalid-feedback">
                                                Vui lòng nhập ngày thuê
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="inputGroupName"><i class="fas fa-calendar-alt"></i></span>
                                            <input type="text" class="form-control" id="validationCustomToday" name="to" placeholder="dd-mm-yyyy" required>
                                            <div class="invalid-feedback">
                                                Vui lòng nhập ngày trả
                                            </div>
                                        </div>
                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                $("#validationCustomFrom").datepicker({
                                                    format: 'dd-mm-yyyy',
                                                    startDate: '-0d',
                                                    language: 'vi',
                                                    todayBtn: 1,
                                                    autoclose: true,
                                                }).on('changeDate', function(selected) {
                                                    var minDate = new Date(selected.date.valueOf());
                                                    $('#validationCustomToday').datepicker('setStartDate', minDate);
                                                    $('#validationCustomToday').datepicker('setDate', null); // <--THIS IS THE LINE ADDED
                                                });
                                                $("#validationCustomToday").datepicker({
                                                    format: 'dd-mm-yyyy',
                                                    startDate: '-0d',
                                                    language: 'vi',
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroupName"><i class="far fa-user"></i></span>
                                    <input type="text" class="form-control" id="validationCustomName" placeholder="Vui lòng nhập họ tên" aria-describedby="inputGroupName" name="name" required>
                                    <div class="invalid-feedback">
                                        Vui lòng nhập họ tên
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroupEmail"><i class="far fa-envelope"></i></span>
                                    <input type="email" class="form-control" id="validationCustomEmail" placeholder="Vui lòng nhập email ( không bắt buộc)" aria-describedby="inputGroupEmail" name="email">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroupPhone"><i class="fas fa-mobile-alt"></i></span>
                                    <input type="text" class="form-control" id="validationCustomPhone" placeholder="Vui lòng nhập số điện thoại" aria-describedby="inputGroupPhone" name="phone" required>
                                    <div class="invalid-feedback">
                                        Vui lòng nhập số điện thoại
                                    </div>
                                </div>
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="inputGroupAddress"><i class="fas fa-home"></i></span>
                                    <input type="text" class="form-control" id="validationCustomAddress" placeholder="Địa chỉ nhận xe ( không bắt buộc)" aria-describedby="inputGroupAddress" name="address">
                                </div>
                                <div class="mb-5 mb-lg-0">
                                    <button type="submit" class="btn btn-danger w-100 px-4 btn-lg rounded-pill"><i class="far fa-envelope"></i> Chọn Xe</button>
                                </div>
                            </form>
                            <script>
                                // Example starter JavaScript for disabling form submissions if there are invalid fields
                                (function() {
                                    'use strict';
                                    window.addEventListener('load', function() {
                                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                        var forms = document.getElementsByClassName('needs-validation');
                                        // Loop over them and prevent submission
                                        var validation = Array.prototype.filter.call(forms, function(form) {
                                            form.addEventListener('submit', function(event) {
                                                if (form.checkValidity() === false) {
                                                    event.preventDefault();
                                                    event.stopPropagation();
                                                }
                                                form.classList.add('was-validated');
                                            }, false);
                                        });
                                    }, false);
                                })();
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="intro">
        <div class="container pt-lg-5">
            <div class="row row py-5 my-5">
                <div class="col-lg-7 ps-lg-5 order-lg-last">
                    <h4 class="text-danger text-uppercase fw-bold">Dịch vụ cho thuê</h4>
                    <h1 class="text-uppercase fw-bold mb-4">Xe Máy Điện Vinfast Chuyên Nghiệp</h1>
                    <p class="mb-5">Dịch vụ cho thuê xe máy điện VINFAST chuyên nghiệp tại thành phố Đà Nẵng. Việc lái xe máy điện khi đi du lịch Đà Nẵng sẽ giúp bạn chủ động hơn trong việc di chuyển cũng như tận hưởng bầu không khí trong lành, thoáng mát của "thành phố đáng sống nhất Việt Nam"</p>
                    <div class="row">
                        <div class="col-lg-6 mb-5">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-tags fa-2x"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="text-uppercase fw-bold">Mẫu Mã Đa Dạng</h5>
                                    <p class="mb-0">Với các dòng xe máy điện từ trung đến cao cấp của VINFAST, giúp nâng cao trải nghiệm.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-newspaper fa-2x"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="text-uppercase fw-bold">Thủ Tục Nhanh Chóng</h5>
                                    <p class="mb-0">Thủ tục đơn giản, nhanh chóng chỉ với giấy tờ tùy thân hoặc các giấy tờ liên quan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-credit-card fa-2x"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="text-uppercase fw-bold">Thanh Toán Linh Hoạt</h5>
                                    <p class="mb-0">Nhiều hình thức thanh toán linh hoạt thông qua các giao thức online hoặc tiền mặt</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-tasks fa-2x"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="text-uppercase fw-bold">Giá Cả Hợp Lý</h5>
                                    <p class="mb-0">Đa dạng về các hình thức cho thuê, theo giờ, theo ngày hoặc theo số KM đã sử dụng.</p>
                                </div>
                            </div>
                        </div>     
                    </div>
                    <div class="col-lg-12 footer-intro px-lg-0 mb-3 mb-lg-0">
                        <div class="row">
                            <div class="col-lg-6 mb-3 mb-lg-0">
                                <img width="100%" src="{{ asset('asset/image/intro-xe-dien-vinfast-2.jpg') }}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img width="100%" src="{{ asset('asset/image/intro-xe-dien-vinfast-1.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 order-lg-first">
                    <img class="img-banner" src="{{ asset('asset/image/banner.png') }}" alt="Xe điện Vinfast">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection