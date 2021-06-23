
<h1>Page 2 [Transaction History]</h1>

<h3>Digital Wallet</h3>

<p>
    1. <a href="/digital-wallet/digital-wallet-1.php">Home</a>
    &nbsp;
    2. <a href="/digital-wallet/digital-wallet-2.php">Transaction History</a>
</p>

<h3>Total Records: 
    (<?php

    $myfile = fopen("Data.txt", "r") or die("Unable to open file!");
    $json = fread($myfile, filesize("Data.txt"));
    fclose($myfile);

    $RegInfo = json_decode($json, true);


    echo count($RegInfo); 

    ?>)
</h3>

<table border="3">

<tr>
<th>Transaction Category</th>
<th>To</th>
<th>Amount</th>
<th>Transferred On</th>

</tr>

<?php
echo "<tr>";
echo "<td>Table cell 1</td>";
echo "<td>Table cell 2</td>";
echo "<td>Table cell 2</td>";
echo "<td>Table cell 2</td>";
echo "</tr>";
?>



</table>


