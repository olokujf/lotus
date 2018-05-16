<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('admin.head')
</head>
<body>
    <div id="app">

        @include('admin.nav')

        <main class="py-4">
            @guest
                @yield('content')
            @else
                <div class="container">
                    <div class="row">
                        @include('admin.leftMenu')
                        <div class="col-lg-9">
                            @yield('content')
                        </div>
                    </div>
                </div>
            @endguest
        </main>
    </div>
</body>
</html>
