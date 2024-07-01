function start() {

    setButtons();
    switchScreen(0);
    setGroupTitles();
    setPlayoffButtons();

    const scheduleSwiper = new Swiper('.schedule_swiper', {
      loop: false,
      centeredSlides: false,
      slideToClickedSlide: true,
      simulateTouch: true,
      slidesPerView: 'auto',
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

    // Получаем текущую дату
const currentDate = new Date();

// Находим индекс текущей даты в массиве дат
const desiredDateIndex = scheduleSwiper.slides.findIndex((slide) => {
  const button = slide.querySelector('.slide_date_button');
  const slideDate = new Date(button.dataset.day);
  return (
    slideDate.getFullYear() === currentDate.getFullYear() &&
    slideDate.getMonth() === currentDate.getMonth() &&
    slideDate.getDate() === currentDate.getDate()
  );
});

// Переходим к слайду с текущей датой
scheduleSwiper.slideToLoop(desiredDateIndex, 0, true);

// Обновляем отображение текущего дня
scheduleSwiper.on('activeIndexChange', function (event) {
  const currentSlide = scheduleSwiper.slides[scheduleSwiper.activeIndex];
  /* const button = currentSlide.querySelector('.slide_date_button'); */
  const day = button.dataset.day;
  const date = button.dataset.date;
  showCurrentDay(day, date);
});

    const todayMatchItems = document.querySelectorAll('.today_match_item');
    todayMatchItems.forEach((item) => {
      item.addEventListener('click', () => {
        const date = item.dataset.date;

        scrollToElem(null, '#schedule_section');

        if (!date) {
          return;
        }

        const slideDateButton = document.querySelector(`.slide_date_button[data-date="${date}"]`);

        if (!slideDateButton) {
          return;
        }

        slideDateButton.click();
      });
    });

    const slideDateButtons = document.querySelectorAll('.slide_date_button');
    slideDateButtons.forEach((button) => {
      button.addEventListener('click', () => {
        slideDateButtons.forEach((innerButton) => {
          innerButton.classList.remove('active_slide_date_button');
        });

        button.classList.add('active_slide_date_button');

        const day = button.dataset.day;
        const date = button.dataset.date;

        showCurrentDay(day, date);
      });
    });




    const slideDateButton1 = document.querySelector(`.slide_date_button[data-day="${1}"]`);

    if (slideDateButton1) {
      slideDateButton1.click();
    }

    const playoffButton1 = document.querySelector(`.playoff_button[data-stage="${1}"]`);

    if (playoffButton1) {
      playoffButton1.click();
    }
  }

  function showCurrentDay(dayNumber, date) {
    const liveSchedules = document.querySelectorAll('.live_schedule');

    liveSchedules.forEach((item) => {
      item.classList.remove('active_live_schedule');
    });

    const currentSchedule = document.querySelector(`.live_schedule_day_${dayNumber}`);

    if (currentSchedule) {
      currentSchedule.classList.add('active_live_schedule');
    }

    const scheduleDate = document.querySelector('.schedule_date');
    const formattedDate = new Date(date).toLocaleDateString('ru-RU', { day: '2-digit', month: '2-digit' });
    scheduleDate.textContent = formattedDate;
  }



  /* function switchScreen(screenNumber) {
    const switchButtons = document.querySelectorAll('.switch_button');

    switchButtons.forEach((item, index) => {
      if (index == screenNumber) {
        item.classList.add('active_switch_button');
      } else {
        item.classList.remove('active_switch_button');
      }
    });

    const switchScreens = document.querySelectorAll('.switch_screen');

    switchScreens.forEach((item, index) => {
      if (index == screenNumber) {
        item.classList.add('active_switch_screen');
      } else {
        item.classList.remove('active_switch_screen');
      }
    });
  } */

  function switchScreen(screenNumber) {
    const switchButtons = document.querySelectorAll('.switch_button');

    switchButtons.forEach((item, index) => {
      if (index == screenNumber) {
        item.classList.add('active_switch_button');
      } else {
        item.classList.remove('active_switch_button');
      }
    });

    const switchScreens = document.querySelectorAll('.switch_screen');

    switchScreens.forEach((item, index) => {
      if (index == screenNumber) {
        item.classList.add('active_switch_screen');
      } else {
        item.classList.remove('active_switch_screen');
      }
    });

    // Добавляем следующую строку, чтобы изначально была активна кнопка switch_playoff_button
    document.querySelector('.switch_playoff_button').classList.add('active_switch_button');
  }







  function scrollToElem(event, selector) {
    stopper(event);

    let elem = document.querySelector(selector);
    elem.scrollIntoView({block: "start", behavior: "smooth"});
  }

  function stopper(event) {
    if (event) {
      event.preventDefault();
      event.stopPropagation();
    }
  }

  function setButtons() {
    const switchButtons = document.querySelectorAll('.switch_button');

    switchButtons.forEach((item) => {
      item.addEventListener('click', () => {
        const num = item.dataset.num;

        switchScreen(num);
      });
    });
  }

  function findParentByClassName(parentClassName, elem) {
      while(elem !== document.body) {

          if(elem.classList.contains(parentClassName)) {
              return elem;
          }

          elem = elem.parentNode;
      }
  }

  function setGroupTitles() {
    const groupTitles = document.querySelectorAll('.group_title');

    groupTitles.forEach((title) => {
      title.addEventListener('click', () => {
        const screenWidth = document.documentElement.clientWidth;

        if (screenWidth > 768) {
          return;
        }

        const groupItem = findParentByClassName('group_item', title);
        const groupInfoContainer = groupItem.querySelector('.group_info_container');
        const groupInfoContainerInner = groupItem.querySelector('.group_info_container_inner');

        if (!groupItem.classList.contains('open')) {
          const height = groupInfoContainerInner.clientHeight;
          groupInfoContainer.style.height = `${height}px`;

          setTimeout(() => {
            groupInfoContainer.style.maxHeight = `${height}px`;
          }, 0);
        } else {
          groupInfoContainer.style.maxHeight = '0';
        }

        groupItem.classList.toggle('open');
      });
    });
  }

  function setPlayoffButtons() {
    const playoffButtons = document.querySelectorAll('.playoff_button');

    playoffButtons.forEach((button) => {
      button.addEventListener('click', () => {
        const stage = button.dataset.stage;

        const playoffMapItems = document.querySelectorAll('.playoff_map_item');

        playoffMapItems.forEach((item) => {
          const itemStage = item.dataset.stage;

          if (stage == itemStage) {
            item.classList.add('visible_playoff_map_item');
          } else {
            item.classList.remove('visible_playoff_map_item');
          }
        });

        playoffButtons.forEach((innerButton) => {
          innerButton.classList.remove('active_playoff_button');
        });

        button.classList.add('active_playoff_button');
      });
    })
  }

  window.addEventListener('load', start);
