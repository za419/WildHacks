<div id="headerLoginBox">
	<div id="loginForm">
		<form action="../login.php" method="POST">
			<div>
				<fieldset>
					<label for="loginUsername">Username</label>
					<input id="loginUsername" type="text" name="username" placeholder="Username" align="right" oninput="checkLoginUsername()">
				</fieldset>
				<fieldset>
					<label for="loginPassword">Password</label>
					<input id="loginPassword" type="password" name="password" placeholder="Password" align="right" oninput="checkLoginPassword()">
				</fieldset>
				<input id="login-submit" type="submit">
			</div>
			<br>
		</form>
	</div>
</div>

<div id="header">
	<div id="headerLogin" style="float: right">
		<?php
			if(!isset($_SESSION)){
				session_start();
			}
			if(isset($_SESSION['username'])){
				$username=$_SESSION['username'];
				echo('<button id="helloButton" onclick="toProfile()">
								HELLO '.strtoupper($username).'!
							</button>
							<button id="logOutButton" onclick="logOut()">
								LOG OUT
							</button>');
			}else{
				echo('<button id="loginButton">
								LOG IN
							</button>
							<button id="signUpButton" onclick="signUp()">
								SIGN UP
							</button>');
			}
		?>
	</div>

	<ul class="horizontal" id="headerNav">
		<li class="gamr"><a href="../index.php">GAMR</a></li>
		<li><a href="/about">About</a></li>
		<li><a href="/find">Find</a></li>
		<li><a href="/host">Host</a></li>
		<?php
			if(isset($_SESSION['username'])){
				echo("<li><a href='/profile'>Profile</a></li>");
			}
		?>
	</ul>
</div>
