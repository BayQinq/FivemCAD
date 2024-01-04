@extends('panel/main')
@section('content')
<!-- Content -->
        
    <div class="container-xxl flex-grow-1 container-p-y">
            
            
            <h4 class="py-3 mb-4">
              Hesabım
            </h4>
            
            
            <!-- Header -->
            <div class="row">
              <div class="col-12">
                <div class="card mb-4">
                  <div class="user-profile-header-banner">
                    
                  </div>
                  <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                    <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                      <img src="{{ Auth::user()->getAvatar(['extension' => 'webp', 'size' => 128]) }}" alt="{{ Auth::user()->getTagAttribute() }}" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
                    </div>
                    <div class="flex-grow-1 mt-3 mt-sm-5">
                      <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                        <div class="user-profile-info">
                          <h4>{{ Auth::user()->username }}</h4>
                          <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                            <li class="list-inline-item fw-medium">
                              <i class='bx bx-pen'></i> Officer II
                            </li>
                            <li class="list-inline-item fw-medium">
                              <i class='bx bx-map'></i> Hollywood Station
                            </li>
                            <li class="list-inline-item fw-medium">
                              <i class='bx bx-calendar-alt'></i> Kayıt : {{ date('M Y', Auth::user()->date_added)}}
                            </li>
                          </ul>
                        </div>
                        <a href="javascript:void(0)" class="btn btn-danger text-nowrap disabled">
                          <i class='bx bx-user-check me-1'></i>Departmandan At
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--/ Header -->
            
            
            <!-- User Profile Content -->
            <div class="row">
              <div class="col-xl-4 col-lg-5 col-md-5">
                <!-- About User -->
                <div class="card mb-4">
                  <div class="card-body">
                    <small class="text-muted text-uppercase">Karakter Hakkında</small>
                    <ul class="list-unstyled mb-4 mt-3">
                      <li class="d-flex align-items-center mb-3"><i class="bx bx-user"></i><span class="fw-medium mx-2">İsim Soyisim:</span> <span>{{ $ch->ch_first_name }} {{ $ch->ch_last_name }}</span></li>
                      <li class="d-flex align-items-center mb-3"><i class="bx bx-check"></i><span class="fw-medium mx-2">Durum:</span> <span>Aktif</span></li>
                      <li class="d-flex align-items-center mb-3"><i class="bx bx-star"></i><span class="fw-medium mx-2">Rütbe:</span> <span>{{ $rank }}</span></li>
                      <li class="d-flex align-items-center mb-3"><i class="bx bx-flag"></i><span class="fw-medium mx-2">Rozet Numarası:</span> <span>{{ $ch->ch_code }}</span></li>
                      <li class="d-flex align-items-center mb-3"><i class="bx bx-time"></i><span class="fw-medium mx-2">Doğum Tarihi:</span> <span>12 Aralık, 2023</span></li>
                      <li class="d-flex align-items-center mb-3"><i class="bx bx-detail"></i><span class="fw-medium mx-2">Dil:</span> <span>Türkçe</span></li>
                    </ul>
                    <small class="text-muted text-uppercase">Contacts</small>
                    <ul class="list-unstyled mb-4 mt-3">
                      <li class="d-flex align-items-center mb-3"><i class="bx bx-phone"></i><span class="fw-medium mx-2">İletişim:</span> <span>(123) 456-7890</span></li>
                      <li class="d-flex align-items-center mb-3"><i class="bx bx-envelope"></i><span class="fw-medium mx-2">Eposta:</span> <span>quinn@hollywood.gov</span></li>
                    </ul>
                    <small class="text-muted text-uppercase">Departman</small>
                    <ul class="list-unstyled mt-3 mb-0">
                      <li class="d-flex align-items-center mb-3"><i class="bx bxl-github text-primary me-2"></i>
                        <div class="d-flex flex-wrap"><span class="fw-medium me-2">LAPD Hollywood Station</span><span>(27 Personel)</span></div>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--/ About User -->
                <!-- Profile Overview -->
                <div class="card mb-4">
                  <div class="card-body">
                    <small class="text-muted text-uppercase">Detay</small>
                    <ul class="list-unstyled mt-3 mb-0">
                      <li class="d-flex align-items-center mb-3"><i class="bx bx-check"></i><span class="fw-medium mx-2">Gönderilen Epostalar:</span> <span>13</span></li>
                      <li class="d-flex align-items-center mb-3"><i class='bx bx-customize'></i><span class="fw-medium mx-2">Projects Compiled:</span> <span>146</span></li>
                      <li class="d-flex align-items-center"><i class="bx bx-user"></i><span class="fw-medium mx-2">Bağlantılı Raporlar:</span> <span>147</span></li>
                    </ul>
                  </div>
                </div>
                <!--/ Profile Overview -->
              </div>
              <div class="col-xl-8 col-lg-7 col-md-7">
                <!-- Projects table -->
                <div class="card mb-4">
                  <h5 class="card-header">Projects List</h5>
                  <div class="table-responsive mb-3">
                    <table class="table datatable-project">
                      <thead class="table-light">
                        <tr>
                          <th></th>
                          <th></th>
                          <th>Project</th>
                          <th class="text-nowrap">Total Task</th>
                          <th>Progress</th>
                          <th>Hours</th>
                        </tr>
                      </thead>
                    </table>
                  </div>
                </div>
                <!--/ Projects table -->
              </div>
            </div>
            <!--/ User Profile Content -->
        </div>
        <!-- / Content -->
    @endsection