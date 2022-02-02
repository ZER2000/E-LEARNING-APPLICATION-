<?php
 function getpayment ()
  {
      return json_decode(file_get_contents(filename:__DIR__.'/pay.json'),true);
  }
  function getstudent ()
  {
      return json_decode(file_get_contents(filename:__DIR__.'/std.json'),true);
  }

  function getstudentbyid($id)
  {
     $students=getstudent ();
     foreach($students as $info){
         if ($info["id"]==$id){
             return $info;
         }
     }
     return null;
  }
  function updateStudent($data, $id)
  {
    $students= getstudent ();
    foreach ($students as $i => $info) {
        if ($info['id'] == $id) {
            $students[$i] = array_merge($info, $data);
        }
    }
     file_put_contents(__DIR__.'/std.json',json_encode($students));
     header('Location: Students.php');
  }
  ?>