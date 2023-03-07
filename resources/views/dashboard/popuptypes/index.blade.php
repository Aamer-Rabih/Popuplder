@extends('dashboard.layouts.master')

@section('content')

<div id="demo">
  <h1>Popup Windows Types Table</h1>
  <h2></h2>
  <!--<button type="button" class="btn btn-success mb-3 ms-3" onclick="window.location.href='{{ route('popuptypes.create') }}'">Create New Type</button> -->
  
  <!-- Responsive table starts here -->
  <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
  <div class="table-div table-responsive-vertical shadow-z-1">
  <!-- Table starts here -->
  <table id="table" class="table table-hover table-mc-light-blue">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $num = 0; ?>
        @foreach($popuptypes as $popuptype) <?php $num += 1; ?>
        <tr>
          <td data-title="ID">{{ $num }}</td>
          <td data-title="Name">{{ $popuptype->name }}</td>
          <td data-title="Action">
            <div class="">
              <form method="POST" action="{{ route('popuptypes.destroy',[$popuptype->id]) }}" >
                @csrf
                @method('DELETE')  
                <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
              </form>       
            </div>
          </td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
  </div>
</div>
    </div>

@endsection