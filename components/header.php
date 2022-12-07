<header class="header">
  <div class="wrapper">
    <div class="header__grid">
      <!-- Логотип  -->
      <div class="header__logo">
        <a href="./index.php">
          <img src="./img/logo/1.png" alt="Логотип ЗаУльяновск" width="261">
        </a>
      </div>

      <!-- Навигационное меню  -->
      <?php include './components/navigation.php';?>

      <!-- Ссылка на личный кабинет -->
      <a class="header__user-link" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none">
          <rect width="30" height="30" x="1" y="1" stroke="#fff" stroke-width="2" rx="15" />
          <path stroke="#fff" stroke-miterlimit="10" stroke-width="2"
            d="M16 16c2.234 0 4-1.524 4-3.733V10.4c0-2.209-1.766-3.733-4-3.733S12 8.19 12 10.4v1.867C12 14.476 13.766 16 16 16ZM24 24v-3.333C24 17.679 18.69 16 16 16c-2.69 0-8 1.68-8 4.667V24" />
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
