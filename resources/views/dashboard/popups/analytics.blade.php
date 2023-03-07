@extends('dashboard.layouts.master')

@section('content')

<div id="demo">
  <h1>Popups Windows Analytics</h1>
  <h2></h2>

  <!-- Responsive table starts here -->
  <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
  <div class="table-div table-responsive-vertical shadow-z-1">
  <!-- Table starts here -->
  <table id="table" class="table table-hover table-mc-light-blue">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Type</th>
          <th>Clicking Number</th>
        </tr>
      </thead>
      <tbody>
        <?php $num = 0; ?>
        @foreach($popups as $popup) <?php $num += 1; ?>
        <tr>
          <td data-title="ID">{{ $num }}</td>
          <td data-title="name">{{ $popup->name }}</td>
          <td data-title="type">{{ $popup->type->name }}</td>
          <td data-title="clickNum"></td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
  </div>
</div>
    </div>

@endsection