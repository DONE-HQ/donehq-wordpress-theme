
document.addEventListener('DOMContentLoaded', function() {
  var humburger = document.querySelector('.menu__humburger');
  var menu = document.querySelector('.menu');

  humburger.addEventListener('click', function(event) {
    event.preventDefault(); // Предотвращаем переход по ссылке

    // Проверяем текущее состояние стилей и переключаем их
    if (menu.style.display === 'none' || menu.style.opacity === '0') {
      menu.style.display = 'flex';
      menu.style.opacity = '1';
    } else {
      menu.style.display = 'none';
      menu.style.opacity = '0';
    }
  });
});

document.addEventListener('DOMContentLoaded', () => {
  // Количество постов, отображаемых при каждом нажатии "Load more"
  const postsPerPage = 4;

  // add class 'active' from scroll page blog
  const observerHeadersBlog = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      const id = entry.target.getAttribute('id');
      if (entry.isIntersecting) {
        document.querySelectorAll('[data-article="header-links"] a').forEach(link => link.classList.remove('active'));
        document.querySelector(`[header-links="${id}"]`).classList.add('active');
      }
    });
  }, { rootMargin: "-10% 0px -80% 0px" });

  // fix url in card to article
  const updateArticlesLink = () => {
    document.querySelectorAll('[data-article="link"]').forEach(item => {
      const href = item.getAttribute('href');
      item.setAttribute('href', `/blog/${href}`);
    });
  };

  updateArticlesLink();

  document.querySelector('[fs-cmsload-mode="load-under"]').addEventListener('click', function(e) {
    e.preventDefault(); // предотвратить перезагрузку страницы
    
    const nextPageUrl = this.getAttribute('href'); // получить URL следующей страницы

    fetch(nextPageUrl)
      .then(response => response.text())
      .then(data => {
        // Создаем временный элемент для извлечения новых данных
        const tempDiv = document.createElement('div');
        tempDiv.innerHTML = data;

        // Извлечение новых элементов статьи из ответа
        const newArticles = tempDiv.querySelectorAll('.article-list__item');

        // Ограничение количества новых статей, которые будут добавлены
        const limitedNewArticles = Array.from(newArticles).slice(0, postsPerPage);

        // Добавление новых элементов в конец списка статей
        const articlesContainer = document.querySelector('.article-list__item').parentElement;
        limitedNewArticles.forEach(article => articlesContainer.appendChild(article));

        // Обновление ссылок для новых статей
        updateArticlesLink();

        // Обновление наблюдателей для заголовков новых статей
        createHeadersLink();

        // Обновление URL кнопки "Load more" для следующей страницы
        const newNextPageUrl = tempDiv.querySelector('[fs-cmsload-mode="load-under"]').getAttribute('href');
        document.querySelector('[fs-cmsload-mode="load-under"]').setAttribute('href', newNextPageUrl);

        // Если новой страницы нет, скрыть кнопку "Load more"
        if (!newNextPageUrl) {
          document.querySelector('[fs-cmsload-mode="load-under"]').style.display = 'none';
        }
      })
      .catch(error => console.error('Error loading more articles', error));
  });

  const createHeadersLink = () => {
    const headerLinksContainer = document.querySelector('[data-article="header-links"]');
    headerLinksContainer.innerHTML = '';
    
    const headers = document.querySelectorAll('[data-article="content"] h2');
    
    headers.forEach((header, index) => {
      header.setAttribute('id', `header-${index}`);
      const text = header.textContent;
      
      const li = document.createElement('li');
      const a = document.createElement('a');
      a.classList.add('article__aside-h2');
      a.setAttribute('href', `#header-${index}`);
      a.setAttribute('header-links', `header-${index}`);
      a.textContent = text;
      
      li.appendChild(a);
      headerLinksContainer.appendChild(li);
    });
    
    if (headerLinksContainer.querySelector('a')) {
      headerLinksContainer.querySelector('a').classList.add('active');
    }

    document.querySelectorAll('h2[id]').forEach(item => observerHeadersBlog.observe(item));
  };

  // Initial call to set up the headers links
  createHeadersLink();
});
