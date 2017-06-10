<?php
class deck
	{
		var $cards;
		var $number_in_deck;

		function __construct()
			{
				$this->cards=array();
			}
		function card_add($card)
			{
				array_push($this->cards,$card);
			}
		function deal($number_to_deal)
			{
				$this->number_in_deck=count($this->cards);
				
			}
		function card_remove($position)
			{
				unset($this->cards[$position]);
			}			
	}
class card
	{
			var $suit;
			var $pip;

			function __construct($suit,$pip)
				{
					$this->suit=$suit;
					$this->pip=$pip;	
				}
	}	
?>