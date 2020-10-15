<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="homepage.php"><span class="glyphicon glyphicon-home"></span> Home</a>				
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                
                <li id = "cart">
                    <a class="navbar-brand" href="cartshow.php"><span class="glyphicon glyphicon-shopping-cart"></span> Trips</a>
                </li>


                <li class="dropdown" id = "new">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"> Sign in&nbsp;</span><span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                      <li><a href="signup.php">Register</a></li>
                      
                      <li class="dropdown-submenu">
                        <a tabindex="-1" href="#">Sign in</a>
                        <ul class="dropdown-menu">
                          <li><a href="customersignin.php">Customer Sign in</a></li>
                          </li>
                    
                
                        </ul>
                      </li>
                    
                    </ul>
                </li>
                  <li class="dropdown" id = "old">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" ><span class="glyphicon glyphicon-user" id="wuser">Welcome!</span>
                    <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                        <li><a href="showhistory.php">History</a></li>							
                        <li><a href="#" id="logout">Sign out</a></li>
                    </ul>
                    </li>
            </ul>
        </div>
    </div>
</nav>
<div class="jumbotron text-center">
		<h1>Airline Reservation System</h1> 
		<p>We help you to fly.......!</p> 
	</div>

	