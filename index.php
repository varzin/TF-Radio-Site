<html lang="ru">
<head>
	<title>Task Force Radio</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
		
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
		
	<link rel="stylesheet" type="text/css" href="style.css">
		
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<!-- GitHub Ribbon -->
<a href="https://github.com/michail-nikolaev/task-force-arma-3-radio" target="_blank">
	<img style="position: absolute; top: 0; right: 0; border: 0; z-index:100;" src="img/github-ribbon.png" alt="Fork me on GitHub">
</a>

<div class="container">
	<div class="row">
		<!-- Left col -->
		<div class="col-xs-3 text-right">
			<img class="radio" src="img/radio.png" alt="Radio">
		</div>
		
		<!-- Right col -->
		<div class="col-xs-8 col-xs-offset-1">
			
			<div class="header">
				<img class="logo" src="img/logo.png" alt="Radio">
				<div class="credit">
					Created by
					<div class="name"><a href="#">Nkey</a></div>
				</div>
				<button type="button" class="btn btn-primary btn-lg">Скачать</button>
			</div><!-- /.header -->	
			






<a name="task-force-arma-3-radio" class="anchor" href="#task-force-arma-3-radio"><span class="octicon octicon-link"></span></a>task-force-arma-3-radio</h1>

<p>Arma 3 Team Speak Radio Plugin</p>

<h3>
<a name="%D0%A3%D1%81%D1%82%D0%B0%D0%BD%D0%BE%D0%B2%D0%BA%D0%B0" class="anchor" href="#%D0%A3%D1%81%D1%82%D0%B0%D0%BD%D0%BE%D0%B2%D0%BA%D0%B0"><span class="octicon octicon-link"></span></a>Установка</h3>

<ul>
<li>Скачайте <a href="https://github.com/michail-nikolaev/task-force-arma-3-radio/raw/master/releases/0.7.0%20beta.zip">архив с рацией 0.7.0 beta</a> и распакуйте его.</li>
<li>Cкопируйте содержимое папки <code>TeamSpeak 3 Client</code> в корневую папку TeamSpeak.</li>
<li>Скопируйте содержимое папки <code>Arma 3</code> в папку с игрой <code>...\SteamApps\common\Arma 3</code>.</li>
</ul><blockquote>
<p>TF Radio использует последнюю версию СBA (Community Base Addons). Поэтому, если этот мод у вас уже установлен, Windows предложит заменить папку.</p>
</blockquote>

<h3>
<a name="%D0%9D%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%B9%D0%BA%D0%B0" class="anchor" href="#%D0%9D%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%B9%D0%BA%D0%B0"><span class="octicon octicon-link"></span></a>Настройка</h3>

<ul>
<li>Убедитесь, что в TeamSpeak клавиша <code>Caps Lock</code> не используется для разговора.</li>
<li>Также в ARMA 3  отключите разговор по внутренней связи (VON) по нажатию <code>Caps Lock</code> (чтобы не двоиться).</li>
<li>Откройте список плагинов в Team Speak <code>Settings &gt; Plugins</code>.

<ol>
<li>Включите <code>Task Force Arma 3 Radio</code>.</li>
<li>Отключите <code>ACRE</code> и <code>radio ts ARMA3.ru version</code>, если они есть, чтобы избежать конфликтов.</li>
<li>На всякий случай внизу слева можно нажать кнопку Reload All для перезагрузки всех плагинов.</li>
</ol>
</li>
<li>Убедитесь, что громкость оповещений в Team Speak не отключена: <code>Options &gt; Payback &gt; Sound Pack Volume</code> установите в положительное значение.</li>
<li>Запустите игру с аддонами <code>@CBA_A3</code> и <code>@task_force_radio</code> (Community Base Addons: A3 Beta и Task Force Arrowhead Radio). Это можно сделать, прописав в ярлыке игры имена модов после EXE файла <code>…\arma3.exe -mod=@CBA_A3;@task_force_radio</code>, но рекомендуется включить необходимые моды в насройках игры (Настройки - Дополнения, Settings -&gt; Expansions).</li>
<li>Зайдите в тот же канал, где находятся другие игроки, играющие с данной рацией, либо вас перебросит в канал <code>TaskForceRadio</code> в случае его наличия при старте миссии.</li>
</ul><blockquote>
<p>Убедитесь, что ник в профиле игры и TeamSpeak совпадает, если это нет так - плагин изменит ваш ник в TS в процессе игры.</p>

<p>Не рекомендуется использовать плагин при одновременном подключении к нескольким серверам в TeamSpeak</p>

<p>Рекомендуется отключить встроенные звуки оповещений TeamSpeak: <code>Options &gt; Notifications &gt; Sound Pack: "Sounds Deactivated"</code>. Для применения этой опции необходимо перезапустить TeamSpeak.</p>
</blockquote>

<h3>
<a name="%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D1%8C%D0%B7%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5-%D0%B2-%D0%B8%D0%B3%D1%80%D0%B5" class="anchor" href="#%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D1%8C%D0%B7%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5-%D0%B2-%D0%B8%D0%B3%D1%80%D0%B5"><span class="octicon octicon-link"></span></a>Использование в игре</h3>

<table>
<thead><tr>
<th>Клавиши</th>
<th>Действие</th>
</tr></thead>
<tbody>
<tr>
<td>Кнопка разговора в TeamSpeak</td>
<td>Прямая речь.</td>
</tr>
<tr>
<td><code>Caps Lock</code></td>
<td>Разговор по рации.</td>
</tr>
<tr>
<td>
<code>CTRL</code>&nbsp;+&nbsp;<code>Caps Lock</code>
</td>
<td>Разговор по рации дальней связи.</td>
</tr>
<tr>
<td>
<code>CTRL</code>&nbsp;+&nbsp;<code>P</code>
</td>
<td>Открыть интерфейс коротковолновой рации (рация должна быть в слоте инвентаря). Для того, чтобы ввести частоту, нажмите <code>CLR</code>, введите значение и нажмите <code>ENT</code>. Также вы можете переключать активный канал рации нажимая на кнопки со стрелками (всего 8 каналов). Возможно изменение громкости приема кнопками <code>PRE+</code> и <code>PRE-</code>.</td>
</tr>
<tr>
<td><code>NUM[1-8]</code></td>
<td>Быстрое переключение каналов коротковолновой рации.</td>
</tr>
<tr>
<td>
<code>ALT</code>&nbsp;+&nbsp;<code>P</code>
</td>
<td>Открыть интерфейс рации дальней связи (рация дальней связи должна быть одета на спину, либо вы должны быть в технике за водителя, стрелка, командира или помощника пилота). Для того, чтобы ввести частоту нажмите <code>MENU CLR</code>, введите значение и нажмите <code>FREQ</code>. Также вы можете переключать активный канал  нажимая цифровые кноки на рации (всего 9 каналов). Возможно изменение громкости приема кнопками <code>TIME</code> и <code>BATT CALL</code>.</td>
</tr>
<tr>
<td>
<code>CTRL</code>&nbsp;+&nbsp;<code>NUM[1-9]</code>
</td>
<td>Быстрое переключение каналов рации дальней связи.</td>
</tr>
<tr>
<td>
<code>CTRL</code>&nbsp;+&nbsp;<code>TAB</code>
</td>
<td>Изменить громкость прямой речи. Можно говорить шепотом (Whispering), нормально (Normal) и кричать (Yelling). Не влияет на кромкость сигнала в радио передаче.</td>
</tr>
<tr>
<td>
<code>SHIFT</code>&nbsp;+&nbsp;<code>P</code>
</td>
<td>Открыть интерфейс переговорного устройства для дайверов (на вас должен быть надет ребризер). Для того, чтобы ввести частоту, нажмите <code>MODE</code>, введите значение и нажмите <code>ADV</code>. Возможно изменение громкости приема кнопкой с правой стороны устройства.</td>
</tr>
<tr>
<td>
<code>ALT</code>&nbsp;+&nbsp;<code>Caps Lock</code>
</td>
<td>Разговор по переговорному устройству для дайверов.</td>
</tr>
<tr>
<td><code>ESC</code></td>
<td>Выход из интерфейса рации.</td>
</tr>
</tbody>
</table><blockquote>
<p>Вы можете переназначить клавиши управления в файле настроек, лежащем в папке с игрой <code>...\Arma 3\userconfig\task_force_radio\radio_keys.hpp</code>. Файл редактируется обычным блокнотом.</p>
</blockquote>

<h3>
<a name="%D0%94%D0%BE%D0%BF%D0%BE%D0%BB%D0%BD%D0%B8%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F-%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D0%B8%D1%8F" class="anchor" href="#%D0%94%D0%BE%D0%BF%D0%BE%D0%BB%D0%BD%D0%B8%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F-%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D0%B8%D1%8F"><span class="octicon octicon-link"></span></a>Дополнительная информация</h3>

<h5>
<a name="%D0%A0%D0%B0%D1%86%D0%B8%D0%B8" class="anchor" href="#%D0%A0%D0%B0%D1%86%D0%B8%D0%B8"><span class="octicon octicon-link"></span></a>Рации</h5>

<ul>
<li>Рация <a href="http://ru.wikipedia.org/wiki/AN/PRC-152">AN/PRC-152</a> (коротковолновая) может работать на частотах от 30 до 512 MHz. Дальность действия - 3 км (учитывая зону с помехами).</li>
<li>Рация <a href="http://en.wikipedia.org/wiki/SINCGARS#Models">RT-1523G (ASIP)</a> работает на частотах от 30 до 87 MHz. Данная рация одевается как рюкзак и доступна в технике водителю, командиру, стрелку и помощнику пилота. В начале миссии эта рация автоматически выдается лидерам групп (работает не в 100% случаев). Дальность действия - 20 км (учитывая зону с помехами).</li>
<li>Обе рации поддерживают SINCGARS протокол, поэтому могут связываться друг с другом. В случае если передача осуществляется с <a href="http://ru.wikipedia.org/wiki/AN/PRC-152">AN/PRC-152</a>, звук будет высокочастотным. В случае передачи с <a href="http://en.wikipedia.org/wiki/SINCGARS#Models">RT-1523G (ASIP)</a> - низкочастотным. </li>
<li>Переговорное устройство для дайверов использует ультразвук для передачии голоса. Диапозон частот от 32 до 41 kHz. Работает только под водой. Дальность действия от 30 до 200 метров в зависимости от уровня волн.</li>
</ul><h5>
<a name="%D0%92%D0%BE%D0%B4%D0%BE%D0%BB%D0%B0%D0%B7%D1%8B" class="anchor" href="#%D0%92%D0%BE%D0%B4%D0%BE%D0%BB%D0%B0%D0%B7%D1%8B"><span class="octicon octicon-link"></span></a>Водолазы</h5>

<ul>
<li>Вы не можете говорить голосом находясь под водой (даже в водолазном костюме). Однако на близком расстояние ваш собеседник сможет расслышать что-либо очень невнятное.</li>
<li>Находясь под водой, вы невнятно и слабо слышите голоса на суше.</li>
<li>Для связи между дайверами используйте Переговорное устройство.</li>
<li>Вы не можете пользоваться радио связью под водой (ни говорить, ни слышать). Если нужно что-то передать на сушу - всплывайте. Исключение - субмарина на перескопной глубине (в ней водолазам можно использовать рацию дальней связи).</li>
</ul><h5>
<a name="%D0%A0%D0%B5%D0%B6%D0%B8%D0%BC%D1%8B-%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D1%8B-%D0%BF%D0%BB%D0%B0%D0%B3%D0%B8%D0%BD%D0%B0" class="anchor" href="#%D0%A0%D0%B5%D0%B6%D0%B8%D0%BC%D1%8B-%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D1%8B-%D0%BF%D0%BB%D0%B0%D0%B3%D0%B8%D0%BD%D0%B0"><span class="octicon octicon-link"></span></a>Режимы работы плагина</h5>

<p>Плагин поддерживает два режима работы — <strong>серьезный</strong> и <strong>упрощенный</strong>. </p>

<ul>
<li>
<strong>Упрощенный</strong> — используется по умолчанию. Он предназначен главным образом для кооперативных игр. Его особенностью является то, что игроки с плагином и в игре слышат мертвых, не играющих, играющих на другом сервере и играющих без плагина игроков минуя рацию (просто как через TeamSpeak). Это делает менее удобным игры против людей, но позволяет вашему другу без проблем узнать, где вы играете, какая у вас частота и т.д. Разумется, те кто играет на одном сервере со включенными аддонами и плагинами будут слышать друг друга по "законам" рации с учетом расстояния и частот.</li>
<li>
<strong>Серьезный</strong> — предназначен для проведения игр, где игроки играют против других игроков. Для его активации в TeamSpeak необходимо создать канал с названием <code>TaskForceRadio</code> и паролем <code>123</code>. Игроки должны включить плагин рации, зайти на сервер и, разойдясь по каналам сторон, брифинговать. При старте миссии через несколько секунд игроки будут переброшены в канал <code>TaskForceRadio</code>. В данном случае игроки будут слышать только живых игроков со включенным плагином играющих на этом же сервере. Мертвые игроки, в свою очередь, могут общаться друг с другом. Если мертвый игрок респавниться - он снова будет слышать только живых. После того, как игра заканчивается, игроки перебрасываются в канал, в котором они брифинфовали до игры.</li>
</ul><h5>
<a name="%D0%A0%D0%B5%D1%88%D0%B5%D0%BD%D0%B8%D0%B5-%D0%BF%D1%80%D0%BE%D0%B1%D0%BB%D0%B5%D0%BC" class="anchor" href="#%D0%A0%D0%B5%D1%88%D0%B5%D0%BD%D0%B8%D0%B5-%D0%BF%D1%80%D0%BE%D0%B1%D0%BB%D0%B5%D0%BC"><span class="octicon octicon-link"></span></a>Решение проблем</h5>

<ul>
<li>Если из-за ошибки или еще чего-то вы перестали слышать других игроков даже вне игры, откройте <code>Setup 3D Sound</code> в TeamSpeak и скликните <code>Center All</code>.</li>
<li>Для устранения возможных ошибок с плагином разработчикам может потребоваться лог TeamSpeak, чтобы его скопировать выберите <code>Tools</code> -&gt; <code>Client Log</code>, поставьте все галочки сверху и, выделив весь текст на <code>CTRL + A</code> Скопируйте его в буфер обмена</li>
<li>Если TeamSpeak (тьфу-тьфу-тьфу) упал при использовании плагина - он показывает окошко с описанием того, где можно найти дамп (путь к файлу). Буду очень благодарен за этот файлик. </li>
</ul><h5>
<a name="%D0%90%D0%B4%D0%BC%D0%B8%D0%BD%D0%B8%D1%81%D1%82%D1%80%D0%B0%D1%82%D0%BE%D1%80%D0%B0%D0%BC-teamspeak-%D1%81%D0%B5%D1%80%D0%B2%D0%B5%D1%80%D0%BE%D0%B2" class="anchor" href="#%D0%90%D0%B4%D0%BC%D0%B8%D0%BD%D0%B8%D1%81%D1%82%D1%80%D0%B0%D1%82%D0%BE%D1%80%D0%B0%D0%BC-teamspeak-%D1%81%D0%B5%D1%80%D0%B2%D0%B5%D1%80%D0%BE%D0%B2"><span class="octicon octicon-link"></span></a>Администраторам TeamSpeak серверов</h5>

<p>Уменьшите уровень защиты от флуда: <code>Правый клик по серверу &gt; Edit Virtual Server &gt; More &gt; Anti Flood</code> поставьте значения 30, 300, 3000 (сверху вниз).</p>

<h5>
<a name="%D0%9A%D0%B0%D1%80%D1%82%D0%BE%D0%B4%D0%B5%D0%BB%D0%B0%D0%BC" class="anchor" href="#%D0%9A%D0%B0%D1%80%D1%82%D0%BE%D0%B4%D0%B5%D0%BB%D0%B0%D0%BC"><span class="octicon octicon-link"></span></a>Картоделам</h5>

<p>Класс рации дальней связи - <code>tf_rt1523g</code>, добавить ее игроку в строке инициализации в редакторе можно следующим образом: <code>this addBackpack "tf_rt1523g";</code></p>

<h5>
<a name="%D0%A0%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D1%87%D0%B8%D0%BA%D0%B0%D0%BC" class="anchor" href="#%D0%A0%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D1%87%D0%B8%D0%BA%D0%B0%D0%BC"><span class="octicon octicon-link"></span></a>Разработчикам</h5>

<p>Если данная разработка будет как-либо популярна, то хотелось бы избежать кучи несовместимых форков. По этой причине в случае желания внесения изменений связывайтесь со мной - велика вероятность, что ваши разработки будут вмержены в главную ветку. Ждем ваших Pull Requests :)</p>

<h5>
<a name="%D0%A1%D0%BF%D0%B0%D1%81%D0%B8%D0%B1%D0%BA%D0%B8" class="anchor" href="#%D0%A1%D0%BF%D0%B0%D1%81%D0%B8%D0%B1%D0%BA%D0%B8"><span class="octicon octicon-link"></span></a>Спасибки</h5>

<ul>
<li>Отряду <a href="http://forum.task-force.ru/">Task Force Arrowhead</a> за тестирование, поддержку, терпение и всяческую помощь.</li>
<li>
<a href="http://forum.task-force.ru/index.php?action=profile;u=7">MTF</a> (<a href="https://github.com/varzin">varzin</a>) за помощь с графикой и документацией.</li>
<li>
<a href="http://forum.task-force.ru/index.php?action=profile;u=14">Hardckor </a> за помощь с графикой.</li>
<li>
<a href="http://arma3.ru/forums/index.php/user/41-blender/">Блендеру</a> за шрифт.</li>
<li>
<a href="https://github.com/vinniefalco">vinniefalco</a> за <a href="https://github.com/vinniefalco/DSPFilters">DSP фильтры</a>
</li>
<li>
<a href="http://wogames.info/">WOG</a> и лично <a href="http://wogames.info/profile/TRUE/">TRUE</a> за помощь в тестировании</li>
</ul>
      </section>
    </div>






					
		</div>
	</div><!-- /.row -->
</div>


<script src="https://code.jquery.com/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>