<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Eason Luo">
    <link rel="icon" href="../../favicon.ico">

    <title></title>
    
    <!-- Material Design fonts -->
 	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
 	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
	<!-- Optional theme -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous"> -->
	    
	<link rel="stylesheet" href="{{url('css/bootstrap-material-design.min.css')}}" />
	
	<link rel="stylesheet" href="{{url('css/ripples.min.css')}}" />
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{url('css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('css/dashboard.css')}}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{url('js/ie-emulation-modes-warning.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body ng-app="todo">

    <nav class="navbar navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">TODO</a>
        </div>
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	          </ul>
	        </li>
            
            <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-cog"></i></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	          </ul>
	        </li>
          </ul>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4 col-md-3 sidebar">
        
        	
        </div>
        <div class="col-sm-8 col-sm-offset-4 col-md-9 col-md-offset-3 main">
			<div class="row">
				<div class="col-md-8 col-sm-12" ng-controller="todocontroller">
					<div class="well">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group form-group-lg label-floating is-empty">
									<div class="input-group">
										<label class="control-label" for="new_title">Title</label>
										<input type="text" class="form-control" ng-model="new_title" id="new_title" todo-enter="addNew()"/>
										<span class="input-group-btn">
											<button class="btn btn-primary btn-fab btn-fab-mini">
												<i class="material-icons">add</i>
											</button>
										</span>
									</div>
								</div>
							</div>
							<div class="row text-center">
								<div class="col-md-4">
									<h5>Importance</h5>
									<div class="slider svert"></div>
								</div>
								<div class="col-md-4">
									<h5>Urgency</h5>
									<div class="slider svert"></div>
								</div>
								<div class="col-md-4">
									<h5>Difficulty</h5>
									<div class="slider svert"></div>
								</div>
							</div>
						</div>
						<div id="todos">
							<div class="list-group">
								<div ng-repeat="item in items" class="list-group-item" data-toggle="collapse" data-target="#note_@{{item.id}}">
									<div>@{{item.title}}<a href="#" class="pull-right"><i class="material-icons">note_add</i></a></div>
									<div class="collapse" id="note_@{{item.id}}">
										<div class="form-group form-group-sm">
											<div class="note">Test @{{item.title}}</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.js"></script>
    
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
    <script src="{{url('js/material.min.js')}}"></script>
    <script src="{{url('js/ripples.min.js')}}"></script>
    
    <!-- Sliders -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{url('js/ie10-viewport-bug-workaround.js')}}"></script>
    
    <script src="{{url('js/app.js')}}"></script>
  </body>
</html>
