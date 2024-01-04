@extends('panel/main')
@section('content')
   <!-- Content -->

   <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Yeni İstasyon Oluştur</span></h4>
    <form method="post" action="{{ route('create-stations') }}">
    @csrf
    <div class="row">
      <!-- Basic -->
      <div class="col-md-6">
        <div class="card mb-4">
          <h5 class="card-header">Temel Bilgiler</h5>
          <div class="card-body demo-vertical-spacing demo-only-element">
            <label class="form-label" for="name">İstasyon Adı</label>
            <div class="input-group input-group-merge">
                <input
                  type="text"
                  name="name"
                  class="form-control"
                  value="{{ old('name') }}"
                  placeholder="Los Santos Police Department"
                  aria-label=""
                  aria-describedby="" />
              </div>
              <label class="form-label" for="slug">İstasyon Kısa Kod</label>
              <div class="input-group input-group-merge">
                  <input
                    type="text"
                    name="slug"
                    class="form-control"
                    value="{{ old('slug') }}"
                    placeholder="LSPD, LSSD vs."
                    aria-label=""
                    aria-describedby="" />
                </div>

          </div>
        </div>
      </div>

      <!-- Merged -->
      <div class="col-md-6">
        <div class="card mb-4">
          <div class="card-body demo-vertical-spacing demo-only-element">
            <label class="form-label" for="bonus_payment">Rapor Başına Prim</label>
            <div class="input-group">
              <span class="input-group-text">$</span>
              <input
                type="number"
                name="bonus_payment"
                value="{{ old('bonus_payment') }}"
                class="form-control"
                placeholder="Prim"
                aria-label="Prim (Rapor başına verilecek prim)" />
              <span class="input-group-text">.00</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Custom file input -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body demo-vertical-spacing demo-only-element">
            <div class="mb-3">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" name="require" required="">
                  <label class="form-check-label" for="require">Tüm şartlar ve koşulları kabul ediyorum</label>
                  <div class="invalid-feedback"> You must agree before submitting. </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">İstasyon Oluştur</button>

          </div>
        </div>
      </div>
    </div>
  </div>
</form>
  <!-- / Content -->
@endsection