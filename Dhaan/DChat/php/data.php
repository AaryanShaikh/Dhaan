<?php 
while($row = mysqli_fetch_assoc($sql)){
	$sql2 = "SELECT * from messages where (incoming_msg_id = {$row['unique_id']} or outgoing_msg_id = {$row['unique_id']})
			and (outgoing_msg_id = {$outgoing_id} or incoming_msg_id = {$outgoing_id}) order by msg_id desc limit 1";
	$query2 = mysqli_query($conn,$sql2);
	$row2 = mysqli_fetch_assoc($query2);
	if(mysqli_num_rows($query2) > 0){
		$result = $row2['msg'];
	}else{
		$result = "No message available";
	}
	(strlen($result) > 25) ? $msg = substr($result,0,25).'...' : $msg = $result;
	($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
	($row['status']=="Offline") ? $offline = " offline" : $offline = "";
			$output .= '<a href="chat.php?user_id='.$row['unique_id'].'">
					<div class="content">
						<img src="php/images/'.$row['img'].'" alt="">
						<div class="details">
							<span>'.$row['fname']." ".$row['lname'].'</span>
							<p>'. $you . $msg .'</p>
						</div>
					</div>
					<div class="status-dot'.$offline.'"><i class="fas fa-circle"></i></div>
				</a>';
		}
 ?>