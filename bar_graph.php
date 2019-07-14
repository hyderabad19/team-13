    <?php

    $dataPoints = array();

    try{

        $link = new \PDO(   'mysql:host=localhost;dbname=loop;charset=utf8mb4',
                            'root',
                            '',
                            array(
                                \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                \PDO::ATTR_PERSISTENT => false
                            )
                        );
    	
        $handle = $link->prepare('select rname, usedby from bookings'); 
        $handle->execute(); 
        $result = $handle->fetchAll(\PDO::FETCH_OBJ);

        foreach($result as $row){
            array_push($dataPoints, array("y"=> $row->usedby, "label"=> $row->rname));
        }
    	$link = null;
    }
    catch(\PDOException $ex){
        print($ex->getMessage());
    }

    ?>
    <!DOCTYPE HTML>
    <html>
    <head>
    <script>
    window.onload = function () {

    var chart = new CanvasJS.Chart("chartContainer", {
    	animationEnabled: true,
    	exportEnabled: true,
    	theme: "light1",
    	title:{
    		text: "Resource - Usage Graph"
    	},
    	data: [{
    		type: "column", //change type to column,bar, line, area, pie, etc  
    		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    	}]
    });
    chart.render();

    }
    </script>
    </head>
    <body>
	<br><br><br><br>
	<center>
    <div id="chartContainer" style="height: 370px; width: 70%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	</center>
    </body>
    </html>
