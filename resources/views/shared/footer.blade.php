<footer class="main-footer">
    <div class="nav-footer">
        <div class="container">
            <div class="row left">
                <div class="footer-brand">
                    <a class="navbar-brand" href="{{ route('static-pages.home') }}"><img class="img-fluid" src="https://www.boolean.careers/images/common/logo-white.png" alt="logo"></a>
                </div>
                <p>Sede Operativa</p>
                <p>Via Carducci 12 - 20123 Milano</p>
                <p>Tel: 02-40031288</p>
            </div>
            <div class="row right">
                <ul>
                    <li><a href="{{ route('static-pages.home') }}">Home</a></li>
                    <li><a href=" {{ route('static-pages.faq') }}">Domande frequenti</a></li>
                <li><a href=" {{ route('static-pages.privacy') }} ">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

{{-- Scripts --}}
@yield('scripts')
</body>
</html>