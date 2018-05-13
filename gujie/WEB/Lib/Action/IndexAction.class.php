<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
      $name=$_REQUEST['name_data'];
		$saying=$_REQUEST['saying_data'];
      $year=$_REQUEST['year_data'];
       $Occupation=$_REQUEST['Occupation_data'];
      

      $data['name']=$name;
      $data['saying']=$saying;
      $data['year']=$year;
      $data['occupation']=$Occupation;
     
      $re = M('team_number')->add($data);
			    echo json_encode($re);
    }
}
