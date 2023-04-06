<!DOCTYPE html>
<html lang="fr">

    @include("layout.header")

    <body id="page-top">
        <div id="wrapper">
            @include("layout.sidebar")
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    @include("layout.topbar")
                    @yield('content')
                </div>
                @include("layout.footer")
            </div>

        </div>
        @include("layout.import")
        @include("layout.logout")
    </body>
</html>
