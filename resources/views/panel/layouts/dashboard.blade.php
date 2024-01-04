@extends('panel/main')
@section('content')
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  @if(session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
              @endif
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Merhaba {{ Auth::user()->global_name }}🎉</h5>
                          <p class="mb-4">
                            İletilecek henüz mesaj yok.
                          </p>

                          <a href="javascript:;" class="btn btn-sm btn-outline-primary">Detay Görüntüle</a>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="{{ asset('assets/img/illustrations/man-with-laptop-light.png') }}"
                            height="140"
                            alt="Detay Görüntüle"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card mb-4">
                    <div class="card-widget-separator-wrapper">
                      <div class="card-body card-widget-separator">
                        <div class="row gy-4 gy-sm-1">
                          <div class="col-sm-6 col-lg-3">
                            <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                              <div>
                                <h3 class="mb-1">4</h3>
                                <p class="mb-0">Aktif Raporlar</p>
                              </div>
                              <span class="badge bg-label-secondary rounded p-2 me-sm-4">
                                <i class="bx bx-user bx-sm"></i>
                              </span>
                            </div>
                            <hr class="d-none d-sm-block d-lg-none me-4">
                          </div>
                          <div class="col-sm-6 col-lg-3">
                            <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
                              <div>
                                <h3 class="mb-1">3</h3>
                                <p class="mb-0">Okunmamış Eposta</p>
                              </div>
                              <span class="badge bg-label-secondary rounded p-2 me-lg-4">
                                <i class="bx bx-file bx-sm"></i>
                              </span>
                            </div>
                            <hr class="d-none d-sm-block d-lg-none">
                          </div>
                          <div class="col-sm-6 col-lg-3">
                            <div class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
                              <div>
                                <h3 class="mb-1">$122</h3>
                                <p class="mb-0">Prim</p>
                              </div>
                              <span class="badge bg-label-secondary rounded p-2 me-sm-4">
                                <i class="bx bx-check-double bx-sm"></i>
                              </span>
                            </div>
                          </div>
                          <div class="col-sm-6 col-lg-3">
                            <div class="d-flex justify-content-between align-items-start">
                              <div>
                                <h3 class="mb-1">0</h3>
                                <p class="mb-0">İhtarlar</p>
                              </div>
                              <span class="badge bg-label-secondary rounded p-2">
                                <i class="bx bx-error-circle bx-sm"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->
            @endsection