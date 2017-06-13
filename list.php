<?php

include 'Page.php';
$page = new Page();
$page->title = 'List';
include 'header.php';

// Add code here that will load the CSV file with the tasks in it
// and will print the tasks in a table
// The following is an example of how the table will be printed 
// between the header and the footer
include 'Task.php';
include 'TaskList.php';

	echo '<table class="table">';  // this is styled as a bootstrap table
	echo '    <thead>';
	echo '      <tr>';
	echo '        <th>Task</th>';
	echo '        <th>Description</th>';
	echo '        <th>Completed(Y/N)</th>';
	echo '        <th>Date Completed</th>';
	echo '      </tr>';
	echo '    </thead>';


$taskM = new TaskList; 
$taskM->LoadRecords('Tasks.csv');
$myTasks = $taskM->GetRecords(); 
var_dump($myTasks);
//foreach( $myTasks as $task ) 
for( $i = 0;  $i < count($myTasks); $i++ )
{
    



	echo '    <tbody>';
	echo '      <tr>';
	echo "        <td> " . $myTasks[$i]->Get_Task() . "</td>";
	echo "        <td> " . $myTasks[$i]->Get_Description() . "</td>";
	echo "        <td> " . $myTasks[$i]->Get_DateCompleted() . "</td>";
	echo "        <td> " . $myTasks[$i]->Get_DateCreated() . "</td>";
	echo '      </tr>';
	echo '    </tbody>';

}

	echo '</table>';


include 'footer.php';

?>

