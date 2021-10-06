# DONE
## core SYMFONY functionalities
entity, controller, service, subscriber, validator, voter, twig, twig extension, translation, form (partially done), registration, email verification, login (+ remember me), password reset

# TODO
## styles: SCSS
## constraints for entities
### only one property has been covered via assert
* @Assert\NotBlank
* @MyAssert\Enabled
## form elements do not have finished configs
### it should be like this for each formElementType
```
$builder->add('stringText',TextType::class, [
    'required' => true,
    'disabled' => false,
    'data' => 'default value upon shown',
    'empty_data' => 'default value upon submitted',
    'label' => 'translated.name',
    'label_translation_parameters' => [
        '%number%' => 1
    ],
    'label_attr' => ['class' => 'bla'],
    'help' => 'translated.help',
    'help_translation_parameters' => [
        '%number%' => 1
    ],
    'help_attr' => ['class' => 'bla'],
    'help_html' => false,
    'invalid_message' => 'translated.wrong',
    'attr' => [
        'class' => 'bla',
        'title' => 'translated.title',
    ],
    'attr_translation_parameters' => [
        '%number%' => 1
    ],
    'row_attr' => ['class' => 'bla'],
    'constraints' => [
        new NotBlank(),
        new Length(['min' => 3]),
    ],
])
```
## form transformers
## unit tests
## functional tests

