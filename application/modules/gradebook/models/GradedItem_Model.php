<?php


if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class GradedItem_Model extends MY_Model {
    
    function __construct() {
        parent::__construct();
    }

    
    public function add_graded_item()
    {
    	echo '<h1>Added Graded Item</h1>';

        
    }

    public function get_students($classId, $schoolId, $sectionId)
    {
        $query = "select StudentName(student_id) StudentName, student_id
        from enrollments
        where class_id = ? 
        and school_id = ?
        and section_id = ?";
        $query_result = $this->db->query($query, array($classId, $schoolId, $sectionId));
        return $query_result->result_array();
    }

    public function get_sections($schoolId, $classId)
    {
        $query = "SELECT name, id FROM sections WHERE school_id = ? and class_id = ?";
        $query_result = $this->db->query($query, array($schoolId, $classId));
        return $query_result->result_array();

    }

    public function get_classes($schoolId)
    {
        $query = "SELECT name, id FROM classes WHERE school_id = ?";
        $query_result = $this->db->query($query, array($schoolId));
        return $query_result->result_array();

    }

    public function get_gradeitems($data)
    {
        $school_id = $data['school_id'];
        $class_id = $data['class_id'];
        $subject_id = $data['subject_id'];
        $section_id = $data['section_id'];

        $query = "SELECT gradeitem_name, id FROM grade_items WHERE school_id = ? and class_id = ? and subject_id =? and section_id = ?";
        $query_result = $this->db->query($query, $data);
        return $query_result->result_array();

    }
}
?>