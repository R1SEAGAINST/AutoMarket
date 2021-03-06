<?php
class UserDAO implements IUserDAO {

	const GET_AND_CHECK_USER_SQL = "SELECT * FROM users WHERE user_email= ? AND user_password = sha1(?)";
	

	const REGISTER_USER_SQL = "INSERT INTO users (user_name, user_email, user_password, user_phone, user_country, user_address, user_image)
													VALUES (?, ?, ?, ?, ?, ?, ? )";
	
	const GET_ALL_DEALERS_SQL = "SELECT  u.user_id, u.user_email, u.user_name, u.user_phone, u.user_address, u.user_country,u.user_image,
						 COUNT(p.id_post) as 'countUsersPosts'
						FROM users u JOIN posts p
						ON u.user_id = p.id_user
						GROUP BY u.user_id";

	const GET_COUNT_ALL_USERS_SQL = "SELECT  COUNT(DISTINCT(id_user)) FROM posts";
	
	const INFO_DEALER_SQL = "SELECT  u.user_id, u.user_email, u.user_name, u.user_phone, u.user_address, u.user_country, u.user_image,
						 COUNT(p.id_post) as 'countUsersPosts'
						FROM users u JOIN posts p
						ON u.user_id = p.id_user
						WHERE u.user_id = ?";
	
	

	
	const SEARCH_DEALER_BY_NAME_SQL = " SELECT  u.user_id, u.user_email, u.user_name, u.user_phone, u.user_address, u.user_country, u.user_image,
						 COUNT(p.id_post) as 'countUsersPosts'
						FROM users u JOIN posts p
						ON u.user_id = p.id_user
						WHERE u.user_name LIKE CONCAT( ?,'%')";
	
	
	
	const GET_DEALER_BY_ID_SQL = " SELECT  * FROM users 
						WHERE user_id = ?";
											
	
	const UPDATE_USER_SQL = "UPDATE users SET user_name=?, user_email=?, user_password=?, user_phone=?,
									user_country=?, user_address=?, user_image=?
						 			WHERE user_id=?";
	
	const GET_FIVE_DEALERS_SQL = "SELECT u.user_id, u.user_name, u.user_email, count(p.id_post) as 'countUsersPosts'
								 FROM users u JOIN posts p
								 ON u.user_id=p.id_user
								 GROUP BY u.user_name
								 ORDER BY count(p.id_post) DESC
								 LIMIT 5";
									
	
	public function loginUser(User $user) {
		$db = DBConnection::getDb();
			
		$pstmt = $db->prepare(self::GET_AND_CHECK_USER_SQL);
		$pstmt->execute(array($user->email, $user->password));
			
		$res = $pstmt->fetchAll(PDO::FETCH_ASSOC);
			
		if (count($res) === 0)
			throw new Exception("Try again!");
				
			$user = $res[0];
				
			$newUser = new User($user['user_email'], 'hahahaha', $user['user_address'], $user['user_image'],  $user['user_id']);
				 
			$newUser->setUsername($user['user_name']);
			$newUser->setPhone($user['user_phone']);
			$newUser->setUserCountry($user['user_country']);
				
			return $newUser;
				
				
	}

	function registerUser(User $user) {
			
		$db = DBConnection::getDb();
		$sql = $db->query("SELECT * FROM users WHERE user_email = ".$db->quote($user->email)."");
		if ($sql->rowCount() > 0){
			throw new Exception("Email already exists!");
		}else{
			$sql = $db->prepare(self::REGISTER_USER_SQL);
			$sql->execute(array($user->username, $user->email, sha1($user->password), $user->phone, $user->country, $user->address, $user->image));

			$userId = $sql->rowCount() > 0 ? $db->lastInsertId() : 0;

			if($userId===0){
				throw new Exeption("Something wrong with your registration!");
			}else{

				$user->setUserId($userId);
				return $user;
					
			}
		}
	}
	
	
	
	public function listAllDealers() {
		
		$db = DBConnection::getDb();
		
		$sql = $db->prepare( self::GET_COUNT_ALL_USERS_SQL );
		
		
		if ($sql->execute()) {
			$count = $sql->fetchColumn();
					
		}
		
		$sql = $db->prepare( self::GET_ALL_DEALERS_SQL );
		
		
		if ($sql->execute()) {
			
			$dealers = $sql->fetchAll ( PDO::FETCH_ASSOC );
		
			$result = array ();
		
			foreach ( $dealers as $dealer ) {
				$userForList = new User ($dealer['user_email'], 'hahahahah', $dealer['user_address'] ,$dealer['user_image'] ,$dealer['user_id']);
				
				$userForList->setUsername($dealer['user_name']);
				$userForList->setPhone($dealer['user_phone']);
				$userForList->setUserCountry($dealer['user_country']);
				$userForList->setCountAllUsers($count);
				$userForList->setCountUsersPosts($dealer['countUsersPosts']);
				
				
				
				$result[] = $userForList;
				
			}
			return $result;
							
		}		
	}
	
	
	
	public function infoDealer($id){
		
		$db = DBConnection::getDb();
			
		$pstmt = $db->prepare(self::INFO_DEALER_SQL);
		$pstmt->execute(array($id));
			
		$posts = $pstmt->fetchAll(PDO::FETCH_ASSOC);
		
				
		foreach ($posts as $post){
						
			$thisUser = new User($post['user_email'], 'hahahaha', $post['user_address'], $post['user_image'], $post['user_id']);
		
			$thisUser->setUsername($post['user_name']);
			$thisUser->setPhone($post['user_phone']);
			$thisUser->setUserCountry($post['user_country']);
// 			/$thisUser->setImage($post['user_image']);
			$thisUser->setCountUsersPosts($post['countUsersPosts']);
			
		
			$result = $thisUser;		
		}
		
		return $result;
		
	}
	

	
	
	
	public function searchDealerByName($dealerName){
	
		$db = DBConnection::getDb();
			
		$pstmt = $db->prepare(self::SEARCH_DEALER_BY_NAME_SQL);
		$pstmt->execute(array($dealerName));
			
		
		$posts = $pstmt->fetchAll(PDO::FETCH_ASSOC);
		
		
		foreach ($posts as $post){
		
			$thisUser = new User($post['user_email'], 'hahahaha', $post['user_address'],$post['user_image'], $post['user_id']);
		
			$thisUser->setUsername($post['user_name']);
			$thisUser->setPhone($post['user_phone']);
			$thisUser->setUserCountry($post['user_country']);
			$thisUser->setImage($post['user_image']);
			$thisUser->setCountUsersPosts($post['countUsersPosts']);
				
		
			$result = $thisUser;
		}
		
		return $result;
	}
	
	public function randomName($extension){
		while(true){
			$random = sha1(rand(0,PHP_INT_MAX));
			$name = $random. "." .$extension;
			if(!file_exists($name)){
				return $name;
			}
		}
	}
	
	public function userForUpdate($id){
		
		$db = DBConnection::getDb();
			
		$pstmt = $db->prepare(self::GET_DEALER_BY_ID_SQL);
		$pstmt->execute(array($id));
		$users = $pstmt->fetchAll(PDO::FETCH_ASSOC);
		
		
		foreach ($users as $user){
		$updateUser = new User($user['user_email'], '........', $user['user_address'], $user['user_image'],$user['user_id']);
		
		$updateUser->setUsername($user['user_name']);
		$updateUser->setPhone($user['user_phone']);
		$updateUser->setUserCountry($user['user_country']);
		$updateUser->setImage($user['user_image']);
	
		
		
		$result = $updateUser;
		}
		return $result;
		
	}
	
	public function updateUser($user){
	
		$db = DBConnection::getDb();
// 		$sql = $db->query("SELECT * FROM users WHERE user_email = ".$db->quote($user->email)."");
// 		if ($sql->rowCount() > 0){
// 			throw new Exception("Email already exists!");
		//}else{
			$sql = $db->prepare(self::UPDATE_USER_SQL);
			$sql->execute(array( $user->username, $user->email, sha1($user->password), $user->phone,
					$user->country, $user->address, $user->image, $user->id));
			
			
			
			
			$sql = $db->prepare(self::REGISTER_USER_SQL);
			try{
			$sql->execute(array($user->username, $user->email, sha1($user->password), $user->phone, $user->country,
					$user->address, $user->image));
			}catch(exception $e){
				
			}
			
			

			
			//$user->setUserId($userId);
			return $user;
				
		}
	
		public function getFiveDealers(){
			$db = DBConnection::getDb();
			
			$sql = $db->prepare(self::GET_FIVE_DEALERS_SQL);
			$sql->execute();
			$dealers = $sql->fetchAll ( PDO::FETCH_ASSOC );
			
			$result = array ();
			
			foreach ( $dealers as $dealer ) {
				$dealerList = new User ($dealer['user_email'], 'hahahahah', "null" ,"null",$dealer['user_id']);
			
				$dealerList->setUsername($dealer['user_name']);
				
				$dealerList->setCountUsersPosts($dealer['countUsersPosts']);
			
			
			
				$result[] = $dealerList;
			
			}
			return $result;
			
					
			
			
		}
	
	
	
	
}

?>
