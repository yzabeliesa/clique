<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Clique</title>

	<link rel="stylesheet" type="text/css" href="css/base.css">


</head>
<body>
	<div align='center'>
		<br/><br/> <!--yeah I suck at formatting-->
		<a href="http://www.clique.dev" title="Clique">
			{{ 	HTML::image(
					'img/whatcomisthisagain.png',
				 	'Some Icon', 
				 	array(
				 		'width' 	=> '250', 
				 		'height' 	=> '250',
				 		'align' 	=>	'middle'
					)
				) 
			}}
		</a>
		<h1>Welcome to Clique.</h1>
		</br>

		{{ $greeting . ' ' . $person . ', you have entered Clique:'}}

		@forelse($statements as $item)
			<li> {{ $item}}
		@empty
			<li> {{ 'an online org-tracking tool' }}
		@endforelse
		</br>
		</br>

		@if($test)
			<i>{{ 'Calm your tits and come back when we\'re ready.' }}</i>
		@endif
	
	</div>
</body>
</html>
