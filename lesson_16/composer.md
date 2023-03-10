## Основные команды
`install — установка пакетов, прописанных в composer.json`
`update – обновление пакетов`
`dumpautoload — пересборка автозагрузчика`
`require somepackage/somepackage:someversion — добавление нового пакета (по умолчанию пакеты ставятся из оф. репозитория). При установке пакет прописывается в composer.json`
`update --lock — обновление файла блокировки composer.lock`
`config --global cache-files-maxsize «2048MiB» — пример изменения параметра конфигурации`
`--profile — добавление этого параметра к любой команде включит показ времени выполнения и объёма использованной памяти`
`--verbose — подробная инфомация о выполняемой операции`
`show --installed — список установленных пакетов с описанием каждого`
`show --platform — сведения о PHP`
`--dry-run — репетиция выполнения команды. Может добавляться к командам install и update. Эмулирует выполнение команды без её непосредственного выполнения. Необходим для того, чтобы проверить пройдёт ли установка пакетов и зависимостей успешно.`
`remove — удаление пакета. Точная противоположность require`

Composer.lock
Файл composer.lock сохраняет текущий список установленных зависимостей и их версии.
Таким образом, на момент, когда версии зависимостей уже будут обновлены (команда update), другие люди, которые будут клонировать ваш проект, получат те же самые версии.
Это позволяет убедиться в том, что каждый, кто получает ваш проект, имеет пакетное окружение, идентичное тому, которое вы использовали при разработке,
и помогает избежать ошибок, которые могли бы возникнуть из-за обновления версий.
При каждом выполнении команды update версии обновлённый пакетов прописываются в composer.lock.
Этот файл загоняется под систему контроля версий и при установке пакетов на новом сервере поставятся именно те версии пакетов,
которые прописаны в этом файле. При выполнении команды install composer будет в первую очередь опираться на composer.lock.
Таким образом на разных серверах будет гарантированно установлено одинаковое пакетное окружение с точки зрения версий.
