document.getElementById("navMenu").innerHTML =
'<ul class="nav navbar-nav">'+
  '<li class="activse"><a href="index.html">Home <span class="sr-only">(current)</span></a></li>'+

  '<li class="dropdown">'+
    '<a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <span class="caret"></span></a>'+
    '<ul class="dropdown-menu" role="menu">'+
      '<li><a href="o_overview.html">Overview & Services</a></li>'+
      '<li><a href="o_mission.html">Mission</a></li>'+
      '<li><a href="o_gallery.html">Gallery</a></li>'+
    '</ul>'+
  '</li>'+
  '<li><a href="o_staff.html">Staff</a></li>'+
  '<li><a href="o_events.html">News & Events</a></li>'+
  '<li><a href="o_clientportal_login.html">Client Portal</a></li>'+
  '<li><a href="o_staffportal_login.html">Staff Portal</a></li>'+
'</ul>'
;
