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
                        <a class="dropdown-item bg-info" target="_blank"
                           href="http://portal.eesnet.local/DocLib/Forms/AllItems.aspx?RootFolder=%2FDocLib%2F%D0%94%D0%AD%D0%A2%D0%9E%2F%D0%9E%D0%BF%D0%B5%D1%80%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%BE%2D%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D1%81%D0%BB%D1%83%D0%B6%D0%B1%D0%B0%20%D0%A1%D0%B8%D0%B1%D0%B8%D1%80%D0%B8%2F%D0%9F%D0%BE%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%BE%20%D0%BE%D0%BF%D0%B5%D1%80%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%BE%2D%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%BE%D0%B9%20%D1%81%D0%BB%D1%83%D0%B6%D0%B1%D0%B5%20%D0%A1%D0%B8%D0%B1%D0%B8%D1%80%D0%B8&FolderCTID=0x01200086452761EA0A80488D6A3C29A9418E28&View=%7BCD286B70%2D5C21%2D46EA%2D9581%2DCACCD7332D08%7D">Положение
                            об отделе</a>
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
                        <a class="dropdown-item bg-info" href="http://portal.eesnet.local/DocLib/Forms/AllItems.aspx?RootFolder=%2FDocLib%2F%D0%94%D0%AD%D0%A2%D0%9E%2F%D0%9E%D0%BF%D0%B5%D1%80%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%BE%2D%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D1%81%D0%BB%D1%83%D0%B6%D0%B1%D0%B0%20%D0%A1%D0%B8%D0%B1%D0%B8%D1%80%D0%B8%2F%D0%9F%D0%B8%D1%81%D1%8C%D0%BC%D0%B0%20%D0%BD%D0%B0%20%D0%B4%D0%BE%D0%BF%D1%83%D1%81%D0%BA&FolderCTID=0x01200086452761EA0A80488D6A3C29A9418E28&View=%7BCD286B70%2D5C21%2D46EA%2D9581%2DCACCD7332D08%7D" target="_blank">Письма на допуск</a>
                        <a class="dropdown-item bg-info"
                           href="http://portal.eesnet.local/DocLib/Forms/AllItems.aspx?RootFolder=%2FDocLib%2F%D0%91%D0%B0%D0%B7%D0%B0%20%D0%B7%D0%BD%D0%B0%D0%BD%D0%B8%D0%B9&View=%7BCD286B70%2D5C21%2D46EA%2D9581%2DCACCD7332D08%7D">Внутреннее
                            обучение</a>
                        <a class="dropdown-item bg-info"
                           href="http://pm.eesnet.local/projects/qualpers/dmsf?folder_id=1426" target="_blank">
                            Сканы сертификаторв обучение
                        </a>
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
                        <a class="dropdown-item bg-info" href="http://portal.eesnet.local/DocLib/Forms/AllItems.aspx?RootFolder=%2FDocLib%2F%D0%9F%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%B0%D1%8F%20%D0%B4%D0%BE%D0%BA%D1%83%D0%BC%D0%B5%D0%BD%D1%82%D0%B0%D1%86%D0%B8%D1%8F%2F%D0%9E%D0%BF%D0%B5%D1%80%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%BE%2D%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D0%B4%D0%BE%D0%BA%D1%83%D0%BC%D0%B5%D0%BD%D1%82%D0%B0%D1%86%D0%B8%D1%8F%2F%D0%93%D1%80%D0%B0%D1%84%D0%B8%D0%BA%D0%B8%20%D0%A2%D0%9E&FolderCTID=0x01200086452761EA0A80488D6A3C29A9418E28&View=%7BCD286B70%2D5C21%2D46EA%2D9581%2DCACCD7332D08%7D" target="_blank">График ТО 409</a>
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
                        <a class="dropdown-item bg-info" href="http://portal.eesnet.local/DocLib/Forms/AllItems.aspx?RootFolder=%2FDocLib%2F%D0%94%D0%AD%D0%A2%D0%9E%2F%D0%A0%D0%B0%D0%B1%D0%BE%D1%87%D0%B8%D0%B5%20%D1%81%D0%BE%D0%B2%D0%B5%D1%89%D0%B0%D0%BD%D0%B8%D1%8F%20%D0%94%D0%AD%D0%A2%D0%9E&View=%7BCD286B70%2D5C21%2D46EA%2D9581%2DCACCD7332D08%7D" target="_blank">ВКС</a>
                        <a class="dropdown-item bg-info" href="http://portal.eesnet.local/DocLib/Forms/AllItems.aspx?RootFolder=%2FDocLib%2F%D0%9F%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%B0%D1%8F%20%D0%B4%D0%BE%D0%BA%D1%83%D0%BC%D0%B5%D0%BD%D1%82%D0%B0%D1%86%D0%B8%D1%8F%2F%D0%A2%D0%B5%D1%85%D0%BD%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D0%B4%D0%BE%D0%BA%D1%83%D0%BC%D0%B5%D0%BD%D1%82%D0%B0%D1%86%D0%B8%D1%8F%2F%D0%90%D0%BA%D1%82%D1%8B%20%D0%B2%D1%8B%D0%BF%D0%BE%D0%BB%D0%BD%D0%B5%D0%BD%D0%BD%D1%8B%D1%85%20%D1%80%D0%B0%D0%B1%D0%BE%D1%82%20%28%D1%84%D0%BE%D1%80%D0%BC%D1%8B%29&FolderCTID=0x01200086452761EA0A80488D6A3C29A9418E28&View=%7BCD286B70%2D5C21%2D46EA%2D9581%2DCACCD7332D08%7D" target="_blank">Акты выполненных работ</a>
                        <a class="dropdown-item bg-info" href="system/openFolder/1">Отчеты о ТО ТТК</a>
                        <a class="dropdown-item bg-info" target="_blank"
                           href="http://portal.eesnet.local/DocLib/Forms/AllItems.aspx?RootFolder=%2FDocLib%2F%D0%9F%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%B0%D1%8F%20%D0%B4%D0%BE%D0%BA%D1%83%D0%BC%D0%B5%D0%BD%D1%82%D0%B0%D1%86%D0%B8%D1%8F%2F%D0%9E%D0%BF%D0%B5%D1%80%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%BE%2D%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D0%B4%D0%BE%D0%BA%D1%83%D0%BC%D0%B5%D0%BD%D1%82%D0%B0%D1%86%D0%B8%D1%8F%2F%D0%9E%D1%82%D1%87%D0%B5%D1%82%D1%8B%20%D0%A2%D0%9E&FolderCTID=0x01200086452761EA0A80488D6A3C29A9418E28&View=%7BCD286B70%2D5C21%2D46EA%2D9581%2DCACCD7332D08%7D">Еженедельный
                            отчет Пищулина</a>
                        <a class="dropdown-item bg-info" target="_blank"
                           href="http://portal.eesnet.local/DocLib/Forms/AllItems.aspx?RootFolder=%2fDocLib%2f%d0%94%d0%ad%d0%98%d0%a2%d0%a1%2f%d0%98%d0%bd%d1%84%d1%80%d0%b0%d1%81%d1%82%d1%80%d1%83%d0%ba%d1%82%d1%83%d1%80%d0%bd%d1%8b%d0%b5%20%d0%bf%d1%80%d0%be%d0%b5%d0%ba%d1%82%d1%8b%2f%d0%9a%d0%a0%d0%9e%d0%9a&FolderCTID=0x01200086452761EA0A80488D6A3C29A9418E28">ЕТИК
                            КРОК</a>
                        <a class="dropdown-item bg-info" target="_blank" href="http://portal.eesnet.local/DocLib/Forms/AllItems.aspx?RootFolder=%2FDocLib%2F%D0%94%D0%AD%D0%A2%D0%9E%2F%D0%A0%D0%B0%D0%B1%D0%BE%D1%87%D0%B8%D0%B5%20%D1%81%D0%BE%D0%B2%D0%B5%D1%89%D0%B0%D0%BD%D0%B8%D1%8F%20%D0%94%D0%AD%D0%A2%D0%9E%2F2020%20%D0%A0%D0%B0%D0%B1%D0%BE%D1%87%D0%B8%D0%B5%20%D1%81%D0%BE%D0%B2%D0%B5%D1%89%D0%B0%D0%BD%D0%B8%D1%8F%20%D0%94%D0%AD%D0%A2%D0%9E&FolderCTID=0x01200086452761EA0A80488D6A3C29A9418E28&View=%7BCD286B70%2D5C21%2D46EA%2D9581%2DCACCD7332D08%7D#InplviewHashcd286b70-5c21-46ea-9581-caccd7332d08=FolderCTID%3D0x01200086452761EA0A80488D6A3C29A9418E28-SortField%3DModified-SortDir%3DDesc-RootFolder%3D%252FDocLib%252F%25D0%2594%25D0%25AD%25D0%25A2%25D0%259E%252F%25D0%25A0%25D0%25B0%25D0%25B1%25D0%25BE%25D1%2587%25D0%25B8%25D0%25B5%2520%25D1%2581%25D0%25BE%25D0%25B2%25D0%25B5%25D1%2589%25D0%25B0%25D0%25BD%25D0%25B8%25D1%258F%2520%25D0%2594%25D0%25AD%25D0%25A2%25D0%259E%252F2020%2520%25D0%25A0%25D0%25B0%25D0%25B1%25D0%25BE%25D1%2587%25D0%25B8%25D0%25B5%2520%25D1%2581%25D0%25BE%25D0%25B2%25D0%25B5%25D1%2589%25D0%25B0%25D0%25BD%25D0%25B8%25D1%258F%2520%25D0%2594%25D0%25AD%25D0%25A2%25D0%259E">Протокол селектора Петренко</a>
                        <a class="dropdown-item bg-info" target="_blank" href="http://portal.eesnet.local/DocLib/Forms/AllItems.aspx?RootFolder=%2FDocLib%2F%D0%94%D0%AD%D0%A2%D0%9E%2F%D0%9E%D0%BF%D0%B5%D1%80%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%BE%2D%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D1%81%D0%BB%D1%83%D0%B6%D0%B1%D0%B0%20%D0%A1%D0%B8%D0%B1%D0%B8%D1%80%D0%B8&FolderCTID=0x01200086452761EA0A80488D6A3C29A9418E28&View=%7BCD286B70%2D5C21%2D46EA%2D9581%2DCACCD7332D08%7D">Еженедельный отчет Петренко</a>
                        <a class="dropdown-item bg-info" target="_blank" href="http://portal.eesnet.local/DocLib/Forms/AllItems.aspx?RootFolder=%2FDocLib%2F%D0%94%D0%9E%D0%A3%2F%D0%9E%D1%82%D1%87%D1%91%D1%82%D1%8B%2F%D0%95%D0%B6%D0%B5%D0%BD%D0%B5%D0%B4%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5%20%D0%BE%D1%82%D1%87%D1%91%D1%82%D1%8B&FolderCTID=0x01200086452761EA0A80488D6A3C29A9418E28&View=%7BCD286B70%2D5C21%2D46EA%2D9581%2DCACCD7332D08%7D">Еженедельный отчет Ерофеев</a>
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
                        <a class="bg-info dropdown-item" href="http://portal.eesnet.local/DocLib/Forms/AllItems.aspx?RootFolder=%2FDocLib%2F%D0%9F%D1%80%D0%BE%D0%B5%D0%BA%D1%82%D1%8B%2F%D0%90%D0%A1%D0%A3%D0%98%D0%98%D0%9A%202%2E0&FolderCTID=0x01200086452761EA0A80488D6A3C29A9418E28&View=%7BCD286B70%2D5C21%2D46EA%2D9581%2DCACCD7332D08%7D" target="_blank">АСУИК 2.0</a>
                        <a class="bg-info dropdown-item" href="\\root-fs-01.sibmes.fsk\МУСЭ\АСУИИК 2.0" target="_blank">АСУИК 2.0</a>
                        <a class="bg-info dropdown-item" href="http://172.16.1.75/projects/suxy/dmsf" target="_blank">Россети</a>
                        <a class="bg-info dropdown-item" href="http://portal.eesnet.local/DocLib/Forms/AllItems.aspx?RootFolder=%2FDocLib%2F%D0%94%D0%AD%D0%98%D0%A2%D0%A1%2F%D0%98%D0%BD%D1%84%D1%80%D0%B0%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D1%83%D1%80%D0%BD%D1%8B%D0%B5%20%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82%D1%8B%2F%D0%9A%D0%A0%D0%9E%D0%9A&FolderCTID=0x01200086452761EA0A80488D6A3C29A9418E28&View=%7BCD286B70%2D5C21%2D46EA%2D9581%2DCACCD7332D08%7D">КРОК на портале</a>
                        <a class="bg-info dropdown-item" href="http://pm.eesnet.local/projects/mus-scheme/dmsf?folder_id=2710" target="_blank">МСПД</a>
                        <a class="dropdown-item" href="#">CSPI_FSK/ЕТИК КРОК</a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                Пожелания/предложения
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Ошибка</a>
                <a class="dropdown-item" href="#">Добавить</a>
            </div>
        </div>

    </nav>
@endsection
