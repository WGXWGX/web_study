<?php
	class rili{
		public $year;
		public $month;
		public $firstday;
		public $cmonth;
		public function __construct(){
			$this->year=$_GET['year']?$_GET['year']:date('Y');
			$this->month=$_GET['month']?$_GET['month']:date('m');
			$this->firstday=date('w',mktime(0,0,0,$this->month,1,$this->year));
			$this->cmonth=date('t',mktime(0,0,0,$this->month,$this->day,$this->year));
		}
		public function out(){
			echo "<table align='center'>";
			$this->yearList();
			$this->weekList();
			$this->dayList();
			echo "</table>";
		}
		public function prevyear($year,$month){
			if($year==1970){
				$year=$year;
			}else{
				$year=$year-1;
			}
			return "year=$year&month=$month";
		}
		public function prevmonth($year,$month){
			if($month==1){
				$month=12;
				$year=$year-1;
			}else{
				$month=$month-1;
			}
			return "year=$year&month=$month";
		}	
		public function nextyear($year,$month){
			if($year==2038){
				$year=$year;
			}else{
				$year=$year+1;
			}
			return "year=$year&month=$month";
		}
		public function nextmonth($year,$month){
			if($month==12){
				$month=1;
				$year=$year+1;
			}else{
				$month=$month+1;
			}
			return "year=$year&month=$month";
		}	
		public function weekList(){
			$arr=array ('日','一','二','三','四','五','六');
			echo "<tr>";
			for($i=0;$i<count($arr);$i++){
				echo "<th class='font'>";
				echo "$arr[$i]";
				echo "</th>";
			}
			echo "</tr>";
		}
		public function dayList(){
			echo "<tr>";
			for($j=0;$j<$this->firstday;$j++){////
				echo "<td>"."&nbsp;"."</td>";
			}
			for($k=1;$k<=$this->cmonth;$k++){
				$j++;////////
				if($k==date('d')){
					echo "<td class='font'>".$k."</td>";
				}else{
					echo "<td>".$k."</td>";
				}
				if($j%7==0){
					echo "</tr><tr>";
				}
			}
			echo "</tr>";
		}
		public function yearList(){
			echo "<tr>";
			echo "<td><a href=?".$this->prevyear($this->year,$this->month).">".'<<'."</a></td>";
			echo "<td><a href=?".$this->prevmonth($this->year,$this->month).">".'<'."</a></td>";
			echo "<td colspan='3'>".$this->year."年".$this->month."月"."</td>";
			echo "<td><a href=?".$this->nextmonth($this->year,$this->month).">".'>'."</a></td>";
			echo "<td><a href=?".$this->nextyear($this->year,$this->month).">".'>>'."</a></td>";
			echo "</tr>";
		}
	
	}
?>





