<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Instructor_model extends CI_Model
{

    public function deleteUser($where = null)
    {
        $this->db->delete('user_material', $where);
    }
    public function getMaterial()
    {
        $query = "SELECT `user_material`.*, `user_course`.`course`
        FROM `user_material` JOIN `user_course`
        ON `user_material`.`course_id` = `user_course`.`id`
        ";
        return $this->db->query($query)->result_array();
    }
}
