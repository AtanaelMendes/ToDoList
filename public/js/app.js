(function(){
  var app = angular.module('tarefas',[]);
  app.controller('TarefasController', function(){
    this.tarefa = tarefa;
  });
  var tarefa = {'texto':'teste','autor':'Eu mesmo','status':'concluido'};
})();
