<html>
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">TM-Lab</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

    <div class="row" style="padding-top:25px">
	
	<div class="panel-group" style="margin-top:20px;">
	<div class="panel panel-primary">
	<div class="panel-heading"></div>
	<div class="panel-body">       
    <h1 id="temperature">

		<?php echo "Temperatura:";
		$fp = fopen("/sys/class/thermal/thermal_zone0/temp", "r");
		$tekst = fread($fp, 10);
		$procent = $tekst/1000;
		echo $procent. " *C";
		?>

	</h1>

    <script>
    interval = setInterval(function(){
    $("#temperature").load(" #temperature");
    }, 2000);
    </script>   

    <h1 id="proc">
    </h1>

	<h1 id="memory_usage">
	</h1>

	<div class="panel panel-default">
        <div class="panel-heading">Obsluga diody</div>
        <div class="panel-body">

	<p>	<button id="on" class="btn btn-primary">Wlacz diode</button>
	    <button id="off" class="btn btn-danger">Wylacz diode</button>
    </p>
	</div></div>


    <div class="panel panel-default">
        <div class="panel-heading">Obsluga przycisku</div>
        <div class="panel-body">

	
        <button id="odswiez" class="btn btn-primary">Wyswietl zdjecie</button></p>

    </div></div>	

    <div class="panel panel-default">
        <div class="panel-heading">Zuzycie pamieci i procesora</div>
        <div class="panel-body">

    <p>	
        <button id="procesor" class="btn btn-primary">Pokaz zuzycie procesora</button>
        <button id="memory_usage_btn" class="btn btn-primary">Pokaz zuzycie pamieci</button>
    </p>
    </div></div></div>	

    <p id=results style="margin:15px;"></p>
    <p id=photos style="margin:15px;"></p>

	</div></div></div></div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        $('#on').click(function(e) {
            $.ajax({
                url: 'src/api/dioda_wlacz.php',
                type: 'GET',
                data: {},
                dataType: 'text'
            }).done(function(data) {
                $('#results').html(data);
            });
        });
    </script>

    <script>
        $('#off').click(function(e) {
            $.ajax({
                url: 'src/api/dioda_wylacz.php',
                type: 'GET',
                data: {},
                dataType: 'text'
            }).done(function(data) {
                $('#results').html(data);
            });
        });
    </script>

	<script>
        $('#odswiez').click(function(e) {
            $.ajax({
                url: 'src/api/odswiezZdjecie.php',
                type: 'GET',
                data: {},
                dataType: 'text'
            }).done(function(data) {
                $('#photos').html(data);
            });
        });
    </script>

    <script>
        $('#procesor').click(function(e) {
            $.ajax({
                url: 'src/api/procesor.php',
                type: 'GET',
                data: {},
                dataType: 'text'
            }).done(function(data) {
		var procent = parseFloat(data);
               $("#proc").html("Zuzycie procesora: " + (procent).toFixed(2)+"%");
            });
        });
    </script>
    <script>
        $('#memory_usage_btn').click(function(e) {
            $.ajax({
                url: 'src/api/memory.php',
                type: 'GET',
                data: {},
                dataType: 'text'
            }).done(function(data) {
		var mem = parseFloat(data);
               $("#memory_usage").html("Zuzycie pamieci: " + (mem).toFixed(2)+"%");
            });
        });
    </script>


</body>
</html>




