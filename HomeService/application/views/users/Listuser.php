<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
	<head>
		
	</head>
	<body>
		<table class="table table-bordered dataTable" id="dataTable" role="grid" aria-describedby="dataTable_info" style="width: 100%;" width="100%" cellspacing="0">
								<thead>
									<tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 114.117px;" aria-label="Office: activate to sort column ascending">Id</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 88.45px;" aria-label="Salary: activate to sort column ascending">User Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 88.45px;" aria-label="Salary: activate to sort column ascending">Email</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 88.45px;" aria-label="Salary: activate to sort column ascending">password</th>
                                        
                                        
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 114.117px;" aria-label="Office: activate to sort column ascending">Delete</th>
                                    </tr>
                
            					</thead>

            						<?php
				                          foreach($records  as $row):
				                            ?>
				                            <tr>
				                                <th rowspan="1" colspan="1"><?=$row->user_id?></th>
				                                <th rowspan="1" colspan="1"><?=$row->username?></th>
				                                <th rowspan="1" colspan="1"><?=$row->email?></th>
				                                <th rowspan="1" colspan="1"><?=$row->password?></th>
				                            </tr>
				                            <?php
				                          endforeach;
				                    ?>
            					 
        </table>
	</body>

</html>