<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Icon -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
        integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <input type="checkbox" id="check">
    <div class="navbarr">
        <label for="check">
            <i class="bi bi-filter-left" id="show"></i>
        </label>

        <div class="nav-notification">
            <i class="bi bi-bell-fill"></i>
        </div>

        <div class="nav-profile d-flex">
            <img src="{{asset('image/profile-example.webp')}}" alt="">
            <p class="pt-2 ps-2">
                {{ Auth::user()->name }}
            </p>
        </div>
    </div>

    <div class="sidebarr">
        <header>Admin Dashboards
            <label for="check">
                <i class="bi bi-filter" id="hide"></i>
            </label>
        </header>
        <ul>
            <a href="/home">
                <li>
                    <i class="bi bi-house-fill"></i> Dashboard
                </li>
            </a>
            @if(Auth::user()->level == "admin") 
                <a href="/user">
                <li>
                    <i class="bi bi-people-fill"></i> Users
                </li>
            </a>
            <a href="/book">
                <li>
                    <i class="bi bi-book-fill"></i> Books
                </li>
            </a>
            <a href="/category">
                <li>
                    <i class="bi bi-border-style"></i> Category
                </li>
            </a>
            @endif

            <a href="/borrow">
                <li>
                <i class="bi bi-book-fill"></i> Borrowed Book
                </li>
            </a>
            
            <a href="{{ route('logout') }}" class="mt-5"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <li>
                    <i class="bi bi-box-arrow-left"></i>
                    {{ __('Logout') }}
                </li>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ul>
    </div>

    <section>
        @yield('content')
    </section>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>

<script src="{{asset('js/main.js')}}">
</script>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

</html>
