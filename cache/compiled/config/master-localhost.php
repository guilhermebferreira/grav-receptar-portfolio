<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledConfig',
    'timestamp' => 1510624023,
    'checksum' => 'b998ab22ba4753deb4740e9f37f1d8b3',
    'files' => [
        'user/config' => [
            'plugins/archives' => [
                'file' => 'user/config/plugins/archives.yaml',
                'modified' => 1510448321
            ],
            'plugins/comments' => [
                'file' => 'user/config/plugins/comments.yaml',
                'modified' => 1510501615
            ],
            'plugins/email' => [
                'file' => 'user/config/plugins/email.yaml',
                'modified' => 1510448321
            ],
            'plugins/jscomments' => [
                'file' => 'user/config/plugins/jscomments.yaml',
                'modified' => 1510501479
            ],
            'plugins/relatedpages' => [
                'file' => 'user/config/plugins/relatedpages.yaml',
                'modified' => 1510448321
            ],
            'plugins/simplesearch' => [
                'file' => 'user/config/plugins/simplesearch.yaml',
                'modified' => 1510501325
            ],
            'security' => [
                'file' => 'user/config/security.yaml',
                'modified' => 1510448321
            ],
            'site' => [
                'file' => 'user/config/site.yaml',
                'modified' => 1510509583
            ],
            'system' => [
                'file' => 'user/config/system.yaml',
                'modified' => 1510498689
            ]
        ],
        'system/config' => [
            'media' => [
                'file' => 'system/config/media.yaml',
                'modified' => 1510448321
            ],
            'site' => [
                'file' => 'system/config/site.yaml',
                'modified' => 1510448321
            ],
            'streams' => [
                'file' => 'system/config/streams.yaml',
                'modified' => 1510448321
            ],
            'system' => [
                'file' => 'system/config/system.yaml',
                'modified' => 1510448321
            ]
        ],
        'user/plugins' => [
            'plugins/feed' => [
                'file' => 'user/plugins/feed/feed.yaml',
                'modified' => 1510448321
            ],
            'plugins/archives' => [
                'file' => 'user/plugins/archives/archives.yaml',
                'modified' => 1510448321
            ],
            'plugins/generator' => [
                'file' => 'user/plugins/generator/generator.yaml',
                'modified' => 1504194669
            ],
            'plugins/blackhole' => [
                'file' => 'user/plugins/blackhole/blackhole.yaml',
                'modified' => 1510498689
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/email.yaml',
                'modified' => 1510448321
            ],
            'plugins/pagination' => [
                'file' => 'user/plugins/pagination/pagination.yaml',
                'modified' => 1510448321
            ],
            'plugins/relatedpages' => [
                'file' => 'user/plugins/relatedpages/relatedpages.yaml',
                'modified' => 1510448321
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/problems.yaml',
                'modified' => 1510448321
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/form.yaml',
                'modified' => 1510448321
            ],
            'plugins/simplesearch' => [
                'file' => 'user/plugins/simplesearch/simplesearch.yaml',
                'modified' => 1510448321
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/error.yaml',
                'modified' => 1510448321
            ],
            'plugins/comments' => [
                'file' => 'user/plugins/comments/comments.yaml',
                'modified' => 1510448321
            ],
            'plugins/taxonomylist' => [
                'file' => 'user/plugins/taxonomylist/taxonomylist.yaml',
                'modified' => 1510448321
            ]
        ]
    ],
    'data' => [
        'plugins' => [
            'feed' => [
                'enabled' => true,
                'limit' => 10,
                'description' => 'My Feed Description',
                'lang' => 'en-us',
                'length' => 500,
                'enable_json_feed' => false
            ],
            'archives' => [
                'enabled' => true,
                'built_in_css' => true,
                'date_display_format' => 'F Y',
                'show_count' => true,
                'limit' => 12,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'filter_combinator' => 'and',
                'filters' => [
                    'category' => 'Recipes'
                ],
                'taxonomy_names' => [
                    'month' => 'archives_month',
                    'year' => 'archives_year'
                ]
            ],
            'generator' => [
                'enabled' => true,
                'route' => '/admin/generator'
            ],
            'blackhole' => [
                'enabled' => true
            ],
            'email' => [
                'enabled' => true,
                'from' => 'your@email.here',
                'from_name' => NULL,
                'to' => 'your@email.here',
                'to_name' => NULL,
                'mailer' => [
                    'engine' => 'mail',
                    'smtp' => [
                        'server' => 'localhost',
                        'port' => 25,
                        'encryption' => 'none',
                        'user' => '',
                        'password' => ''
                    ],
                    'sendmail' => [
                        'bin' => '/usr/sbin/sendmail'
                    ]
                ],
                'content_type' => 'text/html',
                'debug' => false
            ],
            'pagination' => [
                'enabled' => true,
                'built_in_css' => true,
                'delta' => 0
            ],
            'relatedpages' => [
                'enabled' => true,
                'limit' => 3,
                'show_score' => false,
                'score_threshold' => 20,
                'filter' => [
                    'items' => [
                        '@page' => '/blog'
                    ],
                    'order' => [
                        'by' => 'date',
                        'dir' => 'desc'
                    ]
                ],
                'page_in_filter' => true,
                'explicit_pages' => [
                    'process' => true,
                    'score' => 100
                ],
                'taxonomy_match' => [
                    'taxonomy' => 'tag',
                    'taxonomy_taxonomy' => [
                        'process' => true,
                        'score_scale' => [
                            1 => 50,
                            2 => 75,
                            3 => 100
                        ]
                    ],
                    'taxonomy_content' => [
                        'process' => true,
                        'score_scale' => [
                            1 => 20,
                            2 => 30,
                            3 => 45,
                            4 => 60,
                            5 => 70,
                            6 => 80,
                            7 => 90,
                            8 => 100
                        ]
                    ]
                ],
                'content_match' => [
                    'process' => false
                ]
            ],
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'form' => [
                'enabled' => true,
                'built_in_css' => true,
                'refresh_prevention' => false,
                'files' => [
                    'multiple' => false,
                    'limit' => 10,
                    'destination' => 'self@',
                    'avoid_overwriting' => false,
                    'random_name' => false,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ]
            ],
            'simplesearch' => [
                'enabled' => false,
                'built_in_css' => true,
                'display_button' => false,
                'min_query_length' => 3,
                'route' => '/search',
                'search_content' => 'rendered',
                'template' => 'simplesearch_results',
                'filters' => NULL,
                'filter_combinator' => 'and',
                'ignore_accented_characters' => false,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ]
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/error'
                ]
            ],
            'comments' => [
                'enabled' => false,
                'enable_on_routes' => [
                    0 => '/blog'
                ],
                'disable_on_routes' => [
                    0 => '/blog/blog-post-to-ignore',
                    1 => '/ignore-this-route'
                ],
                'form' => [
                    'name' => 'comments',
                    'fields' => [
                        0 => [
                            'name' => 'name',
                            'label' => 'PLUGIN_COMMENTS.NAME_LABEL',
                            'placeholder' => 'PLUGIN_COMMENTS.NAME_PLACEHOLDER',
                            'autocomplete' => 'on',
                            'type' => 'text',
                            'validate' => [
                                'required' => true
                            ]
                        ],
                        1 => [
                            'name' => 'email',
                            'label' => 'PLUGIN_COMMENTS.EMAIL_LABEL',
                            'placeholder' => 'PLUGIN_COMMENTS.EMAIL_PLACEHOLDER',
                            'type' => 'email',
                            'validate' => [
                                'required' => true
                            ]
                        ],
                        2 => [
                            'name' => 'text',
                            'label' => 'PLUGIN_COMMENTS.MESSAGE_LABEL',
                            'placeholder' => 'PLUGIN_COMMENTS.MESSAGE_PLACEHOLDER',
                            'type' => 'textarea',
                            'validate' => [
                                'required' => true
                            ]
                        ],
                        3 => [
                            'name' => 'date',
                            'type' => 'hidden',
                            'process' => [
                                'fillWithCurrentDateTime' => true
                            ]
                        ],
                        4 => [
                            'name' => 'title',
                            'type' => 'hidden',
                            'evaluateDefault' => 'grav.page.header.title'
                        ],
                        5 => [
                            'name' => 'lang',
                            'type' => 'hidden',
                            'evaluateDefault' => 'grav.language.getLanguage'
                        ],
                        6 => [
                            'name' => 'path',
                            'type' => 'hidden',
                            'evaluateDefault' => 'grav.uri.path'
                        ]
                    ],
                    'buttons' => [
                        0 => [
                            'type' => 'submit',
                            'value' => 'PLUGIN_COMMENTS.SUBMIT_COMMENT_BUTTON_TEXT'
                        ]
                    ],
                    'process' => [
                        0 => [
                            'email' => [
                                'subject' => 'PLUGIN_COMMENTS.EMAIL_NEW_COMMENT_SUBJECT',
                                'body' => '{% include \'forms/data.html.twig\' %}'
                            ]
                        ],
                        1 => [
                            'addComment' => NULL
                        ],
                        2 => [
                            'message' => 'PLUGIN_COMMENTS.THANK_YOU_MESSAGE'
                        ],
                        3 => [
                            'reset' => true
                        ]
                    ]
                ]
            ],
            'taxonomylist' => [
                'enabled' => true,
                'route' => '/blog'
            ],
            'jscomments' => [
                'enabled' => false,
                'provider' => '',
                'providers' => [
                    'disqus' => [
                        'shortname' => '',
                        'default_lang' => 'en'
                    ],
                    'intensedebate' => [
                        'acct' => ''
                    ],
                    'facebook' => [
                        'appId' => '',
                        'lang' => 'en_US',
                        'num_posts' => 5,
                        'colorscheme' => 'light',
                        'order_by' => 'social',
                        'width' => '100%'
                    ],
                    'muut' => [
                        'forum' => '',
                        'channel' => 'General',
                        'show_online' => false,
                        'show_title' => false,
                        'upload' => false,
                        'share' => true,
                        'widget' => false,
                        'lang' => 'en'
                    ]
                ]
            ]
        ],
        'media' => [
            'types' => [
                'defaults' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb.png',
                    'mime' => 'application/octet-stream',
                    'image' => [
                        'filters' => [
                            'default' => [
                                0 => 'enableProgressive'
                            ]
                        ]
                    ]
                ],
                'jpg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpe' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpeg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'png' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-png.png',
                    'mime' => 'image/png'
                ],
                'gif' => [
                    'type' => 'animated',
                    'thumb' => 'media/thumb-gif.png',
                    'mime' => 'image/gif'
                ],
                'svg' => [
                    'type' => 'vector',
                    'thumb' => 'media/thumb-svg.png',
                    'mime' => 'image/svg+xml'
                ],
                'mp4' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-mp4.png',
                    'mime' => 'video/mp4'
                ],
                'mov' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-mov.png',
                    'mime' => 'video/quicktime'
                ],
                'm4v' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-m4v.png',
                    'mime' => 'video/x-m4v'
                ],
                'swf' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-swf.png',
                    'mime' => 'video/x-flv'
                ],
                'flv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-flv.png',
                    'mime' => 'video/x-flv'
                ],
                'webm' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-webm.png',
                    'mime' => 'video/webm'
                ],
                'ogv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'video/ogg'
                ],
                'mp3' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-mp3.png',
                    'mime' => 'audio/mp3'
                ],
                'ogg' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'audio/ogg'
                ],
                'wma' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-wma.png',
                    'mime' => 'audio/wma'
                ],
                'm4a' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-m4a.png',
                    'mime' => 'audio/m4a'
                ],
                'wav' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-wav.png',
                    'mime' => 'audio/wav'
                ],
                'aiff' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-aif.png',
                    'mime' => 'audio/aiff'
                ],
                'aif' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-aif.png',
                    'mime' => 'audio/aif'
                ],
                'txt' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-txt.png',
                    'mime' => 'text/plain'
                ],
                'xml' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xml.png',
                    'mime' => 'application/xml'
                ],
                'doc' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-doc.png',
                    'mime' => 'application/msword'
                ],
                'docx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-docx.png',
                    'mime' => 'application/msword'
                ],
                'xls' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xls.png',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlsx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xlsx.png',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'ppt' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-ppt.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'pptx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pptx.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'pps' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pps.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'rtf' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-rtf.png',
                    'mime' => 'application/rtf'
                ],
                'bmp' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-bmp.png',
                    'mime' => 'image/bmp'
                ],
                'tiff' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-tiff.png',
                    'mime' => 'image/tiff'
                ],
                'mpeg' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpg.png',
                    'mime' => 'video/mpeg'
                ],
                'mpg' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpg.png',
                    'mime' => 'video/mpeg'
                ],
                'mpe' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpe.png',
                    'mime' => 'video/mpeg'
                ],
                'avi' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-avi.png',
                    'mime' => 'video/msvideo'
                ],
                'wmv' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-wmv.png',
                    'mime' => 'video/x-ms-wmv'
                ],
                'html' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'htm' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'ics' => [
                    'type' => 'iCal',
                    'thumb' => 'media/thumb-ics.png',
                    'mime' => 'text/calendar'
                ],
                'pdf' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pdf.png',
                    'mime' => 'application/pdf'
                ],
                'ai' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-ai.png',
                    'mime' => 'image/ai'
                ],
                'psd' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-psd.png',
                    'mime' => 'image/psd'
                ],
                'zip' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-zip.png',
                    'mime' => 'application/zip'
                ],
                '7z' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-7z.png',
                    'mime' => 'application/x-7z-compressed'
                ],
                'gz' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-gz.png',
                    'mime' => 'application/gzip'
                ],
                'tar' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-tar.png',
                    'mime' => 'application/x-tar'
                ],
                'css' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-css.png',
                    'mime' => 'text/css'
                ],
                'js' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-js.png',
                    'mime' => 'application/javascript'
                ],
                'json' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-json.png',
                    'mime' => 'application/json'
                ]
            ]
        ],
        'site' => [
            'title' => 'Guilherme DEV Blog',
            'default_lang' => 'en',
            'author' => [
                'name' => 'Guilherme Ferreira',
                'email' => 'guilherme@uft.edu.br',
                'url' => 'guilhermebferreira.github.',
                'logo' => NULL,
                'gravatar' => 'guilherme@uft.edu.bg',
                'description' => 'Python/PHP backend developer.'
            ],
            'taxonomies' => [
                0 => 'category',
                1 => 'tag',
                2 => 'month'
            ],
            'metadata' => [
                'description' => 'Personal blog, com tématica voltada para programação e desenvolvimento de software.'
            ],
            'summary' => [
                'enabled' => true,
                'format' => 'short',
                'size' => 100,
                'delimiter' => '===',
                'striptags' => true
            ],
            'redirects' => NULL,
            'routes' => NULL,
            'blog' => [
                'route' => ''
            ],
            'description' => 'Apenas algumas linhas de código e um pouco do que ando estudando.',
            'global_featured_image' => 'featured.jpg',
            'social' => [
                0 => [
                    'text' => 'home',
                    'url' => 'http://guilhermebferreira.github.io'
                ],
                1 => [
                    'text' => 'twitter',
                    'url' => 'http://twitter.com/Guilh_rm_'
                ],
                2 => [
                    'text' => 'linkedin',
                    'url' => 'https://www.linkedin.com/in/guilherme-ferreira-dev/'
                ]
            ],
            'slider' => [
                0 => [
                    'image' => '3.png',
                    'title' => 'Guilherme DEV Blog',
                    'url' => '/pt/blog/'
                ],
                1 => [
                    'image' => '1.png',
                    'title' => 'Minha participação no 2ª Hackaton da Faculdade Catolica',
                    'url' => '/pt/blog/hackaton'
                ],
                2 => [
                    'image' => '2.png',
                    'title' => 'Crie um blog estático utilizando Pelican',
                    'url' => '/pt/blog/pelican'
                ]
            ],
            'menu' => [
                0 => [
                    'url' => '/resume/about.html',
                    'text' => 'Sobre mim'
                ]
            ],
            'copyright' => 'Construido com  <a href="http://www.getgrav.org" rel="dofollow" target="_blank" title="Grav">Grav</a>, tema original por <a title="WebMan WordPress Themes" href="http://www.webmandesign.eu/"><strong>WebMan Design</strong></a>'
        ],
        'streams' => [
            'schemes' => [
                'image' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://images',
                        1 => 'system://images'
                    ]
                ],
                'page' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://pages'
                    ]
                ],
                'account' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://accounts'
                    ]
                ]
            ]
        ],
        'system' => [
            'absolute_urls' => false,
            'timezone' => '',
            'default_locale' => NULL,
            'param_sep' => ':',
            'wrapped_site' => false,
            'reverse_proxy_setup' => false,
            'force_ssl' => false,
            'custom_base_url' => '',
            'username_regex' => '^[a-z0-9_-]{3,16}$',
            'pwd_regex' => '(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}',
            'languages' => [
                'supported' => [
                    0 => 'en',
                    1 => 'de',
                    2 => 'es',
                    3 => 'cs',
                    4 => 'fi',
                    5 => 'fr',
                    6 => 'it',
                    7 => 'nb',
                    8 => 'nl',
                    9 => 'el',
                    10 => 'pt',
                    11 => 'ro',
                    12 => 'ru',
                    13 => 'pl'
                ],
                'include_default_lang' => true,
                'translations' => true,
                'translations_fallback' => true,
                'session_store_active' => false,
                'http_accept_language' => true,
                'override_locale' => false,
                'home_redirect' => [
                    'include_lang' => true,
                    'include_route' => false
                ]
            ],
            'home' => [
                'alias' => '/blog',
                'hide_in_urls' => false
            ],
            'pages' => [
                'theme' => 'receptar',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ],
                'list' => [
                    'count' => 20
                ],
                'dateformat' => [
                    'default' => NULL,
                    'short' => 'jS M Y',
                    'long' => 'F jS \\a\\t g:ia'
                ],
                'publish_dates' => true,
                'process' => [
                    'markdown' => true,
                    'twig' => false
                ],
                'twig_first' => false,
                'never_cache_twig' => false,
                'events' => [
                    'page' => true,
                    'twig' => true
                ],
                'markdown' => [
                    'extra' => true,
                    'auto_line_breaks' => false,
                    'auto_url_links' => false,
                    'escape_markup' => false,
                    'special_chars' => [
                        '>' => 'gt',
                        '<' => 'lt'
                    ]
                ],
                'types' => [
                    0 => 'txt',
                    1 => 'xml',
                    2 => 'html',
                    3 => 'htm',
                    4 => 'json',
                    5 => 'rss',
                    6 => 'atom'
                ],
                'append_url_extension' => '',
                'expires' => 604800,
                'cache_control' => NULL,
                'last_modified' => false,
                'etag' => false,
                'vary_accept_encoding' => false,
                'redirect_default_route' => false,
                'redirect_default_code' => 302,
                'redirect_trailing_slash' => true,
                'ignore_files' => [
                    0 => '.DS_Store'
                ],
                'ignore_folders' => [
                    0 => '.git',
                    1 => '.idea'
                ],
                'ignore_hidden' => true,
                'url_taxonomy_filters' => true,
                'frontmatter' => [
                    'process_twig' => false,
                    'ignore_fields' => [
                        0 => 'form',
                        1 => 'forms'
                    ]
                ]
            ],
            'cache' => [
                'enabled' => false,
                'check' => [
                    'method' => 'file'
                ],
                'driver' => 'auto',
                'prefix' => 'g',
                'clear_images_by_default' => true,
                'cli_compatibility' => false,
                'lifetime' => 604800,
                'gzip' => false,
                'allow_webserver_gzip' => false,
                'redis' => [
                    'socket' => false
                ]
            ],
            'twig' => [
                'cache' => true,
                'debug' => true,
                'auto_reload' => true,
                'autoescape' => false,
                'undefined_functions' => true,
                'undefined_filters' => true,
                'umask_fix' => false
            ],
            'assets' => [
                'css_pipeline' => false,
                'css_pipeline_include_externals' => true,
                'css_pipeline_before_excludes' => true,
                'css_minify' => true,
                'css_minify_windows' => false,
                'css_rewrite' => true,
                'js_pipeline' => false,
                'js_pipeline_include_externals' => true,
                'js_pipeline_before_excludes' => true,
                'js_minify' => true,
                'enable_asset_timestamp' => false,
                'collections' => [
                    'jquery' => 'system://assets/jquery/jquery-2.x.min.js'
                ]
            ],
            'errors' => [
                'display' => 0,
                'log' => true
            ],
            'debugger' => [
                'enabled' => false,
                'shutdown' => [
                    'close_connection' => true
                ],
                'twig' => true
            ],
            'images' => [
                'default_image_quality' => 85,
                'cache_all' => false,
                'cache_perms' => '0755',
                'debug' => false,
                'auto_fix_orientation' => false
            ],
            'media' => [
                'enable_media_timestamp' => false,
                'unsupported_inline_types' => [
                    
                ],
                'allowed_fallback_types' => [
                    
                ],
                'auto_metadata_exif' => false
            ],
            'session' => [
                'enabled' => true,
                'timeout' => 1800,
                'name' => 'grav-site',
                'secure' => false,
                'httponly' => true,
                'split' => true,
                'path' => NULL
            ],
            'gpm' => [
                'releases' => 'stable',
                'proxy_url' => NULL,
                'method' => 'auto',
                'verify_peer' => true,
                'official_gpm_only' => true
            ]
        ],
        'security' => [
            'salt' => '1Cy42se3DSVIXP'
        ]
    ]
];
