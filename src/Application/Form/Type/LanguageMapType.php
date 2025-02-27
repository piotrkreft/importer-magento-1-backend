<?php
/**
 * Copyright © Bold Brand Commerce Sp. z o.o. All rights reserved.
 * See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Ergonode\ImporterMagento1\Application\Form\Type;

use Ergonode\Core\Application\Form\Type\LanguageActiveType;
use Ergonode\ImporterMagento1\Application\Model\Type\LanguageMapModel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LanguageMapType extends AbstractType
{
    /**
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add(
                'store',
                TextType::class,
                [
                    'label' => 'Store view',
                ],
            )
            ->add(
                'language',
                LanguageActiveType::class,
                [
                    'label' => 'Language',
                ],
            );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'translation_domain' => 'import',
            'data_class' => LanguageMapModel::class,
        ]);
    }
}
