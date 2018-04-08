<?php

class WeatherController extends Controller{


	public function index(){

		$this->set(result,false);

	}

	public function getresults() {
		$xml = simplexml_load_file("http://api.worldweatheronline.com/premium/v1/weather.ashx?key=2bd21f7d5ed04685a12170423180804&q=".$_POST['zip']."&format=xml&num_of_days=5");
		$this->set(result,true);
		$this->set(weather,$xml);
	}

}

?>
