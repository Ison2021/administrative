<html>
<head>
        <title>Sample Report </title>
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.1/css/buttons.dataTables.css">
</head>
<div>
		<center><a class="btn btn-primary" href="export_excel.php">Save as file</a></center>
    </div>
<body>
    <div>
    <?php
    \koolreport\widgets\koolphp\Table::create(array(
        "dataSource"=>$this->dataStore("result")
    ));
    ?>
    </div>
    </body>
</html>