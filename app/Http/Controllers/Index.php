<?php

namespace App\Http\Controllers;

class Index extends Controller {
  public function index(){
    return view('client/addclient');
  }

  public function submit(){
    //include('CsvActivity.php');

  //  $csvobj = new CsvActivity();

    // form variables
    $clientname = $_POST['client_name'];
    $gender = $_POST['optionsGenderRadio'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $nationality = $_POST['nationality'];
    $dob = $_POST['dob'];
    $edubck = $_POST['edubck'];
    $prefmodcontact = $_POST['prefmodcontact'];

    if(!empty($clientname) && !empty($gender) && !empty($phone) && !empty($email) && !empty($dob)){
      $clientdata = $clientname.",".$gender.",".$phone.",".$email.",".str_replace(',','-',$address).",".$nationality.","
      .$dob.",".$edubck.",".$prefmodcontact;

      $fp = fopen("formdata.csv","a");
      if($fp)
      {
      fwrite($fp,$clientdata."\n");
      fclose($fp);
     //ssswriteCsv($clientdata);
     //$msg = "Your data has been successfully saved";
     //$messages = array($msg);
   }
     return view('client/index');
  }
}

/*public function writeCsv($formdata){
  $fp = fopen("formdata.csv","a");
  if($fp)
  {
    fwrite($fp,$formdata."\n");
    fclose($fp);
  }
}*/


public function viewall(){
  //echo "Bijan";
  $arrays = file("formdata.csv") or die("Unable to open file!");
  foreach ($arrays as $key => $value) {
    # code...
    $arrays[$key] = explode(',',$value);
  }
  return view('client/display',compact('arrays'));
}


    /*public function readCsv(){
        $array = file("class/formdata.csv") or die("Unable to open file!");
        foreach ($array as $key => $value) {
          # code...
          $array[$key] = explode(',',$value);
        }
        return $array;
    }*/
}
