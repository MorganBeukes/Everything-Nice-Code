<?php
session_start();
?>

<html>
<link rel="stylesheet" type="text/css" href="Loginc.css">

<head>
<meta charset="UTF-8">
</head>
<body>
<h1 align="center">Inventory</h1>


<?php

$evdb = mysqli_connect("localhost", "twininga_wrdp1", "Stingray69") or die (mysqli_error());		//MUST HAVE "LOCALHOST" AND "ROOT"
mysqli_select_db($evdb, "twininga_everythingnice");

$result = mysqli_query($evdb, "SELECT * FROM inventory");

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Product ID: " . $row["Product_ID"]. " - Product_Name: " . $row["Product_Name"]. " - Description: " . $row["Description"]. " - Quantity: " . $row["Quantity"].
		 " - Vendor ID: " . $row["Vend_ID"]. " - BuyPrice: " . $row["BuyPrice"]. " - SellPrice: ". $row["SellPrice"]. " - In Transit: ". $row["In_Transit"]. " - On Shelf: ". $row["On_Shelf"]. " - Sold: ". $row["Sold"].

		"<br><br>";
    }

?>


<div><button class="submit" type="button" onclick="window.location.href='ManageInventory.php'"> Back </div>

<br><br><br><br><br><br><br><br><br><br>

<div class="popup" onclick="myFunction()">Help
  <span class="popuptext" id="myPopup">
  
  
    		This is the View Inventory page.  Displayed is all of the current inventory you have recorded.
                    <br><br>
                    
                    
                    
                    
                   
  
  </span>
</div>


<script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>


</html>
</body>
