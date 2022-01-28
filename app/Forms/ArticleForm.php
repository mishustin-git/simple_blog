<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class ArticleForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('title', 'text',['label'=>"Заголовок"])
            ->add('description', 'textarea',['label'=>'Краткое описание'])
            ->add('article_text', 'textarea',['label'=>'Текст статьи'])
            ->add('submit', 'submit', ['label' => 'Добавить']);
    }
}
