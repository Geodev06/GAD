  @if(session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success</strong>
      <p>{{ session('success') }}</p>
  </div>
  @endif

  @if(session()->has('error'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error</strong>
      <p>{{ session('error') }}</p>
  </div>
  @endif