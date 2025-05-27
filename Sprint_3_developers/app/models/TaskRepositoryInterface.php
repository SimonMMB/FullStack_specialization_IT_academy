<?php

interface TaskRepositoryInterface
{
    public function getAllTasks(): array;
    public function setJson(array $tasks): void;
    public function searchTask(int $taskId): array;
    public function saveTaskInDb(array $task): void;
    public function updateTaskInDb(array $task): void;
    public function deleteTask(int $taskId): void;
}

?>