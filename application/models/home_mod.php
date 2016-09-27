<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_mod extends CI_Model {

	function getDataList() {
		$this->db->select('*');
		$this->db->from('items');
		return $this->db->get()->result_array();
	}

	function checkGroup($group) {
		$this->db->select('*');
		$this->db->from('bookmarks');
		$this->db->join('items', 'items.id = bookmarks.item_id');
		$this->db->where('group', $group);
		$this->db->order_by('sort', 'ASC');
		return $this->db->get()->result_array();
	}

	function getGroup() {
		$this->db->select('*');
		$this->db->from('bookmarks');
		$this->db->join('items', 'items.id = bookmarks.item_id');
		$this->db->join('group', 'bookmarks.group = group.group_id');
		$this->db->order_by('sort', 'ASC');
		return $this->db->get()->result_array();
	}

	function listGroup() {
		$this->db->select('*');
		$this->db->from('group');
		return $this->db->get()->result_array();
	}

	function listSort() {
		$this->db->select('*');
		$this->db->from('sort');
		return $this->db->get()->result_array();
	}

	function checkPot($pot) {
		$this->db->select('*');
		$this->db->from('items');
		$this->db->where('pot', $pot);
		return $this->db->get()->result_array();
	}

	function dragItem($id, $group, $item) {
		$this->db->where('id', $id);
		$data = array('group' => $group,'item_id' => $item);
		$this->db->update('bookmarks', $data); 
	} 

	function updateGroup($id, $group, $item, $sort_id) {
		$this->db->where('id', $id);
		$data = array('group' => $group,'item_id' => $item, 'sort' => $sort_id);
		$this->db->update('bookmarks', $data); 
	}
}