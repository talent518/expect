<?php

$fp = expect_popen('sudo su -');
sleep(1);
fwrite($fp, "123\n");
sleep(1);
fwrite($fp, "id\n");
fwrite($fp, "exit\n");
fpassthru($fp);
fclose($fp);
