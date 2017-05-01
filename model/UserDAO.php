<?php
class UserDAO implements IUserDAO {

	const GET_AND_CHECK_USER_SQL = "SELECT * FROM users WHERE user_email= ? AND user_password = sha1(?)";
	//const CHECK_USER_SQL = "SELECT * FROM users WHERE user_name = ".$db->quote($user->username)."";


	const REGISTER_USER_SQL = "INSERT INTO users (user_name, user_email, user_password, user_phone, user_country, user_address)
													VALUES (?, ?, ?, ?, ?, ?)";
	
	const GET_ALL_DEALERS_SQL = "SELECT  u.user_id, u.user_email, u.user_name, u.user_phone, u.user_address, u.user_country,
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
	
	
	
// 	const GET_ALL_POSTS_OF_USER_SQL = "SELECT p.id_post , p.id_model, m.model_name, b.brand_name, p.reg_year, p.body_type,
// 							 p.country_of_registration, p.kilometers, p.price, p.fuel_type, p.hp, p.id_user 
							
// 							 FROM posts p Join models m
// 							 on p.id_model = m.id_model JOIN brands b
// 							 ON m.id_brand = b.id_brand JOIN users u
// 							 ON p.id_user = u.user_id
// 							 WHERE u.user_id = ?
// 							 ORDER BY p.id_post DESC";
	
	const SEARCH_DEALER_BY_NAME_SQL = " SELECT  u.user_id, u.user_email, u.user_name, u.user_phone, u.user_address, u.user_country, u.user_image,
						 COUNT(p.id_post) as 'countUsersPosts'
						FROM users u JOIN posts p
						ON u.user_id = p.id_user
						WHERE u.user_name LIKE ?";
											
	
	public function loginUser(User $user) {
		$db = DBConnection::getDb();
			
		$pstmt = $db->prepare(self::GET_AND_CHECK_USER_SQL);
		$pstmt->execute(array($user->email, $user->password));
			
		$res = $pstmt->fetchAll(PDO::FETCH_ASSOC);
			
		if (count($res) === 0)
			throw new Exception("Try again!");
				
			$user = $res[0];
				
			$newUser = new User($user['user_email'], 'hahahaha', $user['user_address'],  $user['user_id']);
				
			$newUser->setUsername($user['user_name']);
			$newUser->setUserPhone($user['user_phone']);
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
			$sql->execute(array($user->username, $user->email, sha1($user->password), $user->phone, $user->country, $user->address));

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
				$userForList = new User ($dealer['user_email'], 'hahahahah', $dealer['user_address'] , $dealer['user_id']);
				
				$userForList->setUsername($dealer['user_name']);
				$userForList->setUserPhone($dealer['user_phone']);
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
						
			$thisUser = new User($post['user_email'], 'hahahaha', $post['user_address'], $post['user_id']);
		
			$thisUser->setUsername($post['user_name']);
			$thisUser->setUserPhone($post['user_phone']);
			$thisUser->setUserCountry($post['user_country']);
			$thisUser->setImage($post['user_image']);
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
		
			$thisUser = new User($post['user_email'], 'hahahaha', $post['user_address'], $post['user_id']);
		
			$thisUser->setUsername($post['user_name']);
			$thisUser->setUserPhone($post['user_phone']);
			$thisUser->setUserCountry($post['user_country']);
			$thisUser->setImage($post['user_image']);
			$thisUser->setCountUsersPosts($post['countUsersPosts']);
				
		
			$result = $thisUser;
		}
		
		return $result;
	}
}

?>
