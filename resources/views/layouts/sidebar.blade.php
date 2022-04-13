<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    <div class="w3-container w3-row">
        <div class="w3-col s4">
            <img src="https://www.w3schools.com/w3images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
        </div>
        <div class="w3-col s8 w3-bar">
            <span>Welcome, <strong>Petros</strong></span><br>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
        </div>
    </div>
    <hr>
    <div class="w3-container">
        <h5>Dashboard</h5>
    </div>
    <div class="w3-bar-block">
        <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
        <a href="{{route ('home.index')}}" class="w3-bar-item w3-button w3-padding  {{Request::is('/')? 'w3-blue': ''}}"><i class="fa fa-users fa-fw"></i>  Home</a>
        <a href="{{route ('home.about')}}" class="w3-bar-item w3-button w3-padding {{Request::is('about')? 'w3-blue': ''}}"><i class="fa fa-eye fa-fw"></i>  About</a>
        <a href="{{route ('home.contact')}}" class="w3-bar-item w3-button w3-padding {{Request::is('contact')? 'w3-blue': ''}}"><i class="fa fa-users fa-fw"></i>  Contact</a>
        <a href="{{route ('guitars.index')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>  Guitars</a>
        <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  News</a>
        <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  General</a>
        <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>  History</a>
        <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a><br><br>
    </div>
</nav>