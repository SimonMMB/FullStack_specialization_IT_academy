<?php
declare(strict_types = 1);

class TaskModel
{
    private $dbPath;

    public function __construct()
    {
        $this->dbPath = ROOT_PATH . '/app/models/data/db.json';
    }

    //SAVE db.json INTO ASSOCIATIVE ARRAY $tasks
    public function getAllTasks(): array
    {
        if(!file_exists($this->dbPath) || filesize($this->dbPath) === 0) {
            $tasks = [];
        } else {
            $tasks = json_decode(file_get_contents($this->dbPath), true);
            if (!is_array($tasks)) {
                $tasks = [];
            }
        }

        return $tasks;
    }

    //REPLACE db.json CONTENT WITH THE CONTENT OF $tasks
    public function setJson(array $tasks): void
    {
        file_put_contents($this->dbPath, json_encode($tasks, JSON_PRETTY_PRINT));
    }

    //SEARCH TASK BY ITS ID
    public function searchTask(int $taskId): array
    {
        //Save db.json into an associative array
        $tasks = $this->getAllTasks();
        
        //Search for the corresponding task by its id
        $wantedTask = null;
        foreach ($tasks as $task) {
            if ($task['id'] === $taskId) {
                $wantedTask = $task;
                break;
            }
        }

        return $wantedTask;
    }

    //SAVE NEW TASK IN DB
    public function saveTaskInDb(array $newTask): void
    {
        //Save db.json into an associative array
        $tasks = $this->getAllTasks();
        
        //Generate task Id
        $newTask['id'] = count($tasks) + 1;

        //Add $newTask to the array of all tasks
        $tasks[] = $newTask;

        //Replace the db.json content with the content of $tasks
        $this->setJson($tasks);
    }

    //SAVE UPDATED TASK IN DB
    public function updateTaskInDb(array $updatedTask): void
    {
        $updatedTaskId = $updatedTask['id'];
        
        //Save db.json into an associative array
        $tasks = $this->getAllTasks();
        
        //Search for the corresponding task by its id and update it
        foreach ($tasks as $key => $task) {
            if ($task['id'] === $updatedTaskId) {
                $tasks[$key] = [
                    'username' => $updatedTask['username'],
                    'task' => $updatedTask['task'],
                    'status' => $updatedTask['status'],
                    'startTime' => $updatedTask['startTime'],
                    'endTime' => $updatedTask['endTime'],
                    'id' => $updatedTaskId
                ];
                break;
            }
        }

        //Replace the db.json content with the content of $tasks
        $this->setJson($tasks);        
    }
    
    //DELETE TASK
    public function deleteTask(int $taskId): void
    {
        if ($taskId === null) {
            throw new Exception("Id no puede ser null");
        } else {
            $tasks = $this->getAllTasks();
            foreach ($tasks as $key => $task) {
                if ($task["id"] === $taskId) {
                    unset($tasks[$key]);
                    $this->setJson($tasks);
                    break;
                }
            }
        }
    }

}
?>