<?php

/**
 * Template Name: Blog
 *
 * @package WordPress
 * @subpackage DoneHQ
 * @since DoneHQ
 */

?>
<?php
// Объявляю переменные для атрибутов тега html данной страницы. 
$wf_page = '6615091638d26642fcacf474';
$wf_site = '65fb2d744558f90976ea5dc6';

get_header();

?>
<main class="main">
    <div data-css="scrollbar-none" class="breadcrumbs"><a href="/" class="breadcrumbs__item">Home</a>
        <div class="breadcrumbs__sep">&gt;</div>
        <div class="breadcrumbs__item item--active">Blog</div>
    </div>
    <section class="common-hero hero--blog">
        <div class="container">
            <div class="common-hero__content">
                <div class="common-hero__title-wrap">
                    <h1 class="common-hero__title">Our Blog</h1>
                </div>
                <div class="w-dyn-list">
                    <div role="list" class="articles-list__tags w-dyn-items">
                        <div role="listitem" class="w-dyn-item"><a style="border-color:#fc4c02;color:#fc4c02" href="/tags/b2b" class="articles-list__tag">b2b</a></div>
                        <div role="listitem" class="w-dyn-item"><a style="border-color:black;color:black" href="/tags/finance" class="articles-list__tag">finance</a></div>
                        <div role="listitem" class="w-dyn-item"><a style="border-color:#06038d;color:#06038d" href="/tags/seo" class="articles-list__tag">seo</a></div>
                        <div role="listitem" class="w-dyn-item"><a style="border-color:#2965ff;color:#2965ff" href="/tags/medicine" class="articles-list__tag">medicine</a></div>
                        <div role="listitem" class="w-dyn-item"><a style="border-color:#fc4c02;color:#fc4c02" href="/tags/website" class="articles-list__tag">website</a></div>
                        <div role="listitem" class="w-dyn-item"><a style="border-color:#2965ff;color:#2965ff" href="/tags/compliance" class="articles-list__tag">compliance</a></div>
                        <div role="listitem" class="w-dyn-item"><a style="border-color:#7ee100;color:#7ee100" href="/tags/wordpress" class="articles-list__tag">wordpress</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="articles">
        <div class="css w-embed">
            <style>
                .article-list__item-description-wrap:after {
                    content: "";
                    z-index: 2;
                    text-align: right;
                    position: absolute;
                    bottom: 0;
                    right: 0;
                    width: 40%;
                    height: 2em;
                    background: linear-gradient(to right, rgba(255, 255, 255, 0), white 100%);
                    pointer-events: none;
                }

                @media screen and (max-width: 768px) {
                    .article-list__item-description-wrap:after {
                        content: "";
                        z-index: 2;
                        text-align: right;
                        position: absolute;
                        bottom: 0;
                        right: 0;
                        width: 30%;
                        height: 1em;
                        background: linear-gradient(to right, rgba(255, 255, 255, 0), white 100%);
                        pointer-events: none;
                    }
                }

                @media screen and (min-width: 768px) {

                    .article-list__item:first-child,
                    .article-list__item:nth-child(4),
                    .article-list__item:nth-child(5),
                    .article-list__item:nth-child(8) {
                        grid-column-start: span 2;
                        grid-column-end: span 2;
                        grid-row-start: span 1;
                        grid-row-end: span 1;
                    }

                    :is(.article-list__item:first-child, .article-list__item:nth-child(4), .article-list__item:nth-child(5), .article-list__item:nth-child(8)) .article-list__item-tag {
                        justify-content: flex-end;
                        align-items: center;
                    }

                    :is(.article-list__item:first-child, .article-list__item:nth-child(4), .article-list__item:nth-child(5), .article-list__item:nth-child(8)) .article-list__item-tags {
                        position: absolute;
                        left: auto;
                        top: 0%;
                        right: 0%;
                        bottom: auto;
                    }

                    :is(.article-list__item:first-child, .article-list__item:nth-child(4), .article-list__item:nth-child(5), .article-list__item:nth-child(8)) .article-list__item-photo-wrap {
                        height: 34.5em;
                    }
                }
            </style>
        </div>
        <div class="container">
            <div class="w-dyn-list">
                <div fs-cmsload-element="list" role="list" class="article__list w-dyn-items">
                    <div role="listitem" class="article-list__item w-dyn-item"><a class="article-list__item-inner" href="/blog//blog/why-zoomers-rule-unraveling-the-epic-qualities-of-generation-z-91f64-f5acf" data-article="link">
                            <div class="article-list__item-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616dc17b56c49689ea60a5d_6616d93435f2c9635574ed71_Group%252047295.jpeg" loading="lazy" alt="" class="article-list__item-photo"></div>
                            <div class="article-list__item-content">
                                <div class="article-list__item-author">
                                    <div class="article-list__item-author-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616d8763d67e105cc72d7e4_image.png" loading="lazy" alt="" class="article-list__item-author-photo"></div>
                                    <div class="article-list__item-author-content">
                                        <div class="article-list__item-author-name">Nick Nilson</div>
                                        <div class="article-list__item-author-content-bot">
                                            <div class="article-list__item-date">Apr 10, 2024</div>
                                            <div class="article-list__item-date w-condition-invisible w-dyn-bind-empty"></div><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5dc6/6616f2f7c3f7ae5eb0e5584f_ellipse-grey-4.svg" loading="lazy" alt="" class="article-list__item-date-dot">
                                            <div class="article-list__item-time-wrap">
                                                <div class="article-list__item-time">6</div>
                                                <div class="article-list__item-time">min</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="w-node-de47cd72-6953-84c8-c39b-d962444c03ac-a34e2ad7">
                                    <div class="article-list__item-heading-wrap">
                                        <h3 class="heading small">Why Zoomers Rule: Unraveling the Epic Qualities of Generation Z!</h3>
                                    </div>
                                    <div class="article-list__item-description-wrap">
                                        <div class="text">Glassdoor, and digital agencies as we delve into what truly motivates and empowers Gen Z.</div>
                                    </div>
                                </div>
                                <div id="w-node-_13786b45-bee6-78ae-852b-dee76c3d3185-a34e2ad7" class="article-list__item-tags w-dyn-list">
                                    <div role="list" class="articles-list__tags w-dyn-items">
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#06038d;border-color:#06038d" class="articles-list__tag tag--it-card">seo</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#2965ff;border-color:#2965ff" class="articles-list__tag tag--it-card">compliance</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div role="listitem" class="article-list__item w-dyn-item"><a class="article-list__item-inner" href="/blog//blog/why-zoomers-rule-unraveling-the-epic-qualities-of-generation-z-4-f7d30" data-article="link">
                            <div class="article-list__item-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616dc17b56c49689ea60a5d_6616d93435f2c9635574ed71_Group%252047295.jpeg" loading="lazy" alt="" class="article-list__item-photo"></div>
                            <div class="article-list__item-content">
                                <div class="article-list__item-author">
                                    <div class="article-list__item-author-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616d8763d67e105cc72d7e4_image.png" loading="lazy" alt="" class="article-list__item-author-photo"></div>
                                    <div class="article-list__item-author-content">
                                        <div class="article-list__item-author-name">Nick Nilson</div>
                                        <div class="article-list__item-author-content-bot">
                                            <div class="article-list__item-date w-condition-invisible">Apr 10, 2024</div>
                                            <div class="article-list__item-date">Apr 8, 2024</div><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5dc6/6616f2f7c3f7ae5eb0e5584f_ellipse-grey-4.svg" loading="lazy" alt="" class="article-list__item-date-dot">
                                            <div class="article-list__item-time-wrap">
                                                <div class="article-list__item-time">11</div>
                                                <div class="article-list__item-time">min</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="w-node-de47cd72-6953-84c8-c39b-d962444c03ac-a34e2ad7">
                                    <div class="article-list__item-heading-wrap">
                                        <h3 class="heading small">Unraveling the Epic Qualities of Generation Z!</h3>
                                    </div>
                                    <div class="article-list__item-description-wrap">
                                        <div class="text">Get ready to buckle up and embark on an exhilarating expedition into the fantastic realm of Generation Z, commonly called the epic Gen Z! Come along as we uncover the extraordinary qualities that make Gen Z shine like a supernova among previous generations. Brace yourself for mind-blowing revelations straight from renowned sources such as Deloitte, Glassdoor, and digital agencies as we delve into what truly motivates and empowers Gen Z.</div>
                                    </div>
                                </div>
                                <div id="w-node-_13786b45-bee6-78ae-852b-dee76c3d3185-a34e2ad7" class="article-list__item-tags w-dyn-list">
                                    <div role="list" class="articles-list__tags w-dyn-items">
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#2965ff;border-color:#2965ff" class="articles-list__tag tag--it-card">medicine</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:black;border-color:black" class="articles-list__tag tag--it-card">finance</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#fc4c02;border-color:#fc4c02" class="articles-list__tag tag--it-card">website</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div role="listitem" class="article-list__item w-dyn-item"><a class="article-list__item-inner" href="/blog//blog/why-zoomers-rule-unraveling-the-epic-qualities-of-generation-z-3-43461" data-article="link">
                            <div class="article-list__item-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616dc17b56c49689ea60a5d_6616d93435f2c9635574ed71_Group%252047295.jpeg" loading="lazy" alt="" class="article-list__item-photo"></div>
                            <div class="article-list__item-content">
                                <div class="article-list__item-author">
                                    <div class="article-list__item-author-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616d8763d67e105cc72d7e4_image.png" loading="lazy" alt="" class="article-list__item-author-photo"></div>
                                    <div class="article-list__item-author-content">
                                        <div class="article-list__item-author-name">Nick Nilson</div>
                                        <div class="article-list__item-author-content-bot">
                                            <div class="article-list__item-date w-condition-invisible">Apr 10, 2024</div>
                                            <div class="article-list__item-date">Feb 27, 2024</div><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5dc6/6616f2f7c3f7ae5eb0e5584f_ellipse-grey-4.svg" loading="lazy" alt="" class="article-list__item-date-dot">
                                            <div class="article-list__item-time-wrap">
                                                <div class="article-list__item-time">9</div>
                                                <div class="article-list__item-time">min</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="w-node-de47cd72-6953-84c8-c39b-d962444c03ac-a34e2ad7">
                                    <div class="article-list__item-heading-wrap">
                                        <h3 class="heading small">Rule: Unraveling the Epic Qualities of Generation Z!</h3>
                                    </div>
                                    <div class="article-list__item-description-wrap">
                                        <div class="text">Generation Z, commonly called the epic Gen Z! Come along as we uncover the extraordinary qualities that make Gen Z shine like a supernova among previous generations. Brace yourself for mind-blowing revelations straight from renowned sources such as Deloitte, Glassdoor, and digital agencies as we delve into what truly motivates and empowers Gen Z.</div>
                                    </div>
                                </div>
                                <div id="w-node-_13786b45-bee6-78ae-852b-dee76c3d3185-a34e2ad7" class="article-list__item-tags w-dyn-list">
                                    <div role="list" class="articles-list__tags w-dyn-items">
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#2965ff;border-color:#2965ff" class="articles-list__tag tag--it-card">medicine</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#7ee100;border-color:#7ee100" class="articles-list__tag tag--it-card">wordpress</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#2965ff;border-color:#2965ff" class="articles-list__tag tag--it-card">compliance</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div role="listitem" class="article-list__item w-dyn-item"><a class="article-list__item-inner" href="/blog//blog/why-zoomers-rule-unraveling-the-epic-qualities-of-generation-z-3-7853a" data-article="link">
                            <div class="article-list__item-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616dc17b56c49689ea60a5d_6616d93435f2c9635574ed71_Group%252047295.jpeg" loading="lazy" alt="" class="article-list__item-photo"></div>
                            <div class="article-list__item-content">
                                <div class="article-list__item-author">
                                    <div class="article-list__item-author-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616d8763d67e105cc72d7e4_image.png" loading="lazy" alt="" class="article-list__item-author-photo"></div>
                                    <div class="article-list__item-author-content">
                                        <div class="article-list__item-author-name">Nick Nilson</div>
                                        <div class="article-list__item-author-content-bot">
                                            <div class="article-list__item-date w-condition-invisible">Apr 10, 2024</div>
                                            <div class="article-list__item-date">Feb 27, 2024</div><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5dc6/6616f2f7c3f7ae5eb0e5584f_ellipse-grey-4.svg" loading="lazy" alt="" class="article-list__item-date-dot">
                                            <div class="article-list__item-time-wrap">
                                                <div class="article-list__item-time">9</div>
                                                <div class="article-list__item-time">min</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="w-node-de47cd72-6953-84c8-c39b-d962444c03ac-a34e2ad7">
                                    <div class="article-list__item-heading-wrap">
                                        <h3 class="heading small">Rule: Unraveling the Epic Qualities of Generation Z!</h3>
                                    </div>
                                    <div class="article-list__item-description-wrap">
                                        <div class="text">Generation Z, commonly called the epic Gen Z! Come along as we uncover the extraordinary qualities that make Gen Z shine like a supernova among previous generations. Brace yourself for mind-blowing revelations straight from renowned sources such as Deloitte, Glassdoor, and digital agencies as we delve into what truly motivates and empowers Gen Z.</div>
                                    </div>
                                </div>
                                <div id="w-node-_13786b45-bee6-78ae-852b-dee76c3d3185-a34e2ad7" class="article-list__item-tags w-dyn-list">
                                    <div role="list" class="articles-list__tags w-dyn-items">
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#2965ff;border-color:#2965ff" class="articles-list__tag tag--it-card">medicine</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#7ee100;border-color:#7ee100" class="articles-list__tag tag--it-card">wordpress</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#2965ff;border-color:#2965ff" class="articles-list__tag tag--it-card">compliance</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div role="listitem" class="article-list__item w-dyn-item"><a class="article-list__item-inner" href="/blog//blog/why-zoomers-rule-unraveling-the-epic-qualities-of-generation-z-2-a9447" data-article="link">
                            <div class="article-list__item-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616dc17b56c49689ea60a5d_6616d93435f2c9635574ed71_Group%252047295.jpeg" loading="lazy" alt="" class="article-list__item-photo"></div>
                            <div class="article-list__item-content">
                                <div class="article-list__item-author">
                                    <div class="article-list__item-author-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616d8763d67e105cc72d7e4_image.png" loading="lazy" alt="" class="article-list__item-author-photo"></div>
                                    <div class="article-list__item-author-content">
                                        <div class="article-list__item-author-name">Nick Nilson</div>
                                        <div class="article-list__item-author-content-bot">
                                            <div class="article-list__item-date">Apr 10, 2024</div>
                                            <div class="article-list__item-date w-condition-invisible w-dyn-bind-empty"></div><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5dc6/6616f2f7c3f7ae5eb0e5584f_ellipse-grey-4.svg" loading="lazy" alt="" class="article-list__item-date-dot">
                                            <div class="article-list__item-time-wrap">
                                                <div class="article-list__item-time">7</div>
                                                <div class="article-list__item-time">min</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="w-node-de47cd72-6953-84c8-c39b-d962444c03ac-a34e2ad7">
                                    <div class="article-list__item-heading-wrap">
                                        <h3 class="heading small">Epic Qualities of Generation Z</h3>
                                    </div>
                                    <div class="article-list__item-description-wrap">
                                        <div class="text">Brace yourself for mind-blowing revelations straight from renowned sources such as Deloitte, Glassdoor, and digital agencies as we delve into what truly motivates and empowers Gen Z.</div>
                                    </div>
                                </div>
                                <div id="w-node-_13786b45-bee6-78ae-852b-dee76c3d3185-a34e2ad7" class="article-list__item-tags w-dyn-list">
                                    <div role="list" class="articles-list__tags w-dyn-items">
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#7ee100;border-color:#7ee100" class="articles-list__tag tag--it-card">wordpress</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#fc4c02;border-color:#fc4c02" class="articles-list__tag tag--it-card">website</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#06038d;border-color:#06038d" class="articles-list__tag tag--it-card">seo</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div role="listitem" class="article-list__item w-dyn-item"><a class="article-list__item-inner" href="/blog//blog/why-zoomers-rule-unraveling-the-epic-qualities-of-generation-z-4-667a3" data-article="link">
                            <div class="article-list__item-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616dc17b56c49689ea60a5d_6616d93435f2c9635574ed71_Group%252047295.jpeg" loading="lazy" alt="" class="article-list__item-photo"></div>
                            <div class="article-list__item-content">
                                <div class="article-list__item-author">
                                    <div class="article-list__item-author-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616d8763d67e105cc72d7e4_image.png" loading="lazy" alt="" class="article-list__item-author-photo"></div>
                                    <div class="article-list__item-author-content">
                                        <div class="article-list__item-author-name">Nick Nilson</div>
                                        <div class="article-list__item-author-content-bot">
                                            <div class="article-list__item-date w-condition-invisible">Apr 10, 2024</div>
                                            <div class="article-list__item-date">Apr 8, 2024</div><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5dc6/6616f2f7c3f7ae5eb0e5584f_ellipse-grey-4.svg" loading="lazy" alt="" class="article-list__item-date-dot">
                                            <div class="article-list__item-time-wrap">
                                                <div class="article-list__item-time">11</div>
                                                <div class="article-list__item-time">min</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="w-node-de47cd72-6953-84c8-c39b-d962444c03ac-a34e2ad7">
                                    <div class="article-list__item-heading-wrap">
                                        <h3 class="heading small">Unraveling the Epic Qualities of Generation Z!</h3>
                                    </div>
                                    <div class="article-list__item-description-wrap">
                                        <div class="text">Get ready to buckle up and embark on an exhilarating expedition into the fantastic realm of Generation Z, commonly called the epic Gen Z! Come along as we uncover the extraordinary qualities that make Gen Z shine like a supernova among previous generations. Brace yourself for mind-blowing revelations straight from renowned sources such as Deloitte, Glassdoor, and digital agencies as we delve into what truly motivates and empowers Gen Z.</div>
                                    </div>
                                </div>
                                <div id="w-node-_13786b45-bee6-78ae-852b-dee76c3d3185-a34e2ad7" class="article-list__item-tags w-dyn-list">
                                    <div role="list" class="articles-list__tags w-dyn-items">
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#2965ff;border-color:#2965ff" class="articles-list__tag tag--it-card">medicine</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:black;border-color:black" class="articles-list__tag tag--it-card">finance</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#fc4c02;border-color:#fc4c02" class="articles-list__tag tag--it-card">website</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div role="listitem" class="article-list__item w-dyn-item"><a class="article-list__item-inner" href="/blog//blog/why-zoomers-rule-unraveling-the-epic-qualities-of-generation-z-3-f70ec" data-article="link">
                            <div class="article-list__item-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616dc17b56c49689ea60a5d_6616d93435f2c9635574ed71_Group%252047295.jpeg" loading="lazy" alt="" class="article-list__item-photo"></div>
                            <div class="article-list__item-content">
                                <div class="article-list__item-author">
                                    <div class="article-list__item-author-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616d8763d67e105cc72d7e4_image.png" loading="lazy" alt="" class="article-list__item-author-photo"></div>
                                    <div class="article-list__item-author-content">
                                        <div class="article-list__item-author-name">Nick Nilson</div>
                                        <div class="article-list__item-author-content-bot">
                                            <div class="article-list__item-date w-condition-invisible">Apr 10, 2024</div>
                                            <div class="article-list__item-date">Feb 27, 2024</div><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5dc6/6616f2f7c3f7ae5eb0e5584f_ellipse-grey-4.svg" loading="lazy" alt="" class="article-list__item-date-dot">
                                            <div class="article-list__item-time-wrap">
                                                <div class="article-list__item-time">9</div>
                                                <div class="article-list__item-time">min</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="w-node-de47cd72-6953-84c8-c39b-d962444c03ac-a34e2ad7">
                                    <div class="article-list__item-heading-wrap">
                                        <h3 class="heading small">Rule: Unraveling the Epic Qualities of Generation Z!</h3>
                                    </div>
                                    <div class="article-list__item-description-wrap">
                                        <div class="text">Generation Z, commonly called the epic Gen Z! Come along as we uncover the extraordinary qualities that make Gen Z shine like a supernova among previous generations. Brace yourself for mind-blowing revelations straight from renowned sources such as Deloitte, Glassdoor, and digital agencies as we delve into what truly motivates and empowers Gen Z.</div>
                                    </div>
                                </div>
                                <div id="w-node-_13786b45-bee6-78ae-852b-dee76c3d3185-a34e2ad7" class="article-list__item-tags w-dyn-list">
                                    <div role="list" class="articles-list__tags w-dyn-items">
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#2965ff;border-color:#2965ff" class="articles-list__tag tag--it-card">medicine</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#7ee100;border-color:#7ee100" class="articles-list__tag tag--it-card">wordpress</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#2965ff;border-color:#2965ff" class="articles-list__tag tag--it-card">compliance</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div role="listitem" class="article-list__item w-dyn-item"><a class="article-list__item-inner" href="/blog//blog/why-zoomers-rule-unraveling-the-epic-qualities-of-generation-z-2-557a2" data-article="link">
                            <div class="article-list__item-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616dc17b56c49689ea60a5d_6616d93435f2c9635574ed71_Group%252047295.jpeg" loading="lazy" alt="" class="article-list__item-photo"></div>
                            <div class="article-list__item-content">
                                <div class="article-list__item-author">
                                    <div class="article-list__item-author-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616d8763d67e105cc72d7e4_image.png" loading="lazy" alt="" class="article-list__item-author-photo"></div>
                                    <div class="article-list__item-author-content">
                                        <div class="article-list__item-author-name">Nick Nilson</div>
                                        <div class="article-list__item-author-content-bot">
                                            <div class="article-list__item-date">Apr 10, 2024</div>
                                            <div class="article-list__item-date w-condition-invisible w-dyn-bind-empty"></div><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5dc6/6616f2f7c3f7ae5eb0e5584f_ellipse-grey-4.svg" loading="lazy" alt="" class="article-list__item-date-dot">
                                            <div class="article-list__item-time-wrap">
                                                <div class="article-list__item-time">7</div>
                                                <div class="article-list__item-time">min</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="w-node-de47cd72-6953-84c8-c39b-d962444c03ac-a34e2ad7">
                                    <div class="article-list__item-heading-wrap">
                                        <h3 class="heading small">Epic Qualities of Generation Z</h3>
                                    </div>
                                    <div class="article-list__item-description-wrap">
                                        <div class="text">Brace yourself for mind-blowing revelations straight from renowned sources such as Deloitte, Glassdoor, and digital agencies as we delve into what truly motivates and empowers Gen Z.</div>
                                    </div>
                                </div>
                                <div id="w-node-_13786b45-bee6-78ae-852b-dee76c3d3185-a34e2ad7" class="article-list__item-tags w-dyn-list">
                                    <div role="list" class="articles-list__tags w-dyn-items">
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#7ee100;border-color:#7ee100" class="articles-list__tag tag--it-card">wordpress</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#fc4c02;border-color:#fc4c02" class="articles-list__tag tag--it-card">website</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#06038d;border-color:#06038d" class="articles-list__tag tag--it-card">seo</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div role="listitem" class="article-list__item w-dyn-item" style="opacity: 1;"><a class="article-list__item-inner" href="/blog/why-zoomers-rule-unraveling-the-epic-qualities-of-generation-z-3-d181b" data-article="link">
                            <div class="article-list__item-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616dc17b56c49689ea60a5d_6616d93435f2c9635574ed71_Group%252047295.jpeg" loading="lazy" alt="" class="article-list__item-photo"></div>
                            <div class="article-list__item-content">
                                <div class="article-list__item-author">
                                    <div class="article-list__item-author-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616d8763d67e105cc72d7e4_image.png" loading="lazy" alt="" class="article-list__item-author-photo"></div>
                                    <div class="article-list__item-author-content">
                                        <div class="article-list__item-author-name">Nick Nilson</div>
                                        <div class="article-list__item-author-content-bot">
                                            <div class="article-list__item-date w-condition-invisible">Apr 10, 2024</div>
                                            <div class="article-list__item-date">Feb 27, 2024</div><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5dc6/6616f2f7c3f7ae5eb0e5584f_ellipse-grey-4.svg" loading="lazy" alt="" class="article-list__item-date-dot">
                                            <div class="article-list__item-time-wrap">
                                                <div class="article-list__item-time">9</div>
                                                <div class="article-list__item-time">min</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="w-node-de47cd72-6953-84c8-c39b-d962444c03ac-a34e2ad7">
                                    <div class="article-list__item-heading-wrap">
                                        <h3 class="heading small">Rule: Unraveling the Epic Qualities of Generation Z!</h3>
                                    </div>
                                    <div class="article-list__item-description-wrap">
                                        <div class="text">Generation Z, commonly called the epic Gen Z! Come along as we uncover the extraordinary qualities that make Gen Z shine like a supernova among previous generations. Brace yourself for mind-blowing revelations straight from renowned sources such as Deloitte, Glassdoor, and digital agencies as we delve into what truly motivates and empowers Gen Z.</div>
                                    </div>
                                </div>
                                <div id="w-node-_13786b45-bee6-78ae-852b-dee76c3d3185-a34e2ad7" class="article-list__item-tags w-dyn-list">
                                    <div role="list" class="articles-list__tags w-dyn-items">
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#2965ff;border-color:#2965ff" class="articles-list__tag tag--it-card">medicine</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#7ee100;border-color:#7ee100" class="articles-list__tag tag--it-card">wordpress</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#2965ff;border-color:#2965ff" class="articles-list__tag tag--it-card">compliance</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div role="listitem" class="article-list__item w-dyn-item" style="opacity: 1;"><a class="article-list__item-inner" href="/blog/why-zoomers-rule-unraveling-the-epic-qualities-of-generation-z-4-2f910" data-article="link">
                            <div class="article-list__item-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616dc17b56c49689ea60a5d_6616d93435f2c9635574ed71_Group%252047295.jpeg" loading="lazy" alt="" class="article-list__item-photo"></div>
                            <div class="article-list__item-content">
                                <div class="article-list__item-author">
                                    <div class="article-list__item-author-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616d8763d67e105cc72d7e4_image.png" loading="lazy" alt="" class="article-list__item-author-photo"></div>
                                    <div class="article-list__item-author-content">
                                        <div class="article-list__item-author-name">Nick Nilson</div>
                                        <div class="article-list__item-author-content-bot">
                                            <div class="article-list__item-date w-condition-invisible">Apr 10, 2024</div>
                                            <div class="article-list__item-date">Apr 8, 2024</div><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5dc6/6616f2f7c3f7ae5eb0e5584f_ellipse-grey-4.svg" loading="lazy" alt="" class="article-list__item-date-dot">
                                            <div class="article-list__item-time-wrap">
                                                <div class="article-list__item-time">11</div>
                                                <div class="article-list__item-time">min</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="w-node-de47cd72-6953-84c8-c39b-d962444c03ac-a34e2ad7">
                                    <div class="article-list__item-heading-wrap">
                                        <h3 class="heading small">Unraveling the Epic Qualities of Generation Z!</h3>
                                    </div>
                                    <div class="article-list__item-description-wrap">
                                        <div class="text">Get ready to buckle up and embark on an exhilarating expedition into the fantastic realm of Generation Z, commonly called the epic Gen Z! Come along as we uncover the extraordinary qualities that make Gen Z shine like a supernova among previous generations. Brace yourself for mind-blowing revelations straight from renowned sources such as Deloitte, Glassdoor, and digital agencies as we delve into what truly motivates and empowers Gen Z.</div>
                                    </div>
                                </div>
                                <div id="w-node-_13786b45-bee6-78ae-852b-dee76c3d3185-a34e2ad7" class="article-list__item-tags w-dyn-list">
                                    <div role="list" class="articles-list__tags w-dyn-items">
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#2965ff;border-color:#2965ff" class="articles-list__tag tag--it-card">medicine</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:black;border-color:black" class="articles-list__tag tag--it-card">finance</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#fc4c02;border-color:#fc4c02" class="articles-list__tag tag--it-card">website</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div role="listitem" class="article-list__item w-dyn-item" style="opacity: 1;"><a class="article-list__item-inner" href="/blog/why-zoomers-rule-unraveling-the-epic-qualities-of-generation-z-4-06d1d" data-article="link">
                            <div class="article-list__item-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616dc17b56c49689ea60a5d_6616d93435f2c9635574ed71_Group%252047295.jpeg" loading="lazy" alt="" class="article-list__item-photo"></div>
                            <div class="article-list__item-content">
                                <div class="article-list__item-author">
                                    <div class="article-list__item-author-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616d8763d67e105cc72d7e4_image.png" loading="lazy" alt="" class="article-list__item-author-photo"></div>
                                    <div class="article-list__item-author-content">
                                        <div class="article-list__item-author-name">Nick Nilson</div>
                                        <div class="article-list__item-author-content-bot">
                                            <div class="article-list__item-date w-condition-invisible">Apr 10, 2024</div>
                                            <div class="article-list__item-date">Apr 8, 2024</div><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5dc6/6616f2f7c3f7ae5eb0e5584f_ellipse-grey-4.svg" loading="lazy" alt="" class="article-list__item-date-dot">
                                            <div class="article-list__item-time-wrap">
                                                <div class="article-list__item-time">11</div>
                                                <div class="article-list__item-time">min</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="w-node-de47cd72-6953-84c8-c39b-d962444c03ac-a34e2ad7">
                                    <div class="article-list__item-heading-wrap">
                                        <h3 class="heading small">Unraveling the Epic Qualities of Generation Z!</h3>
                                    </div>
                                    <div class="article-list__item-description-wrap">
                                        <div class="text">Get ready to buckle up and embark on an exhilarating expedition into the fantastic realm of Generation Z, commonly called the epic Gen Z! Come along as we uncover the extraordinary qualities that make Gen Z shine like a supernova among previous generations. Brace yourself for mind-blowing revelations straight from renowned sources such as Deloitte, Glassdoor, and digital agencies as we delve into what truly motivates and empowers Gen Z.</div>
                                    </div>
                                </div>
                                <div id="w-node-_13786b45-bee6-78ae-852b-dee76c3d3185-a34e2ad7" class="article-list__item-tags w-dyn-list">
                                    <div role="list" class="articles-list__tags w-dyn-items">
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#2965ff;border-color:#2965ff" class="articles-list__tag tag--it-card">medicine</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:black;border-color:black" class="articles-list__tag tag--it-card">finance</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#fc4c02;border-color:#fc4c02" class="articles-list__tag tag--it-card">website</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div role="listitem" class="article-list__item w-dyn-item" style="opacity: 1;"><a class="article-list__item-inner" href="/blog/why-zoomers-rule-unraveling-the-epic-qualities-of-generation-z-2-0fae5" data-article="link">
                            <div class="article-list__item-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616dc17b56c49689ea60a5d_6616d93435f2c9635574ed71_Group%252047295.jpeg" loading="lazy" alt="" class="article-list__item-photo"></div>
                            <div class="article-list__item-content">
                                <div class="article-list__item-author">
                                    <div class="article-list__item-author-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616d8763d67e105cc72d7e4_image.png" loading="lazy" alt="" class="article-list__item-author-photo"></div>
                                    <div class="article-list__item-author-content">
                                        <div class="article-list__item-author-name">Nick Nilson</div>
                                        <div class="article-list__item-author-content-bot">
                                            <div class="article-list__item-date">Apr 10, 2024</div>
                                            <div class="article-list__item-date w-condition-invisible w-dyn-bind-empty"></div><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5dc6/6616f2f7c3f7ae5eb0e5584f_ellipse-grey-4.svg" loading="lazy" alt="" class="article-list__item-date-dot">
                                            <div class="article-list__item-time-wrap">
                                                <div class="article-list__item-time">7</div>
                                                <div class="article-list__item-time">min</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="w-node-de47cd72-6953-84c8-c39b-d962444c03ac-a34e2ad7">
                                    <div class="article-list__item-heading-wrap">
                                        <h3 class="heading small">Epic Qualities of Generation Z</h3>
                                    </div>
                                    <div class="article-list__item-description-wrap">
                                        <div class="text">Brace yourself for mind-blowing revelations straight from renowned sources such as Deloitte, Glassdoor, and digital agencies as we delve into what truly motivates and empowers Gen Z.</div>
                                    </div>
                                </div>
                                <div id="w-node-_13786b45-bee6-78ae-852b-dee76c3d3185-a34e2ad7" class="article-list__item-tags w-dyn-list">
                                    <div role="list" class="articles-list__tags w-dyn-items">
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#7ee100;border-color:#7ee100" class="articles-list__tag tag--it-card">wordpress</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#fc4c02;border-color:#fc4c02" class="articles-list__tag tag--it-card">website</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#06038d;border-color:#06038d" class="articles-list__tag tag--it-card">seo</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div role="listitem" class="article-list__item w-dyn-item" style="opacity: 1;"><a class="article-list__item-inner" href="/blog/why-zoomers-rule-unraveling-the-epic-qualities-of-generation-z-91f64-a98ca" data-article="link">
                            <div class="article-list__item-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616dc17b56c49689ea60a5d_6616d93435f2c9635574ed71_Group%252047295.jpeg" loading="lazy" alt="" class="article-list__item-photo"></div>
                            <div class="article-list__item-content">
                                <div class="article-list__item-author">
                                    <div class="article-list__item-author-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616d8763d67e105cc72d7e4_image.png" loading="lazy" alt="" class="article-list__item-author-photo"></div>
                                    <div class="article-list__item-author-content">
                                        <div class="article-list__item-author-name">Nick Nilson</div>
                                        <div class="article-list__item-author-content-bot">
                                            <div class="article-list__item-date">Apr 10, 2024</div>
                                            <div class="article-list__item-date w-condition-invisible w-dyn-bind-empty"></div><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5dc6/6616f2f7c3f7ae5eb0e5584f_ellipse-grey-4.svg" loading="lazy" alt="" class="article-list__item-date-dot">
                                            <div class="article-list__item-time-wrap">
                                                <div class="article-list__item-time">6</div>
                                                <div class="article-list__item-time">min</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="w-node-de47cd72-6953-84c8-c39b-d962444c03ac-a34e2ad7">
                                    <div class="article-list__item-heading-wrap">
                                        <h3 class="heading small">Why Zoomers Rule: Unraveling the Epic Qualities of Generation Z!</h3>
                                    </div>
                                    <div class="article-list__item-description-wrap">
                                        <div class="text">Glassdoor, and digital agencies as we delve into what truly motivates and empowers Gen Z.</div>
                                    </div>
                                </div>
                                <div id="w-node-_13786b45-bee6-78ae-852b-dee76c3d3185-a34e2ad7" class="article-list__item-tags w-dyn-list">
                                    <div role="list" class="articles-list__tags w-dyn-items">
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#06038d;border-color:#06038d" class="articles-list__tag tag--it-card">seo</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:black;border-color:black" class="articles-list__tag tag--it-card">finance</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#fc4c02;border-color:#fc4c02" class="articles-list__tag tag--it-card">b2b</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div role="listitem" class="article-list__item w-dyn-item" style="opacity: 1;"><a class="article-list__item-inner" href="/blog/why-zoomers-rule-unraveling-the-epic-qualities-of-generation-z-3-6c89c" data-article="link">
                            <div class="article-list__item-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616dc17b56c49689ea60a5d_6616d93435f2c9635574ed71_Group%252047295.jpeg" loading="lazy" alt="" class="article-list__item-photo"></div>
                            <div class="article-list__item-content">
                                <div class="article-list__item-author">
                                    <div class="article-list__item-author-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616d8763d67e105cc72d7e4_image.png" loading="lazy" alt="" class="article-list__item-author-photo"></div>
                                    <div class="article-list__item-author-content">
                                        <div class="article-list__item-author-name">Nick Nilson</div>
                                        <div class="article-list__item-author-content-bot">
                                            <div class="article-list__item-date w-condition-invisible">Apr 10, 2024</div>
                                            <div class="article-list__item-date">Feb 27, 2024</div><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5dc6/6616f2f7c3f7ae5eb0e5584f_ellipse-grey-4.svg" loading="lazy" alt="" class="article-list__item-date-dot">
                                            <div class="article-list__item-time-wrap">
                                                <div class="article-list__item-time">9</div>
                                                <div class="article-list__item-time">min</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="w-node-de47cd72-6953-84c8-c39b-d962444c03ac-a34e2ad7">
                                    <div class="article-list__item-heading-wrap">
                                        <h3 class="heading small">Rule: Unraveling the Epic Qualities of Generation Z!</h3>
                                    </div>
                                    <div class="article-list__item-description-wrap">
                                        <div class="text">Generation Z, commonly called the epic Gen Z! Come along as we uncover the extraordinary qualities that make Gen Z shine like a supernova among previous generations. Brace yourself for mind-blowing revelations straight from renowned sources such as Deloitte, Glassdoor, and digital agencies as we delve into what truly motivates and empowers Gen Z.</div>
                                    </div>
                                </div>
                                <div id="w-node-_13786b45-bee6-78ae-852b-dee76c3d3185-a34e2ad7" class="article-list__item-tags w-dyn-list">
                                    <div role="list" class="articles-list__tags w-dyn-items">
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#2965ff;border-color:#2965ff" class="articles-list__tag tag--it-card">medicine</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#7ee100;border-color:#7ee100" class="articles-list__tag tag--it-card">wordpress</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#2965ff;border-color:#2965ff" class="articles-list__tag tag--it-card">compliance</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div role="listitem" class="article-list__item w-dyn-item" style="opacity: 1;"><a class="article-list__item-inner" href="/blog/why-zoomers-rule-unraveling-the-epic-qualities-of-generation-z-4-db510" data-article="link">
                            <div class="article-list__item-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616dc17b56c49689ea60a5d_6616d93435f2c9635574ed71_Group%252047295.jpeg" loading="lazy" alt="" class="article-list__item-photo"></div>
                            <div class="article-list__item-content">
                                <div class="article-list__item-author">
                                    <div class="article-list__item-author-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616d8763d67e105cc72d7e4_image.png" loading="lazy" alt="" class="article-list__item-author-photo"></div>
                                    <div class="article-list__item-author-content">
                                        <div class="article-list__item-author-name">Nick Nilson</div>
                                        <div class="article-list__item-author-content-bot">
                                            <div class="article-list__item-date w-condition-invisible">Apr 10, 2024</div>
                                            <div class="article-list__item-date">Apr 8, 2024</div><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5dc6/6616f2f7c3f7ae5eb0e5584f_ellipse-grey-4.svg" loading="lazy" alt="" class="article-list__item-date-dot">
                                            <div class="article-list__item-time-wrap">
                                                <div class="article-list__item-time">11</div>
                                                <div class="article-list__item-time">min</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="w-node-de47cd72-6953-84c8-c39b-d962444c03ac-a34e2ad7">
                                    <div class="article-list__item-heading-wrap">
                                        <h3 class="heading small">Unraveling the Epic Qualities of Generation Z!</h3>
                                    </div>
                                    <div class="article-list__item-description-wrap">
                                        <div class="text">Get ready to buckle up and embark on an exhilarating expedition into the fantastic realm of Generation Z, commonly called the epic Gen Z! Come along as we uncover the extraordinary qualities that make Gen Z shine like a supernova among previous generations. Brace yourself for mind-blowing revelations straight from renowned sources such as Deloitte, Glassdoor, and digital agencies as we delve into what truly motivates and empowers Gen Z.</div>
                                    </div>
                                </div>
                                <div id="w-node-_13786b45-bee6-78ae-852b-dee76c3d3185-a34e2ad7" class="article-list__item-tags w-dyn-list">
                                    <div role="list" class="articles-list__tags w-dyn-items">
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#2965ff;border-color:#2965ff" class="articles-list__tag tag--it-card">medicine</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:black;border-color:black" class="articles-list__tag tag--it-card">finance</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#fc4c02;border-color:#fc4c02" class="articles-list__tag tag--it-card">website</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div role="listitem" class="article-list__item w-dyn-item" style="opacity: 1;"><a class="article-list__item-inner" href="/blog/why-zoomers-rule-unraveling-the-epic-qualities-of-generation-z-2-bd5c6" data-article="link">
                            <div class="article-list__item-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616dc17b56c49689ea60a5d_6616d93435f2c9635574ed71_Group%252047295.jpeg" loading="lazy" alt="" class="article-list__item-photo"></div>
                            <div class="article-list__item-content">
                                <div class="article-list__item-author">
                                    <div class="article-list__item-author-photo-wrap"><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5df0/6616d8763d67e105cc72d7e4_image.png" loading="lazy" alt="" class="article-list__item-author-photo"></div>
                                    <div class="article-list__item-author-content">
                                        <div class="article-list__item-author-name">Nick Nilson</div>
                                        <div class="article-list__item-author-content-bot">
                                            <div class="article-list__item-date">Apr 10, 2024</div>
                                            <div class="article-list__item-date w-condition-invisible w-dyn-bind-empty"></div><img src="https://assets-global.website-files.com/65fb2d744558f90976ea5dc6/6616f2f7c3f7ae5eb0e5584f_ellipse-grey-4.svg" loading="lazy" alt="" class="article-list__item-date-dot">
                                            <div class="article-list__item-time-wrap">
                                                <div class="article-list__item-time">7</div>
                                                <div class="article-list__item-time">min</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="w-node-de47cd72-6953-84c8-c39b-d962444c03ac-a34e2ad7">
                                    <div class="article-list__item-heading-wrap">
                                        <h3 class="heading small">Epic Qualities of Generation Z</h3>
                                    </div>
                                    <div class="article-list__item-description-wrap">
                                        <div class="text">Brace yourself for mind-blowing revelations straight from renowned sources such as Deloitte, Glassdoor, and digital agencies as we delve into what truly motivates and empowers Gen Z.</div>
                                    </div>
                                </div>
                                <div id="w-node-_13786b45-bee6-78ae-852b-dee76c3d3185-a34e2ad7" class="article-list__item-tags w-dyn-list">
                                    <div role="list" class="articles-list__tags w-dyn-items">
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#7ee100;border-color:#7ee100" class="articles-list__tag tag--it-card">wordpress</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#fc4c02;border-color:#fc4c02" class="articles-list__tag tag--it-card">website</div>
                                        </div>
                                        <div role="listitem" class="w-dyn-item">
                                            <div style="color:#06038d;border-color:#06038d" class="articles-list__tag tag--it-card">seo</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                </div>
                <div role="navigation" aria-label="List" class="w-pagination-wrapper article-list__show-more-wrap"><a href="?58c0723e_page=1" aria-label="Previous Page" class="w-pagination-previous" style="display: none;"><svg class="w-pagination-previous-icon" height="12px" width="12px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" transform="translate(0, 1)">
                            <path fill="none" stroke="currentColor" fill-rule="evenodd" d="M8 10L4 6l4-4"></path>
                        </svg>
                        <div class="w-inline-block">Previous</div>
                    </a><a fs-cmsload-mode="load-under" href="?58c0723e_page=2" aria-label="Next Page" class="w-pagination-next btn btn--border-light-blue">
                        <div class="w-inline-block">Load more</div>
                    </a>
                    <link rel="prerender" href="?58c0723e_page=2">
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>