<head>
	<title>Ninja Pizza</title>
	 <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <style type="text/css">
    	.brand{
    		background: #cbb09c !important;
    	}
    	.brand-text{
    		color: #cbb09c !important;
    	}
    	form{
    		max-width: 460px;
    		padding: 20px;
    		margin: 20px auto;

    	}
        .pizza
        {
            width: 100px;
            margin: 40px auto -30px;
            display: block;
            position: relative;
            top: -30px;

        }
    </style>
</head>
<body class="grey lighten-4">
	<nav class="white z-depth-0"> <!--Nav bar creation starts here-->
		<div class="container">
			<a href="mindex.php" class="brand-logo brand-text">Ninja Pizza</a>
			<ul id="nav-mobile" class="right hide-on-small-and-down">
				<li><a href="madd.php" class="btn brand z-depth-0">Add Pizza</a></li>
                <li><a href="mpay.php" class="btn brand z-depth-0">Orders</a></li>
                <li><a href="logout.php" class="btn-small brand z-depth-0">log out</a></li>
			</ul>
		</div>
	</nav>