<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolean Careers</title>
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    {{-- Main CSS --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- Google fonts | Rubik --}}
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;700&display=swap" rel="stylesheet">
    {{-- FontAwesome --}}
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css'/>
</head>
<body>
    
    <header class="main-header">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{ route('static-pages.home') }}"><img class="img-fluid" src="https://www.boolean.careers/images/common/logo.png" alt="logo"></a>
            <div class="navbar-link">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a
                  @if (Request::route()->getName() == 'static-pages.home') class="active"
                  @endif 
                  href="{{ route('static-pages.home') }}">Home</a>
                </li>
                <li class="nav-item">
                  <a 
                  @if (Request::route()->getName() == 'static-pages.corso') class="active"
                  @endif 
                  href="{{ route('static-pages.home') }}">Corso</a>
                </li>
                <li class="nav-item">
                  <a
                  @if (Request::route()->getName() == 'students.index') class="active"
                  @endif 
                  href="{{ route('students.index') }}">Dopo il Corso</a>
                </li>
                <li class="nav-item">
                  <a 
                  @if (Request::route()->getName() == 'static-pages.lezione')class="active"
                  @endif 
                  href="{{ route('static-pages.home') }}">Lezione Gratuita</a>
                </li>
                <li class="nav-item">
                  <a 
                  @if (Request::route()->getName() == 'static-pages.assumi') class="active"
                  @endif 
                  href="{{ route('static-pages.home') }}">Assumi i nostri studenti</a>
                </li>
              </ul>
            </div>
          </nav>
    </header>