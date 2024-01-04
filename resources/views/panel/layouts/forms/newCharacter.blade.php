
@extends('panel/main')
@section('content')
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">{{ __('Yeni Karakter') }}</span> </h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic with Icons -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">{{ __('Yeni karakterinizi oluşturduktan sonra departman başvurusunu yapabilirsiniz.') }}</h5>
            <small class="text-muted float-end"></small>
          </div>
          @if(Session::has('success'))
          <div class="card-body">
          <div class="alert alert-success" role="alert">
              {{Session::get('success')}}
          </div></div>
          @endif  
          @if(Session::has('danger'))
          <div class="card-body">
          <div class="alert alert-danger" role="alert">
              {{Session::get('danger')}}
          </div></div>
          @endif    
          <div class="card-body">
            <form action="{{ route('post-character') }}" class="@error('ch_first_name') was-validated @enderror"  method="POST" novalidate>
                @csrf
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="ch_first_name">{{ __('Karakter Adı') }}</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <input
                      type="text"
                      class="form-control"
                      id="ch_first_name"
                      name="ch_first_name"
                      aria-describedby="ch_first_name" 
                      value="{{ old('ch_first_name') }}"
                      required="true" />
                      @error('ch_first_name')
                        <div class="invalid-feedback"> {{ $message }} </div>
                      @enderror
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="ch_last_name">{{ __('Karakter Soyadı') }}</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <input
                      type="text"
                      class="form-control"
                      id="ch_last_name"
                      name="ch_last_name"
                      aria-describedby="ch_last_name"
                      value="{{ old('ch_last_name') }}"
                      required="true" />
                      @error('ch_last_name')
                        <div class="invalid-feedback"> {{ $message }} </div>
                      @enderror
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="ch_birth_date">{{ __('Doğum Tarihi') }}</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <input 
                        class="form-control flatpickr-validation flatpickr-input" 
                        type="date" 
                        id="ch_birth_date"
                        name="ch_birth_date" 
                        value="{{ old('ch_birth_date') }}"
                        required="true"  />
                        @error('ch_birth_date')
                          <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                  </div>
                </div>
              </div>
              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">{{ __('Karakteri Kaydet') }}</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / Content -->
                @endsection