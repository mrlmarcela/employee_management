<?php
include('./model/employee.model.php');

class EmployeeController
{
    private $model;

    public function __construct()
    {
        $this->model = new EmployeeModel();
    }


    public function getEmployees()
    {
        $response = $this->model->getEmployees();

        if (empty($response)) {
            return [];
        }

        return $response;
    }


    public function addEmployee($post)
    {
        if (empty($post)) {
            return false;
        }

        $data['name'] = $post['name'];
        $data['surname'] = $post['surname'];
        $data['age'] = intval($post['age']);
        $data['phone'] = $post['phone'];
        $data['offices_id'] = intval($post['offices_id']);

        $response = $this->model->addEmployee($data);

        if (empty($response)) {
            return false;
        }

        return true;
    }


    public function RemoveEmployee($id)
    {
        if (empty($id)) {
            return false;
        }

        $id = intval($id);

        $response = $this->model->RemoveEmployee($id);

        if (empty($response)) {
            return false;
        }

        return true;
    }
}
