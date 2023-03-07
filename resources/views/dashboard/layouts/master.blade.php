<html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/table.less') }}" rel="stylesheet/less" type="text/css">
  <link href="{{ asset('js/table.js') }}" rel="stylesheet">
  </head>
  <body>
    <div class="area">
        @yield('content')
        <!-- ## Sidebar -->
        @include('dashboard.layouts.partials.sidebar') <!-- ## /EndSidebar -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/less" ></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php
      foreach($pagesP as $page) {
        if($view_name === $page->name) {
          if(!is_null($page->popup) && $page->popup->type->name === 'question') { ?>
            <script>
              var w= <?php echo $page->popup->width; ?>;
              var p= "<?php echo $page->popup->location; ?>";
              var bg= "<?php echo $page->popup->color; ?>";
              Swal.fire({
                title: 'هل تريد الاستمرار؟',
                icon: 'question',
                iconHtml: '؟',
                confirmButtonText: 'نعم',
                cancelButtonText: 'لا',
                showCancelButton: true,
                showCloseButton: true,
                width: w,
                position: p,
                background: bg
              })
            </script>
          
        <?php }elseif(!is_null($page->popup) && $page->popup->type->name === 'alert') { ?>
            <script>
              var w= <?php echo $page->popup->width; ?>;
              var p= "<?php echo $page->popup->location; ?>";
              var bg= "<?php echo $page->popup->color; ?>";
              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: '<a href="">Why do I have this issue?</a>',
                width: w,
                position: p,
                background: bg
              })
            </script>
        <?php } }
      }
    ?>
  </body>
    </html>