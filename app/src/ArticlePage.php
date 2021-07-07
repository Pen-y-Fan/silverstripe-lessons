<?php

namespace SilverStripe\Lessons;

use SilverStripe\Forms\DateField;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\TextField;
use SilverStripe\Assets\Image;
use SilverStripe\Assets\File;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\CheckboxSetField;
use Page;

/**
 * Class ArticlePage
 * @package SilverStripe\Lessons
 * @method Categories()
 */
class ArticlePage extends Page
{
    private static $can_be_root = false;

    private static $db = [
        'Date' => 'Date',
        'Teaser' => 'Text',
        'Author' => 'Varchar',
    ];

    private static $has_one = [
        'Photo' => Image::class,
        'Brochure' => File::class,
        'Region' => Region::class,
    ];

    private static $many_many = [
        'Categories' => ArticleCategory::class,
    ];

    private static $has_many = [
        'Comments' => ArticleComment::class,
    ];


    private static $owns = [
        'Photo',
        'Brochure',
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab(
            'Root.Main',
            [
                DateField::create('Date', 'Date of article'),
                TextareaField::create('Teaser')
                    ->setDescription('This is the summary that appears on the article list page.'),
                TextField::create('Author', 'Author of article'),
                DropdownField::create(
                    'RegionID',
                    'Region',
                    Region::get()->map('ID', 'Title')
                )->setEmptyString('-- None --'),
            ],
            'Content');

        $fields->addFieldsToTab(
            'Root.Attachments',
            [
                $photo = UploadField::create('Photo')
                    ->setFolderName('travel-photos'),
                $brochure = UploadField::create('Brochure', 'Travel brochure, optional (PDF only)')
                    ->setFolderName('travel-brochures'),
            ]
        );

        $photo->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);
        $brochure->getValidator()->setAllowedExtensions(['pdf']);

        $fields->addFieldToTab(
            'Root.Categories',
            CheckboxSetField::create(
                'Categories',
                'Selected categories',
                $this->Parent()->Categories()->map('ID', 'Title')
            )
        );

        return $fields;
    }

    public function CategoriesList()
    {
        return $this->Categories()->exists()
            ? implode(', ', $this->Categories()->column('Title'))
            : null;
    }

}
