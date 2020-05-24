

<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Система управления расписанием</title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body class="index" data-view="day" data-view_all="1" data-area="4" data-room="8" data-page="index" data-page-date="2020-05-24" data-is-admin="false">
<div class="unsupported_message">
<header class="banner">
<div class="company">
<span>Стоматология</span><a href="index.php">Система управления расписанием</a>
</div>
<nav class="container">
<nav>
<nav class="menu">
<a href="help.php?view=day&amp;page_date=2020-05-24&amp;area=4&amp;room=8">Помощь</a>
</nav>
  <nav class="logon">
  <form method="post" action="admin.php">
  <input type="hidden" name="csrf_token" value="176822dc9bf17a97bda48344e0ff7a828f8ded4999ca47c3c337377f8928f217">
  <input type="hidden" name="target_url" value="index.php?view=day&amp;view_all=1&amp;page_date=2020-05-24&amp;area=4&amp;room=8">
  <input type="hidden" name="action" value="QueryName">
  <input type="submit" value="Войти в систему">
  </form>
  </nav>
  </nav>
  <nav>
  <form id="form_nav" method="get" action="index.php">
  <input type="hidden" name="csrf_token" value="176822dc9bf17a97bda48344e0ff7a828f8ded4999ca47c3c337377f8928f217">
  <input type="hidden" name="view" value="day">
  <input type="hidden" name="area" value="4">
  <input type="hidden" name="room" value="8">
  <input type="date" name="page_date" value="2020-05-24" required data-submit="form_nav">
  <input type="submit" value="перейти">
  </form>
  </nav>
  </nav>
  </header>
  <div class="contents">
  <div class="minicalendars">
  </div>
  <div class="view_container js_hidden">
  <h2 class="date">воскресенье 24 Май 2020</h2><nav class="main_calendar">
  <nav class="arrow">
  <a class="prev" title="Перейти на день назад" aria-label="Перейти на день назад" href="index.php?view=day&amp;view_all=1&amp;page_date=2020-05-23&amp;area=4&amp;room=8"></a><a title= "Перейти на текущий день" aria-label="Перейти на текущий день" href="index.php?view=day&amp;view_all=1&amp;page_date=2020-05-24&amp;area=4&amp;room=8">Today</a><a class="next" title="Перейти на день вперед" aria-label="Перейти на день вперед" href="index.php?view=day&amp;view_all=1&amp;page_date=2020-05-25&amp;area=4&amp;room=8"></a></nav><nav class="location js_hidden">
  </nav>
  <nav class="view"><div class="container"><a class="selected" href="index.php?view=day&amp;view_all=1&amp;page_date=2020-05-24&amp;area=4&amp;room=8">День</a><a href="index.php?view=week&amp;view_all=1&amp;page_date=2020-05-24&amp;area=4&amp;room=8">Неделю</a><a href="index.php?view=month&amp;view_all=1&amp;page_date=2020-05-24&amp;area=4&amp;room=8">Месяц</a></div></nav></nav>
  <div class="table_container">
  <table class="dwm_main all_rooms" id="day_main" data-resolution="1800">
  <thead data-slots="[[[1590289200,1590291000],[1590291000,1590292800],[1590292800,1590294600],[1590294600,1590296400],[1590296400,1590298200],[1590298200,1590300000],[1590300000,1590301800],[1590301800,1590303600],[1590303600,1590305400],[1590305400,1590307200],[1590307200,1590309000],[1590309000,1590310800],[1590310800,1590312600],[1590312600,1590314400],[1590314400,1590316200],[1590316200,1590318000],[1590318000,1590319800],[1590319800,1590321600],[1590321600,1590323400],[1590323400,1590325200],[1590325200,1590327000],[1590327000,1590328800],[1590328800,1590330600],[1590330600,1590332400]]]" data-timeline-vertical="false" data-timeline-full="true">
  <tr>
  <th class="first_last">Время</th>
  <th data-room="8"><a href="index.php?view=week&amp;view_all=0&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8" title = "Просмотр недели

  Засыплялов">Анестезиолог<span class="capacity zero">0</span></a></th>
  <th data-room="6"><a href="index.php?view=week&amp;view_all=0&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=6" title = "Просмотр недели

  Ключкин">Ортопед<span class="capacity zero">0</span></a></th>
  <th data-room="10"><a href="index.php?view=week&amp;view_all=0&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=10" title = "Просмотр недели

  Дрокин">Пародонтолог<span class="capacity zero">0</span></a></th>
  <th data-room="5"><a href="index.php?view=week&amp;view_all=0&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=5" title = "Просмотр недели

  Печкин">Терапевт<span class="capacity zero">0</span></a></th>
  <th data-room="7"><a href="index.php?view=week&amp;view_all=0&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=7" title = "Просмотр недели

  Вышкин">Хирург<span class="capacity zero">0</span></a></th>
  </tr>
  </thead>
  <tbody>
  <tr>
  <th data-seconds="25200"><a href="index.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;timetohighlight=25200"  title="Активизируйте эту строку">07:00</a></th>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;hour=7&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=6&amp;hour=7&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=10&amp;hour=7&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=5&amp;hour=7&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=7&amp;hour=7&amp;minute=0" aria-label="Create a new booking"></a></td>
  </tr>
  <tr>
  <th data-seconds="27000"><a href="index.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;timetohighlight=27000"  title="Активизируйте эту строку">07:30</a></th>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;hour=7&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=6&amp;hour=7&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=10&amp;hour=7&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=5&amp;hour=7&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=7&amp;hour=7&amp;minute=30" aria-label="Create a new booking"></a></td>
  </tr>
  <tr>
  <th data-seconds="28800"><a href="index.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;timetohighlight=28800"  title="Активизируйте эту строку">08:00</a></th>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;hour=8&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=6&amp;hour=8&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=10&amp;hour=8&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=5&amp;hour=8&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=7&amp;hour=8&amp;minute=0" aria-label="Create a new booking"></a></td>
  </tr>
  <tr>
  <th data-seconds="30600"><a href="index.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;timetohighlight=30600"  title="Активизируйте эту строку">08:30</a></th>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;hour=8&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=6&amp;hour=8&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=10&amp;hour=8&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=5&amp;hour=8&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=7&amp;hour=8&amp;minute=30" aria-label="Create a new booking"></a></td>
  </tr>
  <tr>
  <th data-seconds="32400"><a href="index.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;timetohighlight=32400"  title="Активизируйте эту строку">09:00</a></th>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;hour=9&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=6&amp;hour=9&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=10&amp;hour=9&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=5&amp;hour=9&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=7&amp;hour=9&amp;minute=0" aria-label="Create a new booking"></a></td>
  </tr>
  <tr>
  <th data-seconds="34200"><a href="index.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;timetohighlight=34200"  title="Активизируйте эту строку">09:30</a></th>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;hour=9&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=6&amp;hour=9&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=10&amp;hour=9&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=5&amp;hour=9&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=7&amp;hour=9&amp;minute=30" aria-label="Create a new booking"></a></td>
  </tr>
  <tr>
  <th data-seconds="36000"><a href="index.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;timetohighlight=36000"  title="Активизируйте эту строку">10:00</a></th>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;hour=10&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=6&amp;hour=10&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=10&amp;hour=10&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=5&amp;hour=10&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=7&amp;hour=10&amp;minute=0" aria-label="Create a new booking"></a></td>
  </tr>
  <tr>
  <th data-seconds="37800"><a href="index.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;timetohighlight=37800"  title="Активизируйте эту строку">10:30</a></th>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;hour=10&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=6&amp;hour=10&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=10&amp;hour=10&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=5&amp;hour=10&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=7&amp;hour=10&amp;minute=30" aria-label="Create a new booking"></a></td>
  </tr>
  <tr>
  <th data-seconds="39600"><a href="index.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;timetohighlight=39600"  title="Активизируйте эту строку">11:00</a></th>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;hour=11&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=6&amp;hour=11&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=10&amp;hour=11&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=5&amp;hour=11&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=7&amp;hour=11&amp;minute=0" aria-label="Create a new booking"></a></td>
  </tr>
  <tr>
  <th data-seconds="41400"><a href="index.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;timetohighlight=41400"  title="Активизируйте эту строку">11:30</a></th>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;hour=11&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=6&amp;hour=11&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=10&amp;hour=11&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=5&amp;hour=11&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=7&amp;hour=11&amp;minute=30" aria-label="Create a new booking"></a></td>
  </tr>
  <tr>
  <th data-seconds="43200"><a href="index.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;timetohighlight=43200"  title="Активизируйте эту строку">12:00</a></th>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;hour=12&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=6&amp;hour=12&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=10&amp;hour=12&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=5&amp;hour=12&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=7&amp;hour=12&amp;minute=0" aria-label="Create a new booking"></a></td>
  </tr>
  <tr>
  <th data-seconds="45000"><a href="index.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;timetohighlight=45000"  title="Активизируйте эту строку">12:30</a></th>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;hour=12&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=6&amp;hour=12&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=10&amp;hour=12&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=5&amp;hour=12&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=7&amp;hour=12&amp;minute=30" aria-label="Create a new booking"></a></td>
  </tr>
  <tr>
  <th data-seconds="46800"><a href="index.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;timetohighlight=46800"  title="Активизируйте эту строку">13:00</a></th>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;hour=13&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=6&amp;hour=13&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=10&amp;hour=13&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=5&amp;hour=13&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=7&amp;hour=13&amp;minute=0" aria-label="Create a new booking"></a></td>
  </tr>
  <tr>
  <th data-seconds="48600"><a href="index.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;timetohighlight=48600"  title="Активизируйте эту строку">13:30</a></th>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;hour=13&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=6&amp;hour=13&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=10&amp;hour=13&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=5&amp;hour=13&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=7&amp;hour=13&amp;minute=30" aria-label="Create a new booking"></a></td>
  </tr>
  <tr>
  <th data-seconds="50400"><a href="index.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;timetohighlight=50400"  title="Активизируйте эту строку">14:00</a></th>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;hour=14&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=6&amp;hour=14&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=10&amp;hour=14&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=5&amp;hour=14&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=7&amp;hour=14&amp;minute=0" aria-label="Create a new booking"></a></td>
  </tr>
  <tr>
  <th data-seconds="52200"><a href="index.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;timetohighlight=52200"  title="Активизируйте эту строку">14:30</a></th>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;hour=14&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=6&amp;hour=14&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=10&amp;hour=14&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=5&amp;hour=14&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=7&amp;hour=14&amp;minute=30" aria-label="Create a new booking"></a></td>
  </tr>
  <tr>
  <th data-seconds="54000"><a href="index.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;timetohighlight=54000"  title="Активизируйте эту строку">15:00</a></th>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;hour=15&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=6&amp;hour=15&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=10&amp;hour=15&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=5&amp;hour=15&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=7&amp;hour=15&amp;minute=0" aria-label="Create a new booking"></a></td>
  </tr>
  <tr>
  <th data-seconds="55800"><a href="index.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;timetohighlight=55800"  title="Активизируйте эту строку">15:30</a></th>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;hour=15&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=6&amp;hour=15&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=10&amp;hour=15&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=5&amp;hour=15&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=7&amp;hour=15&amp;minute=30" aria-label="Create a new booking"></a></td>
  </tr>
  <tr>
  <th data-seconds="57600"><a href="index.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;timetohighlight=57600"  title="Активизируйте эту строку">16:00</a></th>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;hour=16&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=6&amp;hour=16&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=10&amp;hour=16&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=5&amp;hour=16&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=7&amp;hour=16&amp;minute=0" aria-label="Create a new booking"></a></td>
  </tr>
  <tr>
  <th data-seconds="59400"><a href="index.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;timetohighlight=59400"  title="Активизируйте эту строку">16:30</a></th>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;hour=16&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=6&amp;hour=16&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=10&amp;hour=16&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=5&amp;hour=16&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=7&amp;hour=16&amp;minute=30" aria-label="Create a new booking"></a></td>
  </tr>
  <tr>
  <th data-seconds="61200"><a href="index.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;timetohighlight=61200"  title="Активизируйте эту строку">17:00</a></th>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;hour=17&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=6&amp;hour=17&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=10&amp;hour=17&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=5&amp;hour=17&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=7&amp;hour=17&amp;minute=0" aria-label="Create a new booking"></a></td>
  </tr>
  <tr>
  <th data-seconds="63000"><a href="index.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;timetohighlight=63000"  title="Активизируйте эту строку">17:30</a></th>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;hour=17&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=6&amp;hour=17&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=10&amp;hour=17&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=5&amp;hour=17&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=7&amp;hour=17&amp;minute=30" aria-label="Create a new booking"></a></td>
  </tr>
  <tr>
  <th data-seconds="64800"><a href="index.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;timetohighlight=64800"  title="Активизируйте эту строку">18:00</a></th>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;hour=18&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=6&amp;hour=18&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=10&amp;hour=18&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=5&amp;hour=18&amp;minute=0" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=7&amp;hour=18&amp;minute=0" aria-label="Create a new booking"></a></td>
  </tr>
  <tr>
  <th data-seconds="66600"><a href="index.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;timetohighlight=66600"  title="Активизируйте эту строку">18:30</a></th>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=8&amp;hour=18&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=6&amp;hour=18&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=10&amp;hour=18&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=5&amp;hour=18&amp;minute=30" aria-label="Create a new booking"></a></td>
  <td class="new"><a href="edit_entry.php?view=day&amp;year=2020&amp;month=5&amp;day=24&amp;area=4&amp;room=7&amp;hour=18&amp;minute=30" aria-label="Create a new booking"></a></td>
  </tr>
  </tbody>
  </table>
  </div>
  </nav>
  </div>
  </div>
  </div>
</body>
</html>
