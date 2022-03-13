<!DOCTYPE html>
<html lang="en"> 
  <head>
 <title>User Dashboard</title>

<meta charset="UTF-8">
<meta name="robots" content="noindex,nofollow" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('css/admin/style.css').'?v='.uniqid()}}">

<link rel="shortcut icon" href="{{asset('images/favicon.png').'?v='.uniqid()}}" type="image/x-icon">

@livewireStyles


  </head>

<body>

   {{$slot}}

    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('js/js.js')}}"></script>
<script src="{{asset('js/app.js') }}" defer></script>
<script src="https://cdn.tiny.cloud/1/srfq9lugj6h3um0oumk0latm9rs1cx0zyrcojwh2rc7van3r/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
   });
 </script>
@livewireScripts


</body>
</html>
