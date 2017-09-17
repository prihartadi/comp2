<?php
error_reporting(E_ALL ^ E_DEPRECATED); 

/* require the user as the parameter */
// if(isset($_GET['user']) && intval($_GET['user'])) {

	/* soak in the passed variable or set our own */
	// $number_of_posts = isset($_GET['num']) ? intval($_GET['num']) : 10; //10 is the default
	// $format = strtolower($_GET['format']) == 'json' ? 'json' : 'xml'; //xml is the default
	// $user_id = intval($_GET['user']); //no default

	/* connect to the db */
	 // $link = @mysql_connect('localhost','root','') or die('Cannot connect to the DB');
	 // mysql_select_db('db_ta',$link) or die('Cannot select the DB');
	$link = mysqli_connect("localhost","root","","db_ta");
	// print_r($link);

	// Check connection
	if (mysqli_connect_errno())
   	{
   		echo "Failed to connect to MySQL: " . mysqli_connect_error();
   	}

	/* grab the posts from the db */
	// $query = "SELECT post_title, guid FROM wp_posts WHERE post_author = $user_id AND post_status = 'publish' ORDER BY ID DESC LIMIT $number_of_posts";
	$query = "SELECT code_cpu, price_cpu FROM part_cpu";
	$result = mysqli_query($link,$query);

	/* create one master array of the records */
	$posts = array();
	if(mysqli_num_rows($result)) {
		while($post = mysqli_fetch_assoc($result)) {
			$posts[] = array('post'=>$post);
		}
	}

	/* output in necessary format */
	// if($format == 'json') {
	// 	header('Content-type: application/json');
	// 	echo json_encode(array('posts'=>$posts));
	// }
	// else {
		header('Content-type: text/xml');
		echo '<posts>';
		foreach($posts as $index => $post) {
			if(is_array($post)) {
				foreach($post as $key => $value) {
					echo '<',$key,'>';
					if(is_array($value)) {
						foreach($value as $tag => $val) {
							echo '<',$tag,'>',htmlentities($val),'</',$tag,'>';
						}
					}
					echo '</',$key,'>';
				}
			}
		}
		echo '</posts>';
	// }

	/* disconnect from the db */
	@mysql_close($link);
// }

 ?>