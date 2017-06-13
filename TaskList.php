<?php


	class TaskList
	{
		private $taskRetainer = array(); 

		
		
		public function addTask( $task ) 
		{
			if(! $task instanceof Task)
				throw new Exception("Must pass in a Task object"); 
				
			$this->taskRetainer[] = $task; 
			
		}
		
		public function printTasks()
		{
		
			foreach( $this->taskRetainer as $currentTask)
			{
				$isDescription = $currentTask->Get_Description();
				$isDateCompleted = $currentTask->Get_DateCompleted();
				$isCompleted = $currentTask->Get_Completed();
				
				if( isset($isDescription) ) 
					echo 'Description: $currentTask->description \n'; 
				
				
				if( isset($isDateCompleted))
					echo 'Date Completed: $currentTask->date_completed \n';
					
				if( isset($isCompleted) ) 
					echo 'Is task complete: $currentTask->completed \n';
				
				echo '-------------------------------------------------- \n';
			
			}
		
		
		}
		
		
		public function SaveTask( $task )
		{
				//if( ! $task instanceof Task ) 
					//throw new Exception("Must pass in a Task object");
				
				
				$this->taskRetainer[] = $task; 
				
				
				$myfile = fopen("Tasks.csv","a") or die("Unable to open file!");
				
				$myT = $task->Get_Task(); 
				$description = $task->Get_Description();
				$dateCreated = $task->Get_DateCreated(); 
				$completed = $task->Get_Completed();
				$dateCompleted = $task->Get_DateCompleted();
				
				$txt = $myT . "," . $description . "," . $dateCreated . "," . $dateCompleted . "\n"; 
				print $txt; 
				//,$task->Get_Completed(),$task->Get_DateCreated(),$task->Get_DateCompleted()";
				
				fwrite($myfile,$txt);
				fclose($myfile);
		}
		
		
		public function SaveAll() 
		{
			if(($handle = fopen("TaskAll.csv","a")) !== FALSE ) 
			{
				for( $i= 0; $i < $count = count($this->taskRetainer); $i++)
				{
					$txt = $this->taskRetainer[$i]->Get_Description() . "," . $this->taskRetainer[$i]->Get_Completed() . "," . $this->taskRetainer[$i]->Get_DateCreated() . "," . $this->taskRetainer[$i]->Get_DateCompleted() . "\n";
					
					fwrite($handle,$txt);
				}
				
				fclose($handle); 
				
			}
		
			
				
		}
		
			public function LoadRecords( $file ) 
		{
		
			if ( ( $handle = fopen ( $file, "r")) !==FALSE ) 
			{	
				while (( $data = fgetcsv( $handle, 8000, ",")) !== FALSE)
				{
					$num = count($data);
					
					$myTask = new Task($data[0],$data[1],$data[2], $data[3]);
					
					$this->addTask($myTask); 
				
				
				}
			
				fclose($handle); 
			
			
			}
		
		
		
		
		}
		
		public function GetRecords()
		{
			
			return $this->taskRetainer; 
			
		}


		

	}


?>