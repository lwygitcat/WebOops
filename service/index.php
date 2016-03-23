<?
session_start();
require("lib.php");
require("api.php");


header("Content-Type: application/json");

//checkCRN('10520');
//deleteCourseItem('test','123');


switch ($_POST['command']) {
	case "showTradeList":
		showTradeList();break;
	case "login": 
		login($_POST['username'], $_POST['password']); break;
	case "register":
		register($_POST['username'], $_POST['fullName'],$_POST['password'],$_POST['email'],$_POST['year'],$_POST['college'],$_POST['gender'],$_FILES['file'],$_POST['bio']); break;
	case "changeBio":
		changeBio($_POST['username'], $_POST['bio']); break;
 	case "AddCourseToList":
		AddCourseToList($_POST['username'], $_POST['crn']); break;
	case "AddTradeToList":
		AddTradeToList($_POST['username'], $_POST['have'], $_POST['exchange'], $_POST['emailPrivacy'], $_POST['note'],$_POST['gender']); break;
	case "showCourseList":
		showCourseList($_POST['username']); break;
	case "deleteCourseItem":
		deleteCourseItem($_POST['username'], $_POST['crn']); break;
	case "deleteTradeItem":
		deleteTradeItem($_POST['username'], $_POST['crn']); break;
 	case "checkCRN":
 		checkCRN($_POST['crn']); break;
    case "photoUpload":
        photoUpload($_POST['username'],$_FILES['file'],$_POST['title']);break;
    case "retrievePhoto":
    	retrievePhoto($_POST['username']);break;
    
    case "showInfo":
    	showInfo($_POST['username']);break;
    }


exit();
?>