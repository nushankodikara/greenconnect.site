const navHTML = `
            <details role="list">
				<summary aria-haspopup="listbox">
					<i class="fa-solid fa-bars"></i>
				</summary>
				<ul role="listbox">
					<li><a href="index.php">Home</a></li>
					<li><a href="sectors.html">Sectors</a></li>
					<li><a href="institution.html">Institution</a></li>
					<li><a href="aboutus.html">About Us</a></li>
					<li><a href="login.html">Login</a></li>
					<li><a href="ads.html">Ads</a></li>
					<li><a href="contactus.html">Contact Us</a></li>
				</ul>
			</details>
			<ul>
				<li><strong>GreenConnect</strong></li>
			</ul>
			<ul>
				<li>
					<a href="contactus.html">
						<i class="fa-solid fa-envelope"></i
					></a>
				</li>
			</ul>`;

// Insert navHTML to nav element
document.getElementById("topNav").innerHTML = navHTML;
