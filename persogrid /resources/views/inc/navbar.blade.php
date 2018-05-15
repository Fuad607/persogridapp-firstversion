
<nav class="navbar navbar-inverse navbar_new navbar-static-top ">
    <div class="container"  >

            <a class="navbar-brand" href="/" >
                <span class="logo-lg"><img src="{{ URL::to('/logo/persogrid.png') }}" style="max-width: 80%; max-height: 60px;margin-top: -13%;position:relative;padding: 0;"></span>

            </a>

            <!-- <a class="navbar-brand" href="/">PersoGrid </a>
            -->

        <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

        </button>

        <div class="collapse navbar-collapse navHeaderCollapse">
            <ul class="nav navbar-nav navbar-right">

                @if (Sentinel::check())
                    <li role="presentation" class="{{Request::is('/')?'li_active' :''}}"><a href="/">Jobs</a> </li>
                    <li role="presentation" class="{{Request::is('/')?'li_active' :''}}"><a href="/">Matches</a> </li>
                    <li role="presentation" class="{{Request::is('/')?'li_active' :''}}"><a href="/">Nachrichten</a> </li>


                    <li role="presentation" class="{{Request::is('/')?'li_active' :''}}>

                        <form action="logout" method="post" id="logout-form">
                            {{csrf_field()}}
                            <a href="#" onclick="document.getElementById('logout-form').submit()">Log out </a>
                        </form>
                    </li>
                    @else

                    <li role="presentation" class="{{Request::is('/')?'li_active' :''}}"><a href="/">Startseite</a> </li>
                    <li role="presentation" class="{{Request::is('about')?'li_active' :''}}" ><a href="/about">Über uns</a> </li>
                    <li class="{{Request::is(' ')?'li_active' :''}}" ><a href="">Preise</a> </li>

                    <li class="{{Request::is(' ')?'li_active' :''}}" ><a href="/">Für Unternehmen</a> </li>
                    <li class="{{Request::is('contact')?'li_active' :''}}" ><a href="/contact">Für Jobsuchende</a> </li>
                    <li class="{{Request::is('register')?'li_active' :''}}" ><a href="/register"><span class="glyphicon glyphicon-user"></span> Anmelden</a></li>
                    <li class="{{Request::is('login')?'li_active' :''}}" ><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Einloggen</a></li>
                </ul>
                    @endif


        </div>
    </div>
</nav>
<h3 class="text-muted">
    @if (Sentinel::check())
        Hello {{Sentinel::getUser()->first_name}}

        @endif

</h3>

<script src="js/bootstrap.js"></script>