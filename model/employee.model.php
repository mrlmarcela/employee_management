<?php
include('db.php');

class EmployeeModel
{
    public function getEmployees()
    {
        global $DB;

        $response = array();

        $result = $DB->query("SELECT * FROM employees");

        if ($result->num_rows > 0) {
            foreach ($result as $value) {
                array_push($response, $value);
            }
        }

        return $response;
    }


    public function addEmployee($data)
    {
        global $DB;

        $result = $DB->query("INSERT INTO employees 
        (`name`, `surname`, `age`, `phone`, `offices_id`, `entry_date`)
        VALUES ('{$data["name"]}', '{$data["surname"]}', {$data["age"]}, '{$data["phone"]}', {$data["offices_id"]}, NOW())");

        if (!$result) {
            return false;
        }

        return true;
    }

    public function removeEmployee($id)
    {
        global $DB;

        $result = $DB->query("DELETE FROM employees WHERE `id` = {$id}");

        if (!$result) {
            return false;
        }

        return true;
    }
}
