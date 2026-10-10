<?php
    include "calculation.php";
    ?>

 <html>



 <head>
     <title> House Electricity Bill</title>
 </head>

 <body>
     <h1>Calculate House Electricity Bill</h1>

     <?php

     if($error != ""){
         echo "<p><b>Warning: </b>" . $error . "</p>";
     }

     ?>

     <div style="margin-bottom: 50px;">


         <table border="1">
             <tr>
                 <th>Block Tariff (per month)</th>
                 <th>Unit</th>
                 <th>Rate (RM)</th>
             </tr>
             <tr>
                 <td>For the first 200 kWh (1-200 kWh) per month</td>
                 <td>1 - 200 kWh</td>
                 <td>0.218</td>
             </tr>
             <tr>
                 <td>For the next 100 kWh (201-300 kWh) per month</td>
                 <td>201 - 300 kWh</td>
                 <td>0.344</td>
             </tr>
             <tr>
                 <td>For the next 300 kWh (301-600 kWh) per month</td>
                 <td>301 - 600 kWh</td>
                 <td>0.516</td>
             </tr>
             <tr>
                 <td>For the next 300 kWh (601-900 kWh) per month</td>
                 <td>601 - 900 kWh</td>
                 <td>0.546</td>
             </tr>
             <tr>
                 <td>For usage above 900 kWh per month</td>
                 <td>901 kWh onwards</td>
                 <td>0.571</td>
             </tr>
             <tr>
                 <td colspan="3">The minimum monthly charge is RM300</td>
             </tr>
         </table border="1">
     </div>


     <form method="post">
         Enter your first 200kwh (1-200 kWh) per month:
         <input type="text" name="block1" value=""><br><br>
         Enter next 100kwh (201-300 kWh) per month:
         <input type="text" name="block2" value=""><br><br>
         Enter next 300kwh (301-600 kWh) per month:
         <input type="text" name="block3" value=""><br><br>
         Enter next 300kwh (601-900 kWh) per month:
         <input type="text" name="block4" value=""><br><br>
         Enter next (901 kWh onwards) per month:
         <input type="text" name="block5" value=""><br><br>

         <input type="submit" name="Calculate" value="Calculate bill">

         <input type="submit" name="Reset" value="Reset">

     </form>
     <?php
        if ($showBill) {
            echo "<h3> Your electricity bill </h3>";
            echo "1-200 kWh: " . $block1 . " kWh x RM0.218 = RM" . number_format($charge1, 2) . "<br>";
            echo "201-300 kWh: " . $block2 . " kWh x RM0.344 = RM" . number_format($charge2, 2) . "<br>";
            echo "301-600 kWh: " . $block3 . " kWh x RM0.516 = RM" . number_format($charge3, 2) . "<br>";
            echo "601-900 kWh: " . $block4 . " kWh x RM0.546 = RM" . number_format($charge4, 2) . "<br>";
            echo "901 kWh onwards: " . $block5 . " kWh x RM0.571 = RM" . number_format($charge5, 2) . "<br>";
            echo "<br>";
            echo "Total eletricity consumption: " . $totalKwh . " kWh<br>";
            echo "Total consumption : RM" . number_format($totalCharge, 2) . "<br>";
            echo "SST (6%): RM" . number_format($sst, 2) . "<br>";
            echo "<b>Total  Current bill: RM" . number_format($totalBill, 2) . "</b><br>";
        }
        ?>




 </body>








 </html>