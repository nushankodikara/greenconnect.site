const nav_html = `
<ul>
<li><a href="/"><i class="fa fa-home"></i>Home</a></li>
<li><a href="#"><i class="fa fa-university"></i>Sectors</a></li>
<li><a href="/NSBM/com.html"><i class="fa fa-building"></i>Institution</a></li>
<li><a href="/aboutusmobile/aboutus.html"><i class="fa fa-user"></i>About Us</a></li>
<li><a href="/login/login.html"><i class="fa fa-sign-in"></i>Login</a></li>
<li><a href="/AD/ad.html"><i class="fa fa-sign-in"></i>Ads</a></li>
<li><a href="/Contact%20us/contact.html"><i class="fa fa-phone"></i>Contact Us</a></li>
</ul>
`;

// inject to DOM class menu-bar

document.querySelector(".menu-bar").innerHTML = nav_html;
