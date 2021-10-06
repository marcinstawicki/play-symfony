<?php

namespace App\Form;

use App\Entity\MainEntity;
use App\Entity\SubEntity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\CurrencyType;
use Symfony\Component\Form\Extension\Core\Type\DateIntervalType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\LanguageType;
use Symfony\Component\Form\Extension\Core\Type\LocaleType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\TimezoneType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\UuidType;
use Symfony\Component\Form\Extension\Core\Type\WeekType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MainEntityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('doctrineStringPhpStringFormText',TextType::class)
            ->add('doctrineTextPhpStringFormTextarea',TextareaType::class)
            ->add('doctrineStringPhpStringFormEmail',EmailType::class)
            ->add('doctrineStringPhpStringFormUrl',UrlType::class, [
                'default_protocol' => 'http'
            ])
            ->add('doctrineStringPhpStringFormTel',TelType::class)
            ->add('doctrineStringPhpStringFormColor',ColorType::class)
            ->add('doctrineStringPhpStringFormPassword',PasswordType::class, [
                'always_empty' => false
            ])
            ->add('doctrineStringPhpStringFormSearch',SearchType::class)
            ->add('doctrineSmallintPhpIntegerFormInteger',IntegerType::class)
            ->add('doctrineIntegerPhpIntegerFormInteger',IntegerType::class)
            ->add('doctrineBigintPhpStringFormInteger',IntegerType::class)
            ->add('doctrineDecimalPhpStringFormNumber',NumberType::class, [
                'grouping' => true,
                'rounding_mode' => \NumberFormatter::ROUND_HALFUP,
                'scale' => 2,
                'input' => 'number',
            ])
            ->add('doctrineDecimalPhpStringMoney',MoneyType::class, [
                'currency' => 'USD',
                'divisor' => 1,
                'grouping' => true,
                'rounding_mode' => \NumberFormatter::ROUND_HALFUP,
                'scale' => 2
            ])
            ->add('doctrineDecimalPhpStringFormPercent',PercentType::class, [
                'rounding_mode' => \NumberFormatter::ROUND_HALFUP,
                'scale' => 2,
                'type' => 'fractional'
            ])
            ->add('doctrineStringPhpStringFormCountry',CountryType::class, [
                'alpha3' => false,
                'choice_translation_locale' => null
            ])
            ->add('doctrineStringPhpStringFormLanguage',LanguageType::class, [
                'alpha3' => false,
                'choice_translation_locale' => null,
                'choice_self_translation' => false
            ])
            ->add('doctrineStringPhpStringFormLocale',LocaleType::class, [
                'choice_translation_locale' => null,
            ])
            ->add('doctrineStringPhpStringFormTimezone',TimezoneType::class, [
                'input' => 'string',
                'intl' => false,
            ])
            ->add('doctrineStringPhpStringFormCurrency',CurrencyType::class, [
                'choice_translation_locale' => null,
            ])
            ->add('doctrineSmallintPhpIntegerFormChoice',ChoiceType::class, [
                'expanded' => false,
                'multiple' => false,
                'choices' => [
                   'one' => 1,
                   'two' => 2,
                   'three' => 3
                ]
            ])
            ->add('doctrineSimpleArrayPhpArrayFormChoice',ChoiceType::class, [
                'expanded' => false,
                'multiple' => true,
                'choices' => [
                    'one' => 1,
                    'two' => 2,
                    'three' => 3
                ]
            ])
            ->add('doctrineArrayPhpArrayFormChoice',ChoiceType::class, [
                'expanded' => false,
                'multiple' => true,
                'choices' => [
                    'one' => 1,
                    'two' => 2,
                    'three' => 3
                ]
            ])
            ->add('doctrineJsonPhpArrayFormChoice',ChoiceType::class, [
                'expanded' => false,
                'multiple' => true,
                'choices' => [
                    'one' => 1,
                    'two' => 2,
                    'three' => 3
                ]
            ])
            ->add('doctrineObjectPhpObjectFormChoice',ChoiceType::class, [
                'expanded' => false,
                'multiple' => false,
                'choices' => [
                    new SubEntity(),
                    new SubEntity(),
                    new SubEntity()
                ],
                'choice_label' => 'doctrineStringPhpStringFormText1',
                'choice_value' => 'id',
            ])
            ->add('doctrineDatePhpDateTimeFormDate',DateType::class, [
                'input' => 'datetime',
                'widget' => 'choice',
                'format' => 'dd-MM-yyyy'
            ])
            ->add('doctrineTimePhpDateTimeFormTime',TimeType::class, [
                'input'  => 'datetime',
                'input_format' => 'H:i:s',
                'widget' => 'choice'
            ])
            ->add('doctrineDateTimePhpDateTimeFormDateTime',DateTimeType::class, [
                'input'  => 'datetime',
                'input_format' => 'd-m-Y H:i:s',
                'date_widget' => 'choice',
            ])
            ->add('doctrineDatePhpDateTimeFormBirthday',DateType::class, [
                'input' => 'datetime',
                'widget' => 'choice',
                'format' => 'dd-MM-yyyy'
            ])
            ->add('doctrineDateIntervalPhpDateIntervalFormDateInterval',DateIntervalType::class, [
                'input' => 'dateinterval',
                'widget' => 'integer',
                'with_years'  => false,
                'with_months' => false,
                'with_days'   => true,
                'with_hours'  => true,
            ])
            ->add('doctrineDateTimeImmutablePhpDateTimeFormDateTime',DateTimeType::class, [
                'input'  => 'datetime_immutable',
                'input_format' => 'd-m-Y H:i:s',
                'date_widget' => 'choice',
            ])
            ->add('doctrineStringPhpStringFormWeek',WeekType::class, [
                'input'  => 'string',
                'widget' => 'choice'
            ])
            ->add('doctrineSmallintPhpIntegerFormRange',RangeType::class, [
                'attr' => [
                    'min' => 1,
                    'max' => 10
                ],
            ])
            ->add('doctrineBooleanPhpBooleanFormCheckbox',CheckboxType::class,[
                'value' => 1,
                'false_values' => [null,false,'','f','0',0]
            ])
            ->add('doctrineSmallintPhpIntegerFormRadio',ChoiceType::class, [
                'expanded' => true,
                'multiple' => false,
                'choices' => [
                    'one' => 1,
                    'two' => 2,
                    'three' => 3
                ]
            ])
            ->add('doctrineStringPhpStringFormFile',FileType::class, [
                'multiple' => false
            ])
            ->add('doctrineFloatPhpDoubleFormNumber',NumberType::class, [
                'grouping' => true,
                'rounding_mode' => \NumberFormatter::ROUND_HALFUP,
                'scale' => 2,
                'input' => 'number',
            ])
            ->add('doctrineGuidPhpStringFormUuid',UuidType::class)
            ->add('doctrineBlobPhpResourceFormChoice',ChoiceType::class, [
                'expanded' => false,
                'multiple' => false,
                'choices' => [
                    'one' => 'filePath1',
                    'two' => 'filePath2',
                    'three' => 'filePath3'
                ]
            ])
            ->add('doctrineJsonPhpArrayFormCollection',CollectionType::class,[
                'entry_type' => TextType::class
            ])
            ->add('doctrineOneToOneRelationPhpObjectFormEntity',EntityType::class,[
                'class' => SubEntity::class,
                'choice_label' => 'doctrineStringPhpStringFormText1',
                'choice_value' => 'id',

            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MainEntity::class,
        ]);
    }
}
