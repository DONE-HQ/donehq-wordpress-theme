<footer id="contacts" class="footer">
  <section class="footer-top">
    <div data-matter="footer" class="footer-top__frames-mobile">
      <a href="https://twitter.com/donehq_agency" target="_blank" class="footer-top__twitter-icon w-inline-block"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/frames-26.svg" loading="lazy" alt=""></a>
      <a href="https://www.linkedin.com/company/donehq/" target="_blank" class="footer-top__linkedin-icon w-inline-block"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/frames-30.svg" loading="lazy" alt=""></a>
      <a href="https://twitter.com/donehq_agency" target="_blank" class="footer-top__twitter">Twitter</a>
      <a href="https://www.linkedin.com/company/donehq/" target="_blank" class="footer-top__linkedin">Linkedin</a>
    </div>
  </section>
  <?php
  // Получить значение поля "footer_email" из страницы опций
  $footer_email = get_field('footer_email', 'option');

  // Проверить и вывести значение
  if ($footer_email)
  {
    echo '
    <a id="lets-chat" data-css="btn-arrow" href="mailto:' . esc_html($footer_email) . '" class="footer-middle w-inline-block">
    <div class="footer-middle__title">LET’S CHAT</div>
    <div data-arrow-rotated="" class="footer-middle__arrow w-embed"><svg fill="none" height="100%" viewbox="0 0 24 24" width="100%" xmlns="http://www.w3.org/2000/svg">
        <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
          <path d="m3.75 12h16.5"></path>
          <path d="m13.5 5.25 6.75 6.75-6.75 6.75"></path>
        </g>
      </svg></div>
  </a>';
  }
  ?>


  <section class="footer-contacts">
    <div class="footer-contacts__left">
      <div class="footer-contacts__item">
        <div class="footer-contacts__item-name">Email</div>
        <?php
        // Получить значение поля "footer_email" из страницы опций
        $footer_email = get_field('footer_email', 'option');

        // Проверить и вывести значение
        if ($footer_email)
        {
          echo '<a href="mailto:' . esc_html($footer_email) . '" class="footer-contacts__item-text">' . esc_html($footer_email) . '</a>';
        }
        ?>

      </div>
      <div class="footer-contacts__item">
        <div class="footer-contacts__item-name">Call</div>

        <?php
        // Получить значение поля "footer_phone" из страницы опций
        $footer_phone = get_field('footer_phone', 'option');

        // Проверить и вывести значение
        if ($footer_phone)
        {
          // Удалить все символы, кроме цифр и знака плюса
          $phone_sanitized = preg_replace('/[^\d+]/', '', $footer_phone);
          echo '<a href="tel:' . esc_attr($phone_sanitized) . '" class="footer-contacts__item-text">' . esc_html($footer_phone) . '</a>';
        }
        ?>




      </div>
    </div>
    <div class="footer-contacts__right">
      <div class="footer-contacts__item">
        <div class="footer-contacts__item-name">Find us</div>
        <?php
        // Получить значение поля "footer_adresss" из страницы опций
        $footer_address = get_field('footer_address', 'option');

        // Проверить и вывести значение
        if ($footer_address)
        {
          echo '   <a href="https://www.google.ru/maps/place/1655+Barclay+Blvd,+Buffalo+Grove,+IL+60089,+USA/@42.1804581,-87.9411633,15z/data=!4m6!3m5!1s0x880fbc2a82e607a9:0xfce2cc45d23f95c1!8m2!3d42.1802676!4d-87.9333618!16s%2Fg%2F11c21jymwm?entry=ttu" target="_blank" class="footer-contacts__item-text">' . esc_html($footer_address) . '</a>';
        }
        ?>

      </div>
    </div>
  </section>
  <section class="footer-copyright">
    <div class="footer-copyright__text">© 2024 DoneHQ LLC</div>
    <a href="#top" class="footer-copyright__go-top w-inline-block"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/arrow-to-otp.svg" alt="" class="footer-copyright__go-top-img"></a>
  </section>
  <div class="embed-js">
    <div class="frames w-embed w-script">
      <script>
        const FRAMES_HERO = [
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd6625ac10359bc750f567_frames-12.svg',
            234,
            60,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd662670697d2dd9be3c37_frames-13.svg',
            267,
            60,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd6626572b9b1e83010a4f_frames-17.svg',
            256,
            60,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd6625932b4ec4b8200bf6_frames-15.svg',
            256,
            60,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd6625e6fe687cc1a0f43e_frames-14.svg',
            199,
            60,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd66251e4f9de9871a105a_frames-11.svg',
            72,
            72,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd66255353a9cc7a75de4c_frames-1.svg',
            72,
            72,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd6626cd29459a6e22a21f_frames-6.svg',
            72,
            72,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd662551e6b5c3a83cc53c_frames-2.svg',
            72,
            72,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd66257e0d7b9bdb204e60_frames-7.svg',
            72,
            72,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd6625f9c0bb34a6c3fa51_frames-10.svg',
            72,
            72,
          ],
        ]
        const FRAMES_HERO_MOBILE = [
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd6626572b9b1e83010a4f_frames-17.svg',
            256,
            60,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd6625932b4ec4b8200bf6_frames-15.svg',
            256,
            60,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd6625ac10359bc750f567_frames-12.svg',
            234,
            60,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd6625e6fe687cc1a0f43e_frames-14.svg',
            199,
            60,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd66255353a9cc7a75de4c_frames-1.svg',
            72,
            72,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd662551e6b5c3a83cc53c_frames-2.svg',
            72,
            72,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd66257e0d7b9bdb204e60_frames-7.svg',
            72,
            72,
          ],
        ]
        const FRAMES_WHY = [
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd6625ac10359bc750f567_frames-12.svg',
            234,
            60,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd662670697d2dd9be3c37_frames-13.svg',
            267,
            60,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd6625e6fe687cc1a0f43e_frames-14.svg',
            199,
            60,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd662685ba2ff335ecfd42_frames-3.svg',
            72,
            72,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd662551e6b5c3a83cc53c_frames-2.svg',
            72,
            72,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd6626e0080ab9eee42fde_frames-9.svg',
            72,
            72,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd6625f9c0bb34a6c3fa51_frames-10.svg',
            72,
            72,
          ],
        ]
        const FRAMES_FOOTER = [
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd6625ac10359bc750f567_frames-12.svg',
            234,
            60,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd66253b9d37c37ab04594_frames-16.svg',
            199,
            60,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd662670697d2dd9be3c37_frames-13.svg',
            267,
            60,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd6626572b9b1e83010a4f_frames-17.svg',
            256,
            60,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd6625932b4ec4b8200bf6_frames-15.svg',
            256,
            60,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd662685ba2ff335ecfd42_frames-3.svg',
            72,
            72,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd66251e4f9de9871a105a_frames-11.svg',
            72,
            72,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd6626e0080ab9eee42fde_frames-9.svg',
            72,
            72,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd662528d2744c3e8ea8bc_frames-5.svg',
            72,
            72,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd66257c7cfef25cd2c30a_frames-4.svg',
            72,
            72,
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd6625f9c0bb34a6c3fa51_frames-10.svg',
            72,
            72,
          ],
        ]
        const FRAMES_SOCIAL = [
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd697ebfcb5a2b611a45a9_frames-20.svg',
            165,
            61,
            'https://twitter.com/donehq_agency',
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd697e509b52954078b9a9_frames-18.svg',
            72,
            72,
            'https://twitter.com/donehq_agency',
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd697d04c29972d17a2026_frames-21.svg',
            143,
            61,
            'https://www.linkedin.com/company/donehq/',
          ],
          [
            'https://uploads-ssl.webflow.com/65fb2d744558f90976ea5dc6/65fd697ebe23ba69b5692b61_frames-19.svg',
            72,
            72,
            'https://www.linkedin.com/company/donehq/',
          ],
        ]
      </script>
    </div>
    <div class="matter-js w-embed w-script">
      <script>
        class MatterJs {
          constructor(options) {
            this.selector = options.block
            this.block = document.querySelector(options.block)
            this.Engine = Matter.Engine
            this.Render = Matter.Render
            this.Events = Matter.Events
            this.MouseConstraint = Matter.MouseConstraint
            this.Mouse = Matter.Mouse
            this.World = Matter.World
            this.Bodies = Matter.Bodies
            this.Bounds = Matter.Bounds
            this.Runner = Matter.Runner
            this.engine = this.Engine.create()
            this.world = this.engine.world
            this.bodies = this.world.bodies
            this.radius = 0
            this.width = this.block.clientWidth
            this.height = this.block.clientHeight
            this.bordies = {
              render: {
                fillStyle: '#fff'
              },
              isStatic: true,
            }
          }
          create(frames, needSocial) {
            this.render = this.Render.create({
              element: this.block,
              engine: this.engine,
              options: {
                width: this.width,
                height: this.height,
                pixelRatio: 2,
                background: '#transparent	',
                border: 0,
                wireframes: false,
              },
            })
            // create base
            const ground = this.Bodies.rectangle(
              this.width / 2 + 160,
              this.height + 80,
              this.width + 320,
              160,
              this.bordies
            )
            const wallLeft = this.Bodies.rectangle(
              -80,
              this.height / 2,
              160,
              this.height,
              this.bordies
            )
            const wallRight = this.Bodies.rectangle(
              this.width + 80,
              this.height / 2,
              160,
              1200,
              this.bordies
            )
            const roof = this.Bodies.rectangle(
              this.width / 2 + 160,
              -80,
              this.width + 320,
              160,
              this.bordies
            )
            this.World.add(this.world, [ground, wallLeft, wallRight, roof])
            // create frames
            const addFrame = element => {
              const scale = window.innerWidth > 767 ? window.innerWidth / 1680 : 0.7
              const frame = this.Bodies.rectangle(
                Math.random() * this.width + 40,
                Math.random() * this.height + 40,
                element[1] * scale,
                element[2] * scale, {
                  chamfer: {
                    radius: this.radius
                  },
                  render: {
                    sprite: {
                      texture: element[0],
                      xScale: scale,
                      yScale: scale,
                    },
                  },
                  url: element[3],
                }
              )
              return this.World.add(this.world, [frame])
            }
            // const randomFrames = FRAMES.sort(() => {
            //   return Math.random() - 0.5
            // }).slice(0, framesNumber)
            // const randomFramesCircle = FRAMES_CIRCLE.sort(() => {
            //   return Math.random() - 0.5
            // }).slice(0, framesCurcleNumber)
            frames.forEach(el => addFrame(el))
            if (needSocial) FRAMES_SOCIAL.forEach(el => addFrame(el))
            this.mouse = this.Mouse.create(this.render.canvas)
            this.mouseConstraint = this.MouseConstraint.create(this.engine, {
              mouse: this.mouse,
              constraint: {
                stiffness: 0.2,
                render: {
                  visible: false,
                },
              },
            })
            this.World.add(this.world, this.mouseConstraint)
            this.render.mouse = this.mouse
            this.engine.timing.timeScale = 0.3
            this.Engine.run(this.engine)
            this.Render.run(this.render)
            // Allow page scrolling in matter.js window
            this.mouse.element.removeEventListener('mousewheel', this.mouse.mousewheel)
            this.mouse.element.removeEventListener(
              'DOMMouseScroll',
              this.mouse.mousewheel
            )
            // Detect clicks vs. drags
            let click = false
            document.addEventListener('mousedown', () => (click = true))
            document.addEventListener('mousemove', () => (click = false))
            // Create a On-Mouseup Event-Handler
            this.Events.on(this.mouseConstraint, 'mouseup', event => {
              const mouseConstraint = event.source
              if (click === true) {
                if (!mouseConstraint.bodyB) {
                  this.world.bodies.forEach((entry, index) => {
                    if (
                      this.Bounds.contains(entry.bounds, mouseConstraint.mouse.position)
                    ) {
                      if (entry.url !== undefined) {
                        window.location.assign(entry.url)
                      }
                    }
                  })
                }
              }
            })
          }
          clean() {
            if (!document.querySelector(`${this.selector} canvas`)) {
              return
            }
            this.World.clear(this.world)
            this.Engine.clear(this.engine)
            this.Render.stop(this.render)
            this.render.canvas.remove()
            this.render.canvas = null
            this.render.context = null
            this.render.textures = {}
          }
        }
        const createMatterJs = (selector, frames, needSocial) => {
          const interval = setInterval(() => {
            if (window.Matter) {
              clearInterval(interval)
              console.log('MatterJS is loaded')
              const block = document.querySelector(selector)
              if (!block) {
                console.log('selector is not found')
                return
              }
              const matterJs = new MatterJs({
                block: selector,
              })
              const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                  if (entry.isIntersecting) {
                    const isActive = block.getAttribute('data-matter-active')
                    matterJs.create(frames, needSocial)
                    if (window.location.pathname.includes('/blog')) observer.disconnect()
                  } else {
                    if (window.location.pathname.includes('/blog')) return
                    matterJs.clean()
                  }
                })
              }, {})
              observer.observe(block)
            }
          }, 300)
        }
        if (window.innerWidth > 767) {
          createMatterJs('[data-matter="hero"]', FRAMES_HERO)
          createMatterJs('[data-matter="why"]', FRAMES_WHY)
          createMatterJs('[data-matter="footer"]', FRAMES_FOOTER, true)
        } else {
          createMatterJs('[data-matter="hero"]', FRAMES_HERO_MOBILE)
        }
      </script>
    </div>
  </div>
</footer>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=65fb2d744558f90976ea5dc6" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script defer="" src="https://cdn.jsdelivr.net/npm/gsap@3.12/dist/gsap.min.js"></script>
<script defer="" src="https://cdn.jsdelivr.net/npm/gsap@3.12/dist/ScrollTrigger.min.js"></script>
<script defer="" src="https://cdn.jsdelivr.net/npm/matter-js@0.19.0/build/matter.min.js"></script>
<script>
  $(() => {
    $('[data-loader]').delay(1000).fadeOut(500)
    // fix anchor links
    const updateLinksClick = () => {
      $('a[href^="#"]').on('click', ({
        currentTarget
      }) => {
        const href = $(currentTarget).attr('href')
        if (href.length < 2 || href.includes('w-tabs')) {
          return
        }
        const top = window.innerWidth > 767 ? `${$(href).offset().top - 100}` : `${$(href).offset().top - 86}`
        $('html, body').animate({
          scrollTop: top
        }, 800)
        window.location.hash = href
        return false
      })
    }
    const getSiblings = (el) => [].slice.call(el.parentNode.children).filter((child) => child !== el)
    if (window.innerWidth > 767) {
      $('[data-logo="wrap"]').on('mouseover', () => {
        $('[data-logo="animated"]').css('display', 'block')
      })
    }
    $('[data-logo="wrap"]').on('mouseout', () => {
      $('[data-logo="animated"]').css('display', 'none')
    })
    // stop/play animations
    const stopPlayAnimations = (block, item) => {
      document.querySelectorAll(block).forEach(wrap => {
        const observerAnimationsLogo = new IntersectionObserver(
          (entries, observer) => {
            entries.forEach(entry => {
              if (entry.isIntersecting) {
                document.querySelectorAll(item).forEach(logosItem => {
                  logosItem.style['animation-play-state'] = 'running'
                })
              } else {
                document.querySelectorAll(item).forEach(logosItem => {
                  logosItem.style['animation-play-state'] = 'paused'
                })
              }
            })
          }, {}
        )
        observerAnimationsLogo.observe(wrap)
      })
    }
    stopPlayAnimations('[data-animation="logo-scroll"]', '[data-logos]')
    stopPlayAnimations('[data-animation="team-scroll"]', '[data-team]')
    stopPlayAnimations('[data-animation="case-imgs"]', '[data-case-imgs]')
    stopPlayAnimations(
      '[data-animation="star-rotated"]',
      '[data-animation="star-rotated"]'
    )
    // Change theme navbar from footer
    const changeNavTheme = () => {
      if ($('footer').length) {
        $('body').toggleClass('bg-dark')
        $('header').toggleClass('header--dark')
        $('.header__logo-blue, .header__logo-white, .header__humburger-icon, .header__humburger-icon-white').toggleClass('hide')
        $('header').find('.btn--border-blue').toggleClass('btn--border-white')
      }
    }
    ScrollTrigger.create({
      trigger: $('footer'),
      start: "-7% top",
      onToggle: () => {
        changeNavTheme()
      }
    })
    // Disable scroll from open mobile menu
    $('[data-action="menu-open"]').on('click', () => {
      $('body').css('overflow', 'hidden')
    })
    $('[data-action="menu-close"]').on('click', () => {
      $('body').css('overflow', 'visible')
    })
    document.querySelectorAll('[data-faq="item"]').forEach((element) => {
      element.addEventListener('click', ({
        currentTarget
      }) => {
        if (!(currentTarget instanceof HTMLElement)) {
          return
        }
        ScrollTrigger.killAll()
        if (currentTarget.classList.contains('open')) {
          currentTarget.classList.remove('open')
          currentTarget.querySelectorAll(`:scope [data-faq]`).forEach((el) => {
            el.classList.remove('open')
          })
          return
        }
        currentTarget.classList.add('open')
        currentTarget.querySelectorAll(`:scope [data-faq]`).forEach((el) => {
          el.classList.add('open')
        })
      })
    })
    // add class 'active' from scroll page blog
    const observerHeadersBlog = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        const id = entry.target.getAttribute('id');
        if (entry.isIntersecting) {
          $('[data-article="header-links"] a').removeClass('active')
          document.querySelector(`[header-links="${id}"]`).classList.add('active');
        }
      });
    }, {
      rootMargin: "-10% 0px -80% 0px"
    });
    // fix url in card to article
    const updateArticlesLink = () => {
      $('[data-article="link"]').each((_, item) => {
        const href = $(item).attr('href')
        $(item).attr('href', `/blog/${href}`)
      })
    }
    updateArticlesLink()
    $('[fs-cmsload-mode="load-under"]').on('click', () => {
      setTimeout(() => {
        updateArticlesLink()
      }, 300);
    })
    const createHeadersLink = () => {
      $('[data-article="header-links"] > li').remove()
      const headers = $('[data-article="content"] h2')
      let i = 0
      for (i = 0; i < headers.length; i++) {
        headers.eq(i).each(function() {
          $(this).attr('id', `header-${i}`)
          const text = $(this).text()
          $('[data-article="header-links"]').append('<li><a class="article__aside-h2"></a></li>')
          $('[data-article="header-links"] > li > a').eq(i).attr('href', `#header-${i}`).attr('header-links', `header-${i}`).text(text)
        })
      }
      $('[data-article="header-links"] > li > a').eq(0).addClass('active')
      document.querySelectorAll('h2[id]').forEach((item) => {
        observerHeadersBlog.observe(item);
      });
    }
    // listeners click to header-links
    const listenerClickHeaders = () => {
      $('[data-article="header-links"] a').on('click', ({
        currentTarget
      }) => {
        $('[data-article="header-links"] a').removeClass('active')
        $(currentTarget).addClass('active')
      })
    }
    createHeadersLink()
    updateLinksClick()
    // listenerClickHeaders()
  })
</script>
<script>
  $(() => {
    // feedback open / close
    $('[data-feedback="trigger"]').on('click', ({
      currentTarget
    }) => {
      $(currentTarget).find('[data-feedback="btn-rotate"]').toggleClass('open')
      $(currentTarget).toggleClass('open')
      $(currentTarget).parent('[data-feedback="wrap"]').toggleClass('active')
      $(currentTarget).parent('[data-feedback="wrap"]').find('[data-feedback="text"]').toggleClass('text--hide')
      // fix after open feedback
      ScrollTrigger.killAll()
    })
  })
</script>
<?php wp_footer(); ?>
</body>

</html>