<nav class="navbar navbar-default" style="position: fixed;top: 0;width: 100%">
    <div class="container-fluid"">
        <div class="navbar-header">
            <a href="#" class="dropdown-toggle navbar-brand" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user" aria-hidden="true"></i> Administration <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="{{route ('list')}}">Visits History</a></li>
            </ul>
            <a class="navbar-brand" href="{{route ('product.index')}}">Home</a>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><i class="fa fa-shopping-cart fa-2x openCloseCart" aria-hidden="true"></i></li>&nbsp;
            </ul>
        </div>
    </div>
</nav>