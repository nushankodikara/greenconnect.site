const nav_html = `
<ul>
<li><a href="/"><i class="fa fa-home"></i>Home Page</a></li>
<li><a href="#"><i class="fa fa-university"></i>Sectors</a>
    <div class="sub-menu-1">
        <ul>
             <li class="hover-me"><a href="/Zones/bzone.html">Business Faculty</a>
                <div class="sub-menu-2">
                    <ul>
                        <li><a href="/Seniors/bsenior.html">Senior Students</a></li>
                        <li><a href="/Lecturer/nsbm1.html">Lectures</a></li>
                        <li><a href="/Experts/bexpert.html">Industry Experts</a></li>
                    </ul>
                </div>
            </li>
             <li class="hover-me"><a href="/Zones/czone.html">Computing Faculty</a>
                <div class="sub-menu-2">
                    <ul>
                        <li><a href="/Seniors/cseniors.html">Senior Students</a></li>
                        <li><a href="/Lecturer/nsbm.html">Lectures</a></li>
                        <li><a href="/Experts/cexpert.html">Industry Experts</a></li>
                    </ul>
                </div>
            </li>
             <li class="hover-me"><a href="/Zones/ezone.html">Engineering Faculty</a>
                <div class="sub-menu-2">
                    <ul>
                        <li><a href="/Seniors/eseniors.html">Senior Students</a></li>
                        <li><a href="/Lecturer/nsbm2.html">Lectures</a></li>
                        <li><a href="/Experts/eexpert.html">Industry Experts</a></li>
                    </ul>
                </div>
            </li>
             <li class="hover-me"><a href="/Zones/szone.html">Science Faculty</a>
                <div class="sub-menu-2">
                    <ul>
                        <li><a href="/Seniors/ssenior.html">Senior Students</a></li>
                        <li><a href="/Lecturer/nsbm3.html">Lectures</a></li>
                        <li><a href="/Experts/sexpert.html">Industry Experts</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</li>
<li><a href="/NSBM/com.html"><i class="fa fa-building"></i>Institution</a></li>
<li><a href="/aboutusmobile/aboutus.html"><i class="fa fa-user"></i>About Us</a></li>
<li><a href="/login/login.html"><i class="fa fa-sign-in"></i>Login</a></li>
<li><a href="/AD/ad.html"><i class="fa fa-sign-in"></i>Ads</a></li>
<li><a href="/Contact%20us/contact.html"><i class="fa fa-phone"></i>Contact Us</a></li>
</ul>
`;

// inject to DOM class menu-bar

document.querySelector(".menu-bar").innerHTML = nav_html;
