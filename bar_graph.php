    <?php
     
    $dataPoints = array();
    
    try{
         
        $link = new \PDO(   'mysql:host=localhost;dbname=loop;charset=utf8mb4', 
                            'system', 
                            'system', 
                            array(
                                \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                \PDO::ATTR_PERSISTENT => false
                            )
                        );
    	
        $handle = $link->prepare('select rid, usedby from bookings'); 
        $handle->execute(); 
        $result = $handle->fetchAll(\PDO::FETCH_OBJ);
    		
        foreach($result as $row){
            array_push($dataPoints, array("x"=> $row->rid, "y"=> $row->usedby));
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
    		text: "Resource - User Graph"
    	},
    	data: [{
    		type: "pie", //change type to column,bar, line, area, pie, etc  
    		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    	}]
    });
    chart.render();
     
    }
    </script>
    </head>
    <body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    </body>
    </html>                              