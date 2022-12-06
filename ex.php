<form method="POST">
	Xuân <input type="checkbox" name="ss[]" value="Xuân"/> 
	Hạ <input type="checkbox" name="ss[]" value="Hạ"/> 
	Thu <input type="checkbox" name="ss[]" value="Thu"/> 
	Đông <input type="checkbox" name="ss[]" value="Đông"/> 
	<input type="submit" name="sbm" value="Send"/>
</form>

<?php
if(isset($_POST["sbm"])){
	
	foreach($_POST["ss"] as $ss){
		
		echo $ss.', ';
	}
}


// $frontend = array(
//     "HTML",
//     "CSS",
//     "JS"
// );
// $backend = array(
//     "giaidoan1"=>array(
//         "oop",
//         "mvc",
//         "framework"
//     ),
// );
// // mang 3 chieu vi co cac array noi nhau moi array la 1 mang
// $courses = array(
//     "monhoc1"=>$frontend,
//     "monhoc2"=>"PHP",
//     "monhoc3"=>"MySQL",
//     "monhoc4"=>$backend
// );
// foreach($courses["monhoc4"]["giaidoan1"] as $value){
//     echo $value."<br/>";
// }
?>
<!-- $_SESSION["cart"][id] = qty(soluong) cong thuc tong quat -->