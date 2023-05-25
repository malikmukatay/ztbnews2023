<?php

return [
    'menu' => 'Связаться с',
    'edit' => 'Посмотреть контакты',
    'tables' => [
        'phone' => 'Телефон',
        'email' => 'Email',
        'full_name' => 'Полное имя',
        'time' => 'Время',
        'address' => 'Адрес',
        'subject' => 'Предмет',
        'content' => 'Содержание',
    ],
    'contact_information' => 'Контактная информация',
    'replies' => 'Ответы',
    'email' => [
        'header' => 'Email',
        'title' => 'Новый контакт с вашего сайта',
    ],
    'form' => [
        'name' => [
            'required' => 'Имя обязательно',
        ],
        'email' => [
            'required' => 'Электронная почта обязательна',
            'email' => 'Адрес электронной почты недействителен',
        ],
        'content' => [
            'required' => 'Содержание обязательно',
        ],
    ],
    'contact_sent_from' => 'Эта контактная информация отправлена из',
    'sender' => 'Отправитель',
    'sender_email' => 'Email',
    'sender_address' => 'Адрес',
    'sender_phone' => 'Phone',
    'message_content' => 'Содержание сообщения',
    'sent_from' => 'Электронное письмо отправлено из',
    'form_name' => 'Имя',
    'form_email' => 'Email',
    'form_address' => 'Address',
    'form_subject' => 'Предмет',
    'form_phone' => 'Телефон',
    'form_message' => 'Сообщение',
    'required_field' => 'Требуется поле с (<span style="color: red">*</span>) .',
    'send_btn' => 'Отправить сообщение',
    'new_msg_notice' => 'У вас есть <span class="bold">:count</span> Новые сообщения',
    'view_all' => 'Смотреть все',
    'statuses' => [
        'read' => 'Читать',
        'unread' => 'Непрочитанное',
    ],
    'phone' => 'Телефон',
    'address' => 'Адрес',
    'message' => 'Сообщение',
    'settings' => [
        'email' => [
            'title' => 'Связаться с',
            'description' => 'Конфигурация контактной электронной почты',
            'templates' => [
                'notice_title' => 'Отправить уведомление администратору',
                'notice_description' => 'Шаблон электронной почты для отправки уведомления администратору, когда система получает новый контакт',
            ],
        ],
        'title' => 'Контакт',
        'description' => 'Настройки для плагина контактов',
        'blacklist_keywords' => 'Черный список ключевых слов',
        'blacklist_keywords_placeholder' => 'ключевые слова...',
        'blacklist_keywords_helper' => 'Заносить запросы на контакт в черный список, если они включают эти ключевые слова в поле содержимого (разделять запятой).',
        'blacklist_email_domains' => 'Черный список доменов электронной почты',
        'blacklist_email_domains_placeholder' => 'домен...',
        'blacklist_email_domains_helper' => 'Запросы контактов из черного списка, если домен электронной почты находится в черном списке доменов (разделить запятой).',
        'enable_math_captcha' => 'Включить математическую капчу?',
    ],
    'no_reply' => 'Пока нет ответа!',
    'reply' => 'Ответить',
    'send' => 'Отправить',
    'shortcode_name' => 'Контактная форма',
    'shortcode_description' => 'Добавить контактную форму',
    'shortcode_content_description' => 'Добавить shortcode [contact-form][/contact-form] редактору?',
    'message_sent_success' => 'Сообщение отправлено успешно!',
];
