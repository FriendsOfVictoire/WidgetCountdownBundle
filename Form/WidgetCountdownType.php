<?php

namespace Victoire\Widget\CountdownBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Victoire\Bundle\CoreBundle\Form\WidgetType;

class WidgetCountdownType extends WidgetType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', null, [
                    'label' => 'widget_countdown.form.date.label'
            ]);
        parent::buildForm($builder, $options);

    }


    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults(array(
            'data_class'         => 'Victoire\Widget\CountdownBundle\Entity\WidgetCountdown',
            'widget'             => 'Countdown',
            'translation_domain' => 'victoire'
        ));
    }
}
