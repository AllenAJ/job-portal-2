<?php 
 
// Load the database configuration file 
require_once('connection.php');
session_start(); 
// Fetch records from database 
$sql = "SELECT * FROM tbl_Job_details";
$query = $conn->query($sql);
 
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "members-data_" . date('Y-m-d') . ".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('Job id', 'Username', 'Job Name', 'Job Opening', 'Job Description', 'Job Requirement','STATUS'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){ 
        $status = ($row['status'] == 1)?'active':'inactive'; 
        $lineData = array($row['job_id'], $row['Username'], $row['job_name'], $row['job_opening'], $row['job_desc'], $row['job_requirement'],$status); 
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