<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_a3d55862361563eeca6427cf926eae992c6a8578897921ba4ec9cc1210acf156 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<article id=\"post-";
        echo $this->getAttribute(($context["loop"] ?? null), "index", array());
        echo "\" class=\"post-";
        echo $this->getAttribute(($context["loop"] ?? null), "index", array());
        echo " post type-post status-publish format-standard has-post-thumbnail hentry category-cakes tag-no-excerpt\">

  <div class=\"entry-media ";
        // line 3
        if (($context["truncate"] ?? null)) {
            echo "entry-";
            if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "youtube", array()) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "soundcloud", array())) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "vimeo", array()))) {
                echo "video";
            } else {
                echo "image";
            }
        } else {
            echo " resp_video";
        }
        echo "\">
    <figure class=\"post-thumbnail\">
      ";
        // line 5
        if (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()))) {
            // line 6
            echo "          <a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">
            ";
            // line 7
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())), "cropZoom", array(0 => 338, 1 => 451), "method"), "html", array(0 => "", 1 => "", 2 => "attachment-receptar-featured size-receptar-featured wp-post-image"), "method");
            echo "
          </a>
      ";
        } else {
            // line 10
            echo "      <img class=\"attachment-receptar-featured size-receptar-featured wp-post-image\" src=\"";
            echo ($context["theme_url"] ?? null);
            echo "/images/";
            echo $this->getAttribute(($context["site"] ?? null), "global_featured_image", array());
            echo "\">
      ";
        }
        // line 12
        echo "    </figure>
  </div>

  <div class=\"entry-inner\">
    <div class=\"entry-inner";
        // line 16
        if (($context["truncate"] ?? null)) {
            echo "-content";
        }
        echo "\">

      <header class=\"entry-header\">
        ";
        // line 19
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array())) {
            // line 20
            echo "        <h1 class=\"entry-title\">
          ";
            // line 21
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
                // line 22
                echo "          <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", array());
                echo "\"><i class=\"fa fa-angle-double-right\"></i></a>
          ";
            }
            // line 24
            echo "          <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array());
            echo "\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</a>
        </h1>
        ";
        } else {
            // line 27
            echo "        <h1 class=\"entry-title\"><a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</a></h1>
        ";
        }
        // line 29
        echo "        ";
        if ( !($context["truncate"] ?? null)) {
            // line 30
            echo "        <div class=\"entry-category\">
          ";
            // line 31
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "category", array())) {
                // line 32
                echo "          <span class=\"cat-links entry-meta-element\">
            ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "category", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 34
                    echo "            <a href=\"";
                    echo ($context["base_url"] ?? null);
                    echo "/category:";
                    echo $context["category"];
                    echo "\" rel=\"category tag\">";
                    echo $context["category"];
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ", ";
                    }
                    echo "</a>
            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "          </span>
          ";
            }
            // line 38
            echo "        </div>
        ";
        }
        // line 40
        echo "      </header>

      ";
        // line 42
        if ( !($context["truncate"] ?? null)) {
            // line 43
            echo "      <div class=\"entry-meta entry-meta-bottom\">
        <time datetime=\"";
            // line 44
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translateArray("MONTHS_OF_THE_YEAR", (twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "date", array()), "n") - 1));
            echo " ";
            echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "d, Y");
            echo "\" class=\"entry-date entry-meta-element published\" title=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translateArray("MONTHS_OF_THE_YEAR", (twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "date", array()), "n") - 1));
            echo " ";
            echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "d, Y");
            echo "\" itemprop=\"datePublished\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translateArray("MONTHS_OF_THE_YEAR", (twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "date", array()), "n") - 1));
            echo " ";
            echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "d, Y");
            echo "</time>

        <span class=\"author vcard entry-meta-element\">
          ";
            // line 47
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "name", array()) || $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "name", array()))) {
                // line 48
                echo "          ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "name", array())) {
                    // line 49
                    echo "          ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "url", array())) {
                        // line 50
                        echo "          <a href=\"";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "url", array());
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "name", array());
                        echo "</a>
          ";
                    } else {
                        // line 52
                        echo "          ";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "name", array());
                        echo "
          ";
                    }
                    // line 54
                    echo "          ";
                } else {
                    // line 55
                    echo "          ";
                    if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "url", array())) {
                        // line 56
                        echo "          <a href=\"";
                        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "url", array());
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "name", array());
                        echo "</a>
          ";
                    } else {
                        // line 58
                        echo "          ";
                        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "name", array());
                        echo "
          ";
                    }
                    // line 60
                    echo "          ";
                }
                // line 61
                echo "          ";
            }
            // line 62
            echo "        </span>
        ";
            // line 63
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array())) {
                // line 64
                echo "        <span class=\"tags-links entry-meta-element\">
          ";
                // line 65
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 66
                    echo "          <a href=\"";
                    echo ($context["base_url"] ?? null);
                    echo "/tag:";
                    echo $context["tag"];
                    echo "\" rel=\"tag\">";
                    echo $context["tag"];
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ", ";
                    }
                    echo "</a>
          ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "        </span>
        ";
            }
            // line 70
            echo "      </div>
      ";
        }
        // line 72
        echo "      <div class=\"clear\"></div>

      <div class=\"entry-content\">

        ";
        // line 76
        if ( !($context["truncate"] ?? null)) {
            // line 77
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "description", array())) {
                // line 78
                echo "        <div class=\"fl-module fl-module-rich-text text-center\" style=\"margin-bottom: 6%;\">
          <p>
            ";
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "description", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 81
                    echo "            ";
                    if ($this->getAttribute($context["loop"], "last", array())) {
                        echo "</br>";
                    }
                    // line 82
                    echo "            <strong>";
                    echo $this->getAttribute($context["item"], "option", array());
                    echo "</strong> ";
                    echo $this->getAttribute($context["item"], "value", array());
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ", ";
                    }
                    // line 83
                    echo "            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "          </p>
        </div>
        ";
            }
            // line 87
            echo "
        ";
            // line 88
            if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "youtube", array()) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "vimeo", array())) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "soundcloud", array()))) {
                // line 89
                echo "        <div class=\"fit-vids-style\">
        <style>
        .fluid-width-video-wrapper {width: 100%;position: relative;padding: 0;}                                                                                   .fluid-width-video-wrapper iframe, .fluid-width-video-wrapper object, .fluid-width-video-wrapper embed { position: absolute; top: 0;                                  left: 0; width: 100%; height: 100%;}
        </style>
        </div>

        <div class=\"fl-row fl-row-full-width fl-row-bg-none\" style=\"padding-bottom: 1.62rem;\">
          <div class=\"fl-video fl-embed-video\">
            <div class=\"fluid-width-video-wrapper\" style=\"padding-top: 56.2%;\">
              ";
                // line 98
                if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "youtube", array())) {
                    // line 99
                    echo "              <iframe src=\"";
                    echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "youtube", array());
                    echo "?showinfo=0\" frameborder=\"0\" allowfullscreen></iframe>
              ";
                }
                // line 101
                echo "              ";
                if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "vimeo", array())) {
                    // line 102
                    echo "              <iframe src=\"";
                    echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "vimeo", array());
                    echo "\" frameborder=\"0\" allowfullscreen=\"\"></iframe>
              ";
                }
                // line 104
                echo "              ";
                if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "soundcloud", array())) {
                    // line 105
                    echo "              <iframe width=\"100%\" height=\"403\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/";
                    echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "soundcloud", array());
                    echo "&amp;auto_play=false&amp;hide_related=true&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true&amp;buying=false\"></iframe>
              ";
                }
                // line 107
                echo "            </div>
          </div>
        </div>
        ";
            }
            // line 111
            echo "
        ";
            // line 112
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "ingredients", array())) {
                // line 113
                echo "        <div class=\"fl-row fl-row-bg-none\">
          <div class=\"fl-row-content-wrap\">
          ";
                // line 115
                if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "ingredients_title", array())) {
                    // line 116
                    echo "          <div class=\"fl-rich-text\">
            <h2>";
                    // line 117
                    echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "ingredients_title", array());
                    echo "</h2>
          </div>
          ";
                }
                // line 120
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "ingredients", array()), 2));
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 121
                    echo "          <div class=\"fl-col-group\">
            ";
                    // line 122
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["row"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 123
                        echo "            <div class=\"fl-col fl-col-small\" style=\"width: ";
                        if ((count($context["row"]) < 2)) {
                            echo "100";
                        } else {
                            echo "50";
                        }
                        echo "%;\">
              <div class=\"fl-rich-text\">
                <h3>";
                        // line 125
                        echo $this->getAttribute($context["item"], "title", array());
                        echo "</h3>
                <ul>
                  ";
                        // line 127
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "list", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
                            // line 128
                            echo "                  <li>";
                            echo $context["ingredient"];
                            echo "</li>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 130
                        echo "                </ul>
              </div>
            </div>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 134
                    echo "          </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 136
                echo "        </div>
        </div>
        ";
            }
            // line 139
            echo "        ";
        }
        // line 140
        echo "        <div class=\"clear\"></div>

        ";
        // line 142
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
            // line 143
            echo "          ";
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "
        ";
            // line 144
            if ( !($context["truncate"] ?? null)) {
                // line 145
                echo "          ";
                $context["show_prev_next"] = true;
                // line 146
                echo "        ";
            }
            // line 147
            echo "        ";
        } elseif ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", array()) != $this->getAttribute(($context["page"] ?? null), "content", array())))) {
            // line 148
            echo "          ";
            if (($this->getAttribute($this->getAttribute(($context["site"] ?? null), "summary", array()), "striptags", array()) == true)) {
                // line 149
                echo "            ";
                echo strip_tags($this->getAttribute(($context["page"] ?? null), "summary", array()));
                echo "
          ";
            } else {
                // line 151
                echo "            ";
                echo $this->getAttribute(($context["page"] ?? null), "summary", array());
                echo "
          ";
            }
            // line 153
            echo "        ";
        } elseif (($context["truncate"] ?? null)) {
            // line 154
            echo "          ";
            echo \Grav\Common\Utils::truncate($this->getAttribute(($context["page"] ?? null), "content", array()), 550);
            echo "
        ";
        } else {
            // line 156
            echo "          ";
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "
          ";
            // line 157
            $context["show_prev_next"] = true;
            // line 158
            echo "        ";
        }
        // line 159
        echo "
        ";
        // line 160
        if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
            // line 161
            echo "        ";
            if ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", array()) != $this->getAttribute(($context["page"] ?? null), "content", array())))) {
                // line 162
                echo "        <div class=\"link-more\"><a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", array());
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("READ_MORE");
                echo "</a></div>
        ";
            } elseif (            // line 163
($context["truncate"] ?? null)) {
                // line 164
                echo "        <div class=\"link-more\"><a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", array());
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("READ_MORE");
                echo "</a></div>
        ";
            }
            // line 166
            echo "        ";
        }
        // line 167
        echo "
        ";
        // line 168
        if ( !($context["truncate"] ?? null)) {
            // line 169
            echo "        <div class=\"sharedaddy sd-sharing-enabled\">
          <div class=\"robots-nocontent sd-block sd-social sd-social-icon-text sd-sharing\">
            <h3 class=\"sd-title\">";
            // line 171
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SHARE");
            echo "</h3>
            <div class=\"sd-content\">
              <ul>
                <li class=\"share-facebook\">
                  <a rel=\"nofollow\" data-shared=\"sharing-facebook-368\" class=\"share-facebook sd-button share-icon\" href=\"https://www.facebook.com/sharer/sharer.php?u=";
            // line 175
            echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
            echo "\" target=\"_blank\" title=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
            echo "\"><span>Facebook</span></a>
                </li>
                <li class=\"share-twitter\">
                  <a rel=\"nofollow\" data-shared=\"sharing-twitter-368\" class=\"share-twitter sd-button share-icon\" href=\"http://twitter.com/home?status=";
            // line 178
            echo twig_replace_filter($this->getAttribute(($context["page"] ?? null), "title", array()), array(" " => "%20"));
            echo "-";
            echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
            echo "\" target=\"_blank\" title=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
            echo "\"><span>Twitter</span></a>
                </li>
                <li class=\"share-google-plus-1\">
                  <a rel=\"nofollow\" data-shared=\"sharing-google-368\" class=\"share-google-plus-1 sd-button share-icon\" href=\"https://plus.google.com/share?url=";
            // line 181
            echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
            echo "\" target=\"_blank\" title=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
            echo "\"><span>Google</span></a>
                </li>
                <li class=\"share-end\"></li>
              </ul>
            </div>
          </div>
        </div>
        <script type=\"text/javascript\">var windowOpen;jQuery(document).on('ready post-load',function(){jQuery('a.share-facebook').on('click',function(){if('undefined'!==typeof windowOpen){windowOpen.close();}
        windowOpen=window.open(jQuery(this).attr('href'),'wpcomfacebook','menubar=1,resizable=1,width=600,height=400');return false;});});</script>
        <script type=\"text/javascript\">var windowOpen;jQuery(document).on('ready post-load',function(){jQuery('a.share-twitter').on('click',function(){if('undefined'!==typeof windowOpen){windowOpen.close();}
        windowOpen=window.open(jQuery(this).attr('href'),'wpcomtwitter','menubar=1,resizable=1,width=600,height=350');return false;});});</script>
        <script type=\"text/javascript\">var windowOpen;jQuery(document).on('ready post-load',function(){jQuery('a.share-google-plus-1').on('click',function(){if('undefined'!==typeof windowOpen){windowOpen.close();}
        windowOpen=window.open(jQuery(this).attr('href'),'wpcomgoogle-plus-1','menubar=1,resizable=1,width=480,height=550');return false;});});</script>
        ";
        }
        // line 195
        echo "      </div>

      ";
        // line 197
        if ( !($context["truncate"] ?? null)) {
            // line 198
            echo "      <div id=\"jp-relatedposts\" class=\"jp-relatedposts\" style=\"display: block;\">
        <h3 class=\"jp-relatedposts-headline\"><em>";
            // line 199
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("RELATED_POSTS");
            echo "</em></h3>
        <div class=\"jp-relatedposts-items jp-relatedposts-items-visual\">
          ";
            // line 201
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/blog_item.html.twig", 201)->display($context);
            // line 202
            echo "        </div>
      </div>
      <hr/>
      ";
        }
        // line 206
        echo "


      ";
        // line 209
        if ( !($context["truncate"] ?? null)) {
            // line 210
            echo "      ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "jscomments", array()), "enabled", array()) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "jscomments", array()), "provider", array()))) {
                // line 211
                echo "      <div class=\"comments-area-wrapper\">
        <div class=\"comments-area\">
        <h2 class=\"comments-title\">Comments:</h2>
          ";
                // line 214
                echo call_user_func_array($this->env->getFunction('jscomments')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "jscomments", array()), "provider", array())));
                echo "
        </div>
      </div>
      ";
            }
            // line 218
            echo "
      ";
            // line 219
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "comments", array()), "enabled", array())) {
                // line 220
                echo "      <div class=\"comments-area-wrapper\">
        <div class=\"comments-area\">
          <h2 class=\"comments-title\">";
                // line 222
                echo twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "comments", array()));
                echo " Comments:</h2>
          ";
                // line 223
                $this->loadTemplate("partials/comments.html.twig", "partials/blog_item.html.twig", 223)->display(array_merge($context, array("page" => ($context["page"] ?? null))));
                // line 224
                echo "        </div>
      </div>
      ";
            }
            // line 227
            echo "
      ";
        }
        // line 229
        echo "    </div>
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  697 => 229,  693 => 227,  688 => 224,  686 => 223,  682 => 222,  678 => 220,  676 => 219,  673 => 218,  666 => 214,  661 => 211,  658 => 210,  656 => 209,  651 => 206,  645 => 202,  643 => 201,  638 => 199,  635 => 198,  633 => 197,  629 => 195,  610 => 181,  600 => 178,  592 => 175,  585 => 171,  581 => 169,  579 => 168,  576 => 167,  573 => 166,  565 => 164,  563 => 163,  556 => 162,  553 => 161,  551 => 160,  548 => 159,  545 => 158,  543 => 157,  538 => 156,  532 => 154,  529 => 153,  523 => 151,  517 => 149,  514 => 148,  511 => 147,  508 => 146,  505 => 145,  503 => 144,  498 => 143,  496 => 142,  492 => 140,  489 => 139,  484 => 136,  477 => 134,  468 => 130,  459 => 128,  455 => 127,  450 => 125,  440 => 123,  436 => 122,  433 => 121,  428 => 120,  422 => 117,  419 => 116,  417 => 115,  413 => 113,  411 => 112,  408 => 111,  402 => 107,  396 => 105,  393 => 104,  387 => 102,  384 => 101,  378 => 99,  376 => 98,  365 => 89,  363 => 88,  360 => 87,  355 => 84,  341 => 83,  333 => 82,  328 => 81,  311 => 80,  307 => 78,  304 => 77,  302 => 76,  296 => 72,  292 => 70,  288 => 68,  264 => 66,  247 => 65,  244 => 64,  242 => 63,  239 => 62,  236 => 61,  233 => 60,  227 => 58,  219 => 56,  216 => 55,  213 => 54,  207 => 52,  199 => 50,  196 => 49,  193 => 48,  191 => 47,  175 => 44,  172 => 43,  170 => 42,  166 => 40,  162 => 38,  158 => 36,  134 => 34,  117 => 33,  114 => 32,  112 => 31,  109 => 30,  106 => 29,  98 => 27,  89 => 24,  83 => 22,  81 => 21,  78 => 20,  76 => 19,  68 => 16,  62 => 12,  54 => 10,  48 => 7,  43 => 6,  41 => 5,  27 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<article id=\"post-{{ loop.index }}\" class=\"post-{{ loop.index }} post type-post status-publish format-standard has-post-thumbnail hentry category-cakes tag-no-excerpt\">

  <div class=\"entry-media {% if truncate %}entry-{% if page.header.youtube or page.header.soundcloud or page.header.vimeo %}video{% else %}image{% endif %}{% else %} resp_video{% endif %}\">
    <figure class=\"post-thumbnail\">
      {% if page.media.images|first %}
          <a href=\"{{ page.url }}\">
            {{ page.media.images|first.cropZoom(338,451).html('','', 'attachment-receptar-featured size-receptar-featured wp-post-image') }}
          </a>
      {% else %}
      <img class=\"attachment-receptar-featured size-receptar-featured wp-post-image\" src=\"{{ theme_url }}/images/{{ site.global_featured_image }}\">
      {% endif %}
    </figure>
  </div>

  <div class=\"entry-inner\">
    <div class=\"entry-inner{% if truncate %}-content{% endif %}\">

      <header class=\"entry-header\">
        {% if page.header.link %}
        <h1 class=\"entry-title\">
          {% if page.header.continue_link is not sameas(false) %}
          <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right\"></i></a>
          {% endif %}
          <a href=\"{{ page.header.link }}\">{{ page.title }}</a>
        </h1>
        {% else %}
        <h1 class=\"entry-title\"><a href=\"{{ page.url }}\">{{ page.title }}</a></h1>
        {% endif %}
        {% if not truncate %}
        <div class=\"entry-category\">
          {% if page.taxonomy.category %}
          <span class=\"cat-links entry-meta-element\">
            {% for category in page.taxonomy.category %}
            <a href=\"{{ base_url }}/category:{{ category }}\" rel=\"category tag\">{{ category }}{% if not loop.last %}, {% endif %}</a>
            {% endfor %}
          </span>
          {% endif %}
        </div>
        {% endif %}
      </header>

      {% if not truncate %}
      <div class=\"entry-meta entry-meta-bottom\">
        <time datetime=\"{{ 'MONTHS_OF_THE_YEAR'|ta(post.date|date('n') - 1) }} {{ page.date|date(\"d, Y\") }}\" class=\"entry-date entry-meta-element published\" title=\"{{ 'MONTHS_OF_THE_YEAR'|ta(post.date|date('n') - 1) }} {{ page.date|date(\"d, Y\") }}\" itemprop=\"datePublished\">{{ 'MONTHS_OF_THE_YEAR'|ta(post.date|date('n') - 1) }} {{ page.date|date(\"d, Y\") }}</time>

        <span class=\"author vcard entry-meta-element\">
          {% if page.header.author.name or site.author.name %}
          {% if page.header.author.name %}
          {% if page.header.author.url %}
          <a href=\"{{ page.header.author.url }}\">{{ page.header.author.name }}</a>
          {% else %}
          {{ page.header.author.name }}
          {% endif %}
          {% else %}
          {% if site.author.url %}
          <a href=\"{{ site.author.url }}\">{{ site.author.name }}</a>
          {% else %}
          {{ site.author.name }}
          {% endif %}
          {% endif %}
          {% endif %}
        </span>
        {% if page.taxonomy.tag %}
        <span class=\"tags-links entry-meta-element\">
          {% for tag in page.taxonomy.tag %}
          <a href=\"{{ base_url }}/tag:{{ tag }}\" rel=\"tag\">{{ tag }}{% if not loop.last %}, {% endif %}</a>
          {% endfor %}
        </span>
        {% endif %}
      </div>
      {% endif %}
      <div class=\"clear\"></div>

      <div class=\"entry-content\">

        {% if not truncate %}
        {% if page.header.description %}
        <div class=\"fl-module fl-module-rich-text text-center\" style=\"margin-bottom: 6%;\">
          <p>
            {% for item in page.header.description %}
            {% if loop.last %}</br>{% endif %}
            <strong>{{ item.option }}</strong> {{ item.value }}{% if not loop.last %}, {% endif %}
            {% endfor %}
          </p>
        </div>
        {% endif %}

        {% if page.header.youtube or page.header.vimeo or page.header.soundcloud %}
        <div class=\"fit-vids-style\">
        <style>
        .fluid-width-video-wrapper {width: 100%;position: relative;padding: 0;}                                                                                   .fluid-width-video-wrapper iframe, .fluid-width-video-wrapper object, .fluid-width-video-wrapper embed { position: absolute; top: 0;                                  left: 0; width: 100%; height: 100%;}
        </style>
        </div>

        <div class=\"fl-row fl-row-full-width fl-row-bg-none\" style=\"padding-bottom: 1.62rem;\">
          <div class=\"fl-video fl-embed-video\">
            <div class=\"fluid-width-video-wrapper\" style=\"padding-top: 56.2%;\">
              {% if page.header.youtube %}
              <iframe src=\"{{ page.header.youtube }}?showinfo=0\" frameborder=\"0\" allowfullscreen></iframe>
              {% endif %}
              {% if page.header.vimeo %}
              <iframe src=\"{{ page.header.vimeo }}\" frameborder=\"0\" allowfullscreen=\"\"></iframe>
              {% endif %}
              {% if page.header.soundcloud %}
              <iframe width=\"100%\" height=\"403\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/{{ page.header.soundcloud }}&amp;auto_play=false&amp;hide_related=true&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true&amp;buying=false\"></iframe>
              {% endif %}
            </div>
          </div>
        </div>
        {% endif %}

        {% if page.header.ingredients %}
        <div class=\"fl-row fl-row-bg-none\">
          <div class=\"fl-row-content-wrap\">
          {% if page.header.ingredients_title %}
          <div class=\"fl-rich-text\">
            <h2>{{ page.header.ingredients_title }}</h2>
          </div>
          {% endif %}
          {% for row in page.header.ingredients|batch(2) %}
          <div class=\"fl-col-group\">
            {% for item in row %}
            <div class=\"fl-col fl-col-small\" style=\"width: {% if row|count < 2 %}100{% else %}50{% endif %}%;\">
              <div class=\"fl-rich-text\">
                <h3>{{ item.title }}</h3>
                <ul>
                  {% for ingredient in item.list %}
                  <li>{{ ingredient }}</li>
                  {% endfor %}
                </ul>
              </div>
            </div>
            {% endfor %}
          </div>
          {% endfor %}
        </div>
        </div>
        {% endif %}
        {% endif %}
        <div class=\"clear\"></div>

        {% if page.header.continue_link is sameas(false) %}
          {{ page.content }}
        {% if not truncate %}
          {% set show_prev_next = true %}
        {% endif %}
        {% elseif truncate and page.summary != page.content %}
          {% if site.summary.striptags == true %}
            {{ page.summary|striptags }}
          {% else %}
            {{ page.summary }}
          {% endif %}
        {% elseif truncate %}
          {{ page.content|truncate(550) }}
        {% else %}
          {{ page.content }}
          {% set show_prev_next = true %}
        {% endif %}

        {% if page.header.continue_link is not sameas(false) %}
        {% if truncate and page.summary != page.content %}
        <div class=\"link-more\"><a href=\"{{ page.url }}\">{{ 'READ_MORE'|t }}</a></div>
        {% elseif truncate %}
        <div class=\"link-more\"><a href=\"{{ page.url }}\">{{ 'READ_MORE'|t }}</a></div>
        {% endif %}
        {% endif %}

        {% if not truncate %}
        <div class=\"sharedaddy sd-sharing-enabled\">
          <div class=\"robots-nocontent sd-block sd-social sd-social-icon-text sd-sharing\">
            <h3 class=\"sd-title\">{{ 'SHARE'|t }}</h3>
            <div class=\"sd-content\">
              <ul>
                <li class=\"share-facebook\">
                  <a rel=\"nofollow\" data-shared=\"sharing-facebook-368\" class=\"share-facebook sd-button share-icon\" href=\"https://www.facebook.com/sharer/sharer.php?u={{ page.url(true) }}\" target=\"_blank\" title=\"{{ page.header.title }}\"><span>Facebook</span></a>
                </li>
                <li class=\"share-twitter\">
                  <a rel=\"nofollow\" data-shared=\"sharing-twitter-368\" class=\"share-twitter sd-button share-icon\" href=\"http://twitter.com/home?status={{ page.title|replace({' ': \"%20\"}) }}-{{ page.url(true) }}\" target=\"_blank\" title=\"{{ page.header.title }}\"><span>Twitter</span></a>
                </li>
                <li class=\"share-google-plus-1\">
                  <a rel=\"nofollow\" data-shared=\"sharing-google-368\" class=\"share-google-plus-1 sd-button share-icon\" href=\"https://plus.google.com/share?url={{ page.url(true) }}\" target=\"_blank\" title=\"{{ page.header.title }}\"><span>Google</span></a>
                </li>
                <li class=\"share-end\"></li>
              </ul>
            </div>
          </div>
        </div>
        <script type=\"text/javascript\">var windowOpen;jQuery(document).on('ready post-load',function(){jQuery('a.share-facebook').on('click',function(){if('undefined'!==typeof windowOpen){windowOpen.close();}
        windowOpen=window.open(jQuery(this).attr('href'),'wpcomfacebook','menubar=1,resizable=1,width=600,height=400');return false;});});</script>
        <script type=\"text/javascript\">var windowOpen;jQuery(document).on('ready post-load',function(){jQuery('a.share-twitter').on('click',function(){if('undefined'!==typeof windowOpen){windowOpen.close();}
        windowOpen=window.open(jQuery(this).attr('href'),'wpcomtwitter','menubar=1,resizable=1,width=600,height=350');return false;});});</script>
        <script type=\"text/javascript\">var windowOpen;jQuery(document).on('ready post-load',function(){jQuery('a.share-google-plus-1').on('click',function(){if('undefined'!==typeof windowOpen){windowOpen.close();}
        windowOpen=window.open(jQuery(this).attr('href'),'wpcomgoogle-plus-1','menubar=1,resizable=1,width=480,height=550');return false;});});</script>
        {% endif %}
      </div>

      {% if not truncate %}
      <div id=\"jp-relatedposts\" class=\"jp-relatedposts\" style=\"display: block;\">
        <h3 class=\"jp-relatedposts-headline\"><em>{{ 'RELATED_POSTS'|t }}</em></h3>
        <div class=\"jp-relatedposts-items jp-relatedposts-items-visual\">
          {% include 'partials/relatedpages.html.twig' %}
        </div>
      </div>
      <hr/>
      {% endif %}



      {% if not truncate %}
      {% if config.plugins.jscomments.enabled and config.plugins.jscomments.provider %}
      <div class=\"comments-area-wrapper\">
        <div class=\"comments-area\">
        <h2 class=\"comments-title\">Comments:</h2>
          {{ jscomments(config.plugins.jscomments.provider) }}
        </div>
      </div>
      {% endif %}

      {% if config.plugins.comments.enabled %}
      <div class=\"comments-area-wrapper\">
        <div class=\"comments-area\">
          <h2 class=\"comments-title\">{{ grav.twig.comments|length }} Comments:</h2>
          {% include 'partials/comments.html.twig' with {'page': page} %}
        </div>
      </div>
      {% endif %}

      {% endif %}
    </div>
  </div>
</article>
", "partials/blog_item.html.twig", "/home/guilherme/Documentos/grav-receptar-portfolio/user/themes/receptar/templates/partials/blog_item.html.twig");
    }
}
