<div class="col-sm-3">
    <form method="POST" action="{{ route('join-stations') }}">
    @csrf
    <input type="hidden" name="station_id" value="{{ $query->ID }}">
      <div class="row mb-4 g-4">
        <div class="card text-center">
          <div class="card-header">Yeni Davet</div>
          <div class="card-body"> 
            <h5 class="card-title">{{ $query->name }}</h5>
            <p class="card-text">İstasyonda yeni iş teklifi mevcut.</p>
            <button type="submit" name="action" value="reject" class="btn btn-danger">Reddet</button>

            <!-- İkinci submit butonu -->
            <button type="submit" name="action" value="approve" class="btn btn-success">Onayla</button>
          </div>
          <div class="card-footer text-muted">{{ date('d/m/Y H:i', $query->DateAdded) }}</div>
        </div>
      </div>
    </form>
    </div>