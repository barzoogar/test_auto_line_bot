<?php

            $access_token = 'rW/Eg7KHcl9bGVFIJLou0BW3lOQHsp7PkS9ERnf8kfnyOpkFh2VqxykCX9Ep12TUW2RbHy9y2zNnijvZIW4euF+V28F1rPLKBcfC+j4pqYId3LhCJON9BkPXJAGy3KkVLck5kzocqSd40cx1mAgP/QdB04t89/1O/w1cDnyilFU=';


			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => "test push message"
			];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/push';
			$data = [
				'to' => "Uf3b46b21a24e64acba651b74b95bbeb4",
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
?>
