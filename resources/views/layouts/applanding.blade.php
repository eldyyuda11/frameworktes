<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="{{asset('css/materialize.min.css')}}"  media="screen,projection" type="text/css" rel="stylesheet" />
      <link href="{{asset('css/aos.css')}}" type="text/css" rel="stylesheet" />
      <link href="{{asset('css/main.css')}}"  type="text/css" rel="stylesheet" />
      <link href="{{asset('img/favicon-32x32.png')}}" sizes="32x32" rel="icon">
      <title>Banjarmasin Profile & Tour</title>
</head>
  <body>
      <a id="home"></a>
      <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper green">
                <div class="container">
                      <ul id="nav-mobile" class="hide-on-med-and-down">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">Profile</a></li>
                        <li><a href="#freatures">Visi & Misi</a></li>
                        <li><a href="#contact">Contact </a></li>
                        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                      </ul>
                      {{-- <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li>
                            <form>
                                <div class="input-field">
                                  <input id="search" type="search" placeholder="Search" required>
                                  <label class="label-icon" for="search"><i class="material-icons" style="margin-top: -15px;">search</i></label>
                                  <i class="material-icons">close</i>
                                </div>
                              </form>
                          </li>
                      </ul> --}}
                  </div>
            </div>
          </nav>
    </div>
    @yield('content')


</body>
</html>
