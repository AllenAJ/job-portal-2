<?php 
 
// Load the database configuration file 
require_once('connection.php');
session_start(); 
// Fetch records from database 
$sql = "SELECT * FROM tbl_feedback";
$query = $conn->query($sql);
 
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "members-data_" . date('Y-m-d') . ".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('Feedback id', 'email', 'User Type', 'Rating', 'details'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){ 
/*         $status = ($row['status'] == 1)?'Accepted':'Pending'; 
 */        $lineData = array($row['FeedbackID'], $row['Username'], $row['User_type'], $row['Rating'], $row['details']); 
        fputcsv($f, $lineData, $delimiter); 
    } 
     
    // Move back to beginning of file 
    fseek($f, 0); 
     
    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
    //output all remaining data on a file pointer 
    fpassthru($f); 
} 
exit; 
 
?>