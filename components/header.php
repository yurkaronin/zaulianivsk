<header class="header">
  <div class="wrapper">
    <div class="header__grid">
      <!-- Логотип  -->
      <div class="header__logo">
        <a href="#">
          <img src="./img/logo/1.png" alt="Логотип ЗаУльяновск" width="261">
        </a>
      </div>

      <!-- Навигационное меню  -->
      <?php include './components/navigation.php';?>

      <!-- Ссылка на личный кабинет -->
      <a class="header__user-link" href="#">
        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="1" y="1" width="30" height="30" rx="15" stroke="white" stroke-width="2" />
          <path
            d="M16 16C18.234 16 20 14.4756 20 12.2667V10.4C20 8.19113 18.234 6.66669 16 6.66669C13.766 6.66669 12 8.19113 12 10.4V12.2667C12 14.4756 13.766 16 16 16Z"
            stroke="white" stroke-width="2" stroke-miterlimit="10" />
          <path d="M24 24V20.6667C24 17.6793 18.6907 16 16 16C13.3093 16 8 17.6793 8 20.6667V24" stroke="white"
            stroke-width="2" stroke-miterlimit="10" />
        </svg>


      </a>
      <!-- Кнопка меню  -->
      <div class="header__menu-button">
        <button class="nav-button" type="button">
          <span class="icon"></span>
        </button>
      </div>

    </div>
  </div>

</header>
