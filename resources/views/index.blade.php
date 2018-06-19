<!doctype html>
<html ng-app="tarefas">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ToDoList</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" ng-controller="TarefasController as tarefas">

      <div class="display-4">
        Minha lista de tarefas
      </div>
      <div>
        <h3>Tarefa: @{{ tarefas.tarefa.texto }}</h3>
        <h3>Tarefa: @{{ tarefas.tarefa.autor }}</h3>
        <h3>Tarefa: @{{ tarefas.tarefa.status }}</h3>
      </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
