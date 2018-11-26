<?php
/**
 * Gestion de poneys
 */
class Poneys
{
    private $_count = 8;
    private $_MAX_PLACES = 15;


    /**
     * Retourne le nombre de poneys
     *
     * @return void
     */
    public function getCount(): int
    {
        return $this->_count;
    }

    /**
     * Ajoute un poney du champ
     *
     * @param int $number Nombre de poneys à ajouter
     *
     * @return void
     */
    public function addPoneyFromField(int $number): void
    {
        $this->_count += $number;
    }

    /**
     * Retire un poney du champ
     *
     * @param int $number Nombre de poneys à retirer
     *
     * @return void
     */
    public function removePoneyFromField(int $number): void
    {
        if (($this->_count - $number) < 0) {
            throw new Exception('Quantité négative');
        }
        else {
            $this->_count -= $number;
        }

    }

    /**
     * Retourne les noms des poneys
     *
     * @return array
     */
    public function getNames(): array
    {

    }

    /**
     * Renvoie TRUE si des places disponibles (FALSE sinon)
     *
     * @return boolean
     */
    public function getRemainingPlaces(): boolean
    {
        if ($this->_count < $this->_MAX_PLACES) {
            return TRUE;
        }
        else  {
            return FALSE;
        }

    }
}
?>
