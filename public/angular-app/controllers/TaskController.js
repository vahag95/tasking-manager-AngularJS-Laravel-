angular.module('taskManager')
  .controller('TasksController', TasksController)

  TasksController.$inejct = ['$http'];

    function TasksController($http) {
        var vm = this;

        vm.addTask = addTask;
        vm.deleteTask = deleteTask;
        vm.toggleStatus = toggleStatus;
        vm.tasks = [];
        vm.inputs = {
          name : ''
        };
        
        function init() {
          getTasks(); // Load all available tasks  
        }
          

        function getTasks(){  
            $http.get("/tasks").success(function(data){            
                vm.tasks = data;
            });
        };
        function addTask () {
          $http.post("/tasks", vm.inputs).success(function(data){
              getTasks();
            });
        };
        function deleteTask (id) {
          if(confirm("Are you sure to delete this line?")){
          $http.delete("/tasks/"+id).success(function(data){
              getTasks();
            });
          }
        };

        function toggleStatus(item, status) {
          if(status=='1'){status='0';}else{status='1';}
            $http.post("/tasks/change-status?id="+item+"&is_completed="+status).success(function(data){
              getTasks();
            });
        };

        init();
};