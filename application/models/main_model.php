<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Class main_model
 * @author kddp_abaquitae
 */
class main_model extends CI_Model{
	
	public function insertRecord($arrData){
		$name = $arrData['product_name'];
		$price = $arrData['product_price'];
		$data_date = $arrData['data_date'];
		$data_time = $arrData['data_time'];
		$query = $this->db->query("INSERT INTO table_purchase_record (id_transactionNumber, product_name, product_price, date, time) VALUES (NULL,'$name','$price','$data_date', '$data_time')");
	}

	public function selectAllData(){
		$query = $this->db->query("SELECT * from table_inventory");
		return $query->result();
	}

	public function add_product($arrData){
		$name = $arrData['product_name'];
		$price = $arrData['product_price'];
		$quantity = $arrData['quantity'];
		$query = $this->db->query("INSERT INTO table_inventory (id, product_name, product_price, quantity) VALUES (NULL,'$name','$price','$quantity')");
	}

	public function delete_product($arrData){
		$name = $arrData['product_name'];
		$query = $this->db->query("DELETE FROM `table_inventory` WHERE `table_inventory`.`product_name` = '$name'");
	}

	public function update_product($arrData){
		$name = $arrData['product_name'];
		$price = $arrData['product_price'];
		$quantity = $arrData['quantity'];
		$query = $this->db->query("UPDATE `table_inventory` SET `product_name` = '$name', `product_price` = '$price', `quantity` = '$quantity' WHERE `table_inventory`.`product_name` = '$name'");

	}
	
}
