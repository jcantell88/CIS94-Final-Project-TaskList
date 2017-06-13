

<?php

    class Task 
{
	
	private $task = null; 
	private $description = null; 
	private $completed = null ;
	private $date_completed = null;
	private $date_created = null; 

	function __construct( $task, $description, $date_completed, $date_created)
	{
		$this->task = $task; 
		$this->description =$description;
		$this->completed = 'n/a'; 
		$this->date_created = $date_created;
		$this->date_completed =$date_completed; 
	}
	
	
	public function Get_Task()
	{
		return $this->task; 
		
	}
	
	public function Set_Task( $taskName ) 
	{
		if (is_string($taskName ) )
			$this->task = taskName; 
		else
			$this->task = null; 
		
	}
	
	public function Get_Description() 
	{
		return $this->description; 
	}
	
	public function Set_Description ( $arg_Description )
	{
		if( is_string($arg_Description) )
			$this->description = $arg_Description; 
		else
			$this->description = null; 
	}
	
	public function Get_Completed()
	{	
		return $this->completed; 
	}
	
	public function Set_Completed(	$arg_Completed ) 
	{	
		if( is_bool($arg_Completed) === true  )
			$this->completed = $arg_Completed; 
		else
			$this->completed = null; 
	}
	
	
	public function Get_DateCreated() 
	{
		return $this->date_created; 
	}
	
	public function Set_DateCreated( $arg_DateCreated)
	{
		if( is_string($arg_DateCreated))
			$this->date_created = $arg_DateCreated; 
		else
			$this->date_created = null;
	}
	
	 public function Get_DateCompleted() 
	{
		return $this->date_completed; 
	}
	
	
	 public function Set_DateCompleted( $arg_DateCompleted)
	{
		if( is_string( $arg_DateCompleted))
			$this->date_completed = $arg_DateCompleted; 
		else 
			$this->date_completed = null; 
	}
	

}

?>
