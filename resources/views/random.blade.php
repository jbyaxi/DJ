@extends('welcome')

@section('content')
	<h3> That's it </h3>
	<form method="post" enctype="multipart/form-data" >
		<input type="File" name="audioFile">
		<input type="submit" value="Upload" name="Upload_Audio">
		 {{ csrf_field() }}
	</form>
	<?php
	//Credantials pour API
	//Username = DJ11last
	//password = fuckYou11$$
	//email = jbyaxi@gmail.com
	//Application name	DJ
	$API_key='aa091e0c5bd9475abe9577bab885e9cf';
	//Shared secret	776a3641730982ade67600f41b948e2b
	//Registered to	DJ11last




		$user = 'root';
		$password = '';
		$audio_path;
		$name;
		$genre;
		$artist_name='cher';
		$music='believe';

		//$jun = new junie();
		echo '<b> OUI </b>';
		$dir = 'C:\laragon\www\DJ\resources\Uploads';
		if(isset($_POST['Upload_Audio']) && $_POST['Upload_Audio'] == "Upload" ){
			echo '<b> IN </b>';
			global $audio_path,$name;
			$audio_path = $dir.basename($_FILES['audioFile']['name']);
			$name=basename($_FILES['audioFile']['name'],'mp3');
			//use a API to get the genre for each song
			if(move_uploaded_file($_FILES['audioFile']['tmp_name'],$audio_path)){
				echo "WOOOOOOUUUUUUUU";
				//upload();
				ApiTest($API_key,$artist_name,$music);
			}
		}
		    

		     function upload(){
				 	global $user,$password,$audio_path;
				 $pdo  =  new PDO('mysql:dbname=dj;host=127.0.0.1','root','');
				 $sql  = 'INSERT INTO music(path,name,genre) VALUES(:audio_path,:name,:genre)';
				 $stmt = $pdo->prepare($sql);
				 $stmt->execute(['audio_path'=>$audio_path,'name'=>$name,'genre'=>$genre]);
			 }
			 
			 function ApiTest($key,$artist,$music){
				$genre_url='http://ws.audioscrobbler.com/2.0/?method=track.getInfo&api_key='.$key.'&artist='.$artist.'&track='.$music.'&format=json'; 
				ob_start(); // ensures anything dumped out will be caught

			// do stuff here
				$url = 'http://example.com/thankyou.php'; // this can be set based on whatever

			// clear out the output buffer
				while (ob_get_status()) 
				{
    				ob_end_clean();
				}

			// no redirect
				header( "Location: $genre_url" );
			 }

	?>
	<audio src='' controls> </audio>
		
@endsection


