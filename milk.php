<?php
/**
 * Конкретные Декораторы вызывают обёрнутый объект и изменяют его результат
 * некоторым образом.
 */
class Milk extends Decorator
{
    /**
     * Декораторы могут вызывать родительскую реализацию операции, вместо того,
     * чтобы вызвать обёрнутый объект напрямую. Такой подход упрощает расширение
     * классов декораторов.
     */
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