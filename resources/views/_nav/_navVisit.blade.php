 <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{!! url('/') !!}">UE Optionnelles</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{!! url('contact') !!}">Spécialités</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="{!! url('register') !!}">Register</a></li>
                <li><a href="{!! url('login') !!}">Login</a></li>
            </ul>
        </div>
    </div>
</nav>