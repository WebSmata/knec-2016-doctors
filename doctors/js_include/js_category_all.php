<?php include JS_THEME."js_header.php"; ?>
	<div id="site_content">	
		
		<?php $js_db_query = "SELECT * FROM js_category ORDER BY categoryid DESC LIMIT 20";
			$database = new Js_Dbconn();			
			$results = $database->get_results( $js_db_query );
		?>
	  <div id="content"> 
        
        <div class="content_item">
		<br>
		  <h1><?php echo $database->js_num_rows( $js_db_query ) ?> Department
		  <a style="float:right;width:300px;text-align:center;" href="index.php?action=category_new">Add New Department</a> </h1> 
          <br><hr><br>
			<div class="main_content" align="center">
			
			   <table class="tt_tb">
				<thead><tr class="tt_tr">
				  <th style="width:70px;"></th>
				  <th>Department</th>
				  <th>Description</th>
				</tr></thead>
				<tbody>
                <?php foreach( $results as $row ) { ?>
		        <tr onclick="location='index.php?action=category_view&amp;js_categoryid=<?php echo $row['categoryid'] ?>'">
				   <td><img class="iconic" src="js_media/<?php echo $row['category_icon'] ?>" /></td>
				   <td><?php echo $row['category_title'] ?></td>
		          <td style="max-width: 300px;"><?php echo $row['category_content'] ?></td>
		          
		        </tr>
			
			<?php } ?>
			
                      </tbody>
                    </table>
			</div>
		<br>
      <h2><center></center></h2>
		<br>  
		</div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content-->  	
  </div><!--close main-->
<?php include JS_THEME."js_footer.php" ?>
    
