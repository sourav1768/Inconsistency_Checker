<?php

class I_C_model extends CI_Model
{
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

    public function duplicate_sem_registrations($data) {

      echo 'Model debugging here: ';
      $sql = "select admn_no, course_id, branch_id, semester, count(*) as c1 from
      reg_regular_form where hod_status='1' and acad_status='1' and session_year = ? and session = ?
      GROUP BY admn_no, session, session_year having c1>1";

      $query = $this->db->query($sql, array($data['session_year'], $data['session']));

      echo 'Session year Selected: '.$data['session_year'].'<br>';
      echo 'Session Selected: '.$data['session'].'<br>';
      echo 'Count of tuples: '.count($query->result_array()).'<br>';

      return $query->result_array();


      // $test_sql_1 = "select admn_no from reg_regular_form where admn_no = ?";
      // $test_query_1 = $this->db->query($test_sql_1, '2013JE0688');
      // echo count($test_query_1->result_array());
      // return $test_query_1->result_array();
      // ::This test query runs well. This proves ? works. ::

      // $sql = "select admn_no, course_id, branch_id, semester from reg_regular_form";

      
      // $query = $this->db->query($sql);
      
      
      // return $query->result_array();
    }

    // public function get_for_query_two($data) {
    //   $sql = 'select admn_no, subject_code, remark2, count(*) as c1 from pre_stu_course where remark2=3 and session_year=? and session=? GROUP BY admn_no, subject_code, remark2, session_year, session having c1>1;';
    //   $query = $this->db->query($sql, array($data['session_year_form'],$data['session']));
    //   return $query->result_array();
    // }

    // public function get_for_query_three($data) {
    //   $sql = '';
    // }
}
