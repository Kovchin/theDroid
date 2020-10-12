@section('navBar')

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">
            <img src="{{asset('img\MUSE.png')}}" width="30" height="30" class="d-inline-block align-top" alt=""
                 loading="lazy">
            TheDroid
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">График</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Положения/ДИ
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item bg-info" target="_blank" href="http://portal.eesnet.local/DocLib/Forms/AllItems.aspx?RootFolder=%2FDocLib%2F%D0%94%D0%AD%D0%A2%D0%9E%2F%D0%9E%D0%BF%D0%B5%D1%80%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%BE%2D%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D1%81%D0%BB%D1%83%D0%B6%D0%B1%D0%B0%20%D0%A1%D0%B8%D0%B1%D0%B8%D1%80%D0%B8%2F%D0%9F%D0%BE%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%BE%20%D0%BE%D0%BF%D0%B5%D1%80%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%BE%2D%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%BE%D0%B9%20%D1%81%D0%BB%D1%83%D0%B6%D0%B1%D0%B5%20%D0%A1%D0%B8%D0%B1%D0%B8%D1%80%D0%B8&FolderCTID=0x01200086452761EA0A80488D6A3C29A9418E28&View=%7BCD286B70%2D5C21%2D46EA%2D9581%2DCACCD7332D08%7D">Положение об отделе</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">ГУиМС</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">ГАиКС</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">ЭРГ</a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Алгоритмы
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/algoritms">Посмотреть список доступных алгоритмов</a>
                        <a class="dropdown-item" href="/algoritms/create">Добавить новый алгоритм</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Документы
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Приказы</a>
                        <a class="dropdown-item" href="#">Положения</a>
                        <a class="dropdown-item" href="#">Инструкции</a>
                        <a class="dropdown-item" href="#">Корпоративный ресурс</a>
                        <a class="dropdown-item" href="#">Redmine</a>
                        <a class="dropdown-item" href="#">АСУД</a>
                        <a class="dropdown-item" href="#">Remedy</a>
                        <a class="dropdown-item" href="#">ФСК файлообменник</a>
                        <a class="dropdown-item" href="#">МУС Энергетики файлообменник</a>
                        <a class="dropdown-item" href="#">Формы документов</a>
                        <a class="dropdown-item bg-info" target="_blank"
                           href="http://portal.eesnet.local/DocLib/Forms/AllItems.aspx?RootFolder=%2FDocLib%2F%D0%94%D0%AD%D0%A2%D0%9E%2F%D0%94%D0%B5%D0%BF%D0%B0%D1%80%D1%82%D0%B0%D0%BC%D0%B5%D0%BD%D1%82%20%D1%8D%D0%BA%D1%81%D0%BF%D0%BB%D1%83%D0%B0%D1%82%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D0%BE%2D%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%BE%D0%B3%D0%BE%20%D0%BE%D0%B1%D1%81%D0%BB%D1%83%D0%B6%D0%B8%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F%2F%D0%A0%D0%B0%D0%B1%D0%BE%D1%87%D0%B8%D0%B5%20%D1%81%D0%BE%D0%B2%D0%B5%D1%89%D0%B0%D0%BD%D0%B8%D1%8F%20%D0%94%D0%AD%D0%A2%D0%9E%2F2020%20%D0%A0%D0%B0%D0%B1%D0%BE%D1%87%D0%B8%D0%B5%20%D1%81%D0%BE%D0%B2%D0%B5%D1%89%D0%B0%D0%BD%D0%B8%D1%8F%20%D0%94%D0%AD%D0%A2%D0%9E&FolderCTID=0x01200086452761EA0A80488D6A3C29A9418E28&View=%7BCD286B70%2D5C21%2D46EA%2D9581%2DCACCD7332D08%7D">
                            Протоколы совещаний
                        </a>
                        <a class="dropdown-item bg-info" target="_blank"
                           href="http://portal.eesnet.local/DocLib/Forms/AllItems.aspx?RootFolder=%2FDocLib%2F%D0%9F%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%B0%D1%8F%20%D0%B4%D0%BE%D0%BA%D1%83%D0%BC%D0%B5%D0%BD%D1%82%D0%B0%D1%86%D0%B8%D1%8F%2F%D0%9E%D0%BF%D0%B5%D1%80%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%BE%2D%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D0%B4%D0%BE%D0%BA%D1%83%D0%BC%D0%B5%D0%BD%D1%82%D0%B0%D1%86%D0%B8%D1%8F&View=%7BCD286B70%2D5C21%2D46EA%2D9581%2DCACCD7332D08%7D">АВБ
                            ВОЛС</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Контрагенты
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/counterparty/create">Новый контрагент</a>
                        <a class="dropdown-item" href="/counterparty">Сводная по контрагентам</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/contracts/1">МТС</a>
                        <a class="dropdown-item" href="/contracts">ФСК</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Договоры
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/contracts/create">Новый договор</a>
                        <a class="dropdown-item" href="/contracts">Сводная по договорам</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">409</a>
                        <a class="dropdown-item" href="#">КЭС</a>
                        <a class="dropdown-item" href="#">Усть-Кут СДТУ</a>
                        <a class="dropdown-item" href="#">МТС ВОЛС</a>
                        <a class="dropdown-item" href="#">МТС Оборудование</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Объекты
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">ФСК</a>
                        <a class="dropdown-item" href="#">МТС</a>
                        <a class="dropdown-item" href="#">Мегафон</a>
                        <a class="dropdown-item" href="#">Beeline</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Оборудование
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">409</a>
                        <a class="dropdown-item" href="#">КЭС</a>
                        <a class="dropdown-item" href="#">Усть-Кут СДТУ</a>
                        <a class="dropdown-item" href="#">МТС ВОЛС</a>
                        <a class="dropdown-item" href="#">МТС Оборудование</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Графики
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">График ТО 409</a>
                        <a class="dropdown-item" href="#">График ТО КЭС</a>
                        <a class="dropdown-item" href="#">График ТО Усть-Кут СДТУ</a>
                        <a class="dropdown-item" href="#">График ТО МТС ВОЛС</a>
                        <a class="dropdown-item" href="#">График ТО МТС Оборудование</a>
                        <a class="dropdown-item" href="#">График работы</a>
                        <a class="dropdown-item bg-info" target="_blank"
                           href="http://portal.eesnet.local/DocLib/Forms/AllItems.aspx?RootFolder=%2FDocLib%2F%D0%9F%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%B0%D1%8F%20%D0%B4%D0%BE%D0%BA%D1%83%D0%BC%D0%B5%D0%BD%D1%82%D0%B0%D1%86%D0%B8%D1%8F%2F%D0%9E%D0%BF%D0%B5%D1%80%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%BE%2D%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D0%B4%D0%BE%D0%BA%D1%83%D0%BC%D0%B5%D0%BD%D1%82%D0%B0%D1%86%D0%B8%D1%8F%2F%D0%93%D1%80%D0%B0%D1%84%D0%B8%D0%BA%D0%B8%20%D0%B4%D0%B5%D0%B6%D1%83%D1%80%D1%81%D1%82%D0%B2&FolderCTID=0x01200086452761EA0A80488D6A3C29A9418E28&View=%7BCD286B70%2D5C21%2D46EA%2D9581%2DCACCD7332D08%7D">График
                            дежурств</a>
                        <a class="dropdown-item" href="#">График отпусков</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Отчеты
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Отчеты о ТО</a>
                        <a class="dropdown-item bg-info" target="_blank"
                           href="http://portal.eesnet.local/DocLib/Forms/AllItems.aspx?RootFolder=%2FDocLib%2F%D0%9F%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%B0%D1%8F%20%D0%B4%D0%BE%D0%BA%D1%83%D0%BC%D0%B5%D0%BD%D1%82%D0%B0%D1%86%D0%B8%D1%8F%2F%D0%9E%D0%BF%D0%B5%D1%80%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%BE%2D%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D0%B4%D0%BE%D0%BA%D1%83%D0%BC%D0%B5%D0%BD%D1%82%D0%B0%D1%86%D0%B8%D1%8F%2F%D0%9E%D1%82%D1%87%D0%B5%D1%82%D1%8B%20%D0%A2%D0%9E&FolderCTID=0x01200086452761EA0A80488D6A3C29A9418E28&View=%7BCD286B70%2D5C21%2D46EA%2D9581%2DCACCD7332D08%7D">Еженедельный
                            отчет Пищулина</a>
                        <a class="dropdown-item" href="#">Еженедельный отчет Петренко</a>
                        <a class="dropdown-item" href="#">Еженедельный отчет Ерофеев</a>
                        <a class="dropdown-item" href="#">Ежедневный отчет ЭРГ</a>
                        <a class="dropdown-item" href="#">Ежедневный отчет covid</a>
                        <a class="dropdown-item" href="#">График работы</a>
                        <a class="dropdown-item" href="#">График дежурств</a>
                        <a class="dropdown-item" href="#">График отпусков</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Проекты
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item bg-info" target="_blank" href="http://portal.eesnet.local/DocLib/Forms/AllItems.aspx?RootFolder=%2FDocLib%2F%D0%94%D0%AD%D0%A2%D0%9E%2F%D0%9E%D0%BF%D0%B5%D1%80%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%BE%2D%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D1%81%D0%BB%D1%83%D0%B6%D0%B1%D0%B0%20%D0%A1%D0%B8%D0%B1%D0%B8%D1%80%D0%B8%2F%D0%9F%D1%80%D0%BE%D0%B5%D0%BA%D1%82%D1%8B%2F%D0%95%D0%A2%D0%98%D0%9A%20%D0%9A%D0%A0%D0%9E%D0%9A&FolderCTID=0x01200086452761EA0A80488D6A3C29A9418E28&View=%7BCD286B70%2D5C21%2D46EA%2D9581%2DCACCD7332D08%7D">ЕТИК КРОК</a>
                        <a class="dropdown-item" href="#">CSPI_FSK/ЕТИК КРОК</a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Пожелания/предложения
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Ошибка</a>
                <a class="dropdown-item" href="#">Добавить</a>
            </div>
        </div>

    </nav>
@endsection