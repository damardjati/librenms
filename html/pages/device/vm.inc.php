<?php

echo('<table border="0" cellspacing="0" cellpadding="5" width="100%" class="sortable"><tr class="tablehead"><th>Server Name</th><th>Power Status</th><th>Operating System</th><th>Memory</th><th>CPU</th></tr>');

$i = "1";

foreach (dbFetchRows("SELECT * FROM vminfo WHERE device_id = ? ORDER BY vmwVmDisplayName", array($device['device_id'])) as $vm)
{
  include("includes/print-vm.inc.php");

  $i++;
}

echo("</table>");

$pagetitle[] = "Virtual Machines";

?>
