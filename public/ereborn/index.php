<?php
	error_reporting(E_ALL);

	date_default_timezone_set("Asia/Yerevan");

	session_name("PHILIPS");
	session_start();

	header("Expires: on, 01 Jan 1970 00:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");

    require("../common.php");

	require("lib/class.db.php");
	require("lib/libapp.php");
	require("lib/libentity.php");
	require("lib/libfile.php");
	require("lib/liblanguage.php");
	require("lib/librole.php");
	require("lib/libsave.php");
	require("lib/libshow.php");
	require("lib/libuser.php");
	require("lib/liboptions.php");


	require("config/local.php");
	require("config/global.php");
	require("config/templates.php");

	$db = new db();

	$languages = getLanguages();

	define("APP", true);

	if( isset($_SESSION["user"]) )
	{
		if( isset($_GET["logout"]) )
		{
			unset($_SESSION["user"]);
		}
		else
		{
			define("USER_TYPE", getUserType($_SESSION["user"]));

			if(USER_TYPE===FALSE)
			{
				unset($_SESSION["user"]);
			}
		}
	}
	else
	{
		if( isset($_POST["login"]) )
		{
			$email = (string)filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
			$password = (string)filter_input(INPUT_POST, "password");

			if($email!=="" && $password!=="")
			{
				$validUserTypes = array("ROOT", "ADMIN", "AUTHOR");

				$user = findUserByEmail($email);

				if($user!==FALSE && in_array($user["user_type"], $validUserTypes))
				{
					if(password_verify($password, $user["user_password"]))
					{
						$_SESSION["user"] = $user["user_id"];

						$db->request("UPDATE users SET user_last_seen=UTC_TIMESTAMP(), user_ip=? WHERE user_id=?", array($_SERVER["REMOTE_ADDR"], $user["user_id"]));

						exit("<meta http-equiv='refresh' content='0; url=".$_SERVER["SCRIPT_NAME"]."'>");
					}
					else
					{
						$_SESSION["error"] = "Invalid email or password";

						exit("<meta http-equiv='refresh' content='0; url=".$_SERVER["SCRIPT_NAME"]."'>");
					}
				}
				else
				{
					$_SESSION["error"] = "Invalid email or password";

					exit("<meta http-equiv='refresh' content='0; url=".$_SERVER["SCRIPT_NAME"]."'>");
				}
			}
			else
			{
				$_SESSION["error"] = "Invalid input";

				exit("<meta http-equiv='refresh' content='0; url=".$_SERVER["SCRIPT_NAME"]."'>");
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Ereborn</title>

	<link rel="shortcut icon" href="favicon.ico">

	<link rel="stylesheet" href="node_modules/trumbowyg/dist/ui/trumbowyg.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/templatemo-style.css">
	<link rel="stylesheet" href="config/style.css">
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="css/media.css">

	<script src="node_modules/jquery/dist/jquery.min.js"></script>
	<script src="node_modules/jquery-resizable-dom/dist/jquery-resizable.min.js"></script>
	<script src="node_modules/trumbowyg/dist/trumbowyg.min.js"></script>
	<script src="node_modules/trumbowyg/dist/plugins/cleanpaste/trumbowyg.cleanpaste.min.js"></script>
	<script src="node_modules/trumbowyg/dist/plugins/allowtagsfrompaste/trumbowyg.allowtagsfrompaste.min.js"></script>
	<script src="node_modules/trumbowyg/dist/plugins/resizimg/trumbowyg.resizimg.min.js"></script>
	<script src="node_modules/tablednd/dist/jquery.tablednd.js"></script>
	<script src="js/trumbowyg.pasteembed.js"></script>
	<script src="js/trumbowyg.upload.js"></script>
	<script src="js/jquery.fancybox.min.js"></script>
	<script src="js/main.js"></script>
</head>
<body>
	<?php
		if( !isset($_SESSION["user"]) )
		{
			?>
				<div class="form">
					<section id="contact" class="tm-section">
						<div class="row align-center">
							<div class="col-lg-8">
								<form action="<?php echo $_SERVER["SCRIPT_NAME"] ?>" method="post" class="contact-form first-select form-min-pading white-background-color">
									<div class="form-group">
										<input type="email" id="email" name="email" class="form-control" placeholder="Email"  required autocomplete="off"/>
									</div>
									<div class="form-group">
										<input type="password" id="password" name="password" class="form-control" placeholder="Password"  required autocomplete="off"/>
									</div>
									<div class="tm-main-nav">
										<button type="submit" name="login" class="tm-button  btn blue">Login</button>
									</div>
								</form>
							</div>

						</div>
					</section>
				</div>
			<?php
		}
		else
		{
			?>
				<div class="tm-blue-bg tm-left-column">
					<div class="tm-left-column-close">
						<svg width="32" height="32" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M15.5892 4.41073C15.9147 4.73617 15.9147 5.26381 15.5892 5.58925L5.58925 15.5892C5.26381 15.9147 4.73617 15.9147 4.41073 15.5892C4.0853 15.2638 4.0853 14.7362 4.41073 14.4107L14.4107 4.41073C14.7362 4.0853 15.2638 4.0853 15.5892 4.41073Z" fill="#FFFFFF"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M4.41073 4.41073C4.73617 4.0853 5.26381 4.0853 5.58925 4.41073L15.5892 14.4107C15.9147 14.7362 15.9147 15.2638 15.5892 15.5892C15.2638 15.9147 14.7362 15.9147 14.4107 15.5892L4.41073 5.58925C4.0853 5.26381 4.0853 4.73617 4.41073 4.41073Z" fill="#FFFFFF"/>
						</svg>
					</div>
					<div class="tm-logo-div text-xs-center">
						<img src="img/logo.svg" alt="logo">
					</div>
					<nav class="tm-main-nav">
						<ul class="tm-main-nav-ul">
							<?php
								$menuItems = array(
									array("url"=>"sections", "label"=>"Sections", "params"=>"&pid=0", "image"=>"img/sidebar.svg"),
									array("url"=>"users", "label"=>"Users", "userTypes"=>array("ROOT", "ADMIN"), "params"=>"", "image"=>"img/users.svg"),
									array("url"=>"roles", "label"=>"Roles", "userTypes"=>array("ROOT", "ADMIN"), "params"=>"", "image"=>"img/key.svg"),
									array("url"=>"logout", "label"=>"Logout", "params"=>"", "image"=>"img/log-out.svg"),
								);

								foreach($menuItems as $menuItem)
								{
									if( !isset($menuItem["userTypes"]) || in_array(USER_TYPE, $menuItem["userTypes"]) )
									{
										$menuUrl = $menuItem["url"];

										$className = "tm-nav-item-link";

										if( isset($_GET[$menuUrl]) )
										{
											$className .= " active";
										}
										?>
											<li class="tm-nav-item">
												<a href="<?php echo $_SERVER["SCRIPT_NAME"]."?".$menuItem["url"].$menuItem["params"] ?>" class="<?php echo $className ?>">
													<div class="tm-nav-item-img">
														<img src="<?php echo $menuItem["image"] ?>">
													</div>
													<div>
														<?php echo $menuItem["label"] ?>
													</div>
												</a>
											</li>
										<?php
									}
								}
							?>
						</ul>
					</nav>
				</div>

				<div class="tm-right-column">
					<?php
						if( isset($_SESSION["error"]) )
						{
							?>
								<div class="error"><?php echo $_SESSION["error"] ?></div>
							<?php
							unset($_SESSION["error"]);
						}

						if( isset($_SESSION["success"]) )
						{
							?>
								<div class="success"><?php echo $_SESSION["success"] ?></div>
							<?php
							unset($_SESSION["success"]);
						}

						if( isset($_GET["users"]) )
						{
							require("views/users.php");
						}
						elseif( isset($_GET["roles"]) )
						{
							require("views/roles.php");
						}
						elseif( isset($_GET["addSection"]) )
						{
							require("views/addSection.php");
						}
						elseif( isset($_GET["addWidget"]) )
						{
							require("views/addWidget.php");
						}
						elseif( isset($_GET["editSection"]) )
						{
							require("views/editSection.php");
						}
						elseif( isset($_GET["editWidget"]) )
						{
							require("views/editWidget.php");
						}
						elseif( isset($_GET["sections"]) )
						{
							require("views/sections.php");
						}
						elseif( isset($_GET["widgets"]) )
						{
							require("views/widgets.php");
						}
						else
						{
							?><meta http-equiv="refresh" content="0; url=<?php echo $_SERVER["SCRIPT_NAME"]."?sections&pid=0" ?>"><?php
						}
					?>
					<iframe src="refresh.php" style="width:100%;height:1px;border:0;"></iframe>
				</div>
			<?php
		}
	?>
</body>
</html>
