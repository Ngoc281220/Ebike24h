<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark bg-opacity-75 py-0 h-90">
  <div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center w-100">
      <!-- Cột trái: Logo -->
      <div class="col-4">
        <a class="navbar-brand fs-1 fw-bold" href="#">EBIKE24H</a>
      </div>

      <!-- Cột giữa: Menu -->
      <div class="col-4 text-center">
        <div class="collapse navbar-collapse justify-content-center" id="navbarText">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active fs-6" aria-current="page" href="#">Trang chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Về chúng tôi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Xe máy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tin tức</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="#">Cửa hàng</a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Cột phải: Text -->
      <div class="col-4 text-end">
        <ul class="navbar-nav nav-right">
          <li class="nav-item">
            <a href="" class="nav-link px-1 mb-0">
              <img src="{{ asset('/asset/image/VN-icon.png') }}" alt="Tiếng việt">
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link px-1 mb-0">
              <img src="{{ asset('/asset/image/US-icon.png') }}" alt="Tiếng việt">
            </a>
          </li>
          <li>  
            <a href="tel:0123456789" class="nav-link fw-bold text-uppercase px-4 h5 mb-0">
              <i class="fas fa-phone-alt me-3"></i> 0123 456 789
            </a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Toggle button vẫn giữ nguyên để hoạt động responsive -->
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
  </div>
</nav>
