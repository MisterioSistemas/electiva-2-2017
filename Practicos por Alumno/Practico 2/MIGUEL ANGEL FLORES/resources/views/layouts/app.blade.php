<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
		<title>Starter Template - Materialize</title>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- CSS  -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<style type="text/css">code{white-space: pre;}</style>
		<link rel="stylesheet"
			href="highlight/default.css"
			type="text/css" />
			<script src="highlight/highlight.js"></script>
			<link href="css/cards.css" rel="stylesheet">
			<style type="text/css">
				pre:not([class]) {
					background-color: white;
				}
			</style>
			<script type="text/javascript">
			if (window.hljs && document.readyState && document.readyState === "complete") {
				window.setTimeout(function() {
						hljs.initHighlighting();
				}, 0);
			}
			</script>
		</head>
		<body>
			<nav class="amber accent-4" role="navigation">
				<div class="nav-wrapper">
					<div class="row">
						<div class="col s3">
							<div class="nav-wrapper container">
								<a id="logo-container" href="#" class="brand-logo">Google Keep</a>
							</div >
						</div>
						<div class="col s9">
							<div class="">
								<form id="searchs" data-toggle="validator"  method="GET" action="{{ route('notasget.notass') }}">
									<div class="input-field">
										<input name="search" id="search" style=" width: calc(100% - 0rem);" type="search" placeholder="Busca lo que quieras">
										<label class="label-icon" for="search"><i class="material-icons">search</i></label>
										<i class="material-icons">close</i>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</nav>
			<div class="container">
				<br><br>
				@yield('content')
			</div>
			<!--  Scripts-->
			<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
			
			<script src="js/materialize.js"></script>
			<script src="js/init.js"></script>
			<script src="js/cards.js"></script>
			<script>
			// add bootstrap table styles to pandoc tables
			$(document).ready(function () {
				$('tr.header').parent('thead').parent('table').addClass('table table-condensed');
					setTimeout(function(){
					colMat($(".sections"));
					}, 300);
			});
			</script>
			<!-- dynamically load mathjax for compatibility with self-contained -->
			<script>
				(function () {
					var script = document.createElement("script");
					script.type = "text/javascript";
					script.src  = "https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML";
					document.getElementsByTagName("head")[0].appendChild(script);
				})();
			</script>
		</body>
	</html>