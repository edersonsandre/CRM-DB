<?php 

	abstract class Application_Model_Abstract  extends Shanty_Mongo_Document{

		protected function procurar($id){
			if($id == null)
				return false;

			return $this->find($id);
	    }

		protected function todos($data){

			if($data['pesquisa'])
				$query = $this->all($data['pesquisa'])->sort(array('nome' => -1));
			else
				$query = $this->all();

			if($data['order'] && $data['campo']){
				$order = $data['order'] == 'asc' ? 1 : -1;
				$query->sort(array($data['campo'] => $order));	
			}
			

			return $query;
	    }

		protected function inserir($data){
			if(!$data)
				return false;

			return $this->insert($data);
	    }

		protected function atualizar($id, $data){
			if($id == null AND !$data)
				return false;

			$data = array('$set' => $data);
			return $this->update(array("_id" => new MongoID($id)), $data);
	    }

		protected function deletar($id){
			if($id == null)
				return false;

			return $this->remove(array("_id" => new MongoID($id)));
	    }

	}

?>
