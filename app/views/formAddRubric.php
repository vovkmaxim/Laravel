<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>add new news</title>
</head>
<body>
<?php echo View::make('Link'); ?>
    <?php
      $rubric =  Rubric::all();      
      $select_array = array();
      foreach ($rubric as $rubrics){
              $select_array[$rubrics->id] = $rubrics->name; 
      }
        $error_name = $errors->first('name');        
        $error_description = $errors->first('description');        
        $error_rubric_id = $errors->first('rubric_id');        
      
    ?>

    <?php echo Form::open(array('url' => 'add-rubric', 'method' => 'post')); 
    ?>  
        <?php
        if(!empty($error_name)){
            echo '<div class="error">'.$error_name.'</div>';
        }    
        ?>
        <div><?php echo "Name: ".Form::text('name'); ?></div>
      
        <?php
        if(!empty($error_description)){
            echo '<div class="error">'.$error_description.'</div>';
        }    
        ?> 
        <div><?php echo "Description: ".Form::textarea('description'); ?></div>
      <?php
        if(!empty($error_rubric_id)){
            echo '<div class="error">'.$error_rubric_id.'</div>';
        }    
        ?>  
        <div><?php echo "Rubric: ".Form::select('rubric_id', $select_array); ?></div>
            
        <div><?php echo Form::submit('Add new Rubric'); ?></div>
    
    <?php echo Form::close(); ?>
        
</body>
</html>