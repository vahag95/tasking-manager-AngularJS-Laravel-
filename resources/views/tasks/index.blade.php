<!DOCTYPE html>
<html lang="en" ng-app="taskManager">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>        
        Task Manager
    </title>    
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/taskman.css"/>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->    
    <script type="text/javascript" src="/bower_components/angular/angular.min.js"></script>
    <script type="text/javascript" src="/angular-app/app.js"></script>
    <script type="text/javascript" src="/angular-app/controllers/TaskController.js"></script>    
</head>

<body ng-controller="TasksController as tasksCtrl">
    
    <div class="navbar navbar-default" id="navbar">
        <div class="container" id="navbar-container">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">
                    <small>                
                        Task Manager
                    </small>
                </a><!-- /.brand -->                
            </div><!-- /.navbar-header -->
            <div class="navbar-header pull-right" role="navigation">        
            </div>
        </div>
    </div>    
    <div class="container">
        <blockquote><h1><a href="#">Task Manager Application</a></h1></blockquote>
        <div class="col-sm-9">
            <div ng-include src="'/angular-app/templates/task.html'"></div>
        </div>        
    </div>        
</body>

</html>

