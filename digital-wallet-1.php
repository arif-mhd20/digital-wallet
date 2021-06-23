
<h1>Page 1 [Home]</h1>

<h3>Digital Wallet</h3>

<p>
    1. <a href="/digital-wallet/digital-wallet-1.html">Home</a>
    &nbsp;
    2. <a href="/digital-wallet/digital-wallet-2.php">Transaction History</a>
</p>

<h3>Fund Transfer:</h3>

<form method="post" action="/digital-wallet/submit_transaction.php">
    <label >Select Category:</label>

      <select name="cat" id="cat">
        <option value="">Select a value</option>
        <option value="mobile_recharge">Mobile Recharge</option>
        <option value="send_money">Send Money</option>
        <option value="merchant_pay">Merchant Pay</option>
      </select>
      <br><br>
    
      <?php

      $myfile = fopen("save.txt", "r") or die("Unable to open file!");
      $json = fread($myfile, filesize("Data.txt"));
      fclose($myfile);

      $RegInfo = json_decode($json, true);
      echo "<label for=\"to\">To:</label>";
      echo "<input type=\"text\" id=\"to\" name=\"to\" required ><br><br>";
      echo "<label for=\"amount\">Amount:</label>";
      echo "<input type=\"number\" id=\"amount\" name=\"amount\" required><br><br>";

      ?>
      
      

      
      

  <input style="padding-left;" type="submit" value="Submit">
</form>



