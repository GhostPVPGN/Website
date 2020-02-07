<div class="signin-form">
  <div class="container">
    <div class="row">
      <div class="col-sm-7 col-xs-12">
        <div class="panel panel-default">
        <div class="panel-heading">
		<font size = "5">
		<img src="../images/Diablo-II-2-icon_1_20.png"></img>
		<b>
		&nbsp; Diablo II Server Status
		</b>
		</font>
		  </div>
          <div class="panel-body">
		  </font>

<center>		  
<?php
// Inspired by https://github.com/pvpgn/phputils/blob/master/pvpgn-status/online-offline.php

$connect_server = FALSE;
$gaming_server = FALSE;

// BNETD
if($fp = @fsockopen('192.168.0.16', 6112, $error_number, $error_value, $timeout = 1)) {
    fclose($fp);

    $connect_server = TRUE;
}

// D2CS
if($fp = @fsockopen('192.168.0.16', 6113, $error_number, $error_value, $timeout = 1)) {
    fclose($fp);

    // D2DBS
    if($fp = @fsockopen('192.168.0.16', 6114, $error_number, $error_value, $timeout = 1)) {
        fclose($fp);

        $a = 0;
        $b = 0;

        foreach(array('192.168.0.16') as $ip) {
            $a++;

            // D2GS
            if($fp = @fsockopen($ip, 4000, $error_number, $error_value, $timeout = 1)) {
                fclose($fp);

                $b++;

                $gaming_server = TRUE;
            }
        }
    }
}

$status = '<font size = "3"><b> Characters Server </font></font></b><br> ' . ($connect_server ? '<font color = "green>"><font size = "4"><img src="../images/status_online_up01.png"><br><b>  </b></font></font>' : 'Status: <font color = "red">OFFLINE</font>') . 
'<br><br> <font size = "3"><b> Game Server</font></font></b><br> ' . ($gaming_server ? ' <font color = "green"><img src="../images/status_online_up01.png"><br><font size = "4"><b>  </b></font></font><br><br>
('. $b . ' of ' . $a . ' <b></b>)' : '<font color = "red">OFFLINE</font>') . '';

echo $status;
?>
</center>
	</div>
        </div>
      </div>
    </div>
  </div>
</div>
