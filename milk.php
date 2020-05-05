<?php
/**
 * Decorator Milk вызывает родительскую реализацию операции, вместо того,
 * чтобы вызвать обёрнутый объект напрямую. Такой подход упрощает 
 * расширение классов декораторов.
 */
class Milk extends Decorator
{
    
    public function getName(): string
    {
        return parent::getName() . " <b>Milk</b>";
    }
	public function get_Type(): string
    {
		return parent::get_Type() . ' "food"';
	}
	public function getPrice(): float 
    {
		return 0.5;
	}
}
?>