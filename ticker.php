<?php

$site = "https://blockchain.info/ticker";

$json = file_get_contents($site) or die("Unable to connect $site");
$data = json_decode($json, true);

$currency = !empty($_POST["currency"]);

/*echo "<pre>";
print_r($data);
echo "</pre>";*/
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
    <script>
        function selCurrency(selectObject) {
            document.getElementById('selectCurrency').value.submit();
        }
    </script>
    <style type="text/css">
    .center {
    margin: auto;
    width: 600px;
    margin-top: 150px; 
    }
   	.form-control { 
    float: left;
    margin-right: 5px;
    width: 150px;
   }
   .input-group {
   	margin-right: 5px;
   	float: left;
    width: 100%;
	}
	.btn-group {
	float: left !important;
	}
	.res {
	float: left;
	margin: 0px 10px 0px 10px;
	font-size: 26px;
	}
	#amount {
		float: left;
		width: 150px;
	}
	#selectCurrency {
		width: 200px;
		float: left;
	}
	.bootstrap-select {
		width: 100px !important;
	}
  </style>
    <title>Ticker2</title>
</head>
<body class="center">
<form action="#" method="post" id="amount">
	<div class="input-group">
		<input aria-label="Text input with dropdown button" class="form-control" value="1">
			<div class="input-group-btn"> 
				<button aria-expanded="false" aria-haspopup="true" data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="submit">BTC <span class="caret"></span>
				</button> 
				<ul class="dropdown-menu dropdown-menu-right">
					<li><a href="#">Litecoin</a></li>  
				</ul> 
			</div>
	</div>
</form>
<div class="res">=</div>
<?php

foreach ($data as $key => $value) {
	if ($currency && $key == $_POST["currency"]) {
		echo "<input type=\"text\" class=\"form-control\" value=" . $value["buy"] . " size=\"40\" aria-label=\"Amount (to the nearest dollar)\"></div>";
	}	
}

if (!$currency) {
	echo "<input type=\"text\" class=\"form-control\" value=" . $data["USD"]["buy"] . " size=\"40\" aria-label=\"Amount (to the nearest dollar)\"></div>";
}


?>
<form action="#" method="post" id="selectCurrency">
    <select name="currency" class="selectpicker" onchange="this.form.submit()">
        <?php
        	foreach ($data as $key => $value) {
        		echo "<option value=\"$key\"";
        			if ($currency && $_POST["currency"] == $key) {
        				echo " selected";
        			}
        		echo ">" . $key . "</option>" ;
        	}
        ?>
    </select>
    <input type="submit" style="visibility:hidden;">
</form>
</body>
</html>
