<?php
declare(strict_types = 1);

class TaskController extends Controller
{
    //EMPTY METHODS TO RENDER CORRESPONDING VIEWS
    public function menuAction(): void {}
    public function createAction(): void {}
    public function createDoneAction(): void {}
    public function wrongUserNameAction(): void {}
    public function wrongTaskAction(): void {}
    public function wrongDatesAction(): void {}

    //FILTERS FOR INPUT: USERNAME, TASK DESCRIPTION, START AND END DATES
    private function filterInput(string $userName, string $task, DateTime $startTime, DateTime $endTime): void
    {
        $properUsername = false;
        $properTask = false;
        $properDates = false;

        if (strlen($userName) <= 15) {
            $properUsername = true;
        } 

        if (strlen($task) <= 140) {
            $properTask = true;
        }

        if ($startTime < $endTime) {
            $properDates = true;
        }

        if (!$properUsername || !$properTask || !$properDates) {
            exit();
        }
    }

    //GET, VALIDATE AND SAVE INPUT DATA INTO ASSOCIATIVE ARRAY $newTask
    private function prepareData(): array
    {
        //Get data and declaration of empty array $newTask
        $userName = strval(htmlspecialchars($this->_getParam('username')));
        $task = strval(htmlspecialchars($this->_getParam('task')));
        $status = $this->_getParam('status');
        $startTimeString = $this->_getParam('startTime');
        $endTimeString = $this->_getParam('endTime');
        $startTime = DateTime::createFromFormat('Y-m-d\TH:i', $startTimeString);
        $endTime = DateTime::createFromFormat('Y-m-d\TH:i', $endTimeString);
        $newTask = [];

        //Filters: username, task description, start and end dates
        $this->filterInput($userName, $task, $startTime, $endTime);

        //Create an associative array for new task
        $newTask = [
            'username' => $userName,
            'task' => $task,
            'status' => $status,
            'startTime' => $startTime,
            'endTime' => $endTime,
        ];

        return $newTask;
    }
    
    //SAVE NEW TASK IN DB
    public function storeTaskAction(): void
    {
        //Save input data into $newTask
        $newTask = $this->prepareData();
        
        //Instantiate MODEL to save task in db
        $model = new TaskModel();
        $model->saveTaskInDb($newTask);

        //Redirect to other view
        header("Location: ../web/createdone");
        exit();
    }

    //SHOW TASK TO UPDATE
    public function showTaskAction(): void
    {
        //Get id of corresponding task
        $taskId = (int) $_GET['id'];

        //Search for the corresponding task
        $model = new TaskModel();
        $wantedTask = $model->searchTask($taskId);

        //Send task to View
        $this->view->wantedTask = $wantedTask;
    }

    //SHOW ALL TASKS
    public function listAction(): void
    {
        //1. Cargar el modelo
        $model = new TaskModel();

        //2. Obtener todas las tareas de la bbdd
        $this->view->tasks = $model->getAllTasks();
    }

    //SAVE UPDATED TASK IN DB
    public function updateAction(): void
    {
        //Save input data into $newTask
        $newTask = $this->prepareData();
        
        //Add id to $newTask
        $taskId = (int) $this->_getParam('taskId');
        $newTask['id'] = $taskId;
        
        //Instantiate MODEL to update task in DB
        $model = new TaskModel();
        $model->updateTaskInDb($newTask);
    }

    //DELETE TASK
    public function deleteAction(): void
    {
        $model = new TaskModel();
        $taskId = (int) $_GET['id'];
        if ($taskId === null || $taskId <= 0) {
            die("Error: ID de tarea no válido.");
        }

        $this->view->task = $model->deleteTask($taskId);
    }
}

?>
