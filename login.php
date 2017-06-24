<?php
require __DIR__."/Teacrypt.php";
define("ACPATH", __DIR__."/account/");
define("SESSPATH", __DIR__."/session/");
class Login
{
	/**
	 * APPKEY
	 */
	const APPKEY = "crayner";

	/**
	 * Constructor.
	 */
	public function __construct()
	{
		
	}

	public function elfinder()
	{
		require __DIR__."/elfinder.php";
	}

	public function session()
	{
		if (isset($_COOKIE['login'])) {
			$session = Teacrypt::decrypt($_COOKIE['login'], self::APPKEY);
			if (file_exists(SESSPATH.$session.".json")) {
				$a = json_decode(file_get_contents(SESSPATH.$session.".json"), 1);
				if (strtotime($a['expired_at']) <= time()) {
					unlink(SESSPATH.$session.".json");
					setcookie("login", null, 0);
					return false;
				} else {
					$this->udata = json_decode(file_get_contents(ACPATH."{$a['username']}.json"), 1);
					return true;
				}
			}
		}
		return false;
	}

	public function destroy()
	{
		$session = Teacrypt::decrypt($_COOKIE['login'], self::APPKEY);
		setcookie("login", null, 0);
		return unlink(SESSPATH.$session.".json");
	}

	public function login_action()
	{
		if (isset($_POST['login'])) {
			if (file_exists(ACPATH.$_POST['username'].".json")) {
				$a = json_decode(file_get_contents(ACPATH.$_POST['username'].".json"), 1);
				if ($a['password'] === $_POST['password']) {
					$this->make_session($_POST['username']);
					return true;
				}
			}
			return false;
		}
		return $this->session();
	}

	public function make_session($user)
	{
		$exp = time()+(3600*24);
		$session = "{$user}_".md5($_SERVER['HTTP_USER_AGENT']);
		file_put_contents(SESSPATH.$session.".json", json_encode([
				"username" => $user,
				"login_at" => date("Y-m-d H:i:s"),
				"expired_at"=> date("Y-m-d H:i:s", $exp),
				"useragent" => $_SERVER['HTTP_USER_AGENT']
			], 128));
		setcookie("login", Teacrypt::encrypt($session, self::APPKEY), $exp);
	}

	public function view()
	{
		require __DIR__."/login.html";
	}

}