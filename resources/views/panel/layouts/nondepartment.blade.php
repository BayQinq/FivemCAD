@extends('panel/main')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  @include('components.alert')
  <div class="row">
    <div class="col-lg-12 mb-4 order-0">
      <div class="card">
        <div class="d-flex align-items-end row">
          <div class="col-sm-7">
            <div class="card-body">
              <h5 class="card-title text-primary">Merhaba {{ $username }}🎉</h5>
              <p class="mb-4">
                İletilecek henüz mesaj yok.
              </p>
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
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="row mb-4 g-4">
        <div class="col-lg-12">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="mb-2 pb-1">Yeni Departman Oluştur</h4>
              <p class="small">Yeni departman açarak personellerini davet edebilir, raporlarınızı takip altına alın.</p>
              <div class="row mb-3 g-3">
              </div>
              <button href="javascript:void(0);" class="btn btn-primary w-100">Yeni Departman Oluştur</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <h5 class="pb-1 my-5">İstasyon Davetleri</h5>  
  <div class="row">
   @foreach($invites as $query)
      @include('components.invite_card')
   @endforeach
  </div>
</div>
        
  @endsection