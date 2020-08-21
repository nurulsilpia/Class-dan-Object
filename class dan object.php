<? php 

	//ini adalah contoh dari class
	class Kendaraan{
		
		//ini adalah contoh dari properti
		public $RodaDua;
		public $RodaTiga;

		//ini adalah contoh dari method
		function jalan(){
			return "Brum Brum Brum";
		}
	}

	//contoh membuat object dari class "Kendaraan"
	$motor = new Kendaraan();
?>