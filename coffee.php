<?php
class Coffee extends Decorator
{
    /**
     * Декораторы могут вызывать родительскую реализацию операции, вместо того,
     * чтобы вызвать обёрнутый объект напрямую. Такой подход упрощает расширение
     * классов декораторов.
     */
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