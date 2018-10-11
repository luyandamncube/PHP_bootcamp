<?php
class ship{
	private $_num;
	private $_name;
	private $_type;
	private $_types = array ("scout" => 2, "fighter" => 4, "admiral" => 7);
	private $active;
	private $phase;
	private $size;   //KVP  x => y
	private $speed;
	private $speeds = array ("scout" => 20, "fighter" => 15, "admiral" => 10);
	private $handling;
	private $x;
	private $y;
	private $hp;
	private $pp;
	public function __construct($_num, $_name, $_type, $active, $phase, $size, $speed, $handling, $x, $y, $hp, $pp){
		$this->_num = $_num;
		$this->_name = $_name;
		$this->_type = $_type;
		$this->active = $active;
		$this->phase = $phase;
		$this->size = $size;
		$this->speed = $this->speeds[$this->speed];
		$this->handling = $this->_types[$this->_type];
		$this->x = $x;
		$this->y = $y;
		$this->hp = $hp;
		$this->pp = $pp;
	}
	public function $get_num(){
		return ($this->_num);
	};
	public function $get_ship_name()
		return ($this->_name);
	};
	//enter a
	public function $get_type($_type){
		return ($ship_type[$_type]);
	};
	public function $get_active(){
		return ($this->active);
	};
	//enter as 0, 1 and 2
	public function $get_phase($phase){
		$current_phase = ("0 => order", "1 => movement", "2 => shoot");
		return ($current_phase[$phase]);
	};
	public function $get_size(){
		return ($this->size;
	};
	public function $get_speed(){
		return ($this->speed);
	};
	public function $get_handling(){
		return ($this->handling);
	};
	public function $get_x(){
		return ($this->x);
	};
	public function $get_y(){
		return ($this->y);
	};
	public function $get_hp(){
		return ($this->hp);
	};
	public function $get_pp(){
		return ($this->pp);
	};
	
	private function is_obstacle($obstacle){
		foreach ($obstacle as $v) {
			if ($this->_x == $v['x'] && $this->_y == $v['y'])
				return true;
		}
		return false;
	}
}
?>
