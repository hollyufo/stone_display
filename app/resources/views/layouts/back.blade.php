<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}} | Admin - @yield('title')</title>
    @yield('css')
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5">
            <a class="navbar-brand" href="{{ route("admin.product.all") }}">{{ config("app.name") }} - Admin</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
              <ul class="navbar-nav">
                {{-- <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li> --}}
                <li class="nav-item">
                  <a class="nav-link" href="{{ route("admin.product.add") }}">Add Product</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route("admin.categories.add") }}">Add Category</a>
                </li>
                {{-- <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
                </li> --}}
              </ul>
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <form action="{{ route("logout") }}" method="post">
                        @csrf
                        <button class="btn btn-danger btn-sm" type="submit">Logout</button>
                    </form>
                  </li>
              </ul>
            </div>
          </nav>
    </header>

<div class="py-3">
    @yield('content')
</div>

    @yield('js')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
