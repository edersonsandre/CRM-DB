<?php

class Application_Model_Oportunidade extends Application_Model_Abstract{
	protected static $_db = 'local';
	protected static $_collection = 'tbl_oportunidade';

	public function _get($id){
		if($id == null)
			return false;

		$data = $this->procurar($id);
		$data->_cleanData["_id"] = (String) $data->_id;

		return $data->_cleanData;

    }

	public function _all(Array $data) {
		
		if($data['pesquisa']){
			$pesquisa = "/{$data['pesquisa']}/i";
			$regex = new MongoRegex($pesquisa);
			
			$data['pesquisa'] = array('nome' => $regex);
		}
		
		$fields = $this->todos($data);
		$data = Array();

		$i = 0;	
		foreach ($fields as $field) {
			$data[$i] = $field->_cleanData;
			$data[$i]['_id']  = (String) $field->_cleanData['_id'];

		    $i++;
		}

		return $data;
    }

	public function _save($data){
		$id = $data['_id'];
		unset($data['_id']);

		if(empty($id)){
			$data = $this->inserir($data);
		}else{
			$data = $this->atualizar($id, $data);
		}

		return $data;
    }

	public function _delete($id){
		return $this->deletar($id);
	}
}