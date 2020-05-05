<?php
class Coffee extends Decorator
{
    public function getName(): string
    {
        return parent::getName() . "<b> Black Coffee</b>";
    }
	public function get_Type(): string
    {
		return parent::get_Type() . ' "food"';
	}
	public function getPrice(): float 
    {
		return 2;
	}
}
?>