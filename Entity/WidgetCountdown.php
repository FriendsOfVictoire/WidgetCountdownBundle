<?php
namespace Victoire\Widget\CountdownBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Victoire\Bundle\WidgetBundle\Entity\Widget;

/**
 * WidgetCountdown
 *
 * @ORM\Table("vic_widget_countdown")
 * @ORM\Entity
 */
class WidgetCountdown extends Widget
{

    /**
     * @var date
     *
     * @ORM\Column(name="date", type="date")
     */
    protected $date;

    /**
     * To String function
     * Used in render choices type (Especially in VictoireWidgetRenderBundle)
     * //TODO Check the generated value and make it more consistent
     *
     * @return String
     */
    public function __toString()
    {
        return 'Countdown #'.$this->id;
    }


    /**
     * Set date
     *
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

}
