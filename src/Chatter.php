<?php
/**
 * Created by PhpStorm.
 * User: netaneledri
 * Date: 08/11/2017
 * Time: 0:11
 */

namespace WEBNinja\Chatter;


class Chatter
{
	protected $config;

	protected $userId;

	public function __construct()
	{
		$this->config = config('chatter');
	}

	public function setUserId($id = null)
	{
		if(!is_null($id)){
			return $this->userId = $id;
		}

		return false;
	}

	public function user($id = null)
	{
		if ($this->setAuthUserId($id)) {
			return $this;
		}

		return false;
	}

	public function sendMessageByConversation($conversation_id, $content)
	{

	}

	public function sendMessageByUserId($user_two_id, $content)
	{

	}

	public function getConversationMessages($conversation_id, $offset = 0, $take = 20)
	{

	}

	public function getConversationMessagesByUserId($user_one_id, $offset = 0, $take = 20)
	{

	}

	public function markMessageAsSeen($message_id)
	{

	}

	public function markMessageAsUnSeen($message_id)
	{

	}

	public function deleteConversation($conversation_id)
	{

	}

	public function deleteMessage($message_id)
	{

	}

	public function resetConversation($conversation_id)
	{

	}

	public function createGroup($name, $user_ids = [])
	{

	}

	public function joinGroup($user_id)
	{

	}

	public function leaveGroup($user_id)
	{

	}

	public function deleteGroup($id)
	{

	}

	public function getGroupMessages($group_id, $offset = 0, $take = 20)
	{

	}

	public function getGroup($id)
	{

	}

	public function getGroupUsers($group_id)
	{

	}

	public function resetGroup($group_id)
	{

	}

	public function renameGroup($group_id, $name)
	{

	}

	public function getAllGroups()
	{

	}

	public function getConversations($user_one_id)
	{

	}

	public function getConversationsByUserId($user_id)
	{

	}

	public function getAllConversations()
	{

	}

	public function isUserInsideGroup($user_id, $group_id)
	{

	}

	public function countConversationMessages($conversation_id)
	{

	}

	public function countGroupMessages($group_id)
	{

	}

	protected function createConversation($user_two_id)
	{

	}

	protected function isAlreadyInConversationWith($user_two_id)
	{

	}
}